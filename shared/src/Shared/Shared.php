<?php 

namespace Itiden\Shared;

use Faker;

class Shared
{
	public function test()
	{
		$faker = Faker\Factory::create();
		echo $faker->name;
	}
}