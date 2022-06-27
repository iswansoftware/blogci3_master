<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Utama extends CI_Controller
{
	public function index()
	{
		$this->load->model('Model_utama');

		//data about
		$function_about = $this->Model_utama->landingpage_about();
		$row_function_about = $function_about->row();
		$data['judul_about'] = $row_function_about->judul;
		$data['isi_halaman_about'] = $row_function_about->isi_halaman;
		$data['gambar_about'] = $row_function_about->gambar;

		$data['function_gallery'] = $this->Model_utama->landingpage_gallery();

		//data gallery
		//$function_gallery = $this->Model_utama->landingpage_gallery();
		//$row_function_gallery = $function_gallery->row();
		//$data['judul_gallery'] = $row_function_gallery->judul;
		//$data['gambar_gallery'] = $row_function_gallery->gambar;



		$this->load->view(template() . '/_header');
		$this->load->view(template() . '/_navbar');
		//$this->load->view(template() . '/_slider');
		$this->load->view(template() . '/_slider_test');
		$this->load->view(template() . '/_landingpage', $data);
		$this->load->view(template() . '/_footer');
		// var_dump($function_gallery);
	}

	public function about()
	{
		$this->load->view(template() . '/_header');
		$this->load->view(template() . '/_navbar');
		$this->load->view(template() . '/_slider');
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
