<?php 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$makan = $_POST['makan'];
$banyak = $_POST['banyak'];
$minum = $_POST['minum'];
$byk = $_POST['byk'];
$komentar = $_POST['komentar'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("list.txt", "a+");
$tanggal = date('Y-m-d');
fputs($fp, "$nama|$alamat|$makan|$banyak|$minum|$byk|$komentar|$tanggal\n");
fclose($fp);

echo "Terima kasih telah memesan!<br>";
echo "<a href='tampilan.php'>Pesan</a><br>";
echo "<a href='lihat.php'>Lihat Rincian Pesanan</a><br>";

 ?>