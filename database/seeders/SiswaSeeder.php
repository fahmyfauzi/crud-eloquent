<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

        for ($i=0; $i <30 ; $i++) {
          // code...
          DB::table('siswa')->insert([
          'nama' => $faker->name,
          'umur' => $faker->numberBetween(20,40),
          'alamat'=> $faker->address
          ]);
        }


    }
}
