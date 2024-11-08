<?php

namespace Database\Seeders;

use App\Models\Footer;
use App\Models\Section;
use App\Models\Team;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\SectionFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'ali@ali.com',
            'password' => Hash::make('12345678'),
        ]);
        Section::factory()->count(4)->create();
        Team::factory()->count(10)->create();
        Footer::factory()->count(1)->create();


    }

}
