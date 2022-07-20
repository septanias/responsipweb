<?php 

echo "<head><title>Naturevy</title></head>";
$fp = fopen("list.txt", "r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Tanggal: </td><td>: $pisah[7]</td></tr>";
    echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Alamat: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Makanan: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Banyak: </td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>Minuman: </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td>Banyak: </td><td>: $pisah[5]</td></tr>";
    echo "<tr><td>Catatan: </td><td>: $pisah[6] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='tampilan.php'> Pesan lagi </a>";

?>