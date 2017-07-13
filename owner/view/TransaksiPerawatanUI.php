<?php 
require_once 'View.php';
/**
* 
*/
class TransaksiPerawatanUI extends View
{
	
	public function getAllDataTransaksiPerawatan()
	{
		 include_once 'model/Tperawatan.php';
		 $brt = new Tperawatan();
		 $isi_Tperawatan = $brt->ambilTperawatan();
		 include_once 'pages/listTperawatan.php';
		 $this->end();
	}
		
}
 ?>