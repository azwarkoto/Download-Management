<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $data['title'] = "About Me";

    $data['nama'] = $this->db->get('user_download')->result_array();
    $this->load->view('template/header_ab', $data);
    $this->load->view('template_about/sidebar', $data);
    $this->load->view('about/index');
    $this->load->view('template/footer_ab');


  }

  public function download()
  {

    $this->load->model('Peoples_model', 'peoples');
    $data['title'] = "Download Page";

    // pagination
    $this->load->library('pagination');

    // ambil data keyword
    if ($this->input->post('submit')) {
      $data['keyword'] = $this->input->post('keyword');
      $this->session->set_userdata('keyword', $data['keyword']);
    }else {
      $data['keyword'] = $this->session->userdata('keyword');
    }

    // config
    $this->db->like('nama', $data['keyword']);
    $this->db->from('user_download');
    $config['total_rows'] = $this->db->count_all_results();
    $data['total_rows'] = $config['total_rows'];
    $config['per_page'] = 8;


    // stayling
$config['attributes'] = array('class' => 'page-link');
    // initalize
    $this->pagination->initialize($config);

    $data['start'] = $this->uri->segment(4);
    $data['nama'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);

    $this->load->view('template/header_ab', $data);
    $this->load->view('template_about/sidebar_download', $data);
    $this->load->view('about/download', $data);
    $this->load->view('template/footer_ab');

  }

public function materi()
{
   $data['title'] = "Materi";
   $data['kategori'] = $this->db->get('user_download','kategori');
   $data['materi'] = $this->db->where('kategori','kampus');
   $data['materi'] = $this->db->get('user_download')->result_array();
   $this->load->view('template/header_ab', $data);
   $this->load->view('template_about/sidebar_download', $data);
   $this->load->view('about/materi', $data);
   $this->load->view('template/footer_ab');


}
}
