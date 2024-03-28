<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 shadow">
        <form method="post">
          <div class="form">
            <h5 class="card-header">Form BMI</h5>
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama :</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div>
                  <input id="nama" name="nama" placeholder="Nama" type="text" required="required" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="bb" class="col-4 col-form-label">Berat Badan :</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-anchor"></i>
                    </div>
                  </div>
                  <input id="beratbadan" name="beratbadan" type="number" class="form-control" required="required">
                  <div class="input-group-append">
                    <div class="input-group-text">cm</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="tb" class="col-4 col-form-label">Tinggi Badan :</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-blind"></i>
                    </div>
                  </div>
                  <input id="tinggibadan" name="tinggibadan" type="number" class="form-control" required="required">
                  <div class="input-group-append">
                    <div class="input-group-text">cm</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="umur" class="col-4 col-form-label">Umur :</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-bell"></i>
                    </div>
                  </div>
                  <input id="umur" name="umur" type="number" class="form-control" required="required">
                  <div class="input-group-append">
                    <div class="input-group-text">Thn</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4">Jenis Kelamin</label>
              <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="kelamin" id="radio_0" type="radio" class="custom-control-input" value="laki - laki" required="required">
                  <label for="radio_0" class="custom-control-label">Laki - laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="kelamin" id="radio_1" type="radio" class="custom-control-input" value="perempuan" required="required">
                  <label for="radio_1" class="custom-control-label">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-4 shadow">
        <div class="hasil">
          <h5 class="card-header">Hasil Evaluasi</h5>
          <div class="card_hasilbmi p-3">

            <?php
            if (isset($_POST['submit'])) {
              $nama = $_POST['nama'];
              $beratbadan = $_POST['beratbadan'];
              $tinggibadan = $_POST['tinggibadan'];
              $umur = $_POST['umur'];
              $jeniskelamin = $_POST['kelamin'];

            ?>

              <table class="table table-striped table-hover">
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><?= $nama ?></td>
                </tr>
                <tr>
                  <td>Berat Badan</td>
                  <td> : </td>
                  <td> <?= $beratbadan ?></td>
                </tr>
                <tr>
                  <td>Tinggi badan</td>
                  <td>:</td>
                  <td><?= $tinggibadan ?></td>
                </tr>
                <tr>
                  <td>Umur</td>
                  <td>:</td>
                  <td><?= $umur ?></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td><?= $jeniskelamin ?></td>
                </tr>
                <tr>
                  <td>BMI</td>
                  <td>:</td>
                  <td><?= $bmi ?></td>
                </tr>
                <tr>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td><?= $keterangan ?></td>
                </tr>
              </table>
            <?php } else { ?>
              <table class="table table-striped table-hover">
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Berat Badan</td>
                  <td> : </td>
                  <td> </td>
                </tr>
                <tr>
                  <td>Tinggi badan</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Umur</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>BMI</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Keterangan</td>
                  <td>:</td>
                  <td></td>
                </tr>
              </table>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  require_once('bmi.php')
  ?>
</body>

</html>