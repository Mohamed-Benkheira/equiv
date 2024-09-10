<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon; // Import Carbon for timestamp
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Amine Admin',
            'email' => 'amine@equivalence.site',
            'password' => Hash::make('dashboardpassword'),
            'email_verified_at' => Carbon::now(), // Set email as verified
        ]);
    }
}
