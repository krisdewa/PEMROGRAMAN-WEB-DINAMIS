<?php
    // Create database connection using config file
    include_once("koneksi.php");
    // Fetch all users data from database
    $result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halaman Utama </title>
</head>
<body>
    <a href="tambah.php"> Tambah Data Baru </a><br /><br />
    <table width='80%' border = 1>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>tgl lahir</th>
            <th>Update</th>
        </tr>
        <?php
            while($user_data = mysqli_fetch_array($result)) {
                echo "<tr><td>".$user_data['nim']."</td>";
                echo "<td>".$user_data['nama']."</td>";
                echo "<td>".$user_data['jkel']."</td>";
                echo "<td>".$user_data['alamat']."</td>";
                echo "<td>".$user_data['tgllhr']."</td>";
                echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>";
            }
        ?>
    </table>
</body>

</html>