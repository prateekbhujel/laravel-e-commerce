<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //fake data for registration to create a flow
        DB::table('users')->insert([
            'name'=>'test',
            'email'=>'test@test.com',
            'password'=>Hash::make('admin')
        ]);
 
    }
}
