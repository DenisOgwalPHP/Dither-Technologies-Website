<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProjectsComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $price;
    public $image;
    public $featured;
    public $short_description;
    public $description;
    public $category_id;
    public $images;
    public $bgImage;
    public $duration;

    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function mount(){
        $this->featured = 0;
    }


    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:projects',
            'price' => 'required',
            'image' => 'required',
            'bgImage' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);
    }
    public function addProject(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:projects',
            'price' => 'required',
            'image' => 'required',
            'bgImage' => 'required',
            'duration' => 'required',
            'description' => 'required',
            'category_id' => 'required',

        ]);
        $project = new Project();
        $project->name = $this->name;
        $project->slug = $this->slug;
        $project->price = $this->price;
        $project->duration = $this->duration;
        $project->category_id = $this->category_id;
        $imageName = Carbon::now()->timestamp. '.'. $this->image->extension();
        $this->image->storeAs('projects',$imageName );
        $project->image = $imageName;
        $imageName2 = Carbon::now()->timestamp. '.'. $this->bgImage->extension();
        $this->bgImage->storeAs('projectBG',$imageName2 );
        $project->bgImage = $imageName2;
        if ($this->images) {
            $imagesName = "";
            foreach($this->images as $key=>$image){
                $imgName = Carbon::now()->timestamp. $key.'.'. $image->extension();
                $image->storeAs('projects', $imgName);
                $imagesName = $imageName . ',' . $imgName;
            }
            $project->images = $imagesName;
        }
        $project->featured = $this->featured;
        $project->short_description = $this->short_description;
        $project->description = $this->description;
        $project->save();
        session()->flash('message', 'Project has been created successfully');
        return redirect()->route('admin.projects');
    }


    public function render()
    {
        $categories = Category::get();
        return view('livewire.admin-add-projects-component',['categories' => $categories])->layout('layouts.base');
    }
}