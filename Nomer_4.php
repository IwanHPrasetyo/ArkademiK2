

<?php 

$nilai  = "993141-1 1323 14-232";

$nilai2  = str_replace('-','', $nilai);
$nilai3 = str_replace(' ','', $nilai2);

$jumlah = strlen($nilai3);

$arr3 = str_split($nilai3,3);
$nilai4 = substr($nilai3,12);
$jumar = count($arr3);
$arr4 = str_split($nilai4,2);

//echo $nilai4."<br>";

foreach ($arr3 as $nilai) {

    echo "$nilai";
    echo "-";
    $jumlah = $jumlah - 3;
}    


?>