<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'firstname' => 'First User',
            'lastname' => 'ThelastName',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'company'  => '1',
            'phone'     => '09000000202'
            
        ]);
    }
}
