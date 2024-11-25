<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout('layouts.app')]
class ProductEdit extends Component
{
    public function render()
    {
        return view('pages.admin.product-edit');
    }
}
