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
                <a class="nav-link" href="hasilcluster0.php">Hasil</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <?php
        include "koneksi.php";
        if(isset($_GET['id_barang'])){
          $id_barang=htmlspecialchars($_GET["id_barang"]);

          $sql="delete from barang where id_barang='$id_barang'";
          $hasil=mysqli_query($kon,$sql);

            if($hasil){
              header("Location:home.php");
            }
            else{
              echo "<div class='alert alert-danger'>Data Gagal dihapus</div>";
            }
          }
          ?>
      <div class="container">
        <a type="button" class="btn btn-primary" href="create.php">
          Add New Data
        </a>
        
       <form method="POST" action="import.php" enctype="multipart/form-data">

        <input type="file" name="file" class="form-control" required="required"> 
        <button type="submit" name="Submit" class="btn btn-success">Upload</button> 
       
      </form>
        <a type="button" class="btn btn-success" href="import.php">Import Excel</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama </th>
              <th scope="col">Januari</th>
              <th scope="col">Februari</th>
              <th scope="col">Maret</th>
              <th scope="col">April</th>
              <th scope="col">Mei</th>
              <th scope="col">Juni</th>
              <th scope="col">Juli</th>
              <th scope="col">Agustus</th>
              <th scope="col">September</th>
              <th scope="col">Oktober</th>
              <th scope="col">November</th>
              <th scope="col">Desember</th>
              <th scope="col">Cluster</th>
              
            </tr>
          </thead>
          <?php
          include "koneksi.php";
          $sql="select * from barang order by id_barang asc";

          $hasil = mysqli_query($kon,$sql);
          $no=0;
          while ($data=mysqli_fetch_array($hasil)){
            $no++;

            ?>
            <tbody>
            <tr>
              <td><?php echo $no;?></td>
              <td><?php echo $data["nama"];?></td>
              <td><?php echo $data["januari"];?></td>
              <td><?php echo $data["februari"];?></td>
              <td><?php echo $data["maret"];?></td>
              <td><?php echo $data["april"];?></td>
              <td><?php echo $data["mei"];?></td>
              <td><?php echo $data["juni"];?></td>
              <td><?php echo $data["juli"];?></td>
              <td><?php echo $data["agustus"];?></td>
              <td><?php echo $data["september"];?></td>
              <td><?php echo $data["oktober"];?></td>
              <td><?php echo $data["november"];?></td>
              <td><?php echo $data["desember"];?></td>
              <td><?php echo $data["cluster"];?></td>
              <td>
              <a href="update.php?id_barang=<?php echo htmlspecialchars($data["id_barang"]);?>" class="btn btn-warning" role="button">Edit</a>
              <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_barang=<?php echo $data['id_barang'];?>"class="btn btn-danger" role="button" >Delete</a>
              
              </td>
              <td>
              </td>
            </tr>
            </tbody>
            <?php
            }
            ?>
            
        </table>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>

</html>