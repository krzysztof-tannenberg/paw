<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
 <link rel="stylesheet" href="style.css">


</head>
<body>
<div id="all">
<form action="<?php print(_APP_URL);?>/app/calcw.php" method="post">
	
	<table>
	<tr>
	<td><label for="id_x">Kwota: </label></td>
	<td><input id="id_x" type="text" name="x" value="<?php if (isset($x)) print($x); ?>" /></td>
	</tr><tr>
	<td><label for="id_y">Na ile lat: </label></td>
	<td><input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>" /></td>
	</tr><tr>	
	<td><label for="id_op">Oprocentowanie: </label></td>
	<td><input id="id_op" type="text" name="op" value="<?php if (isset($op)) print($op); ?>" /></td>
	</tr>
	<td><input type="submit" value="Oblicz" /></td>
	</table>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: rgba(255,127,80, 0.7);; width:300px;">
<?php echo 'Miesięczna rata wynosi: '.$result.' pln'; ?>
</div>
<?php } ?>
</div>
</body>
</html>