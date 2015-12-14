<?php

$a= 4;
$b = 10;

if (($a>=0)&&($b>=0)){
	$c = $a-$b;
} elseif (($a<0)&&($b<0)){
		$c = $a*$b;
	} elseif ($a*$b<0){
			$c = $a+$b;
		}
echo "$c<br>";
		
$e = 0;

switch ($e){
	case 0:
		echo "0<br>";
	case 1:
		echo "1<br>";
	case 2:
		echo "2<br>";
	case 3:
		echo "3<br>";
	case 4:
		echo "4<br>";
	case 5:
		echo "5<br>";
	case 6:
		echo "6<br>";
	case 7:
		echo "7<br>";
	case 8:
		echo "8<br>";
	case 9:
		echo "9<br>";
	case 10:
		echo "10<br>";
	case 11:
		echo "11<br>";
	case 12:
		echo "12<br>";
	case 13:
		echo "13<br>";
	case 14:
		echo "14<br>";
	case 15:
		echo "15<br>";		
		
function add ($a,$b){
	$c = $a+$b;
	return $c;
}		

function dec($a,$b){
	return ($a-$b);
}

function mul ($a,$b){
	echo ($a*$b);
}
function del($a,$b){
	echo ($a/$b);
}
$a =add(3,2);
$a = dec(3,2);
mul(3,2);
del(3,2);
echo $a;		
}

function operacii($per1,$per2,$func){
	switch($func){
		case 'add':
			echo ($per1 + $per2);
			break;
		case 'dec':
			echo ($per1 - $per2);
			break;
		case 'mul':
			echo ($per1*$per2);
			break;
		case 'del':
			echo ($per1/$per2);
			break;
	}
}

operacii(1,2,'add');
operacii(1,2,'dec');
operacii (1,2,'mul');
operacii(1,2,'del');	

function power($val,$pow){
	if ($val == 0) {
			return 0;
			}
			
		elseif ($pow<=0){
			return 1;
		}
			else 
				return ($val*power($val,$pow-1));
}	

$step = power(5,-3);
/*echo "<br>$step";

echo date("H:i");
*/
/*function toZero($t){
	if($t<=0)
		return $t;
	echo $t.'<br>';	
	return toZero($t-1);
}*/

function toZero($t){
	if($t==0)
		return $t;
	if($t<0){
		echo $t.'<br>';
		return toZero($t+1);
	}
	echo $t.'<br>';	
	return toZero($t-1);
}

$a = toZero(-10);
echo ($a);

?>