<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    DB::table('users')->insert([
    'name' => 'Pallab Mallick',
    'email' => 'pallabmallick@rediffmail.com',
    'password' => Hash::make('Passw0rd@123')
]);
    }
}
