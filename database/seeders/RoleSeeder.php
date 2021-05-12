<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'user']);

       Permission::create(['name' => 'admin.index','description' => 'Ver el panel de administración'])->syncRoles([$role1, $role2]);

       Permission::create(['name' => 'admin.users.index','description' => 'Ver listado de usuarios'])->assignRole($role1);
       Permission::create(['name' => 'admin.users.edit','description' => 'Actualizar usuarios'])->assignRole($role1);
       //Permission::create(['name' => 'admin.users.update','description' => ''])->assignRole($role1);

       Permission::create(['name' => 'admin.categories.index','description' => 'Ver categorias'])->assignRole($role1);
       Permission::create(['name' => 'admin.categories.create','description' => 'Crear categorias'])->assignRole($role1);
       Permission::create(['name' => 'admin.categories.edit','description' => 'Editar categorias'])->assignRole($role1);
       Permission::create(['name' => 'admin.categories.destroy','description' => 'Eliminar categorias'])->assignRole($role1);

       Permission::create(['name' => 'admin.roles.index','description' => 'Ver listado de roles'])->assignRole($role1);
       Permission::create(['name' => 'admin.roles.edit','description' => 'Actualizar roles'])->assignRole($role1);
       Permission::create(['name' => 'admin.roles.create','description' => 'Crear roles'])->assignRole($role1);
       Permission::create(['name' => 'admin.roles.destroy','description' => 'Eliminar roles'])->assignRole($role1);

       Permission::create(['name' => 'admin.products.index','description' => 'Ver listado de productos'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'admin.products.create','description' => 'Crear productos'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'admin.products.edit','description' => 'Editar los productos'])->syncRoles([$role1, $role2]);
       Permission::create(['name' => 'admin.products.destroy','description' => 'Eliminar los productos'])->syncRoles([$role1, $role2]);


    }
}
