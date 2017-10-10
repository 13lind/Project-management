<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'password' => Hash::make('carshareadmin'),
            'admin' => true,
        ]);
    }
}
