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
        <label>num: </label><input type="number" name="num" required ><br>
        
<br>

        <button type="submit">submit</button>
    </form>
<?php 
        $count = 0;
        if(isset($_POST['a'])) {
            $a = $_POST['a'];
            function isPrime($a){   
                for($i=2; $i<=$a/2; $i++){
                    $count++;
                    if($a%$i==0){
                        return true;
                    }
                }
                return false;
                
            }
            if($a>=0){
                if(isPrime($a)==true){
                    echo "parzysta";
                    echo $count;
                }else{
                    echo "nie parzysta";
                    echo $count;
                }
                
            }else{
                echo "cos zle";
            }
            } else {
            
        }
        
         
         
    ?>
</body>
</html>