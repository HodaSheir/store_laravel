<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hoda Sheir',
            'email' => 'hoda@gmail.com',
            'password'=> Hash::make('password'),
            'phone_number' => '00201114782456'
        ]);
    }
}
