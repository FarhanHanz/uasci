<?php echo anchor('produk/tampil','Tampil'); ?>
<?php echo form_open('produk/save') ?>
<table width="325" border="1">
	<tr>
		<td>Kode Produk</td>
		<td><input type="text" name="kode_produk" id="kode_produk"></td>
	</tr>
	<tr>
		<td>Nama Produk</td>
		<td><input type="text" name="nama_produk" id="nama_produk"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga" id="harga"></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td><input type="text" name="stok" id="stok"></td>
	</tr>
	<tr>
		<td><input type="submit" name="button" id="button" value="Simpan"></td>
		<td><input type="reset" name="button2" id="button2" value="Batal"></td>
	</tr>
</table>
<?php echo form_close() ?>