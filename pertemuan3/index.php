<?php require_once('data.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prossesing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Custom CSS styles */
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }

        .container {
            max-width: 600px;
        }

        .form-group {
            margin-bottom: 20px;
        }
        .card {
            background-color:grey;
        }
    </style>
</head>

<body>
    <div class="container" p-4>
        <div class="card">
            <div class="card-body">
                <?php
                if (isset($_POST['nim'])) {
                    $nim =  $_POST['nim'];
                    $nama = $_POST['nama'];
                    $jeniskelamin = $_POST['jeniskelamin'];
                    $programstudi = $_POST['programstudi'];
                    $skillkey = $_POST['skills'];
                    $domisili = $_POST['domisili'];
                    $email = $_POST['email'];
                ?>

                    <table class="table table-striped table-hover">
                        <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td><?= $nim ?></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td> : </td>
                            <td> <?= $nama ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?= $jeniskelamin ?></td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>:</td>
                            <td><?= $programstudi ?></td>
                        </tr>
                        <tr>
                            <td>Skills</td>
                            <td>:</td>
                            <td>
                                <?php
                                $point = 0;
                                if (isset($_POST['skills'])) {
                                    foreach ($_POST['skills'] as $skill) {
                                        foreach ($skills as $key => $value) {
                                            if ($skill == $key) {
                                                $point += $value;
                                                echo $key . ",";
                                            }
                                        }
                                    }
                                }
                                $kategori = tentukan_predikat($point);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Point Skill</td>
                            <td>:</td>
                            <td><?= $point ?></td>
                        </tr>
                        <tr>
                            <td>Kategori Skill</td>
                            <td>:</td>
                            <td><?= $kategori ?></td>
                        </tr>
                        <tr>
                            <td>Domisili</td>
                            <td>:</td>
                            <td><?= $domisili ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?= $email ?></td>
                        </tr>
                    </table>
                <?php } else { ?>
                    <form method="post">
                        <div class="form-group row">
                            <label for="nim" class="col-4 col-form-label">NIM :</label>
                            <div class="col-8">
                                <input id="nim" name="nim" type="number" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama Lengkap :</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-card"></i>
                                        </div>
                                    </div>
                                    <input id="nama" name="nama" placeholder="Nama" type="text" class="form-control" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Jenis Kelamin</label>
                            <div class="col-8">
                                <input name="jeniskelamin" id="jenis_kelamin_0" type="radio" required="required" value="laki_laki">
                                <label for="jenis_kelamin_0">Laki - laki</label>
                                <input name="jeniskelamin" id="jenis_kelamin_1" type="radio" required="required" value="perempuan">
                                <label for="jenis_kelamin_1">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="program_studi" class="col-4 col-form-label">Program Studi :</label>
                            <div class="col-8">
                                <select id="programstudi" name="programstudi" required="required" class="form-control">
                                    <option value="">Pilih Prodi</option>
                                    <?php foreach ($prodi as $prodikey => $prodivalue) { ?>
                                        <option value='<?= $prodikey ?>'><?= $prodivalue ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="skills" class="col-4">Skill web & Programming :</label>
                            <div class="col-8">
                                <?php foreach ($skills as $skillkey => $skillvalue) { ?>
                                    <input type="checkbox" name="skills[]" id="<?= $skillkey ?> " value="<?= $skillkey ?>">
                                    <label for="<?= $skillkey ?>"><?= $skillkey ?> </label>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="domisili" class="col-4 col-form-label">Domisili :</label>
                            <div class="col-8">
                                <select id="domisili" name="domisili" class="form-control">
                                    <option value="">Pilih Domisili</option>
                                    <?php foreach ($domisili as $domisilikey => $domisilivalue) { ?>
                                        <option value='<?= $domisilivalue ?>'><?= $domisilivalue ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">Email :</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-gg-circle"></i>
                                        </div>
                                    </div>
                                    <input id="email" name="email" placeholder="Email " type="text" class="form-control" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>