<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peoples_model extends CI_Model{

  public function getPeoples($limit, $start, $keyword = null)
  {
    if ($keyword) {
      $this->db->like('nama', $keyword);
    }

      return $this->db->get('user_download', $limit, $start)->result_array();
  }


}
