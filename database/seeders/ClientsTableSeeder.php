<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('clients')->insert([
            [
                'nom' => 'Ali Benali',
                'email' => 'ali.benali@example.com',
                'telephone' => '0612345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Sara Amrani',
                'email' => 'sara.amrani@example.com',
                'telephone' => '0698765432',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
