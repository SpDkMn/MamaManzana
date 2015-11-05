<?php

use Illuminate\Database\Seeder;

class SeederCountries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert(['name' => 'Perú']);
        DB::table('states')->insert(['country_id' => 1, 'name' => 'Lima']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Cercado de Lima']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Ate']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Barranci']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Breña']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Comas']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Chorrillos']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'El Agustino']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Jesús María']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'La Molina']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'La Victoria']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Lince']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Magdalena del Mar']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Miraflores']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Pueblo Libre']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Puente Piedra']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Rimac']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'San Isidro']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Independencia']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'San Juan de Miraflores']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'San Luis']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'San Martin de Porres']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'San Miguel']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Santiago de Surco']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Surquillo']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Villa María del Triunfo']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'San Juan de Lurigancho']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Santa Rosa']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Los Olivos']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'San Borja']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Villa El Savador']);
		DB::table('cities')->insert(['state_id' => 1, 'name' => 'Santa Anita']);
    }
}
