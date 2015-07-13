<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        factory(App\User::class)->create([
            'name' =>' Hermann Berkhoff',
            'email' => 'hermann@berkhoff.cl',
            'password' => bcrypt('1234'),
            'role' => ('admin')
        ]);
        factory(App\User::class, 49)->create();
    }
}
