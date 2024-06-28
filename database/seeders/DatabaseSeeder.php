<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AboutHome;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleTableSeeder::class,
            UserTableSeeder::class,
            ServiceTableSeeder::class,
            UnderServiceTableSeeder::class,
            ImageTableSeeder::class,
            TestimonialTableSeeder::class,
            ActualityTableSeeder::class,
            EmailTableSeeder::class,
            PhoneTableSeeder::class,
            SettingTableSeeder::class,
            PartnerTableSeeder::class,
       ]);
    }
}
