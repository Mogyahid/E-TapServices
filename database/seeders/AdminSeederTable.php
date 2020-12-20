<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => "Super",
            'lastname' => "Admin",
            'contact_no' => "09357788005",
            'email' => "admin@gmail.com",
            'password' => Hash::make("admin"),
            'role_id' => 1,
        ]);
    }
}
