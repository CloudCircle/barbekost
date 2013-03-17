<html>
<title>
</title>
<body>
<?php
	require ("koneksi/con_utama.php");
	$link = open ();
	
	$sql = "select * from identitas";
	$hasil =mysql_query($sql);
?>
	
	<table border="1" cellspacing ="0" cellpadding="2">
		<caption>Data</caption>
		<tr>
			<td>Id</td>
			<td>Nama</td>
			<td>Alamat</td>
		</tr>
	
	
	<?php
		while ($baris=mysql_fetch_row($hasil)){
		//$nomor++;
		
		$id=$baris[0];
		$nama=$baris[1];
		$alamat=$baris[2];
	?>
	<tr>
		<td><?php print"$id" ?></td>
		<td><?php print"$nama" ?></td>
		<td><?php print"$alamat" ?></td>
	</tr>
	<?php			
		}
		
	?>
	</table>
</body>
</html>