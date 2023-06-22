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
        <label>b:</label><input type="text" name="b"><br>
        <select id="cal" name="cal">
        <option value="d">+</option>   
        <option value="o">-</option>  
        <option value="m">*</option>  
        <option value="d">/</option>  
    </select>

        <button type="submit">submit</button>
    </form>
    <?php 
         $a = $_POST['a'];
         $b = $_POST['b'];
         $cal = $_POST['cal'];

         switch ($cal){
            case "d":
                echo $a+$b;
                break;
            case "o":
                echo $a-$b;
                break;
            case "m":
                echo $a*$b;
                break;
            case "d":
                echo $a/$b;
                break;
         }
    ?>
</body>
</html>
