<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan 4</title>
    <style>
        .error {
            color: #FF0000;
        }

    </style>
</head>

<body>

<?php
    // define variables and set to empty values
    $namaErr = $emailErr = $genderErr = $websiteErr = "";
    $nama = $email = $gender = $comment = $website = "";

    // Percabangan jika Menerima inputan dari action POST pada FORM inputan
    if ($_SERVER["REQUEST_METHOD"] == "POST") { // proses jika sudah submit form field
        // Validasi jika nama kosong maka output "Nama harus diisi"
        if (empty($_POST["nama"])) {
            $namaErr = "Nama harus diisi";
        } else { //jika nama terisi akan memasukkan data nama ke variabel nama untuk dioutput kan
            $nama = test_input($_POST["nama"]);
        }
        // Validasi jika email kosong maka output "email harus diisi"
        if (empty($_POST["email"])) {
            $emailErr = "Email harus diisi";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            // check if e-mail address is well-formed
            // filter untuk cek apakah email tersebut valid/benar2 email
            // jika bukan email maka akan output "Email tidak sesuai format"
            $emailErr = "Email tidak sesuai format";
        } else { //jika email terisi akan memasukkan data email ke variabel email untuk dioutput kan
            $email = test_input($_POST["email"]);
        }
        // Validasi jika website kosong maka output website kosong
        if (empty($_POST["website"])) {
            $website = "";
        } else { //jika website terisi akan memasukkan data website ke variabel website untuk dioutput kan
            $website = test_input($_POST["website"]);
        }
        // Validasi jika comment kosong maka output comment kosong
        if (empty($_POST["comment"])) {
            $comment = "";
        } else { //jika comment terisi akan memasukkan data comment ke variabel comment untuk dioutput kan
            $comment = test_input($_POST["comment"]);
        }
        // validasi jika data kosong maka output "Gender harus dipilih"
        if (empty($_POST["gender"])) { 
            $genderErr = "Gender harus dipilih";
        } else { //jika gender terisi akan memasukkan data gender ke variabel gender untuk dioutput kan
            $gender = test_input($_POST["gender"]);
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

    <h2>Posting Komentar </h2>
    <p><span class="error">* Harus Diisi.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td>Nama :</td>
                <td><input type="text" name="nama">
                    <span class="error">* <?php echo $namaErr;?></span>
                </td>
            </tr>
            <tr>
                <td>E-mail : </td>
                <td><input type="text" name="email">
                    <span class="error">* <?php echo $emailErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Website :</td>
                <td> <input type="text" name="website">
                    <span class="error"><?php echo $websiteErr;?></span>
                </td>
            </tr>
            <tr>
                <td>Komentar :</td>
                <td> <textarea name="comment" rows="5" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Gender :</td>
                <td>
                    <input type="radio" name="gender" value="L">Laki-Laki
                    <input type="radio" name="gender" value="P">Perempuan
                    <span class="error">* <?php echo $genderErr;?></span>
                </td>
            </tr>
            <td>
                <input type="submit" name="submit" value="Submit">
                
            </td>
        </table>
    </form>

<?php
    echo "<br><h2>Data yang anda isi:</h2>";
    echo "<table width='450' border='5' cellpadding='15' cellspacing='1';>";

    echo "<tr>";
    echo "<th>Nama</th>";
    echo "<th> ", $nama ," </th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>E-mail</th>";
    echo "<th> ", $email ," </th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Website</th>";
    echo "<th> ", $website ," </th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Comment</th>";
    echo "<th> ", $comment ," </th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Gender</th>";
    echo "<th> ", $gender ," </th>";
    echo "</tr>";

    echo "</table>";
?>

</body>

</html>


