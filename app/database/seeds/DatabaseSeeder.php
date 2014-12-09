<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	/*public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}*/

	public function run()
    {
        $this->call('UserTableSeeder');

        $this->command->info('User table seeded!');
    }



}

class UserTableSeeder extends Seeder {

    public function run()
    {
    	$faker = Faker\Factory::create();
        DB::table('usuarios')->delete();

        for ($i = 0; $i < 100; $i++)
		{
		  $user = Usuario::create(array(
		    'nombre' => $faker->userName,
		    'apellido' => $faker->lastName
		  ));
		}
    }

}
