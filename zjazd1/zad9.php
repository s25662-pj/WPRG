<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $tab1 = array(1, 1, 1, 1, 1, 1);
        $tab2 = array(1, 1, 1, 1, 1);
        if(count($tab1)>count($tab2)){
            $n = count($tab2);
        }else{
            $n = count($tab1);
        }
        $sum = 0;
        for($i = 0; $i < $n; $i++){
            $sum += $tab1[$i]*$tab2[$i];
        }
        echo $sum
    ?>
</body>
</html>