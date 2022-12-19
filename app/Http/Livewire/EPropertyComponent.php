<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class EPropertyComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.e-property-component', ['setting' => $setting])->layout('layouts.base');
    }
}