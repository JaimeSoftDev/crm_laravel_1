<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    
    public function run(): void
    {

        $users = [
            [
                "name" => "admin",
                "email" => "admin@admin.es",
                "password" => "adminadmin",
                "email_verified_at" => now(),
            ]
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}