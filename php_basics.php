<?php

for ($i=0; $i < 10; $i++) { 
    echo $i;
}
for ($a =0; $a <= 20 ; $a++){
    echo $a;
}



$vorname = "Eddy";
$nachname = "Rodrigues";

echo"Hallo ich bin". "\n" . $vorname . "\n" . $nachname . "\n" . "und freue mich hier zu sein";


for ($a = 1; $a <= 10; $a++){
    if ($a % 2== 0){
        echo $a. "\n". "ist eine gerade Zahl". "\n"; 
    }
}


$a = 5;

while ($a <= 15){
    if ($a % 2 != 0){
        echo $a. "\n". "ist eine ungerade Zahl". "\n";
    }
    $a++;
}


$alter = 18;

if ($alter <= 12){
    echo "mit". "\n". $alter ." bist du noch ein Kind ";
}elseif ($alter <= 18){
    echo "mit". "\n". $alter ." bist du ein Teenager ";
}else{
    echo "mit". "\n". $alter ." bist du ein Erwachsener ";
}



function quadriere($x){
    echo $x * $x;
}

quadriere(4);



class Lampe{
    public $status;
    public function zeigeStatus(){
        echo "Die Lampe ist "."\n". $this->status;

    }
}

$meineLampe = new Lampe;
$meineLampe->status = "an";
$meineLampe->zeigeStatus();


class Person{
    public $name;
    public function sagName(){
        echo"Mein Name ist"."\n" .$this->name;
    }
}

$meinePerson = new Person;
$meinePerson->name = "Eddy";
$meinePerson->sagName();


class Radio{
    public $lautstärke = 5 ;
    public function lautstellen(){
        $this->lautstärke++;
        echo "Lautstärke ist jetzt". "\n".$this->lautstärke;

    }
}

$meinRadio = new Radio;
$meinRadio->lautstellen();


class Rechteck{
    public $breite;
    public $höhe;

    public function berechneFlaeche(){
        echo $this->breite * $this->höhe;
    }
}

$meinRechteck = new rechteck;
$meinRechteck->breite = "4";
$meinRechteck->breite = "7";
$meinRechteck->berechneFlaeche();


class Fernseher{
    public $sender;
    public function zeigeSender(){
        echo $this->sender;
    }
}

$meinFernseher = new Fernseher;
$meinFernseher->sender = "zdf";
$meinFernseher->zeigeSender();


class Tier{
    public $art;
    public function zeigeArt(){
        echo "Das Tier ist ein: "."\n". $this->art;

    }
}
$meinTier = new Tier;
$meinTier->art = "Pferd";
$meinTier->zeigeArt();


class Uhr{
    public $zeit = "10 Uhr";
    public function zeigeZeit(){
        echo "Die aktuelle Uhrzeit ist :"."\n". $this->zeit;
    }
}

$meineUhr = new Uhr;
$meineUhr->zeigeZeit();


class Getraenk{
    public $name;
    public function trinken(){
        echo "Du trinkst gerade :"."\n". $this->name;
    }
}

$meinGetraenk = new Getraenk;
$meinGetraenk->name = "Cola";
$meinGetraenk->trinken();


class Buch{
    public $autor;
    public function zeigeAutor(){
        echo "Dieses Buch hat der Autor :"."\n". $this->autor. "\n"."Geschrieben";
    }
}


$meinBuch = new Buch;
$meinBuch->autor = "Edgar Rodrigues";
$meinBuch->zeigeAutor();


class Kamera{
    public $auflösung;
    public function zeigeAuflösung(){
        echo "Diese Kamera hat eine Auflösung von :"."\n". $this->auflösung;
    }
}

$meineKamera = new Kamera;
$meineKamera->auflösung = "128 Pixel";
$meineKamera->zeigeAuflösung();

class Spiel{
    public $titel;
    public function starteSpiel(){
        echo"Es wird das Spiel"."\n". $this->titel ."\n". "Gestartet !" ;
    }
}

$meinSpiel = new Spiel;
$meinSpiel->titel = "Apex legends";
$meinSpiel->starteSpiel();


class Musik{
    public $genre;
    public function spieleMusik(){
        echo "Du hörst gerade: ". $this->genre;
    }
}

$meineMusik = new Musik;
$meineMusik->genre = "POP";
$meineMusik->spieleMusik();

class Film{
    public $titel;
    public function zeigeFilm(){
        echo "Der Film heißt: "."\n".$this->titel;
    }
}

$meinFilm = new Film;
$meinFilm->titel = "The Matrix";
$meinFilm->zeigeFilm();


class Spieler{
    public $name;
    public function begrüße(){
        echo "Wilkommen Spieler :"."\n". $this->name. "\n"."viel spaß beim Spielen";
    }
}

$meinSpieler = new Spieler;
$meinSpieler->name = "Ganicus841";
$meinSpieler->begrüße();