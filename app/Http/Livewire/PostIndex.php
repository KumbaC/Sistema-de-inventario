<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
class PostIndex extends Component
{
    use withPagination;

    public function render()
    {
        $products = Product::latest('id')->Simplepaginate(11);
        return view('livewire.post-index', compact('products'));
    }
}
