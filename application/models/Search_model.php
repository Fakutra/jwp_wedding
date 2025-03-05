<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_orders_by_email($email) {
        $this->db->select('name, email, status');
        $this->db->where('email', $email);
        $query = $this->db->get('tb_order');
        return $query->result();
    }
}
?>
