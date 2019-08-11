<?php 
class Laptop{
	var $Merk;
	var $Processor;
	var $Harga;
	var $Ram;

	public function setMerk($Merk = ''){
		$this ->Merk = $Merk;
	}

	public function setProcessor($Processor = ''){
		$this ->Processor = $Processor;
	}

	public function setharga($Harga= ''){
		$this ->Harga= $Harga;
	}

	public function setRam($Ram= ''){
		$this ->Ram= $Ram;
	}

	public function Cetak(){
		echo 'Merk : '. $this->Merk;
		echo "<br>";
		echo 'Processor : '. $this->Processor;
		echo "<br>";
		echo 'Harga : '. $this->Harga;
		echo "<br>";
		echo 'Ram : '. $this->Ram;
		echo "<br>";

	}
}
$Acere5 = new Laptop();
$Acere5 ->setMerk ('Acere5');
$Acere5 ->setProcessor ('intel core 15');
$Acere5 ->setHarga ('Rp 5.200.000');
$Acere5 ->setRam ('DDR3 4GB');
$Acere5 ->Cetak ();
echo "<br>";
$Lenovo = new Laptop();
$Lenovo ->setMerk ('Lenovo 100-15IBD');
$Lenovo ->setProcessor ('CPU Intel Quad-Core');
$Lenovo ->setHarga ('Rp 3.400.000');
$Lenovo ->setRam ('4GB');
$Lenovo ->Cetak ();
echo "<br>";
$Asus = new Laptop();
$Asus ->setMerk ('Asus A455LA');
$Asus ->setProcessor ('Core i3');
$Asus ->setHarga ('Rp 3.895.000');
$Asus ->setRam ('4GB');
$Asus ->Cetak ();
echo "<br>";
$Acer= new Laptop();
$Acer ->setMerk ('Acer Aspire one');
$Acer ->setProcessor ('Core i3');
$Acer ->setHarga('Rp 3.299.000');
$Acer ->setRam ('4GB');
$Acer ->Cetak ();
echo "<br>";
$HP= new Laptop();
$HP->setMerk ('HP 14-AM015TX');
$HP->setProcessor ('Core i5');
$HP->setHarga('Rp 6.990.000');
$HP->setRam ('4GB');
$HP->Cetak ();

?>