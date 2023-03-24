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
        <label>a:</label><input type="number" name="a" min=1 max=12><br>
        <button type="submit">Sprawdz</button>
    </form>
<?php 
         $a = $_POST['a'];
         switch($a){
            case 1:
                echo "Styczeń 31";
                break;
              case 2:
                echo "Luty 28";
                break;
              case 3:
                echo "Marzec 31";
                break;
              case 4:
                echo "Kwiecień 30";
                break;
              case 5:
                echo "Maj 31";
                break;
              case 6:
                echo "Czerwiec 30";
                break;
              case 7:
                echo "Lipiec 31";
                break;
              case 8:
                echo "Sierpień 31";
                break;
              case 9:
                echo "Wrzesień 30";
                break;
              case 10:
                echo "Październik 31";
                break;
              case 11:
                echo "Listopad 30";
                break;
              case 12:
                echo "Grudzień 31";
                break;
            default:
                 echo "BŁĄD";
         }
    ?>
</body>
</html>