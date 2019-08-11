<?php	
class magicom{
	var $merk;
	var $harga;
	var $kapasitas;

	public function setMerk($Merk= ""){
		$this ->Merk = $Merk;
	}

	public function setHarga($Harga= ""){
		$this ->Harga = $Harga;
	}

	public function setkapasitas($kapasitas= ""){
		$this ->kapasitas = $kapasitas;
	}

	public function cetak (){
		echo 'Merk : '.$this->Merk;
		echo "<br>";
		echo 'Harga : '.$this->Harga;
		echo "<br>";
		echo 'kapasitas : '.$this->kapasitas;
		echo "<br>";
		echo "<br>";
	}

}

$magicom = new magicom();
$magicom->setMerk('thoshiba hagama pot');
$magicom->setHarga('Rp.1.000.000,00 ');
$magicom->setkapasitas('1 sd 1.5 liter ');
$magicom->cetak();
echo "<br>";
$magicom = new magicom();
$magicom->setMerk('digital thoshiba ');
$magicom->setHarga('Rp.1.600.000,00');
$magicom->setkapasitas('1 sd 1.8 liter');
$magicom->cetak();
echo "<br>";
$magicom = new magicom();
$magicom->setMerk('miyako MCM-508 ');
$magicom->setHarga('Rp.2.000.000,00 ');
$magicom->setkapasitas('1.8 liter');
$magicom->cetak();
echo "<br>";
$magicom = new magicom();
$magicom->setMerk('miyako MCM-18BHB');
$magicom->setHarga('Rp.1.700.000,00 ');
$magicom->setkapasitas('55 inci ');
$magicom->cetak();
echo "<br>";
$magicom = new magicom();
$magicom->setMerk('super cook bolde');
$magicom->setHarga('Rp.1.678.400,00 ');
$magicom->setkapasitas('1liter ');
$magicom->cetak();

?>