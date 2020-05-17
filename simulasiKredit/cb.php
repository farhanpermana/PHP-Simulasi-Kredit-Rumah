<form action="bertahap.php" method="POST">
	<h2 style="text-align: center;">Cash Bertahap</h2>
	<p><b>Cash bertahap harus sesuai dengan kesepakatan Developer</b></p>
	<table>
		<tr>
			<td>Harga Rumah</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="nominal" placeholder="Rp." required=""></td>
			<td>rupiah</td>
		</tr>
		<tr>
			<td>Tenor</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="tenor" required=""></td>
			<td>Tahun</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><br><button class="form-control" type="submit" name="submit">Kalkulasi</button></td>
			<td></td>
		</tr>
	</table>
</form>