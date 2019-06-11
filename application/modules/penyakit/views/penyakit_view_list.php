<?php
foreach($record->result() as $row ) : 
  $image = (!empty($row->gambar))?$row->gambar:"noimage.png";

 ?>

<div class="card">
  <div class="card-header card-inverse card-header-bordered">
    <h3 class="text-primary"><?php echo $row->kode." - ". $row->penyakit; ?></h3>
  </div>
  <div class="card-block">

<div class="row">

<div class="col-md-3">
  
<img  width="200px" height="200px" src="<?php echo base_url("uploads/$image") ?>">

</div>

<div class="col-md-9">
    <h4 class="card-title ">GEJALA : </h4>
    <p class="card-text">
      <ul>
        <?php 
          $rc_gejala = $this->cm->get_gejala($row->id);
          foreach($rc_gejala->result() as $rw ): 
        ?>
        <li><?php echo $rw->kode ." - " . $rw->gejala; ?></li>
      <?php endforeach; ?>
      </ul>

    </p>


      <h4 class="card-title">PENANGANAN : </h4>
    <p class="card-text"><?php echo $row->penanganan; ?></p>


    <h4 class="card-title">PENCEGAHAN : </h4>
    <p class="card-text"><?php echo $row->pencegahan; ?></p>
</div>
  </div>  
  </div>
</div>
<?php endforeach; ?>