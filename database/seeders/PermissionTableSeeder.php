<?php
namespace Database\Seeders;
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
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'country-list',
            'country-create',
            'country-edit',
            'country-delete',
            'about-list',
            'about-create',
            'about-edit',
            'about-delete',
            'banner-list',
            'banner-create',
            'banner-edit',
            'banner-delete',
            'partner-list',
            'partner-create',
            'partner-edit',
            'partner-delete',
            'film-list',
            'film-create',
            'film-edit',
            'film-delete',
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
