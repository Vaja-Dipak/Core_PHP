<p>abstract class only able to contain abstract method</p>
<p>abstract class may contain simple method with body</p>
<p>we are not able to craete an object of abstract class</p>
<p>if we want to use abstract class we hv to extends it</p>
<p>abstract methods must definded in inherited class </p>
<?php
abstract class RBI{
	abstract public function giveInterestToUser(); //doesnt contain body part while declaring abstact method
	// abstract public function giveInterestToUser() {
    //     echo "called";
	// }
	function testing() {
		echo "called";
	}
}
class JolachapBank extends RBI{
	public function giveInterestToUser() {
        echo "called";
	}
}
?>