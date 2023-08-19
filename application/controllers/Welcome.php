<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['dContent1'] = $this->db->get_where('lp_deskripsi_content', array('id' => 1))->row();
		$this->data['dContent2'] = $this->db->get_where('lp_deskripsi_content', array('id' => 2))->row();
		$this->data['dContent3'] = $this->db->get_where('lp_deskripsi_content', array('id' => 3))->row();
		$this->data['dContent4'] = $this->db->get_where('lp_deskripsi_content', array('id' => 4))->row();
		$this->data['dContent5'] = $this->db->get_where('lp_deskripsi_content', array('id' => 5))->row();
		$this->data['dContent6'] = $this->db->get_where('lp_deskripsi_content', array('id' => 6))->row();
		$this->data['dContent7'] = $this->db->get_where('lp_deskripsi_content', array('id' => 7))->row();
		$this->data['dContent8'] = $this->db->get_where('lp_deskripsi_content', array('id' => 8))->row();
		$this->data['dContent9'] = $this->db->get_where('lp_deskripsi_content', array('id' => 9))->row();

		$this->data['dCaption1'] = $this->db->get_where('lp_deskripsi_caption', array('id' => 1))->row();
		$this->data['dCaption2'] = $this->db->get_where('lp_deskripsi_caption', array('id' => 2))->row();

		$this->db->order_by('sort', 'asc');
		$this->data['kelebihan'] = $this->db->get('lp_kelebihan')->result();
		$this->data['informasi'] = $this->db->get('lp_informasi')->result();
		$this->data['persen'] = $this->db->get('lp_persen')->result();
		$this->data['dgt'] = $this->db->get('lp_deskripsi_digitalindo')->row();
		$this->data['jasa'] = $this->db->get('lp_jasa')->result();
		$this->data['fitur_slider'] = $this->db->get('lp_fitur_slider_hp')->result();
		$this->data['fitur'] = $this->db->get('lp_fitur')->result();
		$this->data['kelebihan_utama'] = $this->db->get('lp_kelebihan_utama')->result();
		$this->data['testimoni'] = $this->db->get_where('tbl_testimonial2', array('status' => 'Y'))->result();
		$this->data['price'] = $this->db->get('lp_price')->result();
		// $this->data['faq'] = $this->db->get('lp_faq')->result();

		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
}
