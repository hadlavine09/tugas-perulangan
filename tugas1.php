<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<fieldset>
    <legend>TUGAS 2 NOMOR 1</legend>

    <body>
        <form action="" method="POST">
            <label for="">MASUKAN INPUTAN:</label>
        <input type="number" name="inputan" placeholder="masukan inputan">
        <input type="submit" name="kirim" value="kirim">
    </form>
</body>
</html>


<?php

if(isset($_POST['kirim'])){
    $angka = $_POST['inputan'];
    for ($i = 1; $i <= $angka; $i++){
        for($k = 1; $k <= $i; $k++){
            echo"$k";
        }
        echo"<br>";
    }
}




?>
</fieldset>