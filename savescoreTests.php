<?php


require 'savescore.php';

class savescoreTests extends PHPUnit_Framework_TestCase
{   

	private $savescore;

	protected function setUp(){
		$this->savescore = new savescore('phpunit',100);
		$this->savescore->save();
	}
	
	public function testScore(){
		$result = $this->savescore->getlastScore();

		$this->assertEquals(100,$result);
	}
public function testName(){
		$result = $this->savescore->getlastName();

		$this->assertEquals('phpunit',$result);
	}
}



