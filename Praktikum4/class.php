<?php


class Hewan {
    public static $kaki;

    public static $mata;

    public static function lari(){
     
        echo "hewan bisa lari";

    }


}

$kucing = new Hewan();
$kucing ->kaki = 4;
$kucing->mata = 2;

echo $kucing->kaki;
echo "<br>";
echo $kucing->mata;

?>