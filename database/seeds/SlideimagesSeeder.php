<?php

use Illuminate\Database\Seeder;

class SlideimagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Slideimages')->insert([
          'section_id' => 1,
          'url' => 'kbrush1.jpg',
          'order' => 1,
          'active' => 1,
      ]);
      DB::table('Slideimages')->insert([
          'section_id' => 2,
          'url' => 'pinceles_kbrush.jpg',
          'order' => 2,
          'active' => 1,
      ]);
      DB::table('Slideimages')->insert([
          'section_id' => 3,
          'url' => 'looking1.jpg',
          'order' => 3,
          'active' => 1,
      ]);
      DB::table('Slideimages')->insert([
          'section_id' => 7,
          'url' => 'espejos.jpg',
          'order' => 4,
          'active' => 1,
      ]);
      DB::table('Slideimages')->insert([
          'section_id' => 8,
          'url' => 'solingen.jpg',
          'order' => 5,
          'active' => 1,
      ]);
      DB::table('Slideimages')->insert([
          'section_id' => 9,
          'url' => 'kent1.jpg',
          'order' => 6,
          'active' => 1,
      ]);

    }
}
