<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\ProjectDetail;
use Livewire\Component;

class AdminProjectDetailsComponent extends Component
{
    public $project_slug;

    public function mount($project_slug){
        // $project = Project::where('slug', $project_slug)->first();
        $this->project_slug = $project_slug;
    }
    public function deleteAmenity($id){
        $detail = ProjectDetail::find($id);
        $detail->delete();
        session()->flash('message', 'ProjectDetail has been deleted successfully');
    }
    public function render()
    {
        $project = Project::where('slug',$this->project_slug)->first();
        $details = ProjectDetail::where('project_id', $project->id)->get();

        return view('livewire.admin-project-details-component', ['details' => $details, 'project' => $project]);
    }

}
