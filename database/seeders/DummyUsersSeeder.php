<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersData=[
            [
                'name'=>'mas admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12345678')
            ],
            [
                'name'=>'mas pengontrol',
                'email'=>'pengontrol@gmail.com',
                'role'=>'pengontrol',
                'password'=>bcrypt('12345678')
            ],
        ];
        
        foreach ($usersData as $key => $value) {
            User::create($value);
        }
    }
}
