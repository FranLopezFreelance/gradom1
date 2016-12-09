<?php

use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('colors')->insert([
          'name' => 'Blanco',
          'code' => '#fff',
          'active' => 1,
      ]);
      DB::table('colors')->insert([
          'name' => 'Negro',
          'code' => '#000',
          'active' => 1,
      ]);
      DB::table('colors')->insert([
          'name' => 'Gris',
          'code' => '#666',
          'active' => 1,
      ]);
    }
}
