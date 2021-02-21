<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->insert([]);
//        \App\Models\User::create([]);
        \App\Models\User::factory()
            ->count(10)
            ->create()
        ;
    }
}
