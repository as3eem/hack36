<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('home');
    }

    public function newBusiness()
    {
        $this->load->view('register');
    }

    public function registerBusiness(){
        $data['NAME'] = $this->input->post('name', TRUE);
        $data['CONTACT'] = $this->input->post('phone', TRUE);
        $data['PROFESSION'] = $this->input->post('pro', TRUE);
        $data['EMAIL'] = $this->input->post('email', TRUE);
        $data['STREET'] = $this->input->post('street', TRUE);
        $data['CITY'] = $this->input->post('city', TRUE);
        $data['STATE'] = $this->input->post('state', TRUE);
        $data['COUNTRY'] = $this->input->post('country', TRUE);
        $submit=$this->input->post('login',TRUE);
        print_r($data);
        if($submit=='Register')
        {
            $this->_insert($data);
        }
        redirect(base_url('index.php/welcome'));

    }

    public function currentLocation(){
        $this->load->view('currentMap');
    }
    public function findServiceProvider()
    {
        $city=$this->input->post('city');
        $data=$this->getData($city);
        $data=$data->result();
//        echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->view('map',$data);
//        show map with user's location ... See if there's any requirement for calling another function
//        One possible way is via extracting data from database and show every database on map
//        other being via script for lats and longs...
    }
    function _insert($data)
    {
        $this->load->model('User_model');
        $this->User_model->_insert($data);
    }

    public function getData($city){
        $this->load->model('User_model');
        $data=$this->User_model->get_where_custom('CITY',$city);
        return $data;
    }

    public function fetch_data_from_db($id)
    {
        $query = $this->get_where($id);
        foreach($query->result() as $row)
        {
            $data['id']=$row->id;
            $data['category'] = $row->category;
            $data['category_url']=$row->category_url;
        }
        if(!isset($data))
        {
            $data = "";
        }
        return $data;
    }

}