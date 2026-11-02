<?php
$nama = "";
$nim = "";
$jurusan = "";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $nama= $_GET["nama"] ?? "";
    $nim= $_GET["nim"] ?? "";
    $jurusan= $_GET["jurusan"] ?? "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM GET</title>
</head>
<body>
    <h1> Form get </h1>
    <table style="width: 80%;">
        <tbody>
            <tr>
                <th width="100" style="text-align:left;">Nim</th>
                <td width="10">:</td>
                <td>
                    <?php echo $nim;?>
                </td>
            </tr>
            <tr>
                <th width="100" style="text-align:left;">Nama</th>
                <td width="10">:</td>
                <td>
                    <?php echo $nama;?>
                </td>
            </tr>
            <tr>
                <th width="100" style="text-align:left;">Jurusan</th>
                <td width="10">:</td>
                <td>
                    <?php echo $jurusan;?>
                </td>
            </tr>                        
        </tbody>
    </table>
    <hr>
    <h2>Form Data</h2>
    <form action="" method="GET">
        <p style="margin: 0px;">NIM<p>
        <input type="number" name="nim" id="nim">
        <br>
        <p style="margin: 0px;">NAMA<p>
        <input type="text" name="nama" id="nama">
        <br>
        <p style="margin: 0px;">Jurusan<p>
        <select name="jurusan" id="jurusan">
            <option value="">Pilih Jurusan</option>
            <option value="TI">TI</option>
            <option value="RSK">RSK</option>
            <option value="BD">BD</option>
            <option value="DKV">Dkv</option>
        </select>
        <br>
</hr>
        <button type="submit">Simpan Data</button>
</form>
</body>
</html>