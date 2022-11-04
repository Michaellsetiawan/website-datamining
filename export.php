<?php
require('koneksi.php');
?>
<html>
<head>
  <title>Export</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>Hasil Kmeans</h2>
				<div class="data-tables datatable-dark">
					
                <table class="table table-striped table-bordered" id="mauexport">
	<h3 class="table-header">Kurang Laku</h3>
	
		<thead>
			<tr>
				<td>No.</td>
				<td>Nama Barang Kurang Laku.</td>
				
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
    <table class="table table-striped table-bordered" id="mauexport1">
	<h3 class="table-header">Laku</h3>
		<thead>
			<tr>
				<td>No.</td>
				<td>Nama Barang Laku.</td>
				
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

	<table class="table table-striped table-bordered" id="mauexport2">
	<h3 class="table-header">Sangat Laku</h3>
	
		<thead>
			<tr>
				<td>No.</td>
				<td>Nama Barang Sangat Laku.</td>
				
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
</div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print'
        ]
    } );
    $('#mauexport1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print'
        ]
    } );
    $('#mauexport2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>