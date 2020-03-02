<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert(['name' => 'Ahlon']);
        DB::table('cities')->insert(['name' => 'Bahan']);
        DB::table('cities')->insert(['name' => 'Kyauktada']);
        DB::table('cities')->insert(['name' => 'Kyimyindaing']);
        DB::table('cities')->insert(['name' => 'Lanmadaw']);
        DB::table('cities')->insert(['name' => 'Latha']);
        DB::table('cities')->insert(['name' => 'Pabedan']);
        DB::table('cities')->insert(['name' => 'Sanchaung']);
        DB::table('cities')->insert(['name' => 'Seikkan']);
        DB::table('cities')->insert(['name' => 'Hlaing']);
        DB::table('cities')->insert(['name' => 'Kamayut']);
        DB::table('cities')->insert(['name' => 'Mayangon']);
    }
}
