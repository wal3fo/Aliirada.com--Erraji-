<?php

namespace App\Livewire\Layouts;

use Exception;
use Livewire\Component;
use App\Models\NexaNewsletter;

class Footer extends Component
{
    public $newsLetterEmail;
    public $newsLetterNotification;

    public function signup()
    {
        try {
            $this->validate([
                'newsLetterEmail' => 'required|email',
            ]);

            $query = NexaNewsletter::updateOrCreate(
                ['Email' => $this->newsLetterEmail],
                [
                    'Locked' => 0,
                    'TimeOf' => now()
                ]
            );

            if ($query) {
                $this->newsLetterEmail = '';
                $this->newsLetterNotification = __('messages.footer.newsletter-notification');
            }
        } catch (Exception $e) {
        }
    }

    public function render()
    {
        return view('livewire.layouts.footer');
    }
}
