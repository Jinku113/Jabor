<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
       
   return DB::table('users')->insert([
      'name' => 'Admin',
      'email' => 'jabor@mail.com',
      'password' => Hash::make('jabor123')
   ]);
 }

    }

