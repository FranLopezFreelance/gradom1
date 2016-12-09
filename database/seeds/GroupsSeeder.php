<?php

use Illuminate\Database\Seeder;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('groups')->insert([
          'section_id' => 1,
          'name' => 'Espejos Chinos',
          'active' => 1,
      ]);
      DB::table('groups')->insert([
          'section_id' => 1,
          'name' => 'Espejos Koreanos',
          'active' => 1,
      ]);
    }
}
