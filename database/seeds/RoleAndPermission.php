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
        $users['user'] = User::getUserById(2);

        // list roles
        $roles['administrator'] = Role::create(['name' => 'administrator']);
        $roles['user'] = Role::create(['name' => 'user']);

        // list permissions
        $permissions['access_admin'] = Permission::create(['name' => 'access_admin']);
        $permissions['access_admin_users'] = Permission::create(['name' => 'access_admin_users']);
        $permissions['access_admin_rules'] = Permission::create(['name' => 'access_admin_rules']);
        $permissions['access_admin_permissions'] = Permission::create(['name' => 'access_admin_permissions']);

        // add permissions in roles
        $roles['administrator']->givePermissionTo($permissions['access_admin']);
        $roles['administrator']->givePermissionTo($permissions['access_admin_users']);
        $roles['administrator']->givePermissionTo($permissions['access_admin_rules']);
        $roles['administrator']->givePermissionTo($permissions['access_admin_permissions']);

        // add roles in users
        $users['administrator']->assignRole($roles['administrator']);
        $users['user']->assignRole($roles['user']);

        // add permissions in users
        //$users['administrator']->givePermissionTo($permissions['access_admin']);
    }
}
