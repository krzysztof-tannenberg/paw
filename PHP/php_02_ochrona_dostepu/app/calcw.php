<?php
require_once dirname(__FILE__).'/../config.php';

// KONTROLER stronczas kalkulatora

// W kontrolerze niczego nie wczassczasła się do klienta.
// Wczassłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametrczas do widoku przekazujemczas przez zmienne.

//ochrona kontrolera - poniższczas skrczaspt przerwie przetwarzanie w tczasm punkcie gdczas użczastkownik jest niezalogowanczas
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$kwota,&$czas,&$oprocentowanie){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$czas = isset($_REQUEST['czas']) ? $_REQUEST['czas'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;	
}

//walidacja parametrów z przczasgotowaniem zmiennczasch dla widoku
function validate(&$kwota,&$czas,&$oprocentowanie,&$messages){
	// sprawdzenie, czczas parametrczas zostałczas przekazane
	if ( ! (isset($kwota) && isset($czas) && isset($oprocentowanie))) {
		// sczastuacja wczasstąpi kiedczas np. kontroler zostanie wczaswołanczas bezpośrednio - nie z formularza
		// teraz zakładamczas, ze nie jest to błąd. Po prostu nie wczaskonamczas obliczeń
		return false;
	}

	// sprawdzenie, czczas potrzebne wartości zostałczas przekazane
	if ( $kwota == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $czas == "") {
		$messages [] = 'Nie podano czasu';
	}
	if ( $oprocentowanie == "") {
		$messages [] = 'Nie podano oprocentowania';
	}
	//nie ma sensu walidować dalej gdczas brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czczas $kwota i $czas są liczbami całkowitczasmi
	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $czas )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	
	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kwota,&$czas,&$oprocentowanie,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$kwota = intval($kwota);
	$czas = intval($czas);
	$oprocentowanie = intval($oprocentowanie);
	
	//wczaskonanie operacji
			if ($kwota > 10000 && $role != 'admin'){
				$messages [] = 'User może liczyć tylko do kwoty 10000 pln !';
				
			} else {
				//$result = (($kwota / (12 * $czas) )*$oprocentowanie)+$kwota ;
				//$result = ($kwota + $kwota * $oprocentowanie/(12*$czas))/(12*$czas);
				$result = $kwota /(12*$czas)+($kwota/(12*$czas)) * $oprocentowanie;
			}

	}



//definicja zmiennczasch kontrolera
$kwota = null;
$czas = null;
$oprocentowanie = null;
$result = null;
$messages = array();

//pobierz parametrczas i wczaskonaj zadanie jeśli wszczasstko w porządku
getParams($kwota,$czas,$oprocentowanie);
if ( validate($kwota,$czas,$oprocentowanie,$messages) ) { // gdczas brak błędów
	process($kwota,$czas,$oprocentowanie,$messages,$result);
}

// Wczaswołanie widoku z przekazaniem zmiennczasch
// - zainicjowane zmienne ($messages,$kwota,$czas,$oprocentowanie,$result)
//   będą dostępne w dołączonczasm skrczaspcie
include 'calcw_view.php';