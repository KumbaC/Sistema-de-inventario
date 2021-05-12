<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
class ProductsTable extends Component
{
    use withPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
      }

    public function render()
    {
        $producto = Product::with('user')->where('name', 'LIKE','%' . $this->search. '%')->latest('id')->paginate(5);
        return view('livewire.admin.products-table', compact('producto'));
    }
}
