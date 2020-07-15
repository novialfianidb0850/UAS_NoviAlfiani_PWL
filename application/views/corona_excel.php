<!DOCTYPE html>
<html>
<head>
	<title>Import data Corona</title>
</head>
<body>
	<table>
		<tr >
			<td>Kode</td>
			<td>Kecamatan</td>
			<td>PP</td>
			<td>ODP</td>
			<td>PDP</td>
			<td>OTG</td>
			<td>Positif</td>
		</tr>
		<?php
		foreach($data_corona as $k0 => $v0){
		?>
		<tr>
			<td><?php echo $v0['id'] ?></td>
			<td><?php echo $v0['kecamatan'] ?></td>
			<td><?php echo $v0['pp'] ?></td>
			<td><?php echo $v0['odp'] ?></td>
			<td><?php echo $v0['pdp'] ?></td>
			<td><?php echo $v0['otg'] ?></td>
			<td><?php echo $v0['positif'] ?></td>
		</tr>
	<?php } ?>
	</table>
	<br>

	<h3>Formulir Import Data Dari Excel</h3>
	<form method="POST" action="<?php echo base_url('index.php/import_excel/unggah')?>" enctype="multipart/form-data">
		<input type="file" name="file"><br>
		<button type="submit">unggah</button>
</body>
</html>