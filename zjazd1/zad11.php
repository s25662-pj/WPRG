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
        <label>a:</label><input type="text" name="a"><br>
        <button type="submit">Pangram!</button>
    </form>
        <?php 

         $a = $_POST['a'];
         strtolower($a);
         $n = strlen($a);
         $chars =  range('a', 'z');
         while($n){
            if(in_array($a[$n-1], $chars)){
              $chars;
            }
            $n--;
         }
    ?>
</body>
</html>