<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postest 4</title>
    <style>
        body{
            background: #A770EF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        .wrap{
            margin: 10px;
            padding: 10px;
            background: rgba( 255, 255, 255, 0.35 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 20px );
            -webkit-backdrop-filter: blur( 20px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
        .error {
            color: #FF0000;
        }
        .border{
            border-radius: 5px;
            padding: 4px;
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
            border-radius: 5pt;
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
            color: black;
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
            background-color: #A770EF;
            color: white;
        }
    </style>
</head>

<body>

<?php
    // define variables and set to empty values
    $namaErr = $nimErr = $jurusanErr =  $semesterErr = $emailErr = $tlErr = $jnsklmnErr = $nohpErr = $alamatErr = "";
    $nama = $nim = $jurusan = $semester = $email= $tl = $jnsklmn = $nohp = $alamat = "";

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
        
        // Validasi jika jurusan kosong maka output kan jenis kelamin harus diisi
        if (empty($_POST["jurusan"])) {
            $jurusanErr = "jurusan harus diisi";
        } else { //jika jurusan terisi akan memasukkan data jurusan ke variabel jurusan untuk dioutput kan
            $jurusan = test_input($_POST["jurusan"]);
        }

        // Validasi jika semester kosong maka output kosong
        if (empty($_POST["semester"])) {
            $semesterErr = "";
        } else { //jika semester terisi akan memasukkan data semester ke variabel semester untuk dioutput kan
            $semester = test_input($_POST["semester"]);
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

        // Validasi jika tanggal lahir kosong maka output kosong
        if (empty($_POST["tl"])) {
            $tlErr = "";
        } else { //jika tanggal lahir terisi akan memasukkan data tanggal lahir ke variabel tanggal lahir untuk dioutput kan
            $tl = test_input($_POST["tl"]);
        }

        // Validasi jika jenis kelamin kosong maka output jenis kelamin kosong
        if (empty($_POST["jnsklmn"])) {
            $jnsklmnErr = "Jenis kelamin harus diisi";
        } else { //jika jeniskelamin terisi akan memasukkan data jeniskelamin ke variabel jeniskelamin untuk dioutput kan
            $jnsklmn = test_input($_POST["jnsklmn"]);
        }

        // Validasi jika nohp kosong maka output nohp kosong
        if (empty($_POST["nohp"])) {
            $nohpErr = "NO HP harus diisi";
        } else { //jika nohp terisi akan memasukkan data nohp ke variabel nohp untuk dioutput kan
            $nohp = test_input($_POST["nohp"]);
        }

        // Validasi jika alamat kosong maka output "alamat harus diisi"
        if (empty($_POST["alamat"])) { 
            $alamatErr = "Alamat harus diisi";
        } else { //jika alamat terisi akan memasukkan data alamat ke variabel alamat untuk dioutput kan
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
    <div class="wrap">
    <center>
        <h2>Masukkan Data Mahasiswa </h2>
        <p><span class="error">* Wajib Diisi Oleh Mahasiswa</span></p>
    </center>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
        <table align="center">
            <tr>
                <td>Nama Mahasiswa</td>
                <td>: <input class="border" type="text" name="nama">
                    <span class="error">* <?php echo $namaErr;?></span>
                </td>
            </tr>
            <tr>
                <td>NIM Mahasiswa</td>
                <td>: <input class="border" type="number" name="nim">
                    <span class="error">* <?php echo $nimErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Jurusan </td>
                <td>: <input class="border" type="text" name="jurusan">
                    <span class="error">* <?php echo $jurusanErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>: <input class="border" type="number" name="semester">
                    <span class="error"></span>
                </td>
            </tr>
            <tr>
                <td>E-mail Mahasiswa</td>
                <td>: <input class="border" type="text" name="email">
                    <span class="error">* <?php echo $emailErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>: <input class="border" type="date" name="tl">
                    <span class="error"></span>
                </td>
            </tr>
            <tr>
                <td>NO HP</td>
                <td>: <input class="border" type="number" name="nohp">
                    <span class="error">* <?php echo $nohpErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td> <textarea class="border" name="alamat" rows="5" cols="40"></textarea><span class="error">* <?php echo $alamatErr;?></span></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
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
    </div>
<?php
    echo "<div class='wrap'>";
    echo "<h2>Data mahasiswa yang sudah diisi:</h2>";
    echo "<table id='mahasiswa' border='1' style='width:100%';>
    <tr>
      <th>Nama</th>
      <th>NIM</th>
      <th>Jurusan</th>
      <th>Semester</th>
      <th>E-mail</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>NO HP</th>
      <th>Alamat</th>
    </tr>
    <tr>
    ";
        echo "<td>", $nama, "</td>";
        echo "<td>", $nim, "</td>";
        echo "<td>", $jurusan, "</td>";
        echo "<td>", $semester, "</td>";
        echo "<td>", $email, "</td>";
        echo "<td>", $tl, "</td>";
        echo "<td>", $jnsklmn, "</td>";
        echo "<td>", $nohp, "</td>";
        echo "<td>", $alamat, "</td>";
    echo "</tr>";
    echo "</table> <br>";
    echo "</div>";
?>

</body>

</html>


