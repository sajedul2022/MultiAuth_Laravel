<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'category-list',
            'category-create',
            'category-edit',
            'category-delete',

            'subcategory-list',
            'subcategory-create',
            'subcategory-edit',
            'subcategory-delete',

            'childcat-list',
            'childcat-create',
            'childcat-edit',
            'childcat-delete',

            'subchildcat-list',
            'subchildcat-create',
            'subchildcat-edit',
            'subchildcat-delete',

            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',

            'package-list',
            'package-create',
            'package-edit',
            'package-delete',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
