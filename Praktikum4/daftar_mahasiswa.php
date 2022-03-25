<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 20px;
        }

        .atas_tabel {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            color: red;
        }

        .bawah_tabel {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            color: red;
        }

        .tabel1 {
            padding: 10px 40px;
        }

        .tabel2 {
            padding: 10px 50px;
        }

        .tabel3 {
            padding: 10px 134px;
        }

        table td {
            padding: 10px 10px;
            text-align: center;
        }

        .no {
            text-align: center;
        }

        table, th {
            border-bottom: 2px solid black;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="#">WEB02</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Review PHP</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider">
                                    </div> <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">PHP5 OOP</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider">
                                    </div> <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="text" />
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                Submit
                            </button>
                        </form>
                        <ul class="navbar-nav ml-md-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider">
                                    </div> <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="atas_tabel">
                    <h6>Show
                        <select>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                        entries
                    </h6>
                    <h6>Search : <input type="text" name="search" id="search"></h6>
                </div>
                <table border="1" style="background-color: #B4ECE3">
                <?php
                    require_once "class_mahasiswa.php";

                    $siswa1 = new Mahasiswa("01", "Dhodi", 2020, "Teknik Informatika", 3.7);
                    $siswa2 = new Mahasiswa("02", "Yoga", 2020, "Teknik Informatika", 3.8);
                    $siswa3 = new Mahasiswa("03", "Sahida", 2020, "Sistem Informasi", 3.9);
                    $siswa4 = new Mahasiswa("04", "Coki", 2020, "Sistem Informasi", 3.9);
                ?>
                    <thead>
                        <tr>
                            <th class="tabel1">No</th>
                            <th class="tabel1">NIM</th>
                            <th class="tabel3">Nama</th>
                            <th class="tabel1">Prodi</th>
                            <th class="tabel2">Thn Angkatan</th>
                            <th class="tabel1">IPK</th>
                            <th class="tabel1">Predikat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="no">1</td>
                            <?= $siswa1->cetak()?>
                            <td><?= $siswa1->predikat_ipk()?></td>
                        </tr>
                        <tr>
                            <td class="no">2</td>
                            <?= $siswa2->cetak()?>
                            <td><?= $siswa2->predikat_ipk()?></td>
                        </tr>
                        <tr>
                            <td class="no">3</td>
                            <?= $siswa3->cetak()?>
                            <td><?= $siswa3->predikat_ipk()?></td>
                        </tr>
                        <tr>
                            <td class="no">4</td>
                            <?= $siswa4->cetak()?>
                            <td><?= $siswa4->predikat_ipk()?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="bawah_tabel">
                    <h6> 1 to 4 </h6>
                    <h6><a href="#" style="text-decoration: none;">Sebelumnya&emsp;</a><input type="text" value="4" style="width: 18px;"><a href="#" style="text-decoration: none;">&emsp;Selanjutnya</a></h6>
                </div>
                <hr />
                <p><strong>Lab Pemrograman Web Lanjutan</strong></p>
                <P>Dosen: Sirojul Munir S.Si, M.Kom</P>
                <p>STT-NF - Kampus B</p>
            </div>
        </div>
    </div>
</body>

</html>