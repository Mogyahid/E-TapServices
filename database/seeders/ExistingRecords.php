<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ExistingRecords extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Providers
        $provider = DB::table('users')->insertGetId([
            'firstname' => "Mildred",
            'lastname' => "Accad",
            'contact_no' => "09067932788",
            'email' => "mildredaccad@sksu.edu.ph",
            'password' => '$2y$10$pf1u0lGCZu.eJUWTXR75a.R6n5ZbuFez45L0S6g26Kr7xrjt9Qta2',
            'isProviderConfirmed' => 1,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 3,
        ]);

        DB::table('providers')->insert([
            'user_id' => $provider,	
            'middlename' => "Fernandez",
            'gender' => "Female",
            'dob' => "1969-10-21",
            'city' => "ISULAN (Capital)",
            'establishment' => "Katahum Arts and Crafts",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $provider,	
            'province' => "SULTAN KUDARAT",
            'city' => "ISULAN (Capital)",
            'barangay' => "Kalawag II (Pob.)",
            'street' => "Montinola Subd., Kalawag II, Isulan, Sultan Kudarat",
        ]);

        $provider = DB::table('users')->insertGetId([
            'firstname' => "Arnel",
            'lastname' => "Celeste",
            'contact_no' => "09364175277",
            'email' => "yuloarnelceleste580@gmail.com",
            'password' => '$2y$10$zL5AyGzaD23bCf7OPHv.TOZ/qBDhGiGcK9QFX7uADmLXx98dqB0Au',
            'isProviderConfirmed' => 1,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 3,
        ]);

        DB::table('providers')->insert([
            'user_id' => $provider,	
            'middlename' => "Yulo",
            'gender' => "Male",
            'dob' => "1991-04-29",
            'city' => "BAGUMBAYAN",
            'establishment' => "EA Electronics",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $provider,	
            'province' => "SULTAN KUDARAT",
            'city' => "BAGUMBAYAN",
            'barangay' => "Poblacion",
            'street' => "Lower Roxas Poblacion Bagumbayan, Sultan Kudarat",
        ]);


        // Clients / Users
        $user = DB::table('users')->insertGetId([
            'firstname' => "Bernard",
            'lastname' => "Navarro",
            'contact_no' => "09351888033",
            'email' => "bernardnavarro198018@gmail.com",
            'password' => '$2y$10$h8xcy1XbIc/oQXE69RcP9.Wi9InngQRVPiGKObH0rX9mhBTId.y3W',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Ego",
            'gender' => "Male",
            'dob' => "1980-07-18",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "ISULAN (Capital)",
            'barangay' => "Dansuli",
            'street' => "Purok 9",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "CeliaRose",
            'lastname' => "Nota",
            'contact_no' => "09360535415",
            'email' => "cjnota0420@gmail.com",
            'password' => '$2y$10$B51LICV0ErwFMzPxcoYVt.Qlv/k7RKgKCz/fak9nfio8phd9pRBJe',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Jalon",
            'gender' => "Female",
            'dob' => "1976-09-06",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "ISULAN (Capital)",
            'barangay' => "Kalawag I (Pob.)",
            'street' => "Pabloko",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Jenamae",
            'lastname' => "Fatagani",
            'contact_no' => "09750727251",
            'email' => "jenamaefatagani@sksu.edu.ph",
            'password' => '$2y$10$vcBH69hjajaWHA2opk25m.70JfsuPnrn9BgcvqpXGTQzpLsU6NCsO',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Monsale",
            'gender' => "Female",
            'dob' => "1996-10-06",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "ISULAN (Capital)",
            'barangay' => "Bambad",
            'street' => "",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Samuel",
            'lastname' => "Polgadas",
            'contact_no' => "09099151158",
            'email' => "polgadass@yahoo.com",
            'password' => '$2y$10$phtKmh2Z1QJrLsJgvSUYje7nbmmrOkAhDZvVTNDJpcgyXY7u6Pdom',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "likin",
            'gender' => "Male",
            'dob' => "1977-12-29",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "CEBU",
            'city' => "MANDAUE CITY",
            'barangay' => "Pakna-an",
            'street' => "10",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Norihan",
            'lastname' => "Velarde",
            'contact_no' => "09396933886",
            'email' => "norihusman@gmail.com",
            'password' => '$2y$10$MbPDw.qZaweGjkKIo9Tca.vmYyhesi4SG6l5fv1cAb4MAhSyctBLO',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Usman",
            'gender' => "Female",
            'dob' => "1997-07-19",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "CITY OF TACURONG",
            'barangay' => "Tina",
            'street' => "Purok Rosas",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Teobe",
            'lastname' => "Lucas",
            'contact_no' => "09266768917",
            'email' => "chinkyglucas1@gmail.com",
            'password' => '$2y$10$cy1vsr1hHzB4Qi31INJvl.IKWoBkLayUdu8IzzAfgP1tubbItBcSe',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Guanzon",
            'gender' => "Female",
            'dob' => "1967-08-17",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "ISULAN (Capital)",
            'barangay' => "Kalawag I (Pob.)",
            'street' => "288 panes st.",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Archibeth",
            'lastname' => "Flamiano",
            'contact_no' => "09759292707",
            'email' => "bbgirlarchibethflamiano@sksu.edu.ph",
            'password' => '$2y$10$gz9cANgaA2XtJS/eTZgxnuV0.LvIyPj5KdpzObmewUINEb4T6lEVi',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Cardinas",
            'gender' => "Female",
            'dob' => "1977-06-16",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SOUTH COTABATO",
            'city' => "SANTO NIÑO",
            'barangay' => "Poblacion",
            'street' => "Purok San Vicente",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Amir",
            'lastname' => "Nor",
            'contact_no' => "09104505429",
            'email' => "akn89@ymail.com",
            'password' => '$2y$10$.57bP7G9G9B/AbhhBXFzR.6E7cE5CJlfMW6Sg9jObMI8FyvSSyZQi',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Abe",
            'gender' => "Male",
            'dob' => "1989-10-11",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "BOHOL",
            'city' => "LOBOC",
            'barangay' => "Candasag",
            'street' => "Purok Tambis",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Claire",
            'lastname' => "Espallardo",
            'contact_no' => "09556022964",
            'email' => "espallardoca@gmail.com",
            'password' => '$2y$10$OUdICs7nWO.7cj4RqKmA0Oglu648VKD2b2MPx48GzEUt4KQrg2oSq',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Esmores",
            'gender' => "Female",
            'dob' => "1993-02-03",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SOUTH COTABATO",
            'city' => "SURALLAH",
            'barangay' => "Little Baguio",
            'street' => "Purok Maligaya",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Lilibeth",
            'lastname' => "Edano",
            'contact_no' => "09264635719",
            'email' => "lilibethedano@sksu.ph.edu",
            'password' => '$2y$10$WKmG4a1z9Vg00D6XH6wB3edvGNzh67J24Gqj3hj9w2uQ3pFvVbeNK',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Bermudez",
            'gender' => "Female",
            'dob' => "1964-02-03",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "CITY OF TACURONG",
            'barangay' => "New Isabela",
            'street' => "Purok Masagana Kalawag 2",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Johnrey",
            'lastname' => "Moreno",
            'contact_no' => "09067139500",
            'email' => "johnreymoreno367@gmail.com",
            'password' => '$2y$10$yTLVpt8LTs1BsbwIZMWfQuSOj876T1uj.BAjv0Ty3HqxvdTwsgnYq',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Lumawag",
            'gender' => "Male",
            'dob' => "1998-06-30",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "CITY OF TACURONG",
            'barangay' => "New Isabela",
            'street' => "Block 1 Urban Poor, Purok Daisy",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Jena",
            'lastname' => "Fatagani",
            'contact_no' => "09058103951",
            'email' => "jmfatagani@gmail.com",
            'password' => '$2y$10$pj3E3c9NeUXi/ohgBbRM.el6ZVwKQbNYz.HYBWvNWuG6zdeBQmSHO',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Monsale",
            'gender' => "Female",
            'dob' => "1996-10-06",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "ISULAN (Capital)",
            'barangay' => "Bambad",
            'street' => "Maremco, bambad",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Ramelyn",
            'lastname' => "Usman",
            'contact_no' => "09289884881",
            'email' => "326102@deped.gov.ph",
            'password' => '$2y$10$8lSWNlvYEd6818m28Kh8M.Bn5jVsx9BT4ZFAJK5mrBcLj8to9oM8m',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Velarde",
            'gender' => "Female",
            'dob' => "1977-05-31",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "CITY OF TACURONG",
            'barangay' => "San Pablo",
            'street' => "Purok San Jose",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "NOEL",
            'lastname' => "GEPULLANO",
            'contact_no' => "09531161712",
            'email' => "noelgepullano@gmail.com",
            'password' => '$2y$10$.0oC5gHmOR0iI5y4xQj9FuOVQDT9wA5MBLCu7Yg7pcK2BU5tozpYu',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "CAGOL",
            'gender' => "Male",
            'dob' => "1994-02-22",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "ESPERANZA",
            'barangay' => "Paitan",
            'street' => "PRK.DAISY",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Amy",
            'lastname' => "Armada",
            'contact_no' => "09368083564",
            'email' => "amyarmada@sksu.edu.ph",
            'password' => '$2y$10$YmWT.6Qe97eNV23MPndaD.KQJkEtS08ayTogL.ZhaH4tj0pQKTLTu',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Abuan",
            'gender' => "Female",
            'dob' => "1977-03-17",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "ISULAN (Capital)",
            'barangay' => "Kalawag II (Pob.)",
            'street' => "Capitol East",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "MARLON",
            'lastname' => "ALEGADO",
            'contact_no' => "09269737701",
            'email' => "alegadomarlon07@gmail.com",
            'password' => '$2y$10$AgNlA4XwLdMBrtoo/0ALiubGyWwkfpxrDdEf8aZ1WCWd.4xJZnaB6',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "ALON",
            'gender' => "Male",
            'dob' => "1990-06-27",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "SULTAN KUDARAT",
            'city' => "CITY OF TACURONG",
            'barangay' => "Poblacion",
            'street' => "Purok 2",
        ]);

        $user = DB::table('users')->insertGetId([
            'firstname' => "Marcelina",
            'lastname' => "Bahalla",
            'contact_no' => "09435273218",
            'email' => "bahallamars@gmail.com",
            'password' => '$2y$10$rKAMdkglVz1RZKYwB.03Uu9JB5tKeTKRY2LgjF5v.3/5riUxb1OfW',
            'isProviderConfirmed' => 0,
            'category_id' => null,
            'isAgree' => 1,
            'role_id' => 4,
        ]);

        DB::table('customers')->insert([
            'user_id' => $user,	
            'middlename' => "Ordona",
            'gender' => "Female",
            'dob' => "1948-12-11",
        ]);

        DB::table('addresses')->insert([
            'user_id' => $user,	
            'province' => "COTABATO (NORTH COTABATO)",
            'city' => "KABACAN",
            'barangay' => "Poblacion",
            'street' => "3rd Blk Villanueva Subdivision",
        ]);
    }
}
