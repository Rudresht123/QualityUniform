<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $modules = [

            'vendor' => [
                'vendor_view',
                'vendor_create',
                'vendor_edit',
                'vendor_delete',
            ],

            'school' => [
                'school_view',
                'school_create',
                'school_edit',
                'school_delete',
            ],

            'product' => [
                'product_view',
                'product_create',
                'product_edit',
                'product_delete',
            ],

            'order' => [
                'order_view',
                'order_edit',
            ],
        ];

        foreach ($modules as $permissions) {

            foreach ($permissions as $permission) {

                Permission::firstOrCreate([
                    'name' => $permission,
                    'guard_name' => 'web',
                ]);
            }
        }
    }
}