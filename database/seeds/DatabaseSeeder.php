<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(SectionsSeeder::class);
        // $this->call(GroupsSeeder::class);
        // $this->call(ColorsSeeder::class);
        // $this->call(ProductsSeeder::class);
        // $this->call(ImagesSeeder::class);
        $this->call(SlideimagesSeeder::class);
    }
}
