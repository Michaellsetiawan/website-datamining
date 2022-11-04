<?php
//Koneksi Basis Data
$mysqli=new mysqli("localhost","root","","mining");
//Cek Koneksi
if (mysqli_connect_errno()){
	echo "Tidak terhubung";
	exit;
}

//Fungsi mencari kueri single data
function caridata($mysqli,$query){
	$row= $mysqli->query($query)->fetch_array();
	return $row[0];
}

//Inisialisasi Cluster Awal
$jumlahbarang=caridata($mysqli,"select count(*) from barang");
for ($i=0;$i<$jumlahbarang; $i++) { 
	$clusterawal[$i]="1";
}

//Set Default Nilai Centroid 1,2,3
$centro1[0] = array('5','3','7','4','2','3','3','6','2','4','3','2');
$centro2[0] = array('6','9','11','2','3','2','2','4','1','4','1','5');
$centro3[0] = array('21','11','7','6','5','4','6','6','4','5','8','9');


$status='false';
$loop='0';
$x=0;
while ($status=='false'){

	
	//Proses K-Means Perhitungan
	$query="select * from barang";
	$result=$mysqli->query($query);
	while ($data=mysqli_fetch_assoc($result)) {
		extract($data);
		$hasilc1=0;
		$hasilc2=0;
		$hasilc3=0;

		

		//Proses Pencarian Nilai Centro 1
		$hasilc1=sqrt(pow($januari-$centro1[$loop][0],2) +
			pow($februari-$centro1[$loop][1],2) + 
			pow($maret-$centro1[$loop][2],2)+
            pow($april-$centro1[$loop][3],2)+
            pow($mei-$centro1[$loop][4],2)+
            pow($juni-$centro1[$loop][5],2)+
            pow($juli-$centro1[$loop][6],2)+
            pow($agustus-$centro1[$loop][7],2)+
            pow($september-$centro1[$loop][8],2)+
            pow($oktober-$centro1[$loop][9],2)+
            pow($november-$centro1[$loop][10],2)+
            pow($desember-$centro1[$loop][11],2))
            ;
			
			// echo "===============";
			// echo $januari;
			// echo $hasilc1;
			// echo "===============\n";

		//Proses Pencarian Nilai Centro 2
		$hasilc2=sqrt(pow($januari-$centro2[$loop][0],2) +
			pow($februari-$centro2[$loop][1],2) + 
			pow($maret-$centro2[$loop][2],2)+
            pow($april-$centro2[$loop][3],2)+
            pow($mei-$centro2[$loop][4],2)+
            pow($juni-$centro2[$loop][5],2)+
            pow($juli-$centro2[$loop][6],2)+
            pow($agustus-$centro2[$loop][7],2)+
            pow($september-$centro2[$loop][8],2)+
            pow($oktober-$centro2[$loop][9],2)+
            pow($november-$centro2[$loop][10],2)+
            pow($desember-$centro2[$loop][11],2));

		//Proses Pencarian Nilai Centro 3
		$hasilc3=sqrt(pow($januari-$centro3[$loop][0],2) +
			pow($februari-$centro3[$loop][1],2) + 
			pow($maret-$centro3[$loop][2],2)+
			pow($april-$centro3[$loop][3],2) + 
			pow($mei-$centro3[$loop][4],2) + 
			pow($juni-$centro3[$loop][5],2) + 
			pow($juli-$centro3[$loop][6],2) + 
			pow($agustus-$centro3[$loop][7],2) + 
			pow($september-$centro3[$loop][8],2) + 
			pow($oktober-$centro3[$loop][9],2) + 
			pow($november-$centro3[$loop][10],2) + 
			pow($desember-$centro3[$loop][11],2));

		//Mencari Nilai Terkecil
		if ($hasilc1<$hasilc2 && $hasilc1<$hasilc3){
			$clusterakhir[$x]='C1';
			updatebarang($mysqli,$id_barang,'C1');

		}else if($hasilc2<$hasilc1 && $hasilc2<$hasilc3){
			$clusterakhir[$x]='C2';
			updatebarang($mysqli,$id_barang,'C2');

		}else{
			$clusterakhir[$x]='C3';
			updatebarang($mysqli,$id_barang,'C3');

		}
		//Penambhan Counter Index
		$x+=1;



	}

	$loop+=1;
	//Proses mencari centroid baru ambil dari basis data.
	//Centroid Baru Pusat 1
	
	$centro1[$loop][0]=caridata($mysqli,"select avg(januari) from barang where cluster='C1'");
	$centro1[$loop][1]=caridata($mysqli,"select avg(februari) from barang where cluster='C1'");
	$centro1[$loop][2]=caridata($mysqli,"select avg(maret) from barang where cluster='C1'");
	$centro1[$loop][3]=caridata($mysqli,"select avg(april) from barang where cluster='C1'");
	$centro1[$loop][4]=caridata($mysqli,"select avg(mei) from barang where cluster='C1'");
	$centro1[$loop][5]=caridata($mysqli,"select avg(juni) from barang where cluster='C1'");
	$centro1[$loop][6]=caridata($mysqli,"select avg(juli) from barang where cluster='C1'");
	$centro1[$loop][7]=caridata($mysqli,"select avg(agustus) from barang where cluster='C1'");
	$centro1[$loop][8]=caridata($mysqli,"select avg(september) from barang where cluster='C1'");
	$centro1[$loop][9]=caridata($mysqli,"select avg(oktober) from barang where cluster='C1'");
	$centro1[$loop][10]=caridata($mysqli,"select avg(november) from barang where cluster='C1'");
	$centro1[$loop][11]=caridata($mysqli,"select avg(desember) from barang where cluster='C1'");

	//Centroid Baru Pusat 2
	$centro2[$loop][0]=caridata($mysqli,"select avg(januari) from barang where cluster='C2'");
	$centro2[$loop][1]=caridata($mysqli,"select avg(februari) from barang where cluster='C2'");
	$centro2[$loop][2]=caridata($mysqli,"select avg(maret) from barang where cluster='C2'");
	$centro2[$loop][3]=caridata($mysqli,"select avg(april) from barang where cluster='C2'");
	$centro2[$loop][4]=caridata($mysqli,"select avg(mei) from barang where cluster='C2'");
	$centro2[$loop][5]=caridata($mysqli,"select avg(juni) from barang where cluster='C2'");
	$centro2[$loop][6]=caridata($mysqli,"select avg(juli) from barang where cluster='C2'");
	$centro2[$loop][7]=caridata($mysqli,"select avg(agustus) from barang where cluster='C2'");
	$centro2[$loop][8]=caridata($mysqli,"select avg(september) from barang where cluster='C2'");
	$centro2[$loop][9]=caridata($mysqli,"select avg(oktober) from barang where cluster='C2'");
	$centro2[$loop][10]=caridata($mysqli,"select avg(november) from barang where cluster='C2'");
	$centro2[$loop][11]=caridata($mysqli,"select avg(desember) from barang where cluster='C2'");

	//Centroid Baru Pusat 3
	$centro3[$loop][0]=caridata($mysqli,"select avg(januari) from barang where cluster='C3'");
	$centro3[$loop][1]=caridata($mysqli,"select avg(februari) from barang where cluster='C3'");
	$centro3[$loop][2]=caridata($mysqli,"select avg(maret) from barang where cluster='C3'");
	$centro3[$loop][3]=caridata($mysqli,"select avg(april) from barang where cluster='C3'");
	$centro3[$loop][4]=caridata($mysqli,"select avg(mei) from barang where cluster='C3'");
	$centro3[$loop][5]=caridata($mysqli,"select avg(juni) from barang where cluster='C3'");
	$centro3[$loop][6]=caridata($mysqli,"select avg(juli) from barang where cluster='C3'");
	$centro3[$loop][7]=caridata($mysqli,"select avg(agustus) from barang where cluster='C3'");
	$centro3[$loop][8]=caridata($mysqli,"select avg(september) from barang where cluster='C3'");
	$centro3[$loop][9]=caridata($mysqli,"select avg(oktober) from barang where cluster='C3'");
	$centro3[$loop][10]=caridata($mysqli,"select avg(november) from barang where cluster='C3'");
	$centro3[$loop][11]=caridata($mysqli,"select avg(desember) from barang where cluster='C3'");
	
	$status='true';
	for ($i=0;$i<$jumlahbarang;$i++) { 
		if($clusterawal[$i]!=$clusterakhir[$i]){
			$status='false';
		}
	}

	if($status=='false'){
		$clusterawal=$clusterakhir;
	}
}



