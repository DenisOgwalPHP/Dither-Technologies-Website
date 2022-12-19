<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $blogs = Blog::limit(3)->get();
        return view('livewire.about-component',['blogs' => $blogs])->layout('layouts.base');
    }
}