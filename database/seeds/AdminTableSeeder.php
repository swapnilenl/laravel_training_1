<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'appundertest1@gmail.com',
            'password' => bcrypt('Pass@123'),
        ]);
    }

}
