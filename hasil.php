<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Tampilan hasil</h2>
    <table border="1" cellspacing="0" cellpadding="3">
        <tr>
            <td>Nobp</td>
            <td>:</td>
            <td>
                <?php echo $_POST['nobp']; ?>
            </td>
        </tr>
        <tr>
            <td>nama</td>
            <td>:</td>
            <td>
                <?php echo $_POST['nama']; ?>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <?php echo $_POST['tgl']; ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <?php echo $_POST['fjns_kelamin']; ?>
            </td>
        </tr>
        <tr>
            <td>Angkatan</td>
            <td>:</td>
            <td>
                <?php echo $_POST['Angkatan']; ?>
            </td>
        </tr>
        <tr>
            <td>hobby</td>
            <td>:</td>
            <td>
                <?php
                if (isset($_POST['submit'])) {

                    $hobi = $_POST['hobby'];
                    echo "<br>";
                    for ($i = 0; $i < count($hobi); $i++) {
                        echo $hobi[$i] . "<br>";
                    }
                }
                // if (isset($_POST['hobby'])) {
                //     $count = $_POST['hobby'];
                //     for ($i = 0; $i < count($count); $i++) {
                //         echo $_POST['hobby'][$i] . "";
                //     }
                // }
                
                ?>
            </td>
        </tr>
    </table>
</body>

</html>