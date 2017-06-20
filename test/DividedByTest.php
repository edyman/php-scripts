<?php

use \App\Divider;

Class DividedBy extends PHPUnit_Framework_TestCase{

	public function setUp(){
		// TODO Define local variables
		$this->divider=new Divider();
	}

	public function testDividedBy3(){

		$this->divider->setCounterNumber(3);
		$this->assertEquals($this->divider->isDividedTo(),'Buzz');

	}

	public function testDividedBy5(){
		$this->divider->setDividedBy5(5);
		$this->assertEquals($this->divider->isDividedTo(),5);
	}

}