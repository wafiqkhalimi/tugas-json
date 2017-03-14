<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "NAMA : "; echo $obj->nama;
echo "<br>";
echo "NIM  : ";echo $obj->nim;
echo "<br>";
echo "PRODI: ";echo $obj->prodi;
echo "<br>";
echo "MATA KULIAH: ";echo $obj->makul[0];
echo "<br>";echo $obj->makul[1];
echo "<br>";echo $obj->makul[2];
?>