<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class EPBarComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.e-p-bar-component', ['setting' => $setting])->layout('layouts.base');
    }
}