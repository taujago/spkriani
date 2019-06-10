

<style type="text/css">
	
span.select2-container {
    z-index:10050;
}

.swal2-container {
	z-index:10051;
}

</style>

<div class="row mb-3">
	<div class="col-md-3">
		<a href="#!" onclick="tambahbaru();" class="btn btn-success" ><i class="fa fa-plus"></i> TAMBAH BARU </a>
	</div>

</div>



<div class="table-responsive">
	<table id="tabel" class="table card-table table-vcenter text-nowrap">
		<thead >
			<tr>
				<th width="5%">NO </th>
				<th width="5%">KODE </th>
				<th width="50%">PENYAKIT</th>
				<th width="50%">PENANGANAN</th>
				<th width="50%">PENCEGAHAN</th>
				<th width="10%">GAMBAR</th>
				<th width="10%">PROSES</th>
				 
			</tr>
		</thead>
		<tbody>
<?php 
$n=0;
foreach($record->result() as $row) : 
	$n++;

$image = (!empty($row->gambar))?$row->gambar:"noimage.png";


?>
			<tr>
				<th scope="row"><?php echo $n ?></th>
				<td><?php echo $row->kode; ?></td>
				<td><?php echo $row->penyakit; ?></td>
				<td><?php echo $row->penanganan; ?></td>
				<td><?php echo $row->pencegahan; ?></td>
				<td><img width="70px" height="70px" src="<?php echo base_url("uploads/$image") ?>"></td>
				<td>
					<a href="#!"  onclick="edit('<?php echo $row->id; ?>','<?php echo $row->kode; ?>','<?php echo $row->penyakit; ?>','<?php echo $row->penanganan; ?>','<?php echo $row->pencegahan; ?>');"  class="btn btn-warning text-light"><i class="fa fa-pencil"></i>Edit</a>
					<a href="#!" onclick="hapus('<?php echo $row->id; ?>');"  class="btn btn-danger text-light"><i class="fa fa-trash"></i>Hapus	</a>
</td>
			</tr>
<?php endforeach; ?> 
		</tbody>
	</table>
</div>
<!-- table-responsive -->


<div class="modal fade" id="formModal" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judul">Tambah Data Penyakit </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>	
			<form id="frmkriteria" method="post" enctype="multipart/form-data" >
			<div class="modal-body">
			
					<div class="form-group">
						<label for="kode" class="form-control-label">Kode :</label>
						<input type="text" name="kode" class="form-control" id="kode">
					</div>
					<div class="form-group">
						<label for="gejala" class="form-control-label">Penyakit:</label>
						<input type="text"  name="penyakit" class="form-control" id="penyakit">

					</div>

					<div class="form-group">
						<label for="penanganan" class="form-control-label">Penanganan :</label>
						<textarea class="form-control" name="penanganan" id="penanganan"></textarea>

					</div>

					<div class="form-group">
						<label for="pencegahan" class="form-control-label">Pencegahan :</label>
						<textarea class="form-control" name="pencegahan" id="pencegahan"></textarea>

					</div>

					<div class="form-group">
						<label for="gambar" class="form-control-label">Gambar  :</label>
						 
					      <input type="file" class="form-control" id="gambar" name="gambar">
					       
					     

					</div>




					 



					<div class="form-group">
						<label for="gejala" class="form-control-label">Gejala :</label>

						<?php 
	// $arr_penyakit = $this->cm->arr_dropdown_penyakit();
	$arr_penyakit = array();
	echo form_dropdown("id_gejala[]",$arr_penyakit,'','id="id_gejala" class="form-control" multiple="multiple" style="width:100%"');

	?>
  

					</div>

<input type="hidden" name="id" id="id">

				
			</div>
			<div class="modal-footer">
				
				<button id="btnsimpan" type="submit" class="btn btn-primary"><i class="fa fa fa-paper-plane"></i> SIMPAN</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div> </form>
		</div>
	</div>
</div>

<?php 
$this->load->view($this->controller."_view_js");
?>