<form action="besarks.php" method="POST">
	<h2 style="text-align: center;">Kredit Syariah Tanpa Bunga</h2>
	<h3>Hitung Besar Cicilan</h3>
	<table>
		<tr>
			<td>Harga Rumah</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="nominal" placeholder="Rp." required=""></td>
			<td>rupiah</td>
		</tr>
		<tr>
			<td>Uang Muka</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="dp" required=""></td>
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
</div>

<form action="lamaks.php" method="POST">
	<h3>Hitung Lama Cicilan</h3>
	<table>
		<tr>
			<td>Harga Rumah</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="nominal" placeholder="Rp." required=""></td>
			<td>rupiah</td>
		</tr>
		<tr>
			<td>Cicilan</td>
			<td>:</td>
			<td><input class="form-control" type="number" name="cicilan" placeholder="Rp" required=""></td>
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
