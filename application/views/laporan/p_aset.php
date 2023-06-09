<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

     <link rel="stylesheet" href="<?=base_url()?>src/css/laporan.css">

    <title>Data Aset</title>
  </head>
  <body>
  	<meta http-equiv="REFRESH" content="5; url=<?=base_url('laporan/aset')?>"> 
  	<div class="container">
  		<div class="row pt-4">
  			<div class="col-md-1">
  				<img src="<?=base_url()?>src/img/logo/astra.png" class="kiri" alt="">		
  			</div>
  			<div class="col-md-11">
  				<h4 class="a">PT ASTRA INTERNATIONAL TBK</h4>
  				<p class="alamat">Menara Astra Lt. 59 Jl. Jenderal Sudirman Kav 5-6 Jakarta 10220 Indonesia</p>
  			</div>
  		</div>
  		<hr style="border: 1px solid black;">
  		<div class="row">
  			<div class="col text-center">
  				<strong>Aset <?=$lokasi['nama_lokasi']?></strong>
  			</div>
  		</div>
  		<div class="row pt-3">
  			<div class="col">
  				<table class="table table-bordered table-sm">
  					<thead>
  						<th>NO.</th>
  						<th>NAMA</th>
  						<th style="text-align: center;">VOLUME</th>
  						<th>SATUAN</th>
  						<th style="text-align: center;">HARGA (Rp.)</th>
  						<th style="text-align: center;">JUMLAH (Rp.)</th>
  					</thead>
  					<tbody>
  						<?php 
  						$sum=0; 
  						$no=1; 
  							foreach ($aset as $row): 
  						$sum+=$row['total_harga'];			
  						?>		
  						<tr>
  							<td><?=$no++;?></td>
  							<td><?=$row['nama_barang']?></td>
  							<td style="text-align: center;"><?=$row['volume']?></td>
  							<td><?=$row['satuan']?></td>
  							<td style="text-align: right;"><?=laporan($row['harga'])?></td>
  							<td style="text-align: right;"><?=laporan($row['total_harga'])?></td>
  						</tr>
  						<?php endforeach ?>
  					</tbody>
  					<tfoot>
  						<tr>
  							<td colspan="5"><b>Jumlah</b></td>
  							<td style="text-align: right;"><?=laporan($sum);?></td>
  						</tr>
  					</tfoot>
  				</table>
  			</div>
  		</div>
  		<div class="row pt-4">
			<div class="col-md-8">
				
			</div>
			<div class="col-md-4 text-center">
				<p>Jakarta, <?=tgl_indo(date('Y-m-d'))?></p>
				<p class="ex1">Kepala Bagian</p>
				______________</br>
			</div>
		</div> 			
  	</div>

  	<script>
  		// window.print();
		// window.onafterprint = window.close;
  	</script>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>