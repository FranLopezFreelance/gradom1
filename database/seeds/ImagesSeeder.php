<?php

use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('images')->insert([
          'product_id' => 1,
          'url' => 'espejo1.jpg',
          'order' => 1,
          'active' => 1,
      ]);
      DB::table('images')->insert([
          'product_id' => 1,
          'url' => 'espejo1-b.jpg',
          'order' => 2,
          'active' => 1,
      ]);
      DB::table('images')->insert([
          'product_id' => 2,
          'url' => 'espejo2.jpg',
          'order' => 1,
          'active' => 1,
      ]);
      DB::table('images')->insert([
          'product_id' => 3,
          'url' => 'espejo3.jpg',
          'order' => 1,
          'active' => 1,
      ]);
      DB::table('images')->insert([
          'product_id' => 3,
          'url' => 'espejo3-b.jpg',
          'order' => 2,
          'active' => 1,
      ]);
      DB::table('images')->insert([
          'product_id' => 3,
          'url' => 'espejo3-c.jpg',
          'order' => 3,
          'active' => 1,
      ]);
    }
}
