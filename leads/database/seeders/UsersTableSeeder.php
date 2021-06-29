<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::updateOrCreate(['id' => 1], [
            'name' => 'Jean Seijas',
            'email' => 'admin@beedesign.mx',
            'password' => '$2y$10$PV3Wbh2qKSKHlPTSWAhbQeRtZJ9W.aTjOPtgooTXDJDztjOkUicvS' // Password
        ]);
    }
}
