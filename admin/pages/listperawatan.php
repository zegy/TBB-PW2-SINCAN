<h1>Daftar Perawatan</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Nama Perawatan</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

 <?php
 $i=1;
  foreach ($isi_perawatan as $ib) { ?>
		<tr>
			<td><?= $i ?></td>
			<td><?= $ib['nama'] ?></td>
			<td><?= substr($ib['harga'],0,100)?></td>
			<td><a href="ubah_perawatan.php?id=<?php echo $ib['id_perawatan']?>">Ubah</a></td>
		</tr>
		<?php
		$i++;
		 } ?>
	</tbody>
</table>
