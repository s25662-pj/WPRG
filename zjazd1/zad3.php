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
        <label>x:</label><input type="number" name="x"><br>
        <button type="submit">Oblicz</button>
    </form>
<?php 
         $x = $_POST['x'];
         echo sqrt($x);
    ?>
</body>
</html>