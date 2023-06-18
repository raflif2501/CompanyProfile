<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'superadmin',
        ]);
        Role::create([
            'name' => 'admin',
        ]);


        // Super Admin
         $admin = User::create([
         'name' => 'Ahmad Zairosi',
         'email' => 'ahmadzairosi@gmail.com',
         'password' => bcrypt('rosi;'),
         ]);
         $admin->assignRole('superadmin');
         $admin = User::create([
            'name' => 'Rafli Firdaus Falaka',
            'email' => 'raflifirdausfalaka@gmail.com',
            'password' => bcrypt('rafliPONPES;'),
            ]);
        $admin->assignRole('superadmin');

        // Admin
         $user = User::create([
         'name' => 'Admin Pondok',
         'email' => 'adminpondok@gmail.com',
         'password' => bcrypt('adminpondok;'),
         ]);
         $user->assignRole('admin');
    }
}
