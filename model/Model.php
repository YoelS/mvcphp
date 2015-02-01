<?php

include_once("model/Home.php");

class Model {
	public function getDataList()
	{
		// beberapa nilai untuk mensimulasikan database
		return array(
			"Produk 1" => new Home("Produk 1", "Kamera", "Kamera Canon DSLR"),
			"Produk 2" => new Home("Produk 2", "Laptop", "Lapto Toshibah"),
			"Produk 3" => new Home("Produk 3", "Jam Tangan", "Jam Tangan Smartwatch")
		);
	}
	
	public function getProduk($title)
	{
		// menggunakan fungsi sebelumnya untuk mendapatkan semua produk dan kemudian ambil satu yang diminta.
		// melalui db select perintah
		$allProduks = $this->getDataList();
		return $allProduks[$title];
	}
	
	
}

?>