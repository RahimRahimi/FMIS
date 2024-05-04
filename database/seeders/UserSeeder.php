<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Rahimullah Rahimi',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin'),
            'image' => 'no_image.png',
            'system_language' => 'ps',
        ]);
        $user = User::create([
            'name' => 'Obaidullah Karimi',
            'email' => 'user@user.com',
            'password' => Hash::make('useruser'),
            'image' => 'no_image.png',
            'system_language' => 'ps',
        ]);

        $admin_role = Role::create([
            'name' => 'Administrator',
            'description' => 'This role type is fully authorized to control, manage and administrate the system.'
        ]);

        $user_role = Role::create([
            'name' => 'User',
            'description' => "This role type is authorized to use the system's some resources."
        ]);
        $admin->roles()->attach($admin_role);
        $user->roles()->attach($user_role);

        // $create_user_permission = Permission::create([

        // ]);
        // $read_user_permission = Permission::create([

        // ]);
        // $update_user_permission = Permission::create([

        // ]);
        // $delete_user_permission = Permission::create([

        // ]);

        $data = [
            [            
                'name' => 'User Create',
                'description' => 'If a role has this permission then the user can create a new user.'
            ],
            [
                'name' => 'User Read',
                'description' => 'If a role has this permission then the user can read other users.'
            ],
            [
                'name' => 'User Edit',
                'description' => 'If a role has this permission then the user can update a user.'
            ],
            [
                'name' => 'User Delete',
                'description' => 'If a role has this permission then the user can delete a user.'
            ]
        ];
        $permissions = Permission::insert($data);

        $admin_role->permissions()->attach($permissions);
        // $admin_role->permissions()->attach($read_user_permission);
        // $admin_role->permissions()->attach($update_user_permission);
        // $admin_role->permissions()->attach($delete_user_permission);
    }
}