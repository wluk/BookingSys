<?php
require_once getConf()->root_path.'/app/person/list/PersonSearchForm.class.php';

class PersonListCtrl {

	private $form; //dane formularza wyszukiwania
	private $records; //rekordy pobrane z bazy danych

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new PersonSearchForm();
	}
	
	public function getParams(){
		// z formularza wyszukiwania:
		$this->form->surname = getFromRequest('sf_surname');
	}
	
	public function validate() {
		// 1. sprawdzenie, czy parametry zostały przekazane
		// - nie trzeba sprawdzać
		
		// 2. sprawdzenie poprawności przekazanych parametrów
		// - nie trzeba sprawdzać
		
		return ! getMessages()->isError();
	}
	
	public function process(){

		// 1. pobierz parametry formularza (folmularz wyszukiwania osób)
		$this->getparams();
			
		// 2. Walidacja danych formularza 
		// - W tej aplikacji walidacja nie jest potrzebna, ponieważ nie wystąpią błedy podczas podawania nazwiska.
		//   Jednak pozostawiono ją, ponieważ gdyby uzytkownik wprowadzał np. datę, lub wartość numeryczną, to trzeba
		//   odpowiednio zareagować wyświetlając odpowiednią informację (poprzez obiekt wiadomości Messages)
		$this->validate();
		
		// 3. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
		$search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
		if ( isset($this->form->surname) && strlen($this->form->surname) > 0) {
			$search_params['surname[~]'] = $this->form->surname.'%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
		}
		
		// 4. Pobranie listy rekordów z bazy danych
		// W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
		// Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
		
		//przygotowanie frazy where na wypadek większej liczby parametrów
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		//dodanie frazy sortującej po nazwisku
		$where ["ORDER"] = "surname";
		//wykonanie zapytania
		$this->records = getDB()->select("person", [
				"idperson",
				"name",
				"surname",
				"birthdate",
			], $where );

		// 5. Wygenerowanie widoku
		$this->generateView();
	}
	
	public function generateView(){
		getSmarty()->assign('searchForm',$this->form);    // dane formularza (wyszukiwania w tym wypadku)
		getSmarty()->assign('people',$this->records); // lista rekordów z bazy danych
		
		getSmarty()->display(getConf()->root_path.'/app/person/list/PersonList.html');
	}
}
