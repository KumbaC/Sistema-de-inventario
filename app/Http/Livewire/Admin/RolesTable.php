<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Spatie\Permission\Models\Role;
//use Spatie\Permission\Models\Permission;
use Livewire\WithPagination;
class RolesTable extends Component
{
    use withPagination;
    public $search;

    public function render()
    {
        $role = Role::all();
        return view('livewire.admin.roles-table', compact('role'));
    }
}
