<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class EFMoneyComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.e-f-money-component',['setting' => $setting])->layout('layouts.base');
    }
}