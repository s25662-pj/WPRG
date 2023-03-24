<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>bok a:</label><input type="number" name="a"><br>
        <label>bok b:</label><input type="number" name="b"><br>
        <label>bok c:</label><input type="number" name="c"><br>
        <button type="submit">Sprawdz</button>
    </form>
<?php 
         $a = $_POST['a'];
         $b = $_POST['b'];
         $c = $_POST['c'];

         if ($a+$b>$c & $b+$c>$a & $a+$c>$b){
            echo "Da sie zbudowac trojkat";
         }else{
            echo "BŁĄD";
         }
    ?>
</body>
</html>