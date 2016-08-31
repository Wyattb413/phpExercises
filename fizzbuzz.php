<?php

for ($i = 1; $i <= 100; $i += 1) {
	if ($i % 3 == 0 && $i % 5 == 0) {
		$fizzbuzz = shell_exec("cowsay -f charizardvice fizzbuzz!!");
		echo $fizzbuzz;
	} else if ($i % 3 == 0) {
		echo "fizz" . PHP_EOL;
	} else if ($i % 5 == 0) {
		echo "buzz" . PHP_EOL;
	} else {
		echo $i . PHP_EOL;
	}
}