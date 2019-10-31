<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function hapusdownload($id = NULL)
  {
    $data = $this->db->get_where('user_download', array('id' => $id))->row();

if(file_exists('asset/download/file/'.$data->filename) && $data->filename)
 {
            unlink('asset/download/file/'.$data->filename);
  }

        $this->db->where('id', $id);
        $this->db->delete('user_download');


  }

}
