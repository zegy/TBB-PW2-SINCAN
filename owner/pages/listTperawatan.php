<h1>Daftar Transaksi Perawatan</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Nama Pelanggan</th>
			<th>Nama Perawatan</th>
			<th>Total</th>
			<th>Tanggal</th>
		</tr>
	</thead>
	<tbody>

 <?php
 $i=1;
  foreach ($isi_Tperawatan as $ib) { ?>
		<tr>
			<td><?= $i ?></td>
			<td><?= $ib['nama_pelanggan'] ?></td>
			<td><?= $ib['nama_perawatan'] ?></td>
			<td><?= $ib['total'] ?></td>
			<td><?= $ib['tgl'] ?></td>
		</tr>
		<?php
		$i++;
		 } ?>
	</tbody>
</table>
