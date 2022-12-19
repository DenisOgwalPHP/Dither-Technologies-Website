<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class EPHotelComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.e-p-hotel-component', ['setting' => $setting])->layout('layouts.base');
    }
}