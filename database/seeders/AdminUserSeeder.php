<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() { 
        User::truncate(); 
        $users = [ 
         [ 
           'name' => 'Super Admin',
           'email' => 'admin@admin.com',
           'password' => 'password',
         ]
       ];

       foreach($users as $user)
       {
           User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => Hash::make($user['password'])
          ]);
        }

    }
}
