<?php
$NAMA="";
$NIM ="";
$JURUSAN= "";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $NIM  = $_GET["nim"] ?? "";
    $NAMA  = $_GET["nama"] ?? "";
    $JURUSAN  = $_GET["jurusan"] ?? "";
}
    

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Get</title>
    </head>
    <body>
        <h1>Praktikum Form Get</h1>
        <hr>
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <th width="200" style="text-align: left;">NIM</th>
                    <td width="10" >:</td>
                    <td>
                        <?php echo $NIM; ?>
                    </td>
                </tr>
                <tr>
                    <th width="200" style="text-align: left;">NAMA</th>
                    <td width="10" >:</td>
                    <td>
                         <?php echo $NAMA; ?>
                    </td>
                </tr>
                <tr>
                    <th width="200" style="text-align: left;">JURUSAN</th>
                    <td width="10" >:</td>
                    <td>
                         <?php echo $JURUSAN; ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <!-- form data -->
        <h2>Form Data</h2>
        <form action="" method="get">
            <p style ="margin: 0px"> NIM</p>
            <input type= "number" name="nim" id="nim">
            <br>
            <p style ="margin: 0px"> NAMA</p>
            <input type= "text" name="nama" id="nama">
            <br>
            <p style ="margin: 0px"> JURUSAN</p>
            <select name="jurusan" id="jurusan">
                <option value="">Pilih Jurusan</option>
                <option value="TI">TI</option>
                <option value="RSK">RSK</option>
                <option value="BD">BD</option>
                <option value="DKV">DKV</option>
            </select>
            <hr>

            <button type="submit">Simpan Data</buton>
        </form>
    </body>
    </html>
