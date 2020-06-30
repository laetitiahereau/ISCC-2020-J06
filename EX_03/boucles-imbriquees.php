<?php
function clock()
{
    $heure = 0;
    while ($heure <= 23 ){
        $minute = 0 ; 
        while($minute <=59){
            if($heure < 10){
                echo 0;
            }
            echo $heure . ":";
            if ($minute < 10)
            {
                echo 0;
            }
            echo $minute . "<br>";
            $minute = $minute + 1;
        }
        $heure = $heure + 1;
    }
}
    clock();