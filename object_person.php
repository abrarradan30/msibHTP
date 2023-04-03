<?php
require_once 'dosen.php';
require_once 'mahasiswa.php';
require_once 'staff.php';

$d1 = new Dosen('Budi','L','111','M.Kom');
$d2 = new Dosen('Andi','L','112','M.Kom');
$m1 = new Mahasiswa('Ali','L','3','Teknik Informatika');
$m2 = new Mahasiswa('Siti','P','3','Teknik Informatika');
$s1 = new Staff('Ari','L','01120','Staff Waket',10000000);

$ar_data = [$d1,$d2,$m1,$m2,$s1];
foreach($ar_data as $data) {
    $data->cetak();
}