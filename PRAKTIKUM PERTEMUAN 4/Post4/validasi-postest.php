<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postest 4</title>
    <style>
        .error {
            color: #FF0000;
        }
        .button {
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 10pt;
        }

        .button1 {
            background-color: #04AA6D;
            color: white;
        }

        .button1:hover {
            background-color: white; 
            color: black; 
            border: 1px solid #04AA6D;
        }
        #mahasiswa {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #mahasiswa td, #mahasiswa th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #mahasiswa tr:nth-child(even){background-color: #f2f2f2;}

        #mahasiswa tr:hover {background-color: #ddd;}

        #mahasiswa th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #FF4E34;
            color: white;
        }
    </style>
</head>

<body>

<?php
    // define variables and set to empty values
    $namaErr = $nimErr = $emailErr = $jnsklmnErr = $nohpErr = $alamatErr = "";
    $nama = $nim = $email = $jnsklmn = $nohp = $alamat = "";

    // Percabangan jika Menerima inputan dari action POST pada FORM inputan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi jika nama kosong maka output "Nama harus diisi"
        if (empty($_POST["nama"])) {
            $namaErr = "Nama harus diisi";
        } else { //jika nama terisi akan memasukkan data nama ke variabel nama untuk dioutput kan
            $nama = test_input($_POST["nama"]);
        }
        
        // Validasi NIM
        if (empty($_POST["nim"])) { //jika nim kosong output kan NIM harus diisi
            $nimErr = "NIM harus diisi";
        } else if(strlen($_POST["nim"] <= 1000000000)){ // jika nim kurang dari 10 digit output kan nim harus 10 digit
            $nimErr = "NIM harus 10 digit";
        } else { //jika data benar akan memasukkan data nim ke variabel nim untuk dioutput kan
            $nim = test_input($_POST["nim"]);
        }

        // Validasi jika email kosong maka output "email harus diisi"
        if (empty($_POST["email"])) {
            $emailErr = "Email harus diisi";
        } elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            // filter untuk cek apakah email tersebut valid/benar2 email
            $email = test_input($_POST["email"]);
        } else { //jika email terisi akan memasukkan data email ke variabel email untuk dioutput kan
            $emailErr = "Email tidak sesuai format"; // jika bukan email maka akan output "Email tidak sesuai format"
        }

        // Validasi jika jenis kelamin kosong maka output jenis kelamin kosong
        if (empty($_POST["jnsklmn"])) {
            $jnsklmnErr = "Jenis kelamin harus diisi";
        } else { //jika website terisi akan memasukkan data website ke variabel website untuk dioutput kan
            $jnsklmn = test_input($_POST["jnsklmn"]);
        }

        // Validasi jika nohp kosong maka output nohp kosong
        if (empty($_POST["nohp"])) {
            $nohpErr = "NO HP harus diisi";
        } else { //jika comment terisi akan memasukkan data nohp ke variabel comment untuk dioutput kan
            $nohp = test_input($_POST["nohp"]);
        }

        // Validasi jika alamat kosong maka output "alamat harus diisi"
        if (empty($_POST["alamat"])) { 
            $alamatErr = "Alamat harus diisi";
        } else { //jika gender terisi akan memasukkan data gender ke variabel gender untuk dioutput kan
            $alamat = test_input($_POST["alamat"]);
        }
    }

    // untuk input dan menampilkan data
    function test_input($data) {

        //trim digunakan untuk 'membersihkan' hasil input form dari karakter spasi yang sengaja atau tidak sengaja ditambahkan pengguna.
        $data = trim($data);

        //stripslashes untuk menghapus atau menghilangkan karakter backslashes tanda garis miring terbalik ("\") menggunakan stripslashes() sehingga tidak mengganggu query mysql yang dikirim.
        $data = stripslashes($data);

        //htmlspecialchars akan mengkonversi 4 karakter 'khusus' HTML menjadi named entity sehingga tidak akan di 'proses' oleh web browser.
        $data = htmlspecialchars($data); 
        return $data;
    }
?>

    <h2>Masukkan Data Mahasiswa </h2>
    <p><span class="error">* Harus Diisi.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td>Nama Mahasiswa :</td>
                <td><input type="text" name="nama">
                    <span class="error">* <?php echo $namaErr;?></span>
                </td>
            </tr>
            <tr>
                <td>NIM Mahasiswa :</td>
                <td><input type="number" name="nim">
                    <span class="error">* <?php echo $nimErr;?></span>
                </td>
            </tr>
            <tr>
                <td>E-mail Mahasiswa : </td>
                <td><input type="text" name="email">
                    <span class="error">* <?php echo $emailErr;?></span>
                </td>
            </tr>
            <tr>
                <td>NO HP :</td>
                <td> <input type="number" name="nohp">
                    <span class="error">* <?php echo $nohpErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td> <textarea name="alamat" rows="5" cols="40"></textarea><span class="error">* <?php echo $alamatErr;?></span></td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <input type="radio" name="jnsklmn" value="Laki-laki">Laki-Laki
                    <input type="radio" name="jnsklmn" value="Perempuan">Perempuan
                    <span class="error">* <?php echo $jnsklmnErr;?></span>
                </td>
            </tr>
            <td>
                <button type="submit" name="submit" value="Submit" class="button button1">Submit</button>
            </td>
        </table>
    </form>

<?php
    echo "<br><h2>Data mahasiswa yang sudah diisi:</h2>";
    echo "<table id='mahasiswa' border='1' style='width:100%';>
    <tr>
      <th>Nama</th>
      <th>NIM</th>
      <th>E-mail</th>
      <th>Jenis Kelamin</th>
      <th>NO HP</th>
      <th>Alamat</th>
    </tr>
    <tr>
    ";
        echo "<td>", $nama, "</td>";
        echo "<td>", $nim, "</td>";
        echo "<td>", $email, "</td>";
        echo "<td>", $jnsklmn, "</td>";
        echo "<td>", $nohp, "</td>";
        echo "<td>", $alamat, "</td>";
    echo "</tr>";
    echo "</table>";
?>

</body>

</html>


