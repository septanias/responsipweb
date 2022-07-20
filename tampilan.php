<html>
	<head>
		<title>WEB PEMESANAN</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
	<body bgcolor="ligtblue">
		<center>
    	<h1 style="text-align:center; color:black; font-family: cursive;" >Selamat Datang!</h1>
    	<img width="500px" height="400px" src="gambar.png">
    	<p style="text-align:center; color:darkblue; font-family: fantasy; font-size: large;">"Good food ends with good talk"</p>
		</center>
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono"> PESANAN </font></strong></div>
			<form name="form1" method="POST" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
						<td>Nama Lengkap</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>
					<tr>
						<td>Pesanan makanan :  </td>
						<td>
						<select name="makan" id="makan">
							<option>Ramen</option>
							<option>Katsu</option>
							<option>Sushi</option>
							<option>Takoyaki</option>
							<option>-</option>
						</select>
						</td>
					</tr>
					<tr>
						<td>Banyak :  </td>
						<td>
						<select name="banyak" id="banyak">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>lebih</option>
							<option>-</option>
						</select>
						</td>
					</tr>
					<tr>
						<td>Pesanan minuman : </td>
						<td>
							<select name="minum" id="minum">
								<option>Matcha</option>
								<option>Coffe</option>
								<option>Oolong tea</option>
								<option>Ofukucha</option>
								<option>-</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Banyak :  </td>
						<td>
						<select name="byk" id="byk">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>lebih</option>
							<option>-</option>
						</select>
						</td>
					</tr>
					<tr>
						<td>Catatan : </td>
						<td><textarea name="komentar" id="komentar"></textarea></td> </textarea>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php">::Lihat rincian pesanan::</a></strong></div>
	</body>
</html>