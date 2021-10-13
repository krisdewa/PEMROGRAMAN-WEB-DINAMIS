# PEMROGRAMAN-WEB-DINAMIS
Contributor by Krisna Dewa Pratama(1900018336)

<h3 align="left">Languages</h3>
<p align="left"> <a href="https://www.w3schools.com/css/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a> <a href="https://www.w3.org/html/" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> </p>

List Praktikum Pertemuan 1 <br>
    - Counter <br>
    - Guestbook <br>
    - Upload File <br>

List Praktikum Pertemuan 2
    - SQL <br>
    - Query SQL
    QUERY Langkah - langkah Praktikum

List Query Praktikum 2
Langkah2
Membuat database akademik menggunakan perintah : 
    CREATE database akademik: 
Setelah itu menampilkan semua database menggunakan perintah : 
    SHOW databases;
Setelah itu untuk menggunakan database akademik : 
    USE akademik;

Membuat table mahasiswa yang berisi nim, nama, jkel, alamat tanggallahir.
Dengan perintah : 
    CREATE TABLE mahasiswa ( nim varchar(5), nama varchar(50), jkel varchar(1), alamat text, tanggallahir date, Primary Key (nim) ); 

setelah itu menginputkan data pada table mahasiswa dengan perintah :
    INSERT INTO mahasiswa VALUES ('MHS01', 'Siti Aminah','P', 'SOLO', '1995-10-01');
    INSERT INTO mahasiswa VALUES ('MHS02', 'Rita', 'P','SOLO', '1999-01-01');
    INSERT INTO mahasiswa VALUES ('MHS03', 'Amirudin','L', 'SEMARANG', '1998-08-11');
    INSERT INTO mahasiswa VALUES ('MHS04', 'Siti Maryam','P', 'JAKARTA', '1995-04-15');

Perintah untuk menampilkan isi dari table mahasiswa : 
    SELECT * FROM mahasiswa;
Perintah untuk menampilkan isi dari table mahasiswa yang beralamat SOLO : 
    SELECT * FROM mahasiswa WHERE alamat = 'SOLO'; 

Menambahkan satu field baru yaitu jurusan kedalam table mahasiswa menggunakan perintah : 
    ALTER TABLE mahasiswa ADD jurusan varchar (50);
Menambahkan data pada field baru yaitu jurusan.
Dengan perintah UPDATE 
    UPDATE mahasiswa SET jurusan ='Teknik informatika' WHERE nama='Siti Aminah' OR nim='MHS01';
    UPDATE mahasiswa SET jurusan ='Teknik Pangan' WHERE nama='Rita' OR nim='MHS02';
    UPDATE mahasiswa SET jurusan ='Teknik Industri' WHERE nama='Amirudin' OR nim='MHS03';
    UPDATE mahasiswa SET jurusan ='Sastra Inggris' WHERE nama='Siti Maryam' OR nim='MHS04'; 

Perintah untuk menampilkan nama dan alamat pada table mahasiswa
    SELECT nama, alamat FROM mahasiswa;
Perintah untuk menampilkan nim dan nama pada table mahasiswa dengan jurusan Teknik informatika
    SELECT nim,nama FROM mahasiswa WHERE jurusan='Teknik Informatika';
Perintah untuk menampilkan table mahasiswa dengan maksimal 2 nim
    SELECT * FROM mahasiswa ORDER BY nim LIMIT 2;
Perintah untuk menampilkan data pada table mahasiswa dengan nama pengurutan dari kecil ke besar atau (ASC) ascending maksimal 3 baris yang ditampilkan
    SELECT * FROM mahasiswa ORDER BY nama ASC LIMIT 0,3;
Perintah untuk menampilkan data pada table mahasiswa dengan tanggallahir pengurutan dari besar ke kecil atau (DESC) Descending maksimal 2 baris yang ditampilkan
    SELECT * FROM mahasiswa ORDER BY tanggallahir DESC LIMIT 0,2;
Perintah untuk menampilkan data nama dan jurusan dari table mahasiswa dengan alamat = ‘SEMARANG’
    SELECT nama,jurusan FROM mahasiswa WHERE alamat='SEMARANG';

