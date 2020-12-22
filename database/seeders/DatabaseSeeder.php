<?php

namespace Database\Seeders;

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
        $this->call(SeasonSeeder::class);
        $this->call(ArmorSeeder::class);
        $this->call(ArchetypeSeeder::class);
        $this->call(WeaponTypeSeeder::class);
        $this->call(WeaponSeeder::class);
        $this->call(AccessorySeeder::class);
        $this->call(LoreBookSeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(LoreItemSeeder::class);

    }
}
