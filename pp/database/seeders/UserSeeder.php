<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     
     * @return void
     */
    public function run() : void
    {   User::create([
        'fname'=> 'rama',
        'lname'=>'abdo',
        'email'=>'ramaaa@gmail.com',
        'password'=> Hash::make('password'),
        'is_admin'=>1
    ]);
    }
}
