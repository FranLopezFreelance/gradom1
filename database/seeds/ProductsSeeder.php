<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('products')->insert([
      //     'name' => 'Espejo de Pared Blanco',
      //     'description' => 'Es un espejo re copado que tiene mucha onda./Fácil de colocar./Fácil de sacar.',
      //     'section_id' => 1,
      //     'group_id' => 1,
      //     'color_id' => 1,
      //     'price' => 189.90,
      //     'stock' => 80,
      //     'order' => 1,
      //     'active' => 1,
      // ]);
      // DB::table('products')->insert([
      //     'name' => 'Espejo de Pared Negro',
      //     'description' => 'Es un espejo re copado que tiene mucha onda./Fácil de colocar./Fácil de sacar.',
      //     'section_id' => 1,
      //     'group_id' => 1,
      //     'color_id' => 2,
      //     'price' => 189.90,
      //     'stock' => 80,
      //     'order' => 1,
      //     'active' => 1,
      // ]);
      // DB::table('products')->insert([
      //     'name' => 'Espejo de Pared Gris',
      //     'description' => 'Es un espejo re copado que tiene mucha onda./Fácil de colocar./Fácil de sacar.',
      //     'section_id' => 1,
      //     'group_id' => 1,
      //     'color_id' => 3,
      //     'price' => 189.90,
      //     'stock' => 80,
      //     'order' => 1,
      //     'active' => 1,
      // ]);
      // DB::table('products')->insert([
      //     'name' => 'Espejo de Pared Blanco NV1',
      //     'description' => 'Es un espejo re copado que tiene mucha onda./Fácil de colocar./Fácil de sacar.',
      //     'section_id' => 1,
      //     'group_id' => 1,
      //     'color_id' => 3,
      //     'price' => 159.90,
      //     'stock' => 80,
      //     'order' => 1,
      //     'active' => 1,
      // ]);
      // DB::table('products')->insert([
      //     'name' => 'Cepillo Blanco',
      //     'description' => 'Es un cepillo fantástico./Queda lindo en cualquier baño./No se rompe.',
      //     'section_id' => 1,
      //     'group_id' => 2,
      //     'color_id' => 1,
      //     'price' => 89.90,
      //     'stock' => 150,
      //     'order' => 1,
      //     'active' => 1,
      // ]);
      // DB::table('products')->insert([
      //   'name' => 'Cepillo Negro',
      //   'description' => 'Es un cepillo fantástico./Queda lindo en cualquier baño./No se rompe.',
      //   'section_id' => 1,
      //   'group_id' => 2,
      //   'color_id' => 2,
      //   'price' => 89.90,
      //   'stock' => 150,
      //   'order' => 1,
      //   'active' => 1,
      // ]);
      // DB::table('products')->insert([
      //   'name' => 'Cepillo Gris',
      //   'description' => 'Es un cepillo fantástico./Queda lindo en cualquier baño./No se rompe.',
      //   'section_id' => 1,
      //   'group_id' => 2,
      //   'color_id' => 3,
      //   'price' => 89.90,
      //   'stock' => 150,
      //   'order' => 1,
      //   'active' => 1,
      // ]);
      // DB::table('products')->insert([
      //     'name' => 'Brocha Gorda ',
      //     'description' => 'Es muy buena para cualquier rostro./Fácil de utilizar./Fácil de limpiar.',
      //     'section_id' => 2,
      //     'group_id' => 3,
      //     'color_id' => 2,
      //     'price' => 129.90,
      //     'stock' => 80,
      //     'order' => 1,
      //     'active' => 1,
      // ]);
      // DB::table('products')->insert([
      //     'name' => 'Brocha SUB-CEL  1',
      //     'description' => 'Es muy buena para cualquier rostro./Fácil de utilizar./Fácil de limpiar.',
      //     'section_id' => 2,
      //     'group_id' => 3,
      //     'color_id' => 3,
      //     'price' => 119.90,
      //     'stock' => 80,
      //     'order' => 1,
      //     'active' => 1,
      // ]);
      // DB::table('products')->insert([
      //     'name' => 'Brocha MIN-HXC ',
      //     'description' => 'Es muy buena para cualquier rostro./Fácil de utilizar./Fácil de limpiar.',
      //     'section_id' => 2,
      //     'group_id' => 3,
      //     'color_id' => 1,
      //     'price' => 114.90,
      //     'stock' => 80,
      //     'order' => 1,
      //     'active' => 1,
      // ]);
      // DB::table('products')->insert([
      //     'name' => 'Brocha LHX1-CF ',
      //     'description' => 'Es muy buena para cualquier rostro./Fácil de utilizar./Fácil de limpiar.',
      //     'section_id' => 2,
      //     'group_id' => 4,
      //     'color_id' => 3,
      //     'price' => 124.90,
      //     'stock' => 80,
      //     'order' => 1,
      //     'active' => 1,
      // ]);
      DB::table('products')->insert([
          'name' => 'Espejo de Cartera con ventosa',
          'description' => 'Es muy buena para cualquier rostro./Fácil de utilizar./Fácil de limpiar.',
          'section_id' => 5,
          'group_id' => 8,
          'color_id' => 1,
          'price' => 119.90,
          'stock' => 80,
          'order' => 1,
          'active' => 1,
      ]);
    }
}
