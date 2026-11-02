<?php
$nim = $_POST['nim']??"";
$nama = $_POST['nama']??"";
$jurusan = $_POST['jurusan']??"";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width>=device-width, initial-scale=1.0">
        <title>Form Post</title>
</head>
<body>
    <h1>Pratikum Form Post</h1>
    <hr>
    <table style="width: 10%;">
        <tbody>
            <tr>
                <th widht= "100" style="text-align: left;">NIM</th>
                <td width="10">:</td>
                <td>
                    <?php echo $nim; ?>
                </td>
            </tr>
            <tr>
                <th widht= "100" style="text-align: left;">NAMA</th>
                <td width="10">:</td>
                <td>
                    <?php echo $nama; ?>
                </td>
            </tr>
            <tr>
                <th widht= "100" style="text-align: left;">JURUSAN</th>
                <td width="10">:</td>
                <td>
                    <?php echo $jurusan; ?>
                </td>
            
            </tr>
        </tbody>
    </table>
    <hr>
    <!-- form data -->
     <h2>Form Data</h2>
     <form action="/PRATIKUM4/post/index.php"method="post">
        <p style="margin: 0px;">NIM</p>
        <input type="number" name="nim" id="nim">
        <br>
         <p style="margin: 0px;">NAMA</p>
        <input type="text" name="nama" id="nama">
        <br>
         <p style="margin: 0px;">JURUSAN</p>
        <select name="jurusan" id="jurusan">
            <option value= "">PILIH jurusan</option>
            <option value= "TI">TI</option>
            <option value= "RSK">RSK</option>
            <option value= "BD">BD</option>
            <option value= "DKV">DKV</option>
        </select>
        <br>
        <button type="submit">Simpan Data</buttton>
</form>
</body>
</html>