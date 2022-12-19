<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class EFSaccoComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.e-f-sacco-component', ['setting' =>$setting])->layout('layouts.base');
    }
}