<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="GET" action="form_nilai.php">
Nama : <input type="text" name="nama" value="" size="30"/><br/>
Mata Kuliah :
    <select name="matkul">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEB1">Pemograman Web</option>
</select><br/>
Nilai UTS : <input type="text" name="nilai_uts" value="" size="6"/><br/>
Nilai UAS : <input type="text" name="nilai_uas" value="" size="6"/><br/>
Nilai Tugas : <input type="text" name="nilai_tugas" value="" size="6"/><br/>
    <input type="submit" value="Simpan" name="proses"/>

</form>

<?php
$proses = $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
?>
</body>
</html>
