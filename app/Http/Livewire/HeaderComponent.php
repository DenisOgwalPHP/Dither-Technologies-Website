<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\Setting;
use Livewire\Component;

class HeaderComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        $projects = Project::inRandomOrder()->limit(12)->get();
        return view('livewire.header-component',['setting' => $setting, 'projects' => $projects]);
    }
}