<?php

ini_set('display_errors',1);
error_reporting(E_ALL);
//------------------------------------1------------------
/*$x = 0;

while ($x<100){
	if ($x%3==0)
		echo $x.'<br>';
	$x++;
}*/
//------------------------------------2-----------------------
/*$x =0;
do {
	if ($x ==0)
		echo "$x - это ноль <br>";
	elseif ($x%2==0)
		echo "$x - четное число <br>";
	else 
		echo "$x - нечетное число<br>";
	$x++;	
}
while ($x<10);
*/
//-----------------------------------3-----------------------
/*for ($x=0;$x<10;$i.=$x++){	
};
echo $i;
*/
/*for ($x=0;$x<10;print $x++){
	};
*/
	
//-------------------------------------4,5---------------------------
/*$var = array('Московская область' => array('Москва','Зеленоград','Клин'),
			'Ленинградская область' =>array('Санкт-Петербург', 'Всеволожск','Павловск','Кронштадт'),
			'Рязанская область'=> array('Рязань'));


foreach ($var as $key => $value){
	echo '<br>'.$key.':';
	foreach ($value as $vvalue){
		$a = mb_substr($vvalue,0,1);
		if ($a=='К')
			echo $vvalue;
	}
}
*/
//var_dump($var);	

//----------------------------------------------------easy---------------------
$catalog = array();
$catalog['sb']= array();
$catalog['sk']= array();

$catalog['sb']['cat']= array();
$catalog['sk']['cat']= array();

$catalog['sb']['cat']['snowboards']= array();
$catalog['sb']['cat']['clothes']= array();
$catalog['sb']['cat']['accessorise']= array();

$catalog['sk']['cat']['skiis']= array();
$catalog['sk']['cat']['clothes']= array();
$catalog['sk']['cat']['accessorise']= array();

$catalog['sb']['cat']['snowboards']['art']= array();
$catalog['sb']['cat']['clothes']['art']= array();
$catalog['sb']['cat']['accessorise']['art']= array();

$catalog['sk']['cat']['skiis']['art']= array();
$catalog['sk']['cat']['clothes']['art']= array();
$catalog['sk']['cat']['accessorise']['art']= array();

$catalog['sb']['cat']['snowboards']['art']['name']= 'name1';
$catalog['sb']['cat']['snowboards']['art']['photo']= 'photo1';
$catalog['sb']['cat']['snowboards']['art']['price']= 'price1';

$catalog['sb']['cat']['clothes']['art']['name']= 'name1';
$catalog['sb']['cat']['clothes']['art']['photo']= 'photo1';
$catalog['sb']['cat']['clothes']['art']['price']= 'price1';

$catalog['sb']['cat']['accessorise']['art']['name']= 'name1';
$catalog['sb']['cat']['accessorise']['art']['photo']= 'photo1';
$catalog['sb']['cat']['accessorise']['art']['price']= 'price1';


$catalog['sk']['cat']['skiis']['art']['name']= 'name1';
$catalog['sk']['cat']['skiis']['art']['photo']= 'photo1';
$catalog['sk']['cat']['skiis']['art']['price']= 'price1';

$catalog['sk']['cat']['clothes']['art']['name']= 'name1';
$catalog['sk']['cat']['clothes']['art']['photo']= 'photo1';
$catalog['sk']['cat']['clothes']['art']['price']= 'price1';

$catalog['sk']['cat']['accessorise']['art']['name']= 'name1';
$catalog['sk']['cat']['accessorise']['art']['photo']= 'photo1';
$catalog['sk']['cat']['accessorise']['art']['price']= 'price1';

//---------------------------------------------------medium-----------------------

$catalog['sb']['cat'][]=array('bbb');
var_dump($catalog);

//array_push($catalog,'')

//$catalogs = array();

/*	$catalog = array();
	$catalog['sb']= array();
	$catalog['sb']['cat']= array();
	$catalog['sb']['cat']['snowboards']= array();
	$catalog['sb']['cat']['snowboards']['art']= array();*/
	//$catalog['sb']['cat']['snowboards']['art']['name'][]= array('name12');
	//$catalog['sb']['cat']['snowboards']['art']['photo'][]= 'photo12';
	//$catalog['sb']['cat']['snowboards']['art']['price'][]= 'price12';
	
//	$catalogs[] = $catalog;



function add($cat,$name,$photo,$price){
	
}
?>