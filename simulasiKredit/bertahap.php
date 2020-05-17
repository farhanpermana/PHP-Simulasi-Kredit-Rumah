<?php 
if(isset($_POST['submit'])){
		$nominal = $_POST['nominal'];
		$tenor = $_POST['tenor'];
		$bulan = $tenor * 12;
		$cicil = $nominal / $bulan;
		$format = number_format($cicil,0,',','.');
		$formatNom = number_format($nominal,0,',','.');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hasil Kalkulasi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
			<h3>Hasil Kalkulasi</h3>
			<table>
				<tr>
					<td>Rincian</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Harga Cash Rumah</td>
					<td>:</td>
					<td>Rp. <?php echo $formatNom; ?></td>
					<td></td>
				</tr>
				<tr>
					<td>Tenor Selama</td>
					<td>:</td>
					<td><?php echo $tenor; ?> Tahun / <?php echo $bulan; ?> bulan</td>
					<td></td>
				</tr>
				<tr>
					<td>Cicilan</td>
					<td>:</td>
					<td>Rp. <?php echo $format; ?> / bulan</td>
					<td></td>
				</tr>
			</table>
			<a class="btn btn-primary" href="/simulasiKredit/">Back</a>
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