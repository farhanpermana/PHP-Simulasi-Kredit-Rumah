<?php 
if(isset($_POST['submit'])){
	$nominal = $_POST['nominal'];
	$harga = number_format($nominal,0,',','.');
}


 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Simulasi Kredit Rumah</title>
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
			<p>Total Cash yang akan anda bayarkan sebesar Rp. <?php echo $harga; ?><br>Silahkan hubungi Developer atau markteting office kami untuk info lebih lanjut !</p>
		
			<a class="btn btn-primary" href="/simulasiKredit/index.php">Home</a>
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