<?php
function compter_dizaine($maximum)
{
    $i =1;
    while( $i <= $maximum)
    {
        echo $i . "<br>";
        if ($i % 100 ==0)
        {
            echo "Ceci est une centaine<br>";
        }
        elseif ($i % 10 ==0) 
        {
            echo "Ceci est une dizaine<br>";
        }
        $i = $i + 1;
    }
}
compter_dizaine(150);
