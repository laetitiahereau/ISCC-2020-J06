<?php
function compter($maximum)
{
    $i = 1 ;
    while($i <=  $maximum)
    {
        echo $i . "<br>";  
        $i = $i + 1;
    }
}
function compter_for($maximum)
{
    $i = 1 ;
    for($i = 1; $i <= $maximum; $i = $i + 1)
    {
        echo $i . "<br>";
    
    }
}
compter(10);
compter_for(10);