<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <div class="card" style="height: 100%;">
        <div class="card-header">
            Sistem Penilaian
        </div>
        <div class="card-body">
            <h4>Form Nilai Siswa</h4>
            <hr>
            <div class="d-flex justify-content-center">
                <div class="col-md-7">
                    <form method="POST" action="nilai_siswa.php" class="mt-3">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Nama
                                Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label font-weight-bold text-right">Mata
                                Kuliah</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="matkul" id="exampleFormControlSelect1">
                                    <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                                    <option value="Basis Data I">Basis Data I</option>
                                    <option value="Pemrograman Web">Pemrograman Web</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Nilai
                                UTS</label>
                            <div class="col-sm-5">
                                <input type="text" name="uts" class="form-control" placeholder="Nilai UTS">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Nilai
                                UAS</label>
                            <div class="col-sm-5">
                                <input type="text" name="uas" class="form-control" placeholder="Nilai UAS">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label font-weight-bold text-right">Nilai
                                Tugas/Praktikum</label>
                            <div class="col-sm-5">
                                <input type="text" name="tugas" class="form-control" placeholder="Nilai Tugas">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail"
                                class="col-sm-4 col-form-label font-weight-bold text-right"></label>
                            <div class="col-sm-5">
                                <input name="proses" class="btn btn-primary" type="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            require_once 'libfungsi.php';

            $proses = $_POST['proses'];
            $nama_siswa = $_POST['nama'];
            $mata_kuliah = $_POST['matkul'];
            $nilai_uts = $_POST['uts'];
            $nilai_uas = $_POST['uas'];
            $nilai_tugas = $_POST['tugas'];
            
            if (!empty($proses)) {
                echo 'Proses : ' .$proses;
                echo '<br/>Nama : ' .$nama_siswa;
                echo '<br/>Mata Kuliah : ' .$mata_kuliah;
                echo '<br/>Nilai UTS : ' .$nilai_uts;
                echo '<br/>Nilai UAS : ' .$nilai_uas;
                echo '<br/>Nilai Tugas Praktikum : ' .$nilai_tugas;

                $total = ($nilai_uts * 30/100) + ($nilai_tugas * 35/100) + ($nilai_uas * 35/100);
                echo '<br/>Total Nilai : <span class="badge badge-warning">'.$total.'</span>';

                if ($total >= 0 && $total <=35) {
                    $grade = 'E';
                    echo '<br/>Grade : <span class="badge badge-primary">'.$grade.'</span>';
                } else if ($total >= 36 && $total <= 55) {
                    $grade = 'D';
                    echo '<br/>Grade : <span class="badge badge-primary">'.$grade.'</span>';
                } else if ($total >= 56 && $total <= 69) {
                    $grade = 'C';
                    echo '<br/>Grade : <span class="badge badge-primary">'.$grade.'</span>';
                } else if ($total >= 70 && $total <= 84) {
                    $grade = 'B';
                    echo '<br/>Grade : <span class="badge badge-primary">'.$grade.'</span>';
                } else if ($total >= 85 && $total <= 100) {
                    $grade = 'A';
                    echo '<br/>Grade : <span class="badge badge-primary">'.$grade.'</span>';
                } else if ($total < 0 ) {
                    $grade = 'I';
                    echo '<br/>Grade : <span class="badge badge-primary">'.$grade.'</span>';
                } else if ($total > 100 ) {
                    $grade = 'I';
                    echo '<br/>Grade : <span class="badge badge-primary">'.$grade.'</span>';
                }
                
                if ($total >= 55) {
                    echo '<br/>Keterangan : <span class="badge badge-success">LULUS</span>';
                } else {
                    echo '<br/>Keterangan : <span class="badge badge-danger">TIDAK LULUS</span>';
                }

                switch ($grade) {
                    case 'E':
                        echo '<br/>Predikat : <span class="badge badge-danger">Sangat Kurang</span>';
                        break;
                    case 'D':
                        echo '<br/>Predikat : <span class="badge badge-warning">Kurang</span>';
                        break;
                    case 'C':
                        echo '<br/>Predikat : <span class="badge badge-primary">Cukup</span>';
                        break;
                    case 'B':
                        echo '<br/>Predikat : <span class="badge badge-info">Memuaskan</span>';
                        break;
                    case 'A':
                        echo '<br/>Predikat : <span class="badge badge-success">Sangat Memuaskan</span>';
                        break;
                    case 'I':
                        echo '<br/>Predikat : <span class="badge badge-danger">Tidak Ada</span>';
                        break;
                   
                }

                echo '<br/>== METODE LIBFUNGSI ==';

                $hasil_ujian = kelulusan($total);
                echo '<br/>DINYATAKAN ' . $hasil_ujian;

                $hasil = grade($total);
                echo '<br/>GRADE ' . $hasil;
                
                $hasil1 = predikat($grade);
                echo '<br/>PREDIKAT ' . $hasil1;
                
            }
            ?>
        </div>
        <div class="card-footer">
            Develop By @isepman @<?php echo date('Y'); ?>
        </div>
    </div>
</body>

</html>