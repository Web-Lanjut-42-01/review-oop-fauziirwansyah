<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TUGAS MANDIRI 1</title>
</head>
<body>
<form action="bb.php" method="POST">
    <table>
        <tr>
            <td>Nama : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Berat Badan : </td>
            <td><input type="number" name="bb"> (kg)</td>
        </tr>
        <tr>
            <td>Tinggi Badan : </td>
            <td><input type="number" name="tb"> (cm)</td>
        </tr>
        <tr>
            <td>Jenis Kelamin : </td>
            <td><input type="radio" name="kelamin" value="Laki-laki"> Laki-Laki</td>
            <td><input type="radio" name="kelamin" value="Perempuan"> Perempuan</td>
        </tr>
    </table>
    <input type="submit" name="submit">
</form>
    <?php 
    
    ?>
</body>
</html>