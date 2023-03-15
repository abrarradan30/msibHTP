function tambah() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 + a2;
    frm.hasil.value = total;
}

function kurang() {
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 - a2;
    frm.hasil.value = total;
}

/* tugas ke 4 javascript
1. lengkapilah form dari latihan 15 js menggunakan CSS da table
2. perbagus tampilannya
3. lengkapi perhitungannya dengan:
-pembagian perkalian
-pangkat
4. jika formn inputnya kosong dan user klik button, maka tampilkan "Maka angka belum terisi"
*/ 