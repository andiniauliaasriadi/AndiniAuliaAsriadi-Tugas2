<?php
$nama = "ANDINI AULIA ASRIADI";
if(empty($nama)){
    cetaknama("Dian");
    // ini kondisi pertama
    echo "Tidak ada nama";
} else {
    for($i=0; $i<5; $i++){
        cetaknama ("Inan");
   
    //ini kondisi lainya
echo "Hello......".$nama;
}
}

function cetaknama($nama){
    echo "Hallo".$nama;
}


function hitungLuasRuangan($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}
$panjang = 5;
$lebar = 10; 
$luasRuangan = hitungLuasRuangan($panjang, $lebar);
echo "Luas ruangan dengan panjang $panjang meter dan lebar $lebar meter adalah: $luasRuangan meter persegi.";


?>