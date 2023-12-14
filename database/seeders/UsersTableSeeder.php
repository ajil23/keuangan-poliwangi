<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'	=> 'admin keuangan poliwangi',
            'email'	=> 'admin1@gmail.com',
            'password'	=> bcrypt('12345678')
        ]);

        User::create([
            'name'	=> 'jurusan bisnis & informatik',
            'email'	=> 'admin2@gmail.com',
            'password'	=> bcrypt('12345678')
        ]);

        User::create([
            'name'	=> 'jurusan teknik sipil',
            'email'	=> 'admin3@gmail.com',
            'password'	=> bcrypt('12345678')
        ]);

        User::create([
            'name'	=> 'jurusan teknik mesin',
            'email'	=> 'admin4@gmail.com',
            'password'	=> bcrypt('12345678')
        ]);
    }
}
