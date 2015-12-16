<?php
Class Solve{
	static function one(){ //船以10m/s的速度在静水中行驶2s的距离
		$v = 10;
		$t = 2 ;
		$x = $v * $t;
		echo $x;
		echo "<br>";
	}
	static function two(){//船以10m/s在水速为5m/s的逆水中 2s内行驶的距离
		$v = 10;
		$t = 2 ;
		$l = 5 ;
		$x = $v * $t - $l * $t;
		echo $x;
		echo "<br>";
	}
	static function three(){//船以10m/s在水速为5m/s的顺水中 2s内行驶的距离
		$v = 10;
		$t = 2 ;
		$l = 5 ;
		$x = $v * $t + $l * $t;
		echo $x;
		echo "<br>";
	}
}
$question_1 = new Solve;
$question_1->one();
$question_1->two();
$question_1->three();