function updatebarang($mysqli,$id_barang,$cluster){


	$stmt=$mysqli->prepare("update barang set 
		cluster=?
		where id_barang=?");
	$stmt->bind_param("ss",
		$cluster,
		$id_barang);
	$stmt->execute();
	$stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
			crossorigin="anonymous"
		/>
		<title>Data Mining K-means</title>
	</head>
	<body>
		<h1></h1>
		<nav class="navbar navbar-expand-lg bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="skripsi.html">Data Mining</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNav"
					aria-controls="navbarNav"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="home.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="aksi.php">Hasil</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

    <?php
      require 'vendor/autoload.php';
      include "koneksi.php";
    ?>
<a href="export.php" class="btn btn-info">Export Data</a>

	<div class="container">
	<table class="table table-striped table-bordered">
	<h3 class="table-header">Kurang Laku</h3>
	
		<thead>
			<tr>
				<td>No.</td>
				<td>Nama.</td>
				
			</tr>
		</thead>
		<tbody>
	 <?php
	  	$no = 0;
		$sql="select nama from barang where cluster='C1' order by id_barang asc";

      $hasil = mysqli_query($kon,$sql);
	  
      while ($data=mysqli_fetch_array($hasil)){
      

     
	 
		$no++;
            ?>
            
            <tr>
			<td><?php echo $no;?></td>     
              <td><?php echo $data['nama'];?></td>      
            </tr>
            
            <?php
            }
            ?>
			</tbody>
	</table>

	<table class="table table-striped table-bordered">
	<h3 class="table-header">Laku</h3>
		<thead>
			<tr>
				<td>No.</td>
				<td>Nama.</td>
				
			</tr>
		</thead>
		<tbody>
	 <?php
	 $no = 0;
	 $sql="select nama from barang where cluster='C2' order by id_barang asc";

   $hasil = mysqli_query($kon,$sql);
   
   while ($data=mysqli_fetch_array($hasil)){
   

  
  
	 $no++;
		 ?>
		 
		 <tr>
		 <td><?php echo $no;?></td>     
		   <td><?php echo $data['nama'];?></td>      
		 </tr>
		 
		 <?php
		 }
            ?>
		</tbody>
	</table>

	<table class="table table-striped table-bordered">
	<h3 class="table-header">Sangat Laku</h3>
	
		<thead>
			<tr>
				<td>No.</td>
				<td>Nama.</td>
				
			</tr>
		</thead>
		<tbody>
	 <?php
	 $no = 0;
	 $sql="select nama from barang where cluster='C3' order by id_barang asc";

   $hasil = mysqli_query($kon,$sql);
   
   while ($data=mysqli_fetch_array($hasil)){
   

  
  
	 $no++;
		 ?>
		 
		 <tr>
		 <td><?php echo $no;?></td>     
		   <td><?php echo $data['nama'];?></td>      
		 </tr>
		 
		 <?php
		 }
            ?>
			</tbody>
	</table>
	</div>
	

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
			crossorigin="anonymous"
		></script>
	</body>
</html>
