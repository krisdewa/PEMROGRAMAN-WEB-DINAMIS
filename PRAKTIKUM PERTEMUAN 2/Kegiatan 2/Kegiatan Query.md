QUERY Langkah - langkah Praktikum

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

