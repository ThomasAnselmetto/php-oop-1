<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create
un file index.php in cui:
- è definita una classe 'Movie'
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all'organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio
organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo
chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. (modificato) -->

<?php

class Movie {
  public $name;
  public $director;
  public $genre;
  public $year;
  public $minutes_lenght;

  public function __construct(string $_name, string $_director,string $_genre,int $_year,int $_minutes_lenght){

    $this->name = $_name;
    $this->director = $_director;
    $this->genre = $_genre;
    $this->setHistoric($_year);
    $this->minutes_lenght = $_minutes_lenght;

  }
    public function setHistoric($year){
      if($year >= 1993)
      return false;
      
    }
    public function gethistoric(){
      return $this->year;
  }

}
// istanzio
// posso istanziare piu film con la stessa class

$movie1 = new Movie("Gone with the Wind","Victor Fleming","OOOOOOOO",1939,238);
$movie2 = new Movie("Jurassic Park","Steven Spielberg","OOOOOOOO",1993,127);
$movie3 = new Movie("The Deer Hunter","Michael Cimino","OOOOOOOO",1978,182);
$movie4 = new Movie("A Clockwork Orange","Stanley Kubrick","OOOOOOOO",1971,136);
$movie5 = new Movie("Rain Man","Barry Levinson","OOOOOOOO",1988,133);
$movie6 = new Movie("Born on the Fourth of July","Oliver Stone","OOOOOOOO",1989,144);
$movie7 = new Movie("Pulp Fiction","Quentin Tarantino","OOOOOOOO",1994,154);



echo var_dump($movie2);






// $movie2 = new Movie();
// $movie3 = new Movie();
// $movie4 = new Movie();


// var_dump(get_class($movie));
// var_dump($movie instanceof Movie);





?>