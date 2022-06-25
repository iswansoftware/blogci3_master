<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Utama extends CI_Controller
{
	public function index()
	{
		$this->load->view(template() . '/_header');
		$this->load->view(template() . '/_navbar');
		$this->load->view(template() . '/_slider');
		$this->load->view(template() . '/_landingpage');
		$this->load->view(template() . '/_footer');
	}

	public function about()
	{
		$this->load->view(template() . '/_header');
		$this->load->view(template() . '/_navbar');
		//$this->load->view(template() . '/_slider');
		$this->load->view(template() . '/_about');
		$this->load->view(template() . '/_footer');
	}

	public function contact()
	{
		$this->load->view(template() . '/_header');
		$this->load->view(template() . '/_navbar');
		//$this->load->view(template() . '/_slider');
		$this->load->view(template() . '/_contact');
		$this->load->view(template() . '/_footer');
	}

	public function feature()
	{
		$this->load->view(template() . '/_header');
		$this->load->view(template() . '/_navbar');
		//$this->load->view(template() . '/_slider');
		$this->load->view(template() . '/_feature');
		$this->load->view(template() . '/_footer');
	}

	public function project()
	{
		$this->load->view(template() . '/_header');
		$this->load->view(template() . '/_navbar');
		//$this->load->view(template() . '/_slider');
		$this->load->view(template() . '/_project');
		$this->load->view(template() . '/_footer');
	}

	public function service()
	{
		$this->load->view(template() . '/_header');
		$this->load->view(template() . '/_navbar');
		//$this->load->view(template() . '/_slider');
		$this->load->view(template() . '/_service');
		$this->load->view(template() . '/_footer');
	}

	public function team()
	{
		$this->load->view(template() . '/_header');
		$this->load->view(template() . '/_navbar');
		//$this->load->view(template() . '/_slider');
		$this->load->view(template() . '/_team');
		$this->load->view(template() . '/_footer');
	}

	public function testimonial()
	{
		$this->load->view(template() . '/_header');
		$this->load->view(template() . '/_navbar');
		//$this->load->view(template() . '/_slider');
		$this->load->view(template() . '/_testimonial');
		$this->load->view(template() . '/_footer');
	}
}
