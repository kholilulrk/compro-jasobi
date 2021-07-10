<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TeamSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(AboutusSeeder::class);
        $this->call(UserClientSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(ContactSeeder::class);
    }
}
