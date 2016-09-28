<?php

require 'Rectangle.php';

class Square extends Rectangle 
{
	public function __construct($height)
	{
		$this->height = $height;
		$this->width = $height;
	}

	public function perimeter()
	{
		return (($this->height + $this->width)*2);
	}

	public function area()
	{
		return (($this->height)*($this->width));
	}
}