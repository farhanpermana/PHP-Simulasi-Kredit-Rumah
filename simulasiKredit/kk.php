<form action="besarkk.php" method="POST">
	<h2 style="text-align: center;">Kredit Konvensional</h2>
	<h3>Hitung Besar Cicilan</h3>
	<table>
		<tr>
			<td>Harga Rumah</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="nominal" placeholder="Rp."></td>
			<td>rupiah</td>
		</tr>
		<tr>
			<td>Bunga</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="bunga" placeholder="%"></td>
			<td>% / bulan</td>
		</tr>
		<tr>
			<td>Uang Muka</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="dp" placeholder="Rp."></td>
			<td>%</td>
		</tr>
		<tr>
			<td>Lama Tahun</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="tahun" required=""></td>
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
<form action="lamakk.php" method="POST">
	<h3>Hitung Lama Cicilan</h3>
	<table>
		<tr>
			<td>Harga Rumah</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="nominal" placeholder="Rp."></td>
			<td>rupiah</td>
		</tr>
		<tr>
			<td>Bunga</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="bunga" placeholder="%"></td>
			<td>% / bulan</td>
		</tr>
		<tr>
			<td>Cicilan</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="cicilan" placeholder="Rp"></td>
			<td> / bulan</td>
		</tr>
		<tr>
			<td>Uang Muka</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="dp" required=""></td>
			<td>%</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><br><button class="form-control" type="submit" name="submit">Kalkulasi</button></td>
			<td></td>
		</tr>
	</table>
</form>