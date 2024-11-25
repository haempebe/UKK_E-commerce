<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use App\Models\ProductCategories;

class Category extends Component
{
    public $categories;
    public string $nameCategory = '';
    public function mount()
    {
        // Ambil data kategori dari database
        $this->categories = ProductCategories::all();
    }
    public function CreateCategory()
    {
        $this->validate([
            'nameCategory' => 'required',
        ]);
        ProductCategories::create([
            'category_name' => $this->nameCategory
        ]);
        $this->nameCategory = '';

        $this->categories = ProductCategories::all();
    }
    public function render()
    {
        return view('livewire.forms.category');
    }
}
