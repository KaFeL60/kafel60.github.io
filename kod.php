<?php

if(isset($_POST['oblicz'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $h=$_POST['h'];
    if($a<=0 || $b<=0 || $h<=0)
    {
        echo "podaj wszystkie prawidłowe wartości";
        return;
    }
    else{
        
    }

    $pole=(($a+$b)*$h)/2;
        echo $pole;
}
?>
