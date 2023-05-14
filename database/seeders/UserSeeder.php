<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Edgar Chumil',
            'phone' => '58501360',
            'email' => 'jossecarlos2378@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('Jose22232003')
        ]);
        User::create([
            'name' => 'victorferlux95@gmail.com',
            'phone' => '12345678',
            'email' => 'isa20@gmail.com',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('Motosanjose95')
        ]);

        // crear role Administrador
        $admin    = Role::create(['name' => 'ADMIN']);

        // crear permisos componente categories
        Permission::create(['name' => 'Category_Create']);
        Permission::create(['name' => 'Category_Search']);
        Permission::create(['name' => 'Category_Update']);
        Permission::create(['name' => 'Category_Destroy']);

        // asignar permisos al rol admin sobre categories
        $admin->givePermissionTo(['Category_Create', 'Category_Search', 'Category_Update', 'Category_Destroy']);

        // asignar role admin al usuario Edgar Chumil
        $uAdmin = User::find(1);
        $uAdmin->assignRole('ADMIN');
    }
}
