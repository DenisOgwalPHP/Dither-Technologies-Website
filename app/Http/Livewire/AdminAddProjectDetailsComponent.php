<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\ProjectDetail;
use Illuminate\Support\Str;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddProjectDetailsComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $project_slug;
    public $image;
    public $short_description;
    public $description;
    public $project_id;

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function mount($project_slug){
        $this->project_slug = $project_slug;
        $project = Project::where('slug', $project_slug)->first();

        $this->project_id = $project->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:projects',
            'image' => 'required',
            'description' => 'required',
        ]);
    }

    public function addProjectDetail(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:projects',
            'image' => 'required',
            'description' => 'required',
        ]);
        $project = new ProjectDetail();
        $project->name = $this->name;
        $project->slug = $this->slug;
        $project->project_id = $this->project_id;
        $imageName = Carbon::now()->timestamp. '.'. $this->image->extension();
        $this->image->storeAs('projects',$imageName );
        $project->image = $imageName;
        $project->short_description = $this->short_description;
        $project->description = $this->description;
        $project->save();
        session()->flash('message', 'Project Detail has been created successfully');
        // return redirect()->route('admin.details',['project_slug'=> $project->slug]);
    }
    public function render()
    {
        $project = Project::where('slug', $this->project_slug)->first();
        return view('livewire.admin-add-project-details-component', ['project' => $project])->layout('layouts.base');
    }

}