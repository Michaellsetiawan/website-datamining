<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Data Mining K-means</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="skripsi.html">Data Mining</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hasil.html">Hasil</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
      
      <div class="container">
              <!-- PHP UPDATE DATA -->
              <?php
                
                include "koneksi.php";
                
                function input($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                }
                
                if(isset($_GET['id_barang'])){
                  $id_barang=input($_GET["id_barang"]);

                  $sql="select * from barang where id_barang=$id_barang";
                  echo $sql;
                  $hasil=mysqli_query($kon,$sql);
                  $data=mysqli_fetch_assoc($hasil);
                
                }

                if($_SERVER["REQUEST_METHOD"]=="POST"){
                  
                  $id_barang=htmlspecialchars($_POST["id_barang"]);
                  $nama=input($_POST["nama"]);
                  $januari=input($_POST["januari"]);
                  $februari=input($_POST["februari"]);
                  $maret=input($_POST["maret"]);
                  $april=input($_POST["april"]);
                  $mei=input($_POST["mei"]);
                  $juni=input($_POST["juni"]);
                  $juli=input($_POST["juli"]);
                  $agustus=input($_POST["agustus"]);
                  $september=input($_POST["september"]);
                  $oktober=input($_POST["oktober"]);
                  $november=input($_POST["november"]);
                  $desember=input($_POST["desember"]);


                  $sql="UPDATE barang SET
                      nama='$nama',
                      januari='$januari',
                      februari='$februari',
                      maret='$maret',
                      april='$april',
                      mei='$mei',
                      juni='$juni',
                      juli='$juli',
                      agustus='$agustus',
                      september='$september',
                      oktober='$oktober',
                      november='$november',
                      desember='$desember'
                      WHERE id_barang=$id_barang";

                    if (mysqli_query($kon, $sql)) {
                        header('Location:home.php');
                    } else {
                        echo "Error updating record: " . mysqli_error($kon);
                    }

                    mysqli_close($kon);
                }
                ?>

              <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

              <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required />
              </div>
              <div class="form-group">
                <label>Januari</label>
                <input type="number" name="januari" class="form-control" value="<?php echo $data['januari']; ?>" required/>
              </div>
              <div class="form-group">
                <label>Februari</label>
                <input type="number" name="februari" class="form-control" value="<?php echo $data['februari']; ?>" required/>
              </div>
              <div class="form-group">
                <label>Maret</label>
                <input type="number" name="maret" class="form-control" value="<?php echo $data['maret']; ?>" required/>
              </div>
              <div class="form-group">
                <label>April</label>
                <input type="number" name="april" class="form-control" value="<?php echo $data['april']; ?>" required />
              </div> 
              <div class="form-group">
                <label>Mei</label>
                <input type="number" name="mei" class="form-control" value="<?php echo $data['mei']; ?>" required />
              </div>
              <div class="form-group">
                <label>Juni</label>
                <input type="number" name="juni" class="form-control" value="<?php echo $data['juni']; ?>" required/>
              </div>
              <div class="form-group">
                <label>Juli</label>
                <input type="number" name="juli" class="form-control" value="<?php echo $data['juli']; ?>" required/>
              </div>
              <div class="form-group">
                <label>Agustus</label>
                <input type="number" name="agustus" class="form-control" value="<?php echo $data['agustus']; ?>" required/>
              </div>
              <div class="form-group">
                <label>September</label>
                <input type="number" name="september"  class="form-control" value="<?php echo $data['september']; ?>" required/>
              </div>
              <div class="form-group">
                <label>Oktober</label>
                <input type="number" name="oktober" class="form-control" value="<?php echo $data['oktober']; ?>" required/>
              </div>
              <div class="form-group">
                <label>November</label>
                <input type="number" name="november" class="form-control" value="<?php echo $data['november']; ?>" required/>
              </div>
              <div class="form-group">
                <label>Desember</label>
                <input type="number" name="desember" class="form-control" value="<?php echo $data['desember']; ?>" required/>
              </div>

              <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>"/>

              <div class="modal-footer">
                <a href="home.php" class="btn btn-warning" role="button">Batal</a>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>

</html>