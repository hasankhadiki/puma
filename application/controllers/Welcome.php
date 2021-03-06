<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	/*public function index($page = 'v_home')
    {
    	$data['title'] = ucfirst($page);
    	$this->load->view('header');
    	$this->load->view($page, $data);
    	$this->load->view('footer');
    }*/
        function __construct(){
		parent::__construct();		
		$this->load->model('m_barang');
        $this->load->helper(array('form','url'));
        $this->load->library('cart');
	}

	public function index(){
		$this->load->helper('form');
       	$data = $this->m_barang->tampilkan();
		$this->load->view('header');
		$this->load->view('v_home', array('data' => $data));
		$this->load->view('footer');
	}
}



