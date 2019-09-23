
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<?php
$nim = intval($_GET['nim']);
$kode_bk = intval($_GET['kode_bk']);

$con = mysqli_connect('localhost','root','','perpustakaan');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM dataperpus WHERE nim = '".$nim."'AND kode_bk='".$kode_bk."' ";
$result = mysqli_query($con,$sql);

// echo($result);

echo "<table class='table mt-2'>
<thead class='thead-dark'>
<tr>
<th scope='col'>NIM</th>
<th scope='col'>NAMA</th>
<th scope='col'>KODE BUKU</th>
<th scope='col'>JUDUL</th>
<th scope='col'>TANGGAL PINJAM</th>
<th scope='col'>TANGGAL KEMBALI</th>
<th scope='col'>HARUS KEMBALI</th>
<th scope='col'>LAMBAT</th>
<th scope='col'>DENDA</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    $denda = $row['lambat'] * 1000;
        if ($denda > 100000) {
            $denda = 100000;
        };
    echo "<tr>";
    echo "<td scope='row'>" . $row['nim'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['kode_bk'] . "</td>";
    echo "<td>" . $row['judul_bk'] . "</td>";
    echo "<td>" . $row['tgl_pinjam'] . "</td>";
    echo "<td>" . $row['tgl_kembali'] . "</td>";
    echo "<td>" . $row['hrs_kembali'] . "</td>";
    echo "<td>" . $row['lambat'] . "</td>";
    echo "<td>" .$denda . "</td>";
    echo "</tr>";
}
echo "
</thead>
</table>";
mysqli_close($con);
?>
</body>
</html>

