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

$this->db->select('g.*, pd.gejala_id')
->from("pemeriksaan_detail pd")
->join('gejala g','g.id = pd.gejala_id');
$this->db->where("pd.pemeriksaan_id",$id);
$rs = $this->db->get();
foreach($rs->result() as $r): 
	$post['gejala_id'][$r->gejala_id] = $r->kode;
endforeach;

// show_array($post['gejala_id']);


if(   // rule 1 
 
in_array("G001",$post['id_gejala']) && 
in_array("G002",$post['id_gejala']) && 
in_array("G003",$post['id_gejala']) && 
in_array("G004",$post['id_gejala']) && 
in_array("G005",$post['id_gejala']) && 
in_array("G006",$post['id_gejala']) && 
in_array("G007",$post['id_gejala']) && 
in_array("G008",$post['id_gejala']) && 
in_array("G009",$post['id_gejala']) && 
in_array("G010",$post['id_gejala'])   

) $kd="P1";

else if ( // rule 2 
in_array("G002",$post['id_gejala']) &&
in_array("G005",$post['id_gejala']) &&
in_array("G007",$post['id_gejala']) &&
in_array("G009",$post['id_gejala']) &&
in_array("G011",$post['id_gejala']) &&
in_array("G012",$post['id_gejala']) &&
in_array("G013",$post['id_gejala']) &&
in_array("G014",$post['id_gejala']) &&
in_array("G015",$post['id_gejala']) &&
in_array("G016",$post['id_gejala']) &&
in_array("G017",$post['id_gejala']) &&
in_array("G018",$post['id_gejala']) &&
in_array("G019",$post['id_gejala']) &&
in_array("G020",$post['id_gejala'])  
) $kd="P2";
 
else if ( // rule 3
in_array("G004",$post['id_gejala']) && 
in_array("G005",$post['id_gejala']) && 
in_array("G007",$post['id_gejala']) && 
in_array("G022",$post['id_gejala']) && 
in_array("G023",$post['id_gejala']) && 
in_array("G024",$post['id_gejala']) && 
in_array("G025",$post['id_gejala']) && 
in_array("G026",$post['id_gejala']) && 
in_array("G027",$post['id_gejala']) && 
in_array("G028",$post['id_gejala']) && 
in_array("G029",$post['id_gejala']) && 
in_array("G030",$post['id_gejala']) 
) $kd="P3";

else if( // rule 4 
in_array("G001",$post['id_gejala']) && 
in_array("G004",$post['id_gejala']) && 
in_array("G005",$post['id_gejala']) && 
in_array("G007",$post['id_gejala']) && 
in_array("G016",$post['id_gejala']) && 
in_array("G025",$post['id_gejala']) && 
in_array("G031",$post['id_gejala']) && 
in_array("G032",$post['id_gejala']) && 
in_array("G033",$post['id_gejala']) && 
in_array("G034",$post['id_gejala']) && 
in_array("G035",$post['id_gejala'])   
) $kd="P4";

else if( // rule 5

in_array("G001",$post['gejala_id']) &&
in_array("G005",$post['gejala_id']) &&
in_array("G007",$post['gejala_id']) &&
in_array("G034",$post['gejala_id']) &&
in_array("G036",$post['gejala_id']) &&
in_array("G037",$post['gejala_id']) &&
in_array("G038",$post['gejala_id']) &&
in_array("G039",$post['gejala_id']) &&
in_array("G040",$post['gejala_id']) 

) $kd="P5";

else if( // rule 6
 
in_array("G041",$post['gejala_id']) &&
in_array("G042",$post['gejala_id']) &&
in_array("G034",$post['gejala_id']) &&
in_array("G021",$post['gejala_id']) &&
in_array("G012",$post['gejala_id']) &&
in_array("G010",$post['gejala_id']) &&
in_array("G025",$post['gejala_id']) &&
in_array("G009",$post['gejala_id']) &&
in_array("G049",$post['gejala_id']) &&
in_array("G004",$post['gejala_id']) &&
in_array("G005",$post['gejala_id']) &&
in_array("G007",$post['gejala_id']) &&
in_array("G036",$post['gejala_id']) &&
in_array("G017",$post['gejala_id']) &&
in_array("G043",$post['gejala_id']) &&
in_array("G044",$post['gejala_id']) 
) $kd="P6";
else if ( // rule 7 

in_array("G002",$post['gejala_id']) && 
in_array("G006",$post['gejala_id']) && 
in_array("G007",$post['gejala_id']) && 
in_array("G010",$post['gejala_id']) && 
in_array("G011",$post['gejala_id']) && 
in_array("G016",$post['gejala_id']) && 
in_array("G023",$post['gejala_id']) && 
in_array("G025",$post['gejala_id']) && 
in_array("G031",$post['gejala_id']) && 
in_array("G039",$post['gejala_id']) && 
in_array("G040",$post['gejala_id']) && 
in_array("G041",$post['gejala_id']) && 
in_array("G042",$post['gejala_id']) && 
in_array("G043",$post['gejala_id']) && 
in_array("G045",$post['gejala_id']) && 
in_array("G052",$post['gejala_id'])  

)$kd="P7";

else if( // rule 8 

in_array("G045",$post['gejala_id']) &&
in_array("G007",$post['gejala_id']) &&
in_array("G025",$post['gejala_id']) &&
in_array("G002",$post['gejala_id']) &&
in_array("G048",$post['gejala_id']) &&
in_array("G012",$post['gejala_id']) &&
in_array("G010",$post['gejala_id'])  
) $kd="P8";

else if( // rule 9 
in_array("G045",$post['gejala_id']) &&
in_array("G025",$post['gejala_id']) &&
in_array("G002",$post['gejala_id']) &&
in_array("G048",$post['gejala_id']) &&
in_array("G046",$post['gejala_id']) &&
in_array("G012",$post['gejala_id']) &&
in_array("G049",$post['gejala_id']) &&
in_array("G050",$post['gejala_id'])  
) $kd="P9";
else if(

in_array("G047",$post['gejala_id']) &&
in_array("G038",$post['gejala_id']) &&
in_array("G021",$post['gejala_id']) &&
in_array("G012",$post['gejala_id']) &&
in_array("G049",$post['gejala_id']) &&
in_array("G050",$post['gejala_id']) &&
in_array("G010",$post['gejala_id']) &&
in_array("G005",$post['gejala_id']) &&
in_array("G051",$post['gejala_id'])  
) $kd="P10";
else 
{
	$kd="PPP";
}

 


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
