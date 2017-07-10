<?php 
/**
* 
*/
include_once 'Controller.php';
class BeritaManager extends Controller
{
	
	public function getDaftarKategori()
	{
		include_once 'model/Kategori.php';
		$kat  = new Kategori();
		$daftar_kategori = $kat->getDaftarKategori();
		return $daftar_kategori;
	}
	public function setBerita()
	{
		include_once 'model/Berita.php';
		$mberita = new Berita();
		$tanggal = date('Y-m-d');
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$id_kategori = $_POST['kategori'];
		$pesan = $mberita->setBerita($tanggal,$judul,$isi,$id_kategori);
		return $pesan;
	}

	public function getDataUntukPerubahan()
	{
		$id = $_GET['id'];
		include_once 'model/Berita.php';
		include_once 'model/Kategori.php';
		$mb = new Berita();
		$kat = new Kategori();
		$data['berita'] = $mb->ambilBeritaSpesifik($id);
		$data['kategori'] = $kat->getDaftarKategori();
		return $data;
	}
	public function ubahBerita()
	{
		
	}

}
 ?>