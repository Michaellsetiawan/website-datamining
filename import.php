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
                <a class="nav-link" href="aksi.php">Hasil</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<?php


require('library/php-excel-reader/excel_reader2.php');
require('library/SpreadsheetReader.php');
require('koneksi.php');


if(isset($_POST['Submit'])){


  $mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
  if(in_array($_FILES["file"]["type"],$mimes)){


    $uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);


    $Reader = new SpreadsheetReader($uploadFilePath);


    $totalSheet = count($Reader->sheets());


    echo "You have total ".$totalSheet." sheets";

    /* For Loop for all sheets */
    for($i=0;$i<$totalSheet;$i++){


      $Reader->ChangeSheet($i);


      foreach ($Reader as $Row)
      {
        
        $nama     	= isset($Row[0]) ? $Row[0] : '';
        $januari   = isset($Row[1]) ? $Row[1] : '';
        $februari  		= isset($Row[2]) ? $Row[2] : '';
        $maret  		= isset($Row[3]) ? $Row[3] : '';
        $april  		= isset($Row[4]) ? $Row[4] : '';
        $mei  		= isset($Row[5]) ? $Row[5] : '';
        $juni  		= isset($Row[6]) ? $Row[6] : '';
        $juli  		= isset($Row[7]) ? $Row[7] : '';
        $agustus  		= isset($Row[8]) ? $Row[8] : '';
        $september  		= isset($Row[9]) ? $Row[9] : '';
        $oktober  		= isset($Row[10]) ? $Row[10] : '';
        $november  		= isset($Row[11]) ? $Row[11] : '';
        $desember  		= isset($Row[12]) ? $Row[12] : '';
        $cluster  		= isset($Row[13]) ? $Row[13] : '';

        
        $query = "insert into barang(
        nama,
        januari,
        februari,
        maret,
        april,
        mei,
        juni,
        juli,
        agustus,
        september,
        oktober,
        november,
        desember,cluster) 
        values(
        '".$nama."',
        '".$januari."',
        '".$februari."',
        '".$maret."',
        '".$april."',
        '".$mei."',
        '".$juni."',
        '".$juli."',
        '".$agustus."',
        '".$september."',
        '".$oktober."',
        '".$november."',
        '".$desember."','".$cluster."')";

        $kon->query($query);
       }


    }


  }else { 
    die("<br/>Sorry, File type is not allowed. Only Excel file."); 
  }


}


?>
