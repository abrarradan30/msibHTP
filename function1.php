<?php
// contoh fungsi void(fungsi yang tidak mengembalikan nilai)
function salam() {
    echo 'Selamat Pagi <br>';
}
salam();

function sayHello($nama,$umur) {
    echo "Hallo $nama, dan Umur $umur tahun <br>";
}
sayHello("Abrar",20);
sayHello("Andi",30);
sayHello("Ali",40);

// fungsi return(fungsi mengembalikan nilai)
function tambah($a,$b) {
    $c = $a + $b;
    return $c;
}
$x = 10;
$y = 20;
echo 'Hasil 50 + 30 = '.tambah(50,30);
echo '<br> Hasil 60 + 40 = '.tambah(60,40);
echo "<br> Hasi dari $x + $y = ".tambah($x,$y);

// rumus cek bilangan prima
function prima($bilangan) {
    $prima = true;
    for($i = 2; $i < $bilangan; $i++) {
        if($bilangan % $i == 0) {
            $prima = false;
            break;
        }
    }
    return $prima;
}
if(prima(10)) {
    echo "<br> bilangan prima";
} else {
    echo "<br> bukan bilangan prima";
}
?>