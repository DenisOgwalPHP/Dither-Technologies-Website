<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;
    public $category_slug;

    public function mount($category_slug){
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        $projects = Project::where('category_id', $category_id)->paginate(12);
        $categories = Category::get();
        return view('livewire.category-component',['projects' => $projects, 'categories' => $categories, 'category_name'=> $category_name]);
    }
}