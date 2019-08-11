<?php
class handphone{

	var $Merk;
	var $Ram;
	var $Harga;
	var $Layar;

	public function setMerk ($Merk=''){
		$this ->Merk = $Merk;
	}

	public function setRam ($Ram=''){
		$this ->Ram = $Ram;
	}

	public function setHarga ($Harga=''){
		$this ->Harga = $Harga;
	}

	public function setLayar ($Layar=''){
		$this ->Layar = $Layar;
	}

	public function cetak(){
		echo ' Merk : '.$this ->Merk;
		echo "<br>";
		echo ' Ram : '.$this ->Ram;
		echo "<br>";
		echo ' Harga : '.$this ->Harga;
		echo "<br>";
		echo ' Layar : '.$this ->Layar;
		echo "<br>";
		echo "<br>";

	}
}

$handphone = new handphone();
$handphone ->setMerk('Xiomi S2');
$handphone ->setRam('3GB');
$handphone ->setHarga('Rp2.500.000');
$handphone ->setlayar('6 inci');
$handphone ->cetak();
echo "<br>";	
$handphone = new handphone();
$handphone ->setMerk('Oppo A3S');
$handphone ->setRam('3GB');
$handphone ->setHarga('Rp2.500.000');
$handphone ->setlayar('6,2 inci');
$handphone ->cetak();
echo "<br>";	
$handphone = new handphone();
$handphone ->setMerk('Vivo Z1 Pro');
$handphone ->setRam('6GB');
$handphone ->setHarga('Rp4.100.000');
$handphone ->setLayar('6,3 inci');
$handphone ->cetak();
echo "<br>";	
$handphone = new handphone();
$handphone ->setMerk('Samsung A10');
$handphone ->setRam('3GB');
$handphone ->setHarga('Rp3.000.000');
$handphone ->setLayar('6,3 inci');
$handphone ->cetak();
echo "<br>";	
$handphone = new handphone();
$handphone ->setMerk('Asus ROG Phone 2');
$handphone ->setRam('8GB');
$handphone ->setHarga('Rp7.000.000');
$handphone ->setLayar('6 inci');
$handphone ->cetak();	

?>