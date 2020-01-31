<?php
use PHPUnit\Framework\TestCase;


class ExampleTest extends TestCase
{ 	
	public function testHello() {
        $this->assertEquals('Hello', 'Hello');
    }

    public function testUserEmail()
    {	
    	$link = mysqli_connect("localhost","root","tarin185","biyebari");
    	if(!$link)
		{
			echo "Error: Unable to connect to MySQL." . PHP_EOL;
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			exit;
		}
    	$res=mysqli_query($link,"SELECT uname FROM user WHERE email='nahid22684@gmail.com'")or die(mysql_error());
    	while($arr=mysqli_fetch_row($res))
		{
        	$this->assertEquals('nahid226', $arr[0]);
    	}
    }

}