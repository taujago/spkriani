<div class="card">
<div class="card-header">
	<h3 class="card-title">DATA KONSULTASI </h3>
</div>

<div class="table-responsive mb-5">
	<table id="tabel" class="table card-table table-vcenter text-nowrap">


	<thead>
		<tr><th>KODE </th>
			<th>NAMA </th>
			<th>JK</th>
			<th>UMUR </th>
			<th>TANGGAL </th>			
			<th>PENYAKIT </th>
			<th></th>
		</tr>
	</thead>
	<TBODY>
		<?php
		$n=0;
		foreach($rec_pemeriksaan->result() as $row) : 
		$n++;
		?>

		<tr>
			<td><?php echo "P".$row->id; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->jk; ?></td>
			<td><?php echo $row->umur; ?></td>
			<td><?php echo flipdate($row->tanggal); ?></td>
			
			
			<td><?php echo $row->penyakit; ?></td>
			<td><a class="btn btn-primary" href="<?php echo site_url("$this->controller/review/$row->id") ?>" ><i class="fa fa-list"></i> LIHAT HASIL</a></td>

		</tr>

	<?php endforeach; ?>
	</TBODY>
</table>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#tabel").dataTable();
});	

</script>