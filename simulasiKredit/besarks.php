<?php 
if(isset($_POST['submit'])){
	$formatnom = $_POST['nominal'];
	$persendp = $_POST['dp'];
	$dp = $formatnom * $persendp / 100;
	$plafon = $formatnom - $dp;
	$tahun = $_POST['tahun'];
	$bulan = $tahun * 12;
	$lamaTahun = $_POST['tahun'];
	$nominal = number_format($formatnom,0,',','.');
	$formatdp = number_format($dp,0,',','.');
	$formatplafon = number_format($plafon,0,',','.');
	$cicil = $plafon / $bulan;
	$formatcicil = number_format($cicil,0,',','.');	
}
 ?>
 <html>
<head>
	<title>Hasil Kalkulasi</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>SIMULASI KREDIT RUMAH</h1>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark" id="a">
		<ul class="navbar-nav">
		<li class="nav-item"><a class="nav-link" href="ck">Cash Keras</a></li>
		<li class="nav-item"><a class="nav-link" href="cb">Cash Bertahap</a></li>
		<li class="nav-item"><a class="nav-link" href="ks">Kredit Syariah</a></li>
		<li class="nav-item"><a class="nav-link" href="kk">Kredit Konvensional</a></li>
			</ul>
		</nav>
		<div class="konten">
			<h3>Hasil Kalkulasi Kredit Syariah</h3>
			<table>
				<tr>
					<td><strong>Rincian</strong></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Harga Rumah</td>
					<td>:</td>
					<td>Rp. <?php echo $nominal; ?></td>
					<td></td>
				</tr>
				<tr>
					<td>Uang Muka</td>
					<td>:</td>
					<td>Rp. <?php echo $formatdp; ?></td>
					<td></td>
				</tr>
				<tr>
					<td>Lama Tahun</td>
					<td>:</td>
					<td><?php echo $lamaTahun; ?> Tahun</td>
					<td></td>
				</tr>
				<tr>
					<td><br><strong>Kredit Anda</strong></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Plafon</td>
					<td>:</td>
					<td>Rp. <?php echo $formatplafon; ?></td>
					<td></td>
				</tr>
				<tr>
					<td>Besar Cicilan</td>
					<td>:</td>
					<td>Rp. <?php echo $formatcicil; ?> / Bulan</td>
					<td></td>
				</tr>
			</table>
			<a class="btn btn-primary" href="/simulasiKredit/" style="color: black;">Back</a>
		</div>
	</div>
	<script>
			$(document).ready(function(){
				$('a').click(function(){
					var hal = $(this).attr('href');
					$('.konten').load(hal + '.php');
					return false;
				});
			});
		</script>
</body>
</html>