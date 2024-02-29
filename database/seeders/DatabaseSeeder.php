<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{

    /**
     * List of applications to add.
     */
    private $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'Abonnement-list',
        'Users-list',
        'Operateur_list',
        'menus-list',
        'item-list',
        'abonnement',
        'chose_abonnement',
        'QR-list',
        'restaurant_all',
    ];


    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
            // Permission::create(['owner' => $permission]);
        }

        // Create admin User and assign the role to him.
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin@example.com')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
