<?php

namespace Database\Seeders;

use App\Models\Manager;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTestSeeder extends Seeder
{
    public function run()
    {
        $managers = [
            'manager_1' => [
                'name' => 'Carlos Henrique',
                'email' => 'carlos@gmail.com',
                'password' => '123456',
                'level' => 1 
            ],
            'manager_2' => [
                'name' => 'Fabio Lima',
                'email' => 'fabio@gmail.com',
                'password' => '123456',
                'level' => 2 
            ],
        ];

        foreach($managers as $m){

            $new = Manager::create([
                'name' => $m['name'],
                'email' => $m['email'],
                'level' => $m['level']
            ]);

            $user = User::create([
                'name' => $m['name'],
                'manager_id' => $new->id,
                'password' => bcrypt($m['password']),
                'email' => $m['email']
            ]);

            $user->createToken('API Token')->plainTextToken;
        }
    }
}
