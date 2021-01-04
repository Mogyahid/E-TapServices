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
        $admin = DB::table('users')->insertGetId([
            'firstname' => "Super",
            'lastname' => "Admin",
            'contact_no' => "09357788005",
            'email' => "admin@gmail.com",
            'password' => Hash::make("admin"),
            'role_id' => 1,
        ]);

        DB::table('addresses')->insert([
            'user_id' => $admin,	
            'province' => "SULTAN KUDARAT",
            'city' => "ISULAN (Capital)",
            'barangay' => "Kalawag II (Pob.)",
            'street' => "Montinola Subd., Kalawag II, Isulan, Sultan Kudarat",
        ]);
    }
}
