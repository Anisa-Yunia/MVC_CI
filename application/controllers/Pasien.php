<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function index()
	{
		$this->load->model('pasien_model','pasien1');
		$this->pasien1->id=1;
		$this->pasien1->kode='010001';
		$this->pasien1->nama='Faiz Fikri';
		$this->pasien1->gender='L';

		$this->load->model('pasien_model','pasien2');
		$this->pasien2->id=2;
		$this->pasien2->kode='020001';
		$this->pasien2->nama='Pandan Wangi';
		$this->pasien2->gender='P';

		$list_pasien = [$this->pasien1, $this->pasien2];
		$data['list_pasien']=$list_pasien;

		$this->load->view('template/header');
		$this->load->view('pasien/index',$data);
		$this->load->view('template/footer');
	}

	public function pasien_bmi()
	{
		$this->load->model('bmi_model','pasien1');
		$this->pasien1->berat=60;
		$this->pasien1->tinggi=165;
		$this->pasien1->nilaiBMI;
		$this->pasien1->statusBMI;

		$this->load->model('bmi_model','pasien2');
		$this->pasien2->berat=65;
		$this->pasien2->tinggi=155;
		$this->pasien2->nilaiBMI;
		$this->pasien2->statusBMI;

		$list_bmi = [$this->pasien1, $this->pasien2];
		$data['list_bmi']=$list_bmi;

		$this->load->view('template/header');
		$this->load->view('bmi/index',$data);
		$this->load->view('template/footer');
	}
}
