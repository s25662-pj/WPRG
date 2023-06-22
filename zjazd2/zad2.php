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
        <label>imie name: </label><input type="text" name="imie" required ><br>
        <label>nazwisko name: </label><input type="text" name="nazwisko" required ><br>
        <label>Data zameldowania: </label><input type="date" name="dataOD" required ><br>
        <label>Data wyjazdu: </label><input type="date" name="dataDO" required ><br>
        <label>liczba: </label><select id="liczba" name="liczba" required >
        <option value="1">1</option>   
        <option value="2">2</option>  
        <option value="3">3</option>  
        <option value="4">4</option>  
    </select><br>
    <label for="dostawka">dodatkowe łozko dla dziecka</label>
<input type="checkbox" id="dostawka" name="bed"><br>
<label for="extra">extra:</label><br>
<select id="extra" name="extra" multiple>
<option value="clima">Clima</option>
<option value="smoking">smoking</option>
</select>
<br>

        <button type="submit">submit</button>
    </form>
<?php 
         $imie = $_POST['imie'];
         $nazwisko = $_POST['nazwisko'];
         $dataOD = $_POST['dataOD'];
         $dataDO = $_POST['dataDO'];
         $liczba = $_POST['liczba'];
         $dziecko = isset($_POST['dziecko'])? "yes" : "no";
         $extra = "";
         $extra = "";
         if(isset($_POST["extra"]) && is_array($_POST["extra"])) {
             $extra = implode(", ", $_POST["extra"]);
         }
         $extra = isset($_POST["extra"]) ? $_POST["extra"] : "none";



         
         $summ = "
  <h2>podsumowanie</h2>
  <p><strong>liczba:</strong> $liczba</p>
  <p><strong>imie:</strong> $imie</p>
  <p><strong>nazwisko:</strong> $nazwisko</p>
  <p><strong>Data zameldowania:</strong> $dataOD</p>
  <p><strong>Date to:</strong> $dataDO</p>
  <p><strong>Dostawka:</strong> $dziecko</p>
  <p><strong>extra:</strong> $extra</p>
  ";

  echo $summ;
    ?>
</body>
</html>