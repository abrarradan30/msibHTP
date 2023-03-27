<?php
// tidak menggunakan looping
echo 'Tanpa looping <br>';
echo 'Bilangan 1 <br>';
echo 'Bilangan 2 <hr>';

// looping for
echo 'Looping For <br>';
for($x = 1; $x <= 10; $x++) {
    echo '<br> Bilangan '.$x;
}

echo '<br>';

for($y = 10; $y >= 1; $y--) {
    echo '<br> Angka '.$y;
}

echo '<hr>';

// looping while
echo 'Looping While <br>';
$xz = 1;
while($xz <= 5) {
    echo '<br> Bilangan '.$xz;
    $xz++;
}

echo '<br>';

$yz = 5;
while($yz >= 1) {
    echo '<br> Angka '.$yz;
    $yz--;
}

echo '<hr>';
// Do While
echo 'do while <br>';
$d = 1;
do {
    echo '<br> '.$d;
    $d++;
}
while($d <= 10);
?>