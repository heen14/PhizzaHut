<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin1'),
                'address' => 'Jl. Admin',
                'phone' => '086522214924',
                'gender' => 'male',
                'role' => 'admin',
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user11'),
                'address' => 'Jl. User',
                'phone' => '086522214124',
                'gender' => 'male',
                'role' => 'member',
            ]
            
        ]);
    }
}
