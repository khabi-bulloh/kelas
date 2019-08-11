<?php 
class AC{
	var $Merk;
	var $Jenis;
	var $Harga;
	var $Daya;

	public function setMerk($Merk = ''){
		$this ->Merk = $Merk;
	}

	public function setJenis($Jenis = ''){
		$this ->Jenis = $Jenis;
	}

	public function setharga($Harga= ''){
		$this ->Harga= $Harga;
	}

	public function setDaya($Daya= ''){
		$this ->Daya= $Daya;
	}

	public function Cetak(){
		echo 'Merk : '. $this->Merk;
		echo "<br>";
		echo 'Jenis : '. $this->Jenis;
		echo "<br>";
		echo 'Harga : '. $this->Harga;
		echo "<br>";
		echo 'Daya : '. $this->Daya;
		echo "<br>";

	}
}
$Panasonic = new AC();
$Panasonic ->setMerk ('Panasonic AC Split Eco Tough');
$Panasonic ->setJenis ('Split wall');
$Panasonic ->setHarga ('Rp 3.200.000');
$Panasonic ->setDaya ('920 Watt');
$Panasonic ->Cetak ();
echo "<br>";
$Sharp = new AC();
$Sharp ->setMerk ('Sharp AH-AP7RHL');
$Sharp ->setJenis ('Window');
$Sharp ->setHarga ('Rp 3.400.000');
$Sharp ->setDaya ('1170 Watt');
$Sharp ->Cetak ();
echo "<br>";
$LG = new AC();
$LG ->setMerk ('LG T08EMV');
$LG ->setJenis ('Standing florr');
$LG ->setHarga ('Rp 2.895.000');
$LG ->setDaya ('1920 Watt');
$LG ->Cetak ();
echo "<br>";
$Samsung = new AC();
$Samsung ->setMerk ('Samsung AC AR07HCSDUWK');
$Samsung ->setJenis ('Inverter');
$Samsung ->setHarga('Rp 3.299.000');
$Samsung ->setDaya ('1920 Watt');
$Samsung ->Cetak ();
echo "<br>";
$Polytron = new AC();
$Polytron ->setMerk ('Polytron PAC 09LE');
$Polytron ->setJenis ('Split duct');
$Polytron ->setHarga('Rp 2.990.000');
$Polytron ->setDaya ('1170 Watt');
$Polytron ->Cetak ();

?>