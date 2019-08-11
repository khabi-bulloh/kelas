<?php	
class tv{
	var $merk;
	var $harga;
	var $ukuran;

	public function setMerk($Merk= ""){
		$this ->Merk = $Merk;
	}

	public function setHarga($Harga= ""){
		$this ->Harga = $Harga;
	}

	public function setUkuran($Ukuran= ""){
		$this ->Ukuran = $Ukuran;
	}

	public function cetak (){
		echo 'Merk : '.$this->Merk;
		echo "<br>";
		echo 'Harga : '.$this->Harga;
		echo "<br>";
		echo 'Ukuran : '.$this->Ukuran;
		echo "<br>";
		echo "<br>";
	}

}

$tv = new tv();
$tv->setMerk('Samsung LED Curved TV ');
$tv->setHarga('Rp.6.400.000,00 ');
$tv->setUkuran('49 inci ');
$tv->cetak();
echo "<br>";
$tv = new tv();
$tv->setMerk('Sony LED TV ');
$tv->setHarga('Rp.2.400.000,00 ');
$tv->setUkuran('32 inci ');
$tv->cetak();
echo "<br>";
$tv = new tv();
$tv->setMerk('Sony LED TV 48W650D ');
$tv->setHarga('Rp.5.280.000,00 ');
$tv->setUkuran('48 inci ');
$tv->cetak();
echo "<br>";
$tv = new tv();
$tv->setMerk('LG LED Smart TV ');
$tv->setHarga('Rp.8.236.000,00 ');
$tv->setUkuran('55 inci ');
$tv->cetak();
echo "<br>";
$tv = new tv();
$tv->setMerk('Panasonic LED TV ');
$tv->setHarga('Rp.1.678.400,00 ');
$tv->setUkuran('32 inci ');
$tv->cetak();

?>