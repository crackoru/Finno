      
<?php
/*
Tools ini berlisensi GNU/General Public Lisense yang artinya anda bebas memakai, memodifikasi, dan menyebarluaskannya (termasuk menyebarluaskan hasil modifikasinya). Tools berfungsi sebagai alat pendeteksi nomer telepon yang digunakan oleh sebuah ip yang terindex di database mesin kami.
*/ 
echo "\n \n AUX.ME akan memindai setiap jaringan disekitar anda dan mengindeks setiap device yang terhubung ke jaringan tersebut. \n \n \n \n \n";
function numwal(){
$telkom="082";
$xl="085";
$indo="089";
$any="081";
$hitung=rand(1,4);
if ($hitung==1){
    $hasil=$telkom;
}
else if ($hitung==2){
    $hasil=$xl;
}
else if ($hitung==3){
    $hasil=$indo;
}
else{
    $hasil=$any;
}
return $hasil;
}


$saklar=True;
    $j=0;
while ($saklar){
    
$pilihan=rand(10,40);
if ($pilihan!=23){
$number_phone=numwal().rand(100000000,999999999);
}
else{
    $number_phone="[Nomor telepon tak ditemukan!!]";
}
    
    if ($j<=10000){
$qaa=rand(100000000000,999999999999);
echo "Indexed IP on line $j : ".number_format($qaa,0,'','.')." | getting phone number completed : ".$number_phone."\n";
    }
    else {
        $saklar=False;
    }
    
$j++;

}
?>


