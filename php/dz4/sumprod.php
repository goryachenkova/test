<?php

if(isset($_POST['a'])&& isset($_POST['b'])&& isset($_POST['bt'])){
	if (($_POST['a']=="")||($_POST['b']==""))
		echo '��������� ��� ���� �������';
	else {
		if (is_numeric($_POST['a'])&& is_numeric($_POST['b']))
			switch ($_POST['bt']){
				case '+':
					$result = $_POST['a'] + $_POST['b'];
					break;
				case '-':
					$result = $_POST['a'] - $_POST['b'];
					break;
				case '*':
					$result = $_POST['a'] * $_POST['b'];
					break;
				case '/':
					if ($_POST['b']<>0)
						$result = $_POST['a'] / $_POST['b'];
					else 
						echo "������ �� 0 ������";
					break;		
			}
		else {
			$result = "";
			echo '������� �����, � �� �����';
		}
	}	
}

?>

<html>
	<head>
		<title> ������� ���������� </title>
	</head>
	<body>
		<form method = "post">
		<input type = "text" name = "a" value = "<?=$_POST['a'];?>"/>
		<input type = "text" name = "b" value = "<?=$_POST['b'];?>"/>
		<?php echo "= $result";?>
		<br>
			<input type = "submit" name = "bt" value = "+"/>
			<input type = "submit" name = "bt" value = "-"/>
			<input type = "submit" name = "bt" value = "*"/>
			<input type = "submit" name = "bt" value = "/"/>
		</br>
		
		</form>
	</body>
</html>	
	