<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();
    $this->db->where('role_id !=', 1);
    $this->db->where('is_active !=', 0);


		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topnav', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('template/footer');
	}

	public function role()
	{
		$data['title'] = "Role";
		$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();
    $this->form_validation->set_rules('role', 'Role', 'required');

if ($this->form_validation->run() == false) {
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topnav', $data);
		$this->load->view('admin/role', $data);
		$this->load->view('template/footer');
  }else {
    $this->db->insert('user_role', ['role' => $this->input->post('role')]);

    $this->session->set_flashdata('message', 'New role added!');
    redirect('admin/role');
    }
	}


	public function roleAccess($role_id)
	{
		$data['title'] = "Role";
		$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get_where('user_role', [
			'id' => $role_id
		])->row_array();
		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topnav', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('template/footer');

	}

	public function changeAccess()
	{

		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}
		$this->session->set_flashdata('message', 'Access changed!');

	}

  public function download()
  {
    $data['title'] = "Download";
    $data['user'] = $this->db->get_where('user', ['email' =>  $this->session->userdata('email')])->row_array();
    $data['nama'] = $this->db->get('user_download')->result_array();

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('kategori', 'Kategori', 'required');


    if ($this->form_validation->run() == false) {
    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topnav', $data);
    $this->load->view('admin/download', $data);
    $this->load->view('template/footer');
  }else {

    $file = $_FILES['filename'];
    $name = $file['name'];

         $config['upload_path']   = './asset/download/file/';
         $config['allowed_types'] = 'doc|docx|pptx|zip|pdf|sql|';
         $config['max_size']      = 100000;
         $config['file_name']       = $file['name'];
         $this->load->library('upload', $config);


         $data = [
           	'nama' => $this->input->post('nama'),
           	'filename' => $file['name'],
				'kategori' => $this->input->post('kategori'),
           	'date_created' => time()

         ];


         if ( ! $this->upload->do_upload('filename')) {
           $error = array('error' => $this->upload->display_errors());
           $this->load->view('admin/download', $error);

         }

         $this->db->insert('user_download', $data);
         $this->session->set_flashdata('message', 'Ditambah');

         redirect('admin/download');
    }
  }
  public function hapusdl($id = NULL)
        {
        $this->load->model('Download_model', 'download');
        $this->download->hapusdownload($id);
        $this->session->set_flashdata('message', "dihapus");
        redirect('admin/download');
        }

  public function hapusrl($id)
      {
        $this->db->where('id', $id);
        $this->db->delete('user_role');

        $this->session->set_flashdata('message', 'Data berhasil dihapus!');
        redirect('admin/role');
      }
      public function hapusdu($id)
          {
            $this->db->where('id', $id);
            $this->db->delete('user');

            $this->session->set_flashdata('message', 'Data berhasil dihapus!');
            redirect('admin/datauser');
          }

  public function editrl()
  {
//     $data['title'] = "Role";
// 		$data['user'] = $this->db->get_where('user', ['email' =>
// 			$this->session->userdata('email')])->row_array();
//
// 		$data['role'] = $this->db->get('user_role')->result_array();
//     $this->form_validation->set_rules('role', 'Role', 'required');
//
// if ($this->form_validation->run() == false) {
// 		$this->load->view('template/header', $data);
// 		$this->load->view('template/sidebar', $data);
// 		$this->load->view('template/topnav', $data);
// 		$this->load->view('admin/role', $data);
// 		$this->load->view('template/footer');
//   }else {
//     $this->db->insert('user_role', ['role' => $this->input->post('role')]);
//     $this->session->set_flashdata('message', '<div class="alert alert-success sm" role="alert">
//                 New role added! </div>');
//     redirect('admin/role');
  }

  public function datauser()
  {
    $data['title'] = "Data User";
		$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();
      $this->db->where('role_id !=', 1);

    $data['name'] = $this->db->get('user')->result_array();

if ($this->form_validation->run() == false) {

			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topnav', $data);
			$this->load->view('admin/datauser', $data);
			$this->load->view('template/footer');

    }


  }

}
