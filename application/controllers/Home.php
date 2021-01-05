<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('RiasModel');
		$this->load->model('DekorasiModel');
		$this->load->model('DashboardModel');
		$this->load->model('ProfilModel');
	}
	public function index()
	{
		$result['dataRias'] = $this->RiasModel->getAll();
		$result['dataDekorasi'] = $this->DekorasiModel->getAll();
		$result['paketLengkap'] = $this->DashboardModel->paketLengkap();
		$result['paketA'] = $this->DashboardModel->paketA();
		$result['paketB'] = $this->DashboardModel->paketB();
		$result['paketC'] = $this->DashboardModel->paketC();
		$result['paketD'] = $this->DashboardModel->paketD();
		$result['paketFoto'] = $this->DashboardModel->paketFoto();
		$result['paketKipas'] = $this->DashboardModel->paketKipas();
		$result['profil'] = $this->ProfilModel->getProfil();

		$this->load->view('home', $result);
	}
}
