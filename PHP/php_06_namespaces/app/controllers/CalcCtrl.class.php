<?php

namespace app\controllers;


use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {

	private $form; 
	private $result;

	/** 
	 * Konstruktor
	 */
	public function __construct(){
		
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->czas = getFromRequest('czas');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie');
	}

	/* 
	  Walidacja parametrów
	 */
	public function validate() {
		
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->czas ) && isset ( $this->form->oprocentowanie ))) {
			
			return false; 
		}
		
		
		if ($this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->czas == "") {
			getMessages()->addError('Nie podano czasu');
		}
		if ($this->form->oprocentowanie == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		
		if (! getMessages()->isError()) {
			
			
			if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->czas )) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->oprocentowanie )) {
				getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	/* 
	  Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			
			$this->form->kwota = intval($this->form->kwota);
			$this->form->czas = intval($this->form->czas);
			$this->form->oprocentowanie = intval($this->form->oprocentowanie);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
		if ($this->form->kwota < 1 ){
		getMessages()->addError('Nie możesz liczyć dla kwot mniejszych od 1pln !');
				
			} else {
				$this->result->result = $this->form->kwota / (12*$this->form->czas)+($this->form->kwota/(12*$this->form->czas))*$this->form->oprocentowanie;
				
				getMessages()->addInfo('Wykonano obliczenia.');
			}		
			
		}
		
		$this->generateView();
	}
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){

		getSmarty()->assign('page_title','Przykład 06b');
		getSmarty()->assign('page_description','Kolejne rozszerzenia dla aplikacja z jednym "punktem wejścia". Do nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw.');
		getSmarty()->assign('page_header','Kontroler główny');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl'); 
	}
}
