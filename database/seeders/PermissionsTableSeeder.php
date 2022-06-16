<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'nuevo_plan_access',
            ],
            [
                'id'    => 18,
                'title' => 'usuario_create',
            ],
            [
                'id'    => 19,
                'title' => 'usuario_edit',
            ],
            [
                'id'    => 20,
                'title' => 'usuario_show',
            ],
            [
                'id'    => 21,
                'title' => 'usuario_delete',
            ],
            [
                'id'    => 22,
                'title' => 'usuario_access',
            ],
            [
                'id'    => 23,
                'title' => 'nuevo_usuario_create',
            ],
            [
                'id'    => 24,
                'title' => 'nuevo_usuario_edit',
            ],
            [
                'id'    => 25,
                'title' => 'nuevo_usuario_show',
            ],
            [
                'id'    => 26,
                'title' => 'nuevo_usuario_delete',
            ],
            [
                'id'    => 27,
                'title' => 'nuevo_usuario_access',
            ],
            [
                'id'    => 28,
                'title' => 'metum_create',
            ],
            [
                'id'    => 29,
                'title' => 'metum_edit',
            ],
            [
                'id'    => 30,
                'title' => 'metum_show',
            ],
            [
                'id'    => 31,
                'title' => 'metum_delete',
            ],
            [
                'id'    => 32,
                'title' => 'metum_access',
            ],
            [
                'id'    => 33,
                'title' => 'durnin_womersley_create',
            ],
            [
                'id'    => 34,
                'title' => 'durnin_womersley_edit',
            ],
            [
                'id'    => 35,
                'title' => 'durnin_womersley_show',
            ],
            [
                'id'    => 36,
                'title' => 'durnin_womersley_delete',
            ],
            [
                'id'    => 37,
                'title' => 'durnin_womersley_access',
            ],
            [
                'id'    => 38,
                'title' => 'calculadora_access',
            ],
            [
                'id'    => 39,
                'title' => 'historiale_access',
            ],
            [
                'id'    => 40,
                'title' => 'calculadora_dietum_create',
            ],
            [
                'id'    => 41,
                'title' => 'calculadora_dietum_edit',
            ],
            [
                'id'    => 42,
                'title' => 'calculadora_dietum_show',
            ],
            [
                'id'    => 43,
                'title' => 'calculadora_dietum_delete',
            ],
            [
                'id'    => 44,
                'title' => 'calculadora_dietum_access',
            ],
            [
                'id'    => 45,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
