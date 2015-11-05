<?php

use Illuminate\Database\Seeder;

class SeederSettings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
        	'title' => 'Mamá Manzana',
        	'keywords'=>'Manzanas, Manzanas acarameladas, Caramelo, Dulce',
        	'description' => 'Deliciosas Manzanas son las que te ofrece Mamá Manzana',
            'logo' => 'logo1.jpg',
            'favicon' => 'favicon.ico',
            'footer' => 'footer1.jpg',
            'email_order' => 'pedidos@mamamanzana.com',
            'phrase' => '<h3 class="title">LOS MEJORES</h3><h4 class="subtitle">INGREDIENTES</h4>']);

        DB::table('contact_informations')->insert(['email' => 'contacto@mamamanzana.com', 'phone' => '945 865 258']);

        DB::table('social_networks')->insert(['name' => 'facebook', 'active' => false]);
        DB::table('social_networks')->insert(['name' => 'twitter', 'active' => false]);
        DB::table('social_networks')->insert(['name' => 'instagram', 'active' => false]);
        DB::table('social_networks')->insert(['name' => 'pinterest', 'active' => false]);
        DB::table('social_networks')->insert(['name' => 'linkedin', 'active' => false]);
        DB::table('social_networks')->insert(['name' => 'youtube', 'active' => false]);

        DB::table('menu')->insert(['name' => 'Home', 'order' => '1']);
        DB::table('menu')->insert(['name' => 'About us', 'order' => '2']);
        DB::table('menu')->insert(['name' => 'Categories', 'order' => '3']);
        DB::table('menu')->insert(['name' => 'Orders', 'order' => '4']);
        DB::table('menu')->insert(['name' => 'Contact', 'order' => '5']);

        DB::table('about')->insert([
            'title' => 'WHO WE ARE',
            'mission' => 'Somos una empresa peruana que brinda frescura, sabor y diversión a personas con antojos de exquisito caramelo que quieran disfrutar sabrosas experiencias.',
            'vision' => 'Ser reconocidos en el mercado nacional como la empresa vanguardista de manzanas dulces gourmet.',
            'values' => 'Alegría<br>Creatividad<br>Calidad en el producto<br>Cortesía en la atención'
            ]);

        DB::table('about_meta')->insert([
            'about_id' => 1,
            'title' => 'About us',
            'keywords' => 'KeyWords',
            'description' => 'Descriptions'
            ]);

        DB::table('about_img')->insert([
            'about_id' => 1,
            'name' => 'about_img.jpg'
            ]);
    }
}
