<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ServicesComponent extends Component
{
    public function render()
    {
        $projects = Project::limit(12)->get();
        return view('livewire.services-component', ['projects' => $projects])->layout('layouts.base');
    }
}