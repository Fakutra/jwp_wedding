<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Search_model');
        $this->load->model('settings_model');
    }

    public function index() {
        $data = array(
            'title' => 'JeWePe Wedding Orginizer',
            'page' => 'landing/search',
            'getDataWeb' => $this->settings_model->getSettings('1')->row()
        );
        $this->load->view('landing/template/sites', $data);
    }

    public function search() {
        $email = $this->input->post('email');
        $data['orders'] = $this->Search_model->get_orders_by_email($email);
        $data['title'] = 'Search Results';
        $data['page'] = 'landing/search';
        $data['getDataWeb'] = $this->settings_model->getSettings('1')->row();
        $this->load->view('landing/template/sites', $data);
    }
}
?>