<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Project;
use App\Models\Setting;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::get();
        $blogs = Blog::limit(3)->get();
        $projects = Project::limit(12)->get();
        $setting = Setting::find(1);
        return view('livewire.home-component',['categories' => $categories, 'blogs' => $blogs, 'projects' => $projects, 'setting' => $setting])->layout('layouts.base');
    }
}