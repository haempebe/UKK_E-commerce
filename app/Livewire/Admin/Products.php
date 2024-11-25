<?php

namespace App\Livewire\Admin;

use App\Models\Products as ModelsProducts;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Products extends Component
{
    public function render()
    {
        $productAll = ModelsProducts::all();
        return view('pages.admin.products', compact('productAll'));
    }
}
