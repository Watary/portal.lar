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
        $permissions['admin_access'] = Permission::create(['name' => 'admin_access']);

        $permissions['admin_users_access'] = Permission::create(['name' => 'admin_users_access']);
        $permissions['admin_users_create'] = Permission::create(['name' => 'admin_users_create']);
        $permissions['admin_users_update'] = Permission::create(['name' => 'admin_users_update']);
        $permissions['admin_users_delete'] = Permission::create(['name' => 'admin_users_delete']);

        $permissions['admin_rules_access'] = Permission::create(['name' => 'admin_rules_access']);
        $permissions['admin_rules_create'] = Permission::create(['name' => 'admin_rules_create']);
        $permissions['admin_rules_update'] = Permission::create(['name' => 'admin_rules_update']);
        $permissions['admin_rules_delete'] = Permission::create(['name' => 'admin_rules_delete']);

        $permissions['admin_permissions_access'] = Permission::create(['name' => 'admin_permissions_access']);
        $permissions['admin_permissions_create'] = Permission::create(['name' => 'admin_permissions_create']);
        $permissions['admin_permissions_update'] = Permission::create(['name' => 'admin_permissions_update']);
        $permissions['admin_permissions_delete'] = Permission::create(['name' => 'admin_permissions_delete']);

        // add permissions in roles
        foreach ($permissions as $permission){
            $roles['administrator']->givePermissionTo($permission);
        }

        // add roles in users
        $users['administrator']->assignRole($roles['administrator']);
        $users['user']->assignRole($roles['user']);

        // add permissions in users
        //$users['administrator']->givePermissionTo($permissions['access_admin']);
    }
}
