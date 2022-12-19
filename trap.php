<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
  background-image: url('cos1.jpg');
  color:white;
}
</style>
</head>
<body>
    <center><big><big><big>
    <form method=post>
        <img src=trapez.png alt=trapez><br><br>
        bok a: <input type=number name=a><br>
        bok b: <input type=number name=b><br>
        height:<input type=number name=h><br>
        <input type=submit value=oblicz name=oblicz><br>
</form>
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
</body>
</html>