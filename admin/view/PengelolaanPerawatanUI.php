<?php 
require_once 'View.php';
/**
* 
*/
class PengelolaanPerawatanUI extends View
{
	
	public function getAllDataPerawatan()
	{
		 include_once 'model/Perawatan.php';
		 $brt = new Perawatan();
		 $isi_perawatan = $brt->ambilPerawatan();
		 include_once 'pages/listperawatan.php';
		 $this->end();
	}
	
	public function tampilFormPerawatan()
	{
		include_once 'controller/PerawatanControl.php';
		$bm = new PerawatanControl();
		//$daftar_kategori = $bm->getDaftarKategori();
		include_once 'pages/formperawatan.php';
		$this->end();
	}

	
	public function inputPerawatan()
	{
		include_once 'controller/PerawatanControl.php';
		$bm = new PerawatanControl();
		$pesan = $bm->setPerawatan();
		include_once 'pages/pesansukses.php';
		$this->end();
	}
	
	
	public function tampilFormEdit()
	{
		include_once 'controller/PerawatanControl.php';
		$bm= new PerawatanControl();
		$data = $bm->getDataUntukPerubahan();


		$data_perawatan= $data['perawatan'];
		
		include_once 'pages/formeditperawatan.php';
		$this->end();
	}

	public function aksiUbahPerawatan()
	{
		include_once 'controller/PerawatanControl.php';
		$bm= new PerawatanControl();
		$bm->ubahPerawatan();
		include_once 'pages/pesansukses.php';
		$this->end();
	}
	
}
 ?>