<?php

// Array data mahasiswa
$mahasiswa = array(
    array("2500018016", "Alea Aminatussyifa", 85),
    array("2500018025", "Bunga Citra Lestari", 72),
    array("2500018012", "Salasa Siti Aisyah", 60),
    array("2500018024", "Nadia Kartika", 48),
    array("2500018010", "Nayla Nurika", 20)
);

// Function menentukan nilai huruf
function nilaiHuruf($nilai)
{
    if ($nilai >= 80) {
        return "A";
    } elseif ($nilai >= 65) {
        return "B";
    } elseif ($nilai >= 50) {
        return "C";
    } elseif ($nilai >= 25) {
        return "D";
    } else {
        return "E";
    }
}

// Function menentukan status
function statusLulus($nilai)
{
    if ($nilai >= 65) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Mahasiswa</title>

<style>

body{
    font-family: Arial;
    background:#f4f4f4;
}

.container{
    width:800px;
    margin:auto;
    background:white;
    padding:20px;
    margin-top:30px;
    border-radius:10px;
}

h2{
    text-align:center;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    border:1px solid black;
    padding:10px;
    text-align:center;
}

th{
    background:#4CAF50;
    color:white;
}

</style>

</head>

<body>

<div class="container">

<h2>Data Nilai Mahasiswa</h2>

<table>

<tr>
<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Nilai</th>
<th>Nilai Huruf</th>
<th>Status</th>
</tr>

<?php

$no=1;

foreach($mahasiswa as $data){

echo "<tr>";

echo "<td>".$no++."</td>";

echo "<td>".$data[0]."</td>";

echo "<td>".$data[1]."</td>";

echo "<td>".$data[2]."</td>";

echo "<td>".nilaiHuruf($data[2])."</td>";

echo "<td>".statusLulus($data[2])."</td>";

echo "</tr>";

}

?>

</table>

</div>

</body>
</html>