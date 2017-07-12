<?php 
/**
* 
*/
include_once 'Controller.php';
class PerawatanControl extends Controller
{
	
	public function setPerawatan()
	{
		include_once 'model/Perawatan.php';
		$mperawatan = new Perawatan();

		
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		
		$pesan = $mperawatan->setPerawatan($nama,$harga);
		return $pesan;
	}
	
	
	public function getDataUntukPerubahan()
	{
		$id= $_GET['id'];
		include_once 'model/Perawatan.php';
		
		$mb= new Perawatan();
		
		$data['perawatan']=$mb->ambilPerawatanSpesifik($id);
		

		return $data;
	}

	public function ubahPerawatan()
	{

		include_once 'model/Perawatan.php';
		$mb= new Perawatan();
		$id_perawatan = $_GET['id'];
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		
		$mb->ubahPerawatan($id_perawatan,$nama,$harga);
		
		return true;
	}
	
}

 ?>