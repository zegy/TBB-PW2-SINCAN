<div class="row">
	<h1>Menambahkan Perawatan</h1>
	<hr>
	<div class="col-md-6 col-sm-6">
		<form class="form-horizontal" action="aksi_tambahperawatan.php" method="POST">
		  <div class="form-group">
		    <label for="nama" class="col-sm-2 control-label">Nama</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="nama" placeholder="Masukkan nama perawatan" name="nama">
		    </div>
		  </div>

		   <div class="form-group">
		    <label for="harga" class="col-sm-2 control-label">Harga</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="harga" placeholder="Masukkan harga perawatan" name="harga">
		    </div>
		  </div>
		  
		  		  
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">Tambahkan</button>
		    </div>
		  </div>
		</form>
	</div>
</div>