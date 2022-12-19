<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;
    public $search;
    public $product_cat;
    public $product_cat_id;

    public function mount(){

        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
    }
    public function render()
    {
        $categories = Category::get();
        $projects = Project::where('name', 'like', '%'.$this->search.'%')->where('category_id',  'like', '%'.$this->product_cat_id.'%')->paginate(12);
        return view('livewire.search-component',['projects' => $projects, 'categories' => $categories]);
    }
}