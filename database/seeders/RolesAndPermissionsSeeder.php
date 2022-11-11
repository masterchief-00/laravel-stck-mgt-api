<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions - product
        Permission::firstOrCreate(['name' => 'product:register']);
        Permission::firstOrCreate(['name' => 'product:update']);
        Permission::firstOrCreate(['name' => 'product:delete']);
        Permission::firstOrCreate(['name' => 'product:view']);

        // create permissions - order
        Permission::firstOrCreate(['name' => 'order:register']);
        Permission::firstOrCreate(['name' => 'order:update']);
        Permission::firstOrCreate(['name' => 'order:delete']);
        Permission::firstOrCreate(['name' => 'order:view']);

        // create permissions - orderItem
        Permission::firstOrCreate(['name' => 'orderItem:register']);
        Permission::firstOrCreate(['name' => 'orderItem:update']);
        Permission::firstOrCreate(['name' => 'orderItem:delete']);
        Permission::firstOrCreate(['name' => 'orderItem:view']);

        // create permissions - category
        Permission::firstOrCreate(['name' => 'category:register']);
        Permission::firstOrCreate(['name' => 'category:delete']);
        Permission::firstOrCreate(['name' => 'category:view']);

        // create permissions - job
        Permission::firstOrCreate(['name' => 'job:register']);
        Permission::firstOrCreate(['name' => 'job:update']);
        Permission::firstOrCreate(['name' => 'job:delete']);
        Permission::firstOrCreate(['name' => 'job:view']);

        // create permissions - user
        Permission::firstOrCreate(['name' => 'user:register']);
        Permission::firstOrCreate(['name' => 'user:update']);
        Permission::firstOrCreate(['name' => 'user:delete']);
        Permission::firstOrCreate(['name' => 'user:view']);
        Permission::firstOrCreate(['name' => 'user:logout']);



        // create roles and assign created permissions

        // or may be done by chaining
        Role::firstOrCreate(['name' => 'WHS'])
            ->givePermissionTo(['product:register', 'product:update', 'product:delete', 'product:view', 'order:register', 'order:update', 'order:delete', 'order:view', 'orderItem:register', 'orderItem:update', 'orderItem:delete', 'orderItem:view', 'user:register', 'user:update', 'user:delete', 'user:view', 'user:logout']);
        Role::firstOrCreate(['name' => 'DLV'])
            ->givePermissionTo(['job:register', 'job:update', 'job:delete', 'job:view', 'order:register', 'order:update', 'order:delete', 'order:view', 'user:register', 'user:update', 'user:delete', 'user:view', 'user:logout']);
        Role::firstOrCreate(['name' => 'DRV'])
            ->givePermissionTo(['job:register', 'job:update', 'job:delete', 'job:view', 'user:register', 'user:update', 'user:delete', 'user:view', 'user:logout']);
        Role::firstOrCreate(['name' => 'USR'])
            ->givePermissionTo(['product:view', 'user:register', 'user:update', 'user:delete', 'user:view', 'user:logout']);

        $role = Role::firstOrCreate(['name' => 'ADM']);
        $role->givePermissionTo(Permission::all());
    }
}
