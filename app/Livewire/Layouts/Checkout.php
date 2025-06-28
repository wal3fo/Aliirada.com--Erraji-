<?php

namespace App\Livewire\Layouts;

use Exception;
use Livewire\Component;
use App\Models\NexaShippings;
use App\Mail\OrderConfirmationMail;

class Checkout extends Component
{
    public $checkoutName = '';
    public $checkoutEmail = '';
    public $checkoutPhone = '';
    public $checkoutCountry = 'Morocco';
    public $checkoutCity = '';
    public $checkoutAddress = '';
    public $checkoutPaymentMethod = 'Cash On Delivery';

    public $CartItems = [];
    public $location = 'Marrakech';
    public $SubTotal = 0;
    public $ShippingCost = 0;
    public $Total = 0;

    public $showCheckout = false;
    protected $listeners = ["toggleCheckout" => "toggleCheckout", "locationSelected" => "updateLocation"];

    public function mount()
    {
        $this->CartItems = session()->get('CartItems', []);
        $this->location = session()->get('selectedLocation', 'Marrakech');

        $this->SubTotal = number_format(collect($this->CartItems)->sum(function ($item) {
            return $item['product']->PriceOf * $item['quantity'];
        }), 2, '.', '');

        $this->ShippingCost = number_format(NexaShippings::where('City', $this->location)->first()->Cost, 2, '.', '');

        $this->Total = number_format($this->SubTotal + $this->ShippingCost, 2, '.', '');
    }

    public function toggleCheckout()
    {
        $this->resetFields();
        $this->showCheckout = !$this->showCheckout;

        $this->dispatch('initComponents');
        $this->checkoutCity = $this->getSelectedLocation();
    }

    public function changeLocation() {
        $this->dispatch('toggleLocationPopup');
    }

    public function updateLocation($city)
    {
        $this->checkoutCity = $city;
        session()->put('selectedLocation', $city);
    }

    public function getSelectedLocation()
    {
        return session()->get('selectedLocation', 'Marrakech');
    }

    public function submitCheckout()
    {
        try {
            $this->validate([
                'checkoutName' => 'required|string|max:255',
                'checkoutEmail' => 'required|email',
                'checkoutPhone' => 'required|string|max:255',
                'checkoutCity' => 'required|string|max:255',
                'checkoutAddress' => 'required|string|max:255',
            ]);

            $data = [
                'checkoutName' => $this->checkoutName,
                'checkoutEmail' => $this->checkoutEmail,
                'checkoutPhone' => $this->checkoutPhone,
                'checkoutCountry' => $this->checkoutCountry,
                'checkoutCity' => $this->checkoutCity,
                'checkoutAddress' => $this->checkoutAddress,
                'checkoutPaymentMethod' => $this->checkoutPaymentMethod,
                'CartItems' => $this->CartItems,
                'SubTotal' => $this->SubTotal,
                'ShippingCost' => $this->ShippingCost,
                'Total' => $this->Total,
            ];

            \Mail::to($this->checkoutEmail)->queue(new OrderConfirmationMail('Order Received - Thank You!', $data));
        } catch (Exception $e) {
            \Log::error($e->getMessage());
        } finally {
            $this->dispatch('initComponents');
        }
    }

    public function resetFields()
    {
        $this->checkoutName = '';
        $this->checkoutEmail = '';
        $this->checkoutPhone = '';
        $this->checkoutCity = '';
        $this->checkoutAddress = '';
    }

    public function render()
    {
        $this->dispatch('initComponents');
        return view('livewire.layouts.checkout');
    }
}
