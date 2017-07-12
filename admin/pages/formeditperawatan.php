<h1>Edit Perawatan</h1>

<form action="aksi_ubah_perawatan.php?id=<?php echo $data_perawatan['id_perawatan']?>" method = "POST">
<label for = "nama">Nama</label><br>
<input type="text" name="nama" value="<?php echo $data_perawatan['nama']?>" /><br>

<label for ="harga">Harga</label><br>
<input type="text" name="harga" value="<?php echo $data_perawatan['harga']?>" /><br>



<input type="submit" name="submit" value="submit">
</form>