<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $newStudent = new Student();
            $newStudent->nome = $faker->firstName();
            $newStudent->cognome = $faker->lastName();
            $newStudent->citta = $faker->city();
            $newStudent->data_di_nascita = $faker->date($format = 'Y-m-d', $max = 'now');
            $newStudent->save();
        }
    }
}
