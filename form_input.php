<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="" />
    <title>Document</title>
</head>

<body>
    <h2>Form Input Data</h2>
    <form action="hasil.php" method="POST">
        <table border="1" cellpadding="5" cellspacing="4" rules>
            <tr>
                <td><label for="fnobp"> nobp</label></td>
                <td>
                    <input type="text" name="nobp" id="fnobp" placeholder="Masukkan nobp" />
                </td>
                </td>
            </tr>
            <tr>
                <td><label for="fnama"> Nama</label></td>
                <td>
                    <input type="text" name="nama" id="fnama" placeholder="Masukkan nobp" />
                </td>
            </tr>
            <tr>
                <td><label for="ftgl">Tanggal Lahir</label></td>
                <td>
                    <input type="date" name="tgl" id="ftgl" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Jenis Kelamin</label>
                </td>
                <td>
                    <input type="radio" name="fjns_kelamin" id="l" value="laki-laki" />
                    <label for="l">Laki-Laki</label>
                    <input type="radio" name="fjns_kelamin" id="p" value="Perempuan" />
                    <label for="p">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="angkt-mhs">Angkatan Mahasiswa</label>
                </td>
                <td>
                    <select name="Angkatan" id="angkt-mhs">
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="hobby">Hobi</label>
                </td>
                <td>
                    <input type="checkbox" name="hobby" id="sepakbola" />
                    <label for="sepakbola">SepakBola</label>
                    <input type="checkbox" name="Coding" id="coding" />
                    <label for="coding">Coding</label>
                    <input type="checkbox" name="valorant" id="valorant" />
                    <label for="valorant">Valorant</label>
                    <br />
                    <input type="checkbox" name="madrid" id="hobby" />
                    <label for="Madrid">Madrid</label>
                    <input type="checkbox" name="madrid" id="hobby" />
                    <label for="Madrid">Madrid</label>
                    <input type="checkbox" name="madrid" id="hobby" />
                    <label for="Madrid">Madrid</label>
                </td>
            </tr>
        </table>
        <br />
        <button type="submit">Kirim!!</button>
    </form>
</body>

</html>

<label for="lname">Last Name</label>
<input type="text" id="lname" name="lastname" placeholder="Your last name.." />