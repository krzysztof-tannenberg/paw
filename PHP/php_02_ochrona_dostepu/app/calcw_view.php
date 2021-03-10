<?php
//Tu już nie ładujemy konfiguracji - sam widok nie będzie już punktem wejścia do aplikacji.
//Wszystkie żądania idą do kontrolera, a kontroler wywołuje skrypt widoku.
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Kalkulator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	
</head>
<body>
<div id="all">
<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form class="pure-form" action="<?php print(_APP_ROOT); ?>/app/calcw.php" method="post">
	<h1>Kalkulator</h1>
	</br>
	<table class="pure-table pure-table-horizontal">
	<tr>
	<td><label for="id_x">Kwota: </label></td>
	<td><input id="id_x" type="text" name="kwota" value="<?php out($kwota) ?>" /></td>
	</tr><tr>
	<td><label for="id_y">Na ile lat: </label></td>
	<td><input id="id_y" type="text" name="czas" value="<?php out($czas) ?>" /></td>
	</tr><tr>	
	<td><label for="id_op">Oprocentowanie: </label></td>
	<td><input id="id_op" type="text" name="oprocentowanie" value="<?php out($oprocentowanie) ?>" /></td>
	</tr><td>
	<td><button type="submit" value="Oblicz" class="pure-button pure-button-primary">Oblicz</button></td></td>
	</table>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
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

</div> <!--koniec div all-->

</body>
</html>