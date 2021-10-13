# PEMROGRAMAN-WEB-DINAMIS
Contributor by Krisna Dewa Pratama(1900018336)

<h3 align="left">Languages</h3>
<p align="left"> <a href="https://www.w3schools.com/css/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a> <a href="https://www.w3.org/html/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> </p>

List Praktikum Pertemuan 1 <br>
    - Counter <br>
    - Guestbook <br>
    - Upload File <br>

List Praktikum Pertemuan 2 <br>
    - SQL <br>
    - Query SQL <br>

QUERY Langkah - langkah Praktikum <br>

List Query Praktikum 2 <br>
Langkah2 dan Postest no 1 <br>
Membuat database akademik menggunakan perintah : <br>
    CREATE database akademik: <br>
Setelah itu menampilkan semua database menggunakan perintah : <br>
    SHOW databases;<br>
Setelah itu untuk menggunakan database akademik : <br>
    USE akademik;<br>

Membuat table mahasiswa yang berisi nim, nama, jkel, alamat tanggallahir.<br>
Dengan perintah : <br>
    CREATE TABLE mahasiswa ( nim varchar(5), nama varchar(50), jkel varchar(1), alamat text, tanggallahir date, Primary Key (nim) ); <br>

setelah itu menginputkan data pada table mahasiswa dengan perintah :<br>
    INSERT INTO mahasiswa VALUES ('MHS01', 'Siti Aminah','P', 'SOLO', '1995-10-01');<br>
    INSERT INTO mahasiswa VALUES ('MHS02', 'Rita', 'P','SOLO', '1999-01-01');<br>
    INSERT INTO mahasiswa VALUES ('MHS03', 'Amirudin','L', 'SEMARANG', '1998-08-11');<br>
    INSERT INTO mahasiswa VALUES ('MHS04', 'Siti Maryam','P', 'JAKARTA', '1995-04-15');<br>

Perintah untuk menampilkan isi dari table mahasiswa : <br>
    SELECT * FROM mahasiswa;<br>
Perintah untuk menampilkan isi dari table mahasiswa yang beralamat SOLO : <br>
    SELECT * FROM mahasiswa WHERE alamat = 'SOLO'; <br>

Menambahkan satu field baru yaitu jurusan kedalam table mahasiswa menggunakan perintah : <br>
    ALTER TABLE mahasiswa ADD jurusan varchar (50);<br>
Menambahkan data pada field baru yaitu jurusan.<br>
Dengan perintah UPDATE <br>
    UPDATE mahasiswa SET jurusan ='Teknik informatika' WHERE nama='Siti Aminah' OR nim='MHS01';<br>
    UPDATE mahasiswa SET jurusan ='Teknik Pangan' WHERE nama='Rita' OR nim='MHS02';<br>
    UPDATE mahasiswa SET jurusan ='Teknik Industri' WHERE nama='Amirudin' OR nim='MHS03';<br>
    UPDATE mahasiswa SET jurusan ='Sastra Inggris' WHERE nama='Siti Maryam' OR nim='MHS04'; <br>

Perintah untuk menampilkan nama dan alamat pada table mahasiswa<br>
    SELECT nama, alamat FROM mahasiswa;<br>
Perintah untuk menampilkan nim dan nama pada table mahasiswa dengan jurusan Teknik informatika<br>
    SELECT nim,nama FROM mahasiswa WHERE jurusan='Teknik Informatika';<br>
Perintah untuk menampilkan table mahasiswa dengan maksimal 2 nim<br>
    SELECT * FROM mahasiswa ORDER BY nim LIMIT 2;<br>
Perintah untuk menampilkan data pada table mahasiswa dengan nama pengurutan dari kecil ke besar atau (ASC) ascending maksimal 3 baris yang ditampilkan<br>
    SELECT * FROM mahasiswa ORDER BY nama ASC LIMIT 0,3;<br>
Perintah untuk menampilkan data pada table mahasiswa dengan tanggallahir pengurutan dari besar ke kecil atau (DESC) Descending maksimal 2 baris yang ditampilkan<br>
    SELECT * FROM mahasiswa ORDER BY tanggallahir DESC LIMIT 0,2;<br>
Perintah untuk menampilkan data nama dan jurusan dari table mahasiswa dengan alamat = 'SEMARANG'<br>
    SELECT nama,jurusan FROM mahasiswa WHERE alamat='SEMARANG';<br>

