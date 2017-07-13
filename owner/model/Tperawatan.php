<?php 
/**
* lokasi ada di web2/administrator/model/Berita.php
*/
include_once 'Model.php';
class Tperawatan extends Model
{
	public $tgl;
	public $nama;
	public $total;

	public function ambilTperawatan()
	{
		$query = $this->db->prepare("SELECT * FROM transaksi_perawatan");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}
	
	



	public function setPerawatan($nama,$harga)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO perawatan(nama,harga) VALUES(:nama, :harga)");
		   $stmt->bindparam(":nama",$nama);
		   $stmt->bindparam(":harga",$harga);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}

	
	public function ambilPerawatanSpesifik($id)
	{
		try {
			$stmt = $this->db->prepare("SELECT * FROM perawatan WHERE id_perawatan=:id");
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			$data = $stmt->fetch();

			return $data;
			}
			catch(PDOException $e) {
				echo $e->getMessage(); 
				return false;
			}
	}

	public function ubahPerawatan($id_perawatan,$nama,$harga)
	{
		
		
		try {
			$stmt = $this->db->prepare("UPDATE perawatan SET nama=:nama, harga=:harga WHERE id_perawatan=:id_perawatan");
			$stmt->bindparam(":id_perawatan",$id_perawatan);
			$stmt->bindparam(":nama",$nama);
			$stmt->bindparam(":harga",$harga);
			
			$stmt->execute();

			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 

		}

	}
	
}
 ?>