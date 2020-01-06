<?php echo anchor('produk/input','Tambah Baru'); ?>
<table border="1">
	<tr>
		<td>No</td>
		<td>Kode Produk</td>
		<td>Nama Produk</td>
		<td>Harga</td>
		<td>Stok</td>
		<td>Aksi</td>
	</tr>
	<?php foreach ($tampil as $key => $value) { ?>
	<tr>
		<td><?php echo $value->id ?></td>
		<td><?php echo $value->kode_produk ?></td>
		<td><?php echo $value->nama_produk ?></td>
		<td><?php echo $value->harga ?></td>
		<td><?php echo $value->stok ?></td>
		<td><?php echo anchor('produk/delete/'.$value->id,'Hapus'); ?></td>
	</tr>
	<?php } ?>
</table>