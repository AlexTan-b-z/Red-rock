<?php
Class JiSuan{
	static function jia(){
		$one = $_POST['one'];
		$two = $_POST['two'];
		$jg  = $one + $two;
		echo $jg;
	}
	static function jian(){
		$one = $_POST['one'];
		$two = $_POST['two'];
		$jg  = $one - $two;
		echo $jg;
	}
	static function cheng(){
		$one = $_POST['one'];
		$two = $_POST['two'];
		$jg  = $one * $two;
		echo $jg;
	}
	static function chu(){
		$one = $_POST['one'];
		$two = $_POST['two'];
		if ($two == 0) {
			echo "除数不能为0";
		}
		else{
		$jg  = $one / $two;
		echo $jg;
	    }
	}
}
$jisuan_1 = new JiSuan;
$fuhao = $_POST['fuhao'];
switch ($fuhao) {
	case '+':
	    echo "计算结果等于";
		$jisuan_1->jia();
		break;
	case '-':
	    echo "计算结果等于";
		$jisuan_1->jian();
		break;	
	case '*':
	    echo "计算结果等于";
		$jisuan_1->cheng();
		break;	
	case '/':
	    echo "计算结果等于";
		$jisuan_1->chu();
		break;	
	
	default:
		echo "您的输入不正确";
		break;
}
?>
