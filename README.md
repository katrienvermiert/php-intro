# php-intro

What is the difference between an array, an associative array and an object?
	1. array = An array is a special variable, which can hold more than one value at a time.
		example: 
			$cars = array("Volvo","BMW","Toyota");
					OR
			$cars = ["Volvo", "BMW", "Toyota");

	2. associative array = Associative arrays are arrays that use named keys that you assign 		to them.
		example:
			$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
						OR
			$age['Peter'] = "35";
			$age['Ben'] = "37";
			$age['Joe'] = "43";

	3. object = An individual instance of the data structure defined by a class. You define a 		class once and then make many objects that belong to it. Objects are also known as 		instance.
		example:
			<?php
			class Car {
			    function Car() {
				$this->model = "VW";
			    }
			}

			// create an object
			$herbie = new Car();

			// show object properties
			echo $herbie->model;
			?>
