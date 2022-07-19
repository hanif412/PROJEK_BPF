<?php

class tabung
{   

    
    function Hasil($phi,$jari,$tinggi)
    {

        echo "Phi : " . $phi . "</br>";
        echo "Jari-jari : " . $jari . "</br>";
        echo "Tinggi : " . $tinggi . "</br>";

        $volume = $phi * ($jari * $jari) * $tinggi;
        echo " </br> Volume Tabung adalah : " . $volume . "</br>";

        $luasP = 2 * $phi * $jari * ($jari + $tinggi);
        echo "Luas Permukaan Tabung adalah : " . $luasP . "</br>";

        $luasS = 2 * $phi * $jari * $tinggi;
        echo "Luas Selimut Tabung adalah : " . $luasS . "</br>";
    }

   
}