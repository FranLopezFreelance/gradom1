<?php

use Illuminate\Database\Seeder;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sections')->insert([
          'name' => 'K-Brush - Cepillos',
          'children' => 0,
          'section_id' => 0,
          'active' => 1,
      ]);
      DB::table('sections')->insert([
          'name' => 'K-Brush - Make Up',
          'children' => 0,
          'section_id' => 0,
          'active' => 1,
      ]);
      DB::table('sections')->insert([
          'name' => 'Looking Good',
          'children' => 0,
          'section_id' => 0,
          'active' => 1,
      ]);
      DB::table('sections')->insert([
          'name' => 'Espejos con Aumento',
          'children' => 1,
          'section_id' => 0,
          'active' => 1,
      ]);
      DB::table('sections')->insert([
          'name' => 'Cartera',
          'children' => 0,
          'section_id' => 4,
          'active' => 1,
      ]);
      DB::table('sections')->insert([
          'name' => 'Tocador',
          'children' => 0,
          'section_id' => 4,
          'active' => 1,
      ]);
      DB::table('sections')->insert([
          'name' => 'Pared',
          'children' => 0,
          'section_id' => 4,
          'active' => 1,
      ]);
      DB::table('sections')->insert([
          'name' => 'Kuther Solingen',
          'children' => 0,
          'section_id' => 0,
          'active' => 1,
      ]);
      DB::table('sections')->insert([
          'name' => 'Kent',
          'children' => 0,
          'section_id' => 0,
          'active' => 1,
      ]);
    }
}
