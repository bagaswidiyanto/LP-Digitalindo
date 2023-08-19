<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{

	//set the class variable.
	var $template  = array();
	var $data      = array();
	//Load layout    
	public function layout()
	{
		date_default_timezone_set("Asia/Jakarta");

		$this->CI = &get_instance();
		// $this->data['menu']=$this->menu(0,$h="");
		$this->data['website'] = $this->CI->db->get('lp_website')->row();
		$this->data['sosmed'] = $this->CI->db->get('lp_sosmed')->result();
		$this->data['homeweb'] = $this->CI->db->get('lp_homeweb')->row();


		$this->data['today'] = $this->getCounter('today'); //hari ini
		$this->data['online'] = $this->getCounter('online'); //hari ini online
		$this->data['all'] = $this->getCounter('all'); //semua visitor

		$this->template['header']   = $this->load->view('layout/header', $this->data); //, $this->data

		$this->template['web'] = $this->load->view($this->web, $this->data); //, $this->data
		$this->template['footer'] = $this->load->view('layout/footer', $this->data); //, $this->data
		$this->initCounter(); //insert statistik

	}

	function initCounter()
	{

		$ip = $_SERVER['REMOTE_ADDR']; // menangkap ip pengunjung
		$location = 'https://page.digitalindo.co.id/' . $_SERVER['PHP_SELF']; // menangkap server path

		//membuat log dalam tabel database 'counter'
		$check = $this->db->query("select * from lp_counter where ip='" . $ip . "' and date(`timestamp`)=CURDATE()");
		$check2 = $check->row();
		if ($check->num_rows() > 0) {

			$create_log = $this->db->query("UPDATE lp_counter SET `timestamp`=NOW() WHERE id='" . $check2->id . "'");
		} else {
			$create_log = $this->db->query("INSERT INTO lp_counter(ip,location,`timestamp`)VALUES('$ip', '$location',NOW()) ");
		}
	}


	function getCounter($mode)
	{

		// if(is_null($location)) {
		//      $location = $_SERVER['PHP_SELF'];
		// }
		if ($mode == "today") // query perhitungan IP Address unik
		{
			$get_res = $this->db->query("SELECT DISTINCT count(ip) as jml FROM lp_counter where date(`timestamp`)=CURDATE()");
		} else if ($mode == "online") {
			$get_res = $this->db->query("SELECT DISTINCT count(ip) as jml FROM lp_counter where `timestamp` < DATE_ADD(NOW(), INTERVAL -10 minute) AND date(`timestamp`)=CURDATE()");
		} else { // query perhitungan seluruh IP Address (tidak unik)
			$get_res = $this->db->query("SELECT count(ip) as jml FROM lp_counter");
		}

		$res = $get_res->row();

		return $res;
	}
}
