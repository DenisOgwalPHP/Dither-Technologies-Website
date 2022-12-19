<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class EHospitalComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.e-hospital-component',['setting' => $setting])->layout('layouts.base');
    }
}