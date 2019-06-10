<?php
class konsultasi extends master_controller {
	function __construct(){
		parent::__construct();
		$this->load->model("coremodel","cm");
		 
		$this->controller = get_class($this);

    $this->method = null; 

	}

	function index(){
		// echo "fuckkk.."; exit;
		$data_array = array();

		$this->db->order_by("kode");

		$data_array['record'] = $this->db->get("gejala");



		 
		 
		$content = $this->load->view($this->controller."_view_form",$data_array,true);

		$this->set_title("KONSULTASI  PENYAKIT PERNAFASAN");
		$this->set_content($content);
		$this->render();
	}



function index2(){
$post = $this->input->post();
// show_array($post); exit;

$arr = array("tanggal"=>date("Y-m-d"),
			 "user_id"=>$_SESSION['userdata'][0]['id'] 

			 );

$this->db->insert("pemeriksaan",$arr);
$pemeriksaan_id = $this->db->insert_id();

foreach($post['gejala_id'] as $gejala_id): 
	$tmp['pemeriksaan_id'] = $pemeriksaan_id;
	$tmp['gejala_id'] = $gejala_id;
	$this->db->insert("pemeriksaan_detail",$tmp);
endforeach;

redirect("$this->controller/review/$pemeriksaan_id");



}

function review($id){
// $post = $this->input->post();
// show_array($post);
/// get gejala dan buat dalam bentuk array dengan format contoh sbb : 
// Array
// (
//     [gejala_id] => Array
//         (
//             [0] => 139
//             [1] => 122
//             [2] => 143
//             [3] => 125
//         )

// )	
$this->db->where("pemeriksaan_id",$id);
$rs = $this->db->get("pemeriksaan_detail");
foreach($rs->result() as $r): 
	$post['gejala_id'][] = $r->gejala_id;
endforeach;

show_array($post['gejala_id']);

exit;
$content = $this->load->view($this->controller."_view_result",$data_array,true);

$this->set_title("HASIL DIAGNOSA");
$this->set_content($content);
$this->render();


}

// function list(){
// 	echo "flow";
// }
function listview(){

$this->method="listview";


$data_array = array();

$this->db->select('p.*,u.nama,u.umur,u.jk,u.alamat')
->from('pemeriksaan p')
->join('pengguna u','p.user_id = u.id');
$this->db->order_by("tanggal","desc");

if($_SESSION['userdata'][0]['level'] == 0 ) {
	$this->db->where("p.user_id",$_SESSION['userdata'][0]['id']);
}

$data_array['rec_pemeriksaan'] = $this->db->get();



$content = $this->load->view($this->controller."_list_view",$data_array,true);

$this->set_title("DATA KONSULTASI PEMERIKSAAN");
$this->set_content($content);
$this->render();

}
 

function laporan(){

  $this->method = "laporan";

$sql = " select * from ( 
SELECT p.*, 
       count(pm.id) as jumlah , 
      sum( if(u.jk='L',1,0)) as L,
      sum( if(u.jk='P',1,0)) as P     
  
    FROM penyakit p 
left join pemeriksaan pm on p.id = pm.penyakit_id
left join pengguna u on u.id = pm.user_id 
  group by p.id 
  ) x 
  order by x.jumlah desc
";

$data_array['record'] = $this->db->query($sql);

$content = $this->load->view($this->controller."_laporan_view",$data_array,true);

$this->set_title("LAPORAN REKAPITULASI HASIL PEMERIKSAAN");
$this->set_content($content);
$this->render();


}



}

?>
