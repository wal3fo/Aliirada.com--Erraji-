<?php

namespace App\Livewire\Admin;

use App\Models\NexaUsers;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $userEmail = '';
    public $userPassword = '';
    public $remember = false;

    public function loginHandler()
    {
        try {
            $existing = NexaUsers::where('Email', $this->userEmail)->first();

            if (!$existing) {
                return session()->flash('NexaError', 'Invalid credentials');
            }

            $password = md5($this->userPassword);

            if ($existing->Password !== $password) {
                return session()->flash('NexaError', 'Invalid credentials');
            }

            session()->put('UserLogged', true);
            session()->put('UserId', $existing->Id);
            session()->put('UserJob', $existing->Job);
            session()->put('UserEmail', $existing->Email);

            return redirect()->route('admin.lists');
        } catch (\Exception $e) {
            return session()->flash('NexaError', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.login');
    }
}
