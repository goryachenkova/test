<?php

if (isset($_POST['login'])&& isset($_POST['pass'])){
	if ($_POST['login']=="" || $_POST['pass']==""){
		echo "Заполните все поля";
		return;
	}
	 else{
		$log = trim($_POST['login']);
		$pas = trim($_POST['pass']);	
	}
}	

$var  = array();
$var['user0'] = array();
$var['user1'] = array();
$var['user2'] = array();

$var['user0']['login'] = 'Kate';
$var['user0']['password'] = '1234';

$var['user1']['login'] = 'Vasya';
$var['user1']['password'] = '5678';

$var['user2']['login'] = 'Petya';
$var['user2']['password'] = '1122';
//var_dump($var);


/*foreach ($var as $key => $value){
	echo $key.'<br>';
	foreach ($value as $ke => $val){
		echo "$ke: $val <br>";
	}
}*/


switch($log){
	case 'Kate':
		if ($pas ==$var['user0']['password'])
			echo "$log, вы успешно зашли в систему";
		else
			echo "$log, вы неверно указали пароль";
		break;
	case 'Vasya':
		if ($pas ==$var['user1']['password'])
			echo "$log, вы успешно зашли в систему";
		else
			echo "$log, вы неверно указали пароль";
		break;
	case 'Petya':
		if ($pas ==$var['user2']['password'])
			echo "$log, вы успешно зашли в систему";
		else
			echo "$log, вы неверно указали пароль";
		break;
	default:
		echo "Среди зарегестрированных пользователей нет пользователя $log<br>";
}

	
?>

