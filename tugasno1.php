<?php
// Membuat variabel array
$dataPribadi = array("nama" => "Khoirul Anam", "umur" => 20, "Status" => "Mahasiswa");

// Encode array ke JSON
$jsonHasil = json_encode($dataPribadi);

echo $jsonHasil; 

?>
