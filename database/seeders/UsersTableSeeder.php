<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Administrator',
                'email'          => 'admin@gmail.com',
                'password'       => bcrypt('12345678'),
                'remember_token' => null,
                'profile_photo_path' => '',
                'username' => "admin",
                'job_title' => "Developer",
                'location' => "Addis Ababa, Ethiopia",
                'phone_number' => "+251907778899",
                'user_about' => "My name is Admin, I designed and developed this website. Hope you like it!",
            ],
            [
                'id'             => 2,
                'name'           => 'Amir Abdulfetah',
                'email'          => 'amir@aintrading.com',
                'password'       => bcrypt('12345678'),
                'remember_token' => null,
                'profile_photo_path' => '',
                'username' => "amir",
                'job_title' => "CEO",
                'location' => "Addis Ababa, Ethiopia",
                'phone_number' => "+251911289095",
                'user_about' => "My name is Elias and I am the Chief Executive Officer of Habar Architects.",
            ],
        ];

        User::insert($users);
    }
}
