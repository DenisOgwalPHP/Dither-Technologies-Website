<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use App\Models\Setting;
use Livewire\Component;

class BlogsComponent extends Component
{
    public function render()
    {
        $blogs = Blog::paginate(12);
        $l_blogs = Blog::orderBy('created_at', 'DESC')->get()->take(6);
        $setting = Setting::find(1);
        return view('livewire.blogs-component',['blogs' => $blogs, 'l_blogs' => $l_blogs, 'setting' => $setting])->layout('layouts.base');
    }
}