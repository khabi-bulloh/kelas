<?php
class radio{

	var $merk;
	var $oscilator;
	var $harga;
	var $detector;

	public function setmerk ($merk=''){
		$this ->merk = $merk;
	}

	public function setoscilator ($oscilatoor=''){
		$this ->oscilatoor = $oscilatoor;
	}

	public function setharga ($harga=''){
		$this ->harga = $harga;
	}

	public function setdetector ($detector=''){
		$this ->detector = $detector;
	}

	public function cetak(){
		echo ' merk : '.$this ->merk;
		echo ' oscilator : '.$this ->oscilator;
		echo ' harga : '.$this ->harga;
		echo ' detector : '.$this ->detector;
	}
}

$radio = new radio();
$radio ->setmerk('toshiba');
$radio ->setoscilator('amstrong');
$radio ->setharga('1350000');
$radio ->setdetector('ror');
$radio ->cetak();
echo "<br>";	
$radio = new radio();
$radio ->setmerk('rolton');
$radio ->setoscilator('clap');
$radio ->setharga('1200000');
$radio ->setdetector('fixed');
$radio ->cetak();
echo "<br>";	
$radio = new radio();
$radio ->setmerk('sony');
$radio ->setoscilator('colpits');
$radio ->setharga('900000');
$radio ->setdetector('smoke');
$radio ->cetak();
echo "<br>";	
$radio = new radio();
$radio ->setmerk('solarcrank');
$radio ->setoscilator('hartley');
$radio ->setharga('850000');
$radio ->setdetector('flame');
$radio ->cetak();
echo "<br>";	
$radio = new radio();
$radio ->setmerk('hirice');
$radio ->setoscilator('pierce');
$radio ->setharga('700000');
$radio ->setdetector('gas');
$radio ->cetak();	

?>