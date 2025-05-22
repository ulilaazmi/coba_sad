<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Create Admin user
        User::create([
            'username' => 'admin01',
            'name' => 'Admin Barbershop',
            'password' => Hash::make('adminpass'), // password: adminpass
            'role' => 'admin', // Role as admin
        ]);

        // Create Karyawan user
        User::create([
            'username' => 'karyawan01',
            'name' => 'Karyawan A',
            'password' => Hash::make('karyawanpass'), // password: karyawanpass
            'role' => 'karyawan', // Role as karyawan
        ]);
    }
}
