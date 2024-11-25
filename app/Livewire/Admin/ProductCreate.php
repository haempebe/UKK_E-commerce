<?php

namespace App\Livewire\Admin;

use App\Models\ProductCategories;
use App\Models\Products;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ProductCreate extends Component
{
    public $productCategory;
    public $productName;
    public $productDesc;
    public $productPrice;
    public $productQty;
    public function ProductAdd()
    {
        $this->validate([
            'productCategory' => 'required',
            'productName' => 'required',
            'productDesc' => 'required',
            'productPrice' => 'required',
            'productQty' => 'required'
        ]);
        Products::create([
            'product_category_id' => $this->productCategory,
            'product_name' => $this->productName,
            'description' => $this->productDesc,
            'price' => $this->productPrice,
            'stock_quantity' => $this->productQty,
        ]);
        $this->productCategory = '';
        $this->productName = '';
        $this->productDesc = '';
        $this->productPrice = '';
        return redirect()->to('/products');
    }
    public function render()
    {
        $categoryAll = ProductCategories::all();
        return view('pages.admin.product-create', compact('categoryAll'));
    }
}
