<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Iframe;
use App\Models\Model3d;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        User::truncate();
        Iframe::truncate();
        Model3d::truncate();

        $role = [
            [
                'level' => 'admin'
            ],
            [
                'level' => 'user'
            ]
        ];

        $user = [
            [
                'name' => 'Super Admin',
                'role_id' => 1,
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Admin viana',
                'role_id' => 1,
                'email' => 'admin@sccic-dev.com',
                'password' => bcrypt('admin123'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'User viana',
                'role_id' => 1,
                'email' => 'user@sccic-dev.com',
                'password' => bcrypt('user123'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Statsiun bandung',
                'role_id' => 2,
                'email' => 'bandung@kai.viana.id',
                'password' => bcrypt('bandung'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Statsiun cimahi',
                'role_id' => 2,
                'email' => 'cimahi@kai.viana.id',
                'password' => bcrypt('cimahi'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Statsiun ciroyom',
                'role_id' => 2,
                'email' => 'ciroyom@kai.viana.id',
                'password' => bcrypt('ciroyom'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Statsiun padalarang',
                'role_id' => 2,
                'email' => 'padalarang@kai.viana.id',
                'password' => bcrypt('padalarang'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Statsiun kiaracondong',
                'role_id' => 2,
                'email' => 'kiaracondong@kai.viana.id',
                'password' => bcrypt('kiaracondong'),
                'remember_token' => Str::random(60),
            ],
        ];

        \DB::table('users')->insert($user);
        \DB::table('roles')->insert($role);
    }
}