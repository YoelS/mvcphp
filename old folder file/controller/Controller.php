<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function panggilclass()
	{
		if (!isset($_GET['produk']))
		{
			// menampilkan semua select data dari model home
			$homes = $this->model->getDataList();
			include 'view/home.php';
		}
		else
		{
			// menampilkan permintaan select data khusus
			$produk = $this->model->getProduk($_GET['produk']);
			include 'view/viewproduk.php';
		}
	}
}

?>