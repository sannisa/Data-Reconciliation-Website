<?php
		
		include( 'koneksibiller.php');
		$id = $_GET['id'];
				
		$query = "SELECT * FROM biller where id='$id'";
		$hasil = mysqli_query( $koneksi,$query );
		
		$tbl_biller=mysqli_fetch_array($hasil);

		$id_biller = $tbl_biller['id_biller'];
		$nama = $tbl_biller['nama'];
		$alamat = $tbl_biller['alamat'];
		$cp = $tbl_biller['cp'];
		$rek = $tbl_biller['rek'];	
?>

<style type="text/css">

input[type=text],select,textarea{width:400px;margin:10px 0 10px 0;padding:10px;resize:none}
textarea{height:200px;}

</style>

<html>
<head>
<title>Form Input HTML</title>
</head>
<body>
<CENTER>
	<form Action ="module/ubah.php" method="POST">
	
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<table>
		<tr>
			<td>ID Biller :</td>
			<td><input type="text" name="id_biller" value="<?php echo $id_biller;?>" /> </td>
		</tr>
		<tr>
			<td>Nama Biller :</td>
			<td><input type="text" name='nama' value="<?php echo $nama;?>" /> </td>
		</tr>
		<tr>
			<td>Alamat Biller :</td>
			<td><textarea name="alamat" cole="55" rows="5"><?php echo $alamat;?>
			</textarea></td>
		</tr>
		<tr>
			<td>Contact Person :</td>
			<td><input type="text" name='cp' value="<?php echo $cp;?>" /> </td>
		</tr>
		<tr>
			<td>No Rekening :</td>
			<td><input type="text" name='rek' value="<?php echo $rek;?>" /> </td>
		</tr>
		<tr>
		<td colspan="2" align="center">
		<input type="submit" value="SUBMIT">
		<input type="reset" value="CANCEL"> </td>
		</tr>
	</table>
</form>
</CENTER>
</body>
</html>