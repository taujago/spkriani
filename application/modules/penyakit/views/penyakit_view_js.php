<script type="text/javascript" src="<?php echo base_url("assets"); ?>/jqueryform/jquery.form.min.js">
	
</script>
<script type="text/javascript">
var v_url = '';
$(document).ready(function(){


// $('#gambar').change(function(){    
//     //on change event  
//     formdata = new FormData();
//     if($(this).prop('files').length > 0)
//     {
//         file =$(this).prop('files')[0];
//         formdata.append("gambar", file);
//     }
// });



$("#tabel").dataTable(); 

$("#id_gejala").select2();

	// $("#frmkriteria").submit(function(){

	// 	alert('vangkee');

	// // 	var formData = new FormData(this); 
	// // 	console.log(formData);   
	// // 	return false; 
	// // 	$.ajax({
	// // 		url : v_url,
	// // 		// data : $("#frmkriteria").serialize(),
	// // 		data : formData,
	// // 		dataType : 'json',
	// // 		type : 'post',
	// // 		success : function(obj){

	// // 			if(obj.error==false) {
	// // 				$("#formModal").modal('hide');
	// // 				// swal.fire('Info',obj.message,'success');

	// // 				swal.fire({title: "Info", text: obj.message , type: "success"}).then(function(){

	// // 					location.reload();

	// // 				});
					
	// // 				// 
	// // 			}
	// // 			else {
	// // 				swal.fire('Errr',obj.message,'danger');
	// // 			}


	// // 		}
	// // 	});
	// // 	return false;


	// 	return false;
	//    });


$("#frmkriteria").submit(function(){ 



	 $(this).ajaxSubmit({

	 	 url : v_url,
	 	 dataType : 'json',
	 	 success : function(obj){

				if(obj.error==false) {
					$("#formModal").modal('hide');
					// swal.fire('Info',obj.message,'success');

					swal.fire({title: "Info", text: obj.message , type: "success"}).then(function(){

						location.reload();

					});
					
					// 
				}
				else {
					console.log(obj.message);
					swal.fire('Error',obj.message,'error');
				}
	 	 	 
	 	 }

	 });
 

	 
 

 
 return false;

});


});


	function tambahbaru(){
		$("#formModal").modal('show');
		$("#judul").html('TAMBAH DATA PENYAKIT ');
		$("#kode").val('');
		$("#penyakit").val('');
		v_url = '<?php echo site_url("$this->controller/save") ?>';


		$.ajax({
		url : '<?php echo site_url("$this->controller/get_gejala_all") ?>/',
 		success : function(htmldata){
			 

		$("#id_gejala").select2('destroy').html(htmldata).select2();
 
	
	



		}

	});  

	}



function edit(id,kode,penyakit,penanganan,pencegahan){
	$("#judul").html('EDIT DATA PENYAKIT ');
	
	v_url = '<?php echo site_url("$this->controller/update") ?>';



	$("#id").val(id);
	$("#kode").val(kode);
	$("#penyakit").val(penyakit);
	$("#penanganan").val(penanganan);
	$("#pencegahan").val(pencegahan);
	$("#formModal").modal('show');




	 $.ajax({
		url : '<?php echo site_url("$this->controller/get_gejala") ?>/'+id,
		success : function(htmldata){
			 

		$("#id_gejala").select2('destroy').html(htmldata).select2();
 


		}

	});  

	 
}


function hapus(id) {

Swal.fire({
  title: 'Apakah anda yakin ?',
  text: "Anda akan menghapus data!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Lanjutkan'
}).then((result) => {
  if (result.value) {
     
  		$.ajax({
  			url : '<?php echo site_url("$this->controller/hapus") ?>/'+id,
  			dataType : 'json',
  			success : function(obj) {
  				if(obj.error==false) {
  					
					swal.fire({title: "Info", text: obj.message , type: "success"}).then(function(){

						location.reload();

					});
					 
				}
				else {
					swal.fire('Errr',obj.message,'danger');
				}
  			}
  		});


  }
})



}



</script>