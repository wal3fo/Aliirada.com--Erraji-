<?php

namespace App\Livewire\Layouts;

use App;
use Livewire\Component;

class Languages extends Component
{
    public $showLanguages = false;

    public function changeLanguage($language)
    {
        App::setLocale($language);
        session(['Nexalang' => $language]);

        $this->closeLanguages();

        $this->redirect(request()->header('Referer'), navigate: true);
    }

    public function toggleLanguages()
    {
        $this->showLanguages = !$this->showLanguages;
    }

    public function closeLanguages()
    {
        $this->showLanguages = false;
    }

    public function render()
    {
        return view('livewire.layouts.languages');
    }
}
