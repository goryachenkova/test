<?php

if(isset($_POST['a'])&& isset($_POST['b']) && isset($_POST['c'])){
	if (($_POST['a']=="")||($_POST['b']==""))
		echo '��������� ��� ���� �������';
	else 
		if (is_numeric($_POST['a'])&& is_numeric($_POST['b']))
			switch ($_POST['c']){
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
					else echo "������ �� 0 ������";
					break;		
			}
		else {
			$result = "";
			echo "������� �����, � �� �����";
			}
}
?>

<html>
	<head>
		<title> ������� ���������� </title>
	</head>
	<body>
		<form method = "post">
		<input type = "text" name = "a"/>
		<select name = "c" required>
			<option></option>
			<option value = "+"> + </option>
			<option value = "-"> - </option>
			<option value = "*"> * </option>
			<option value = "/"> / </option>
		</select>
		<input type = "text" name = "b"/>
		<input type = "submit" value = "=" />
		<?php echo $result;?>
		</form>
	</body>
</html>	
	