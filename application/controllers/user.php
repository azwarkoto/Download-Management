<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$data['title'] = "My profile";
		$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topnav', $data);
		$this->load->view('user/index', $data);
		$this->load->view('template/footer');
	}

	public function editProf()
	{

		$data['title'] = "Edit Profile";
		$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Full name', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/topnav', $data);
			$this->load->view('user/editprof', $data);
			$this->load->view('template/footer');
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			// cek gambar upload
  		$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
        // konfigurasi image
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './asset/image/profile/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('image')) {
            // hapus image jika sudah di update
					$old_image = $data['user']['image'];
					if ($old_image != 'default.png') {
						unlink(FCPATH . 'asset/image/profile/' . $old_image);
					}
          // ambil nama image simpan ke databse 
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user');


			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			 						Your profile has been updated! </div>');
			redirect('user');
		}

	}
  public function changePassword()
	{
		$data['title'] = "Change Password";
		$data['user'] = $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
      $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
      $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

      if ($this->form_validation->run() == false) {

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topnav', $data);
		$this->load->view('user/changepassword', $data);
		$this->load->view('template/footer');
  }else {
    $current_password = $this->input->post('current_password');
    $new = $this->input->post('new_password1');
    if (!password_verify($current_password, $data['user']['password'])) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			 						Worng current password! </div>');
			redirect('edit/changepassword');
    }else {
      if ($current_password == $new) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  			 						New password cannot be the same as current password! </div>');
  			redirect('edit/changePassword');
      }else {
        // jika sudah ok
        $password_hash = password_hash($new , PASSWORD_DEFAULT);
        $this->db->set('password', $password_hash);
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			 						Password changed! </div>');
  			redirect('user');

      }
    }
  }
  }
}
