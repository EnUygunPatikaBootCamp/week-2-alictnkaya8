<?php

class Tasit {

    protected $marka;
    protected $model;

}

class Araba extends Tasit {

    protected $plakaNo;
    protected $tekerlekSayisi;

    public function __construct($plakaNo, $marka, $model, $tekerlekSayisi)
    {
        $this->plakaNo = $plakaNo;
        $this->marka = $marka;
        $this->model = $model;
        $this->tekerlekSayisi = $tekerlekSayisi;
    }

    public function showInfo(){
        echo "Araba taşıtına ait öznitelikler şu şekildedir:" . "<br>";
        echo "<ul>";
        echo"<li> Plaka No: {$this->plakaNo} </li>";
        echo"<li> Marka:  {$this->marka} </li>";
        echo"<li> Model: {$this->model} </li>";
        echo"<li> Tekerlek Sayısı: {$this->tekerlekSayisi} </li>";
        echo "</ul>";
    }

}

class Motorsiklet extends Araba {

    public function showInfo(){
        echo "Motorsiklet taşıtına ait öznitelikler şu şekildedir:" . "<br>";
        echo "<ul>";
        echo"<li> Plaka No: {$this->plakaNo} </li>";
        echo"<li> Marka:  {$this->marka} </li>";
        echo"<li> Model: {$this->model} </li>";
        echo"<li> Tekerlek Sayısı: {$this->tekerlekSayisi} </li>";
        echo "</ul>";
    }

}

class Ucak extends Tasit {

    protected $kanatAcikligi;

    public function __construct($marka, $model, $kanatAcikligi)
    {
        $this->marka = $marka;
        $this->model = $model;
        $this->kanatAcikligi = $kanatAcikligi;
    }

    public function showInfo(){
        echo "Uçak taşıtına ait öznitelikler şu şekildedir:" . "<br>";
        echo "<ul>";
        echo"<li> Marka:  {$this->marka} </li>";
        echo"<li> Model: {$this->model} </li>";
        echo"<li> Kanat Açıklığı: {$this->kanatAcikligi}m </li>";
        echo "</ul>";
    }
}

$araba = new Araba("06 ARAC 06", "Mercedes", "C180", 4);
$araba->showInfo();
$motor = new Motorsiklet("06 MOTOR 06", "Honda", "Forza 750", 2);
$motor->showInfo();
$ucak = new Ucak("Airbus", "A380", 80);
$ucak->showInfo();

?>
