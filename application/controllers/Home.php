<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

        // Tambahkan ini dari GedungModel.php
		$this->load->model('GedungModel');	
		$this->load->model('RiasModel');
		$this->load->model('DekorasiModel');
	}
	public function index()
	{
		$result['dataGedung'] = $this->GedungModel->getAll();
		$result['dataRias'] = $this->RiasModel->getAll();
		$result['dataDekorasi'] = $this->DekorasiModel->getAll();

		$this->load->view('home', $result);
	}
}
