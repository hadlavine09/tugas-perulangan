   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>TUGAS 2 NOMOR 3</legend>
            <br><br><br>
            <form action="" method="POST">
                <table>
                    <tr>
                        <th style = "text-align: left">Input Bilangan</th>
                        <td>:</td>
                <td>
                    <input type="Number" name="angka">
                </td>
                <td><button type="submit" name="Simpan">KIRIM</button></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if (isset($_POST['Simpan'])) {
    $angka = $_POST['angka'];


for ($i = $angka; $i >= 1; $i--){
      for ($j = $angka; $j>=$i; $j--){
          echo $j;
      }echo "<br>";
}

    
}
?>
</fieldset>     