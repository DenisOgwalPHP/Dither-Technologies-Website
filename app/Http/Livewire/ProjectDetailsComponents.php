<?php

namespace App\Http\Livewire;

use App\Models\Aminity;
use App\Models\Contact;
use App\Models\Project;
use App\Models\ProjectDetail;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProjectDetailsComponents extends Component
{

    public $slug;
    public $comment;
    public $project_id;

    public function mount($slug){
        $this->slug = $slug;
    }

    public function checkout(){
        if (Auth::check()) {
            return redirect()->route('checkout',['slug' =>$this->slug]);
        }else{
            return redirect()->route('login');
        }
    }


    public function updated($fields){
        $this->validateOnly($fields,[
            'comment' => 'required',
        ]);
    }

    public function addReview(){
        $this->validate([
            'comment' => 'required',
        ]);
        $project = Project::where('slug', $this->slug)->first();
        $review = new Review();
        $review->comment = $this->comment;
        $review->project_id = $project->id;
        $review->user_id = Auth::user()->id;
        $review->save();
        session()->flash('message', 'Your review has been added successfully');
    }

    public function render()
    {
        $project = Project::where('slug', $this->slug)->first();
        $reviews = Review::where('project_id', $project->id)->inRandomOrder()->limit(4)->get();
        $popular_project = Project::inRandomOrder()->limit(8)->get();
        $related_projects = Project::where('category_id', $project->category_id)->inRandomOrder()->limit(8)->get();
        $aminities = Aminity::where('project_id', $project->id)->get();
        $projectDetails = ProjectDetail::where('project_id', $project->id)->get();
        $setting = Setting::find(1);
        return view('livewire.project-details-components',['project'=>$project, 'popular_project' => $popular_project, 'reviews'=> $reviews, 'aminities' => $aminities, 'projectDetails' => $projectDetails, 'setting'=>$setting, 'related_projects'=>$related_projects]);
    }
}