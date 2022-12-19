<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class ESSchoolComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.e-s-school-component', ['setting' => $setting])->layout('layouts.base');
    }
}