<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'view-dashboard',
           'manage-category',
           'manage-location',
           'manage-genre',
           'manage-keys',
           'manage-music',
           'manage-emails',
           'manage-seo',
           'manage-upload-fee',
           'manage-payments',
           'manage-users',
           'manage-roles',
           'manage-site-settings',
           'activate-artist',
           'manage-slider',
        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission,'id'=>Str::uuid()->toString() ]);
        }
    }
}