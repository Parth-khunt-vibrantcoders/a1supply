<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
class Adminuser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => "Admin",
            'last_name' => "Admin",
            'email' => "admin@demo.com",
            'mobileno' => "989898999",
            'password' => Hash::make('A1supply@2022'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'userimage' => 'default.png',
            'user_type' => 'A',
            'status' => 'A',
            'is_deleted' => 'N',
            'created_at' => date("Y-m-d h:i:s"),
            'updated_at' => date("Y-m-d h:i:s"),
        ]);
    }
}
