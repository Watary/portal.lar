<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleAndPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // arrays
        $users = [];
        $roles = [];
        $permissions = [];

        // list users
        $users['administrator'] = User::getUserById(1);

        // list roles
        $roles['administrator'] = Role::create(['name' => 'administrator']);
        $roles['user'] = Role::create(['name' => 'user']);

        // list permissions
        $permissions['access_admin'] = Permission::create(['name' => 'access_admin']);

        // add permissions in roles
        $roles['administrator']->givePermissionTo($permissions['access_admin']);

        // add roles in users
        $users['administrator']->assignRole($roles['administrator']);

        // add permissions in users
        //$users['administrator']->givePermissionTo($permissions['access_admin']);
    }
}