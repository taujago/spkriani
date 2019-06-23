<div class="card">
<div class="card-header">
	<h3 class="card-title">DATA DIAGNOSA </h3>
</div>
<div class="card-body">
<?php 
if($found == 1 ) { 
?>
<div class="row">
<!-- 	<div class="col-md-3"><strong> Nama Pasien </strong></div>
	<div class="col-md-3">: <?php echo $userdata['nama']; ?> </div>

	<div class="col-md-3"><strong> Umur Pasien </strong></div>
	<div class="col-md-3">: <?php echo $userdata['umur']; ?> Tahun </div>

	<div class="col-md-3"><strong> JK </strong></div>
	<div class="col-md-3">: <?php echo $userdata['jk']; ?> </div>

	<div class="col-md-3"><strong> No. HP </strong></div>
	<div class="col-md-3">: <?php echo $userdata['hp']; ?> </div>

	<div class="col-md-3"><strong> Alamat </strong></div>
	<div class="col-md-3">: <?php echo $userdata['alamat']; ?> </div>
	<div class="col-md-3"><strong> Tanggal Pemeriksaan </strong></div>
	<div class="col-md-3">: <?php //echo flipdate($userdata['tanggal']); ?> </div>

 -->

 <div class="col-md-12">
<table class="table table-striped">
	<tr><td width="20%">Kode Pasien  </td><td> : <?php echo "P".$userdata['id']; ?></td></tr>
	<tr><td>Nama Pasien  </td><td> : <?php echo $userdata['nama']; ?></td></tr>
	<tr><td>Jenis Kelamin </td><td> : <?php echo $userdata['jk']; ?></td></tr>
	<tr><td>Usia  </td><td> : <?php echo $userdata['umur']; ?></td></tr>
	<tr><td>Tanggal pemeriksaan </td><td> : <?php echo flipdate($pemeriksaan->tanggal); ?></td></tr>
</table>

<p class="text-dark">
	Telah diperoleh hasil sebagai berikut : 
</p>

</div>
</div>

<HR />



<div class="row">
	<div class="col-md-8">

<table class="table table-striped">
	<tr><td width="20%">Gejala </td><td> 

		<ol>
	<?php foreach($rec_gejala->result() as $row): ?>
		<li><?php echo $row->gejala; ?></li>
	<?php endforeach; ?>
</ol>
</td></tr>
<tr>
	<td>Nama penyakit </td><td> : <?php echo $penyakit->penyakit ;   ?></td>
</tr>
<tr>
	<td>Penyebab  </td><td> : <?php //echo $penyakit->penyakit ;   ?></td>
</tr>

<tr>
	<td>Pencegahan  </td><td> : <?php echo $penyakit->pencegahan ;   ?></td>
</tr>

<tr>
	<td>Penanganan  </td><td> : <?php echo $penyakit->penanganan ;   ?></td>
</tr>

</table>
 
 
</div>	
<div class="col-md-4">
	<?php 
$image = (!empty($row->gambar))?$row->gambar:"noimage.png";


	?>
	<img  src="<?php echo base_url("uploads/$image") ?>">
</div>
</div>
<?php } 
else {   ?> 


<div class="row">
	<div class="col-md-12">
		<h4> DATA TIDAK DITEMUKAN </h4>
	</div>

</div>



<?php } ?>


<!-- end of card -->
</div> 

</div>


  


 