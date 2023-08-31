<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'  =>  'admin',
            'email' =>  'admin@admin.com',
            'password'  =>  Hash::make('12345678'),
            'is_admin'  =>  1,
            ]);
            UserDetail::create([
            'user_id'   =>  $user->id,
            ]);
    }
}
