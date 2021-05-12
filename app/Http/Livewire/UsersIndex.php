<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch(){
        $this->resetPage();
      }

    public function render()
    {
        $users = User::where('name', 'LIKE','%' . $this->search. '%')->orWhere('email', 'LIKE','%' . $this->search. '%')->paginate(5);
        return view('livewire.users-index', compact('users'));
    }
}
