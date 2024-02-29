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
        'Restaurant',
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

        $adminPermissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'Abonnement-list',
            'Users-list',
          
            'restaurant_all',
            // Add more permissions as needed
        ];

        $adminRole = Role::create(['name' => 'Admin']);
        $adminPermissionsToAssign = Permission::whereIn('name', $adminPermissions)->pluck('id')->toArray();
        $adminRole->syncPermissions($adminPermissionsToAssign);

        $user->assignRole([$adminRole->id]);

        $ownerPermissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'Operateur_list',
            'menus-list',
            'item-list',
            'abonnement',
            'chose_abonnement',
            'QR-list',
            'Restaurant',
        ];
        $ownerRole = Role::create(['name' => 'owner']);
        $permissionsToAssign = Permission::whereIn('name', $ownerPermissions)->pluck('id')->toArray();
        $ownerRole->syncPermissions($permissionsToAssign);


        $operateurPermissions = [
    
            'menus-list',
            'item-list',
            'QR-list',
            // Add more permissions as needed
        ];
        
        // Create the Operateur Role and assign specific permissions
        $operateurRole = Role::create(['name' => 'Operateur']);
        $operateurPermissionsToAssign = Permission::whereIn('name', $operateurPermissions)->pluck('id')->toArray();
        $operateurRole->syncPermissions($operateurPermissionsToAssign);


        $userPermissions = [
            'restaurant_all',

            // Add more permissions as needed
        ];
        
        // Create the User Role and assign specific permissions
        $userRole = Role::create(['name' => 'User']);
        $userPermissionsToAssign = Permission::whereIn('name', $userPermissions)->pluck('id')->toArray();
        $userRole->syncPermissions($userPermissionsToAssign);
     
    }
}
