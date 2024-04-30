<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(StaffsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(ConditionsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryItemTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(SoldItemTableSeeder::class);
    }
}
