<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $projects = Project::paginate(12);
        $categories = Category::get();
        return view('livewire.projects-component',['projects' => $projects, 'categories' => $categories]);
    }
}