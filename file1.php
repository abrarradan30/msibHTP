<?php
echo 'Dokumen PHP saya ada di '.$_SERVER['DOCUMENT_ROOT'];
echo '<br> Nama File '.$_SERVER['SCRIPT_FILENAME'];
echo '<hr> Hello World';
// ini pemanggilan di PHP

// belajar variable
$namaSiswa = "Abrar";
$umur = 20;
$berat_badan = 64.5;
$pekerjaan = "mahasiswa";
$tes = "coba";

echo '<hr>';
echo 'Nama Siswa : '.$namaSiswa;
echo '<br> Umur : '.$umur;
echo '<br> Berat Badan : '.$berat_badan;
echo '<br> Pekerjaan : '.$pekerjaan;
?> 

<hr> 
Nama Siswa : <?= $namaSiswa ?>
<br> Umur : <?= $umur ?>
<br> Berat Badan = <?= $berat_badan ?>
<br> Pekerjaan <?= $pekerjaan ?> 