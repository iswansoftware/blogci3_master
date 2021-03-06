<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Utama extends CI_Controller
{
	public function index()
	{
		$this->load->model('Model_utama');
		$function_about = $this->Model_utama->landingpage_about()->row();
		$function_gallery = $this->Model_utama->landingpage_gallery(1, 6);
		$function_artikel = $this->Model_utama->landingpage_artikel(1, 10);
		$function_ourteam = $this->Model_utama->landingpage_ourteam(1, 3);
		$function_testimonial = $this->Model_utama->landingpage_testimonial(1, 3);

		//data funcstion about
		$data['judul_about'] = $function_about->judul;
		$data['isi_halaman_about'] = $function_about->isi_halaman;
		$data['gambar_about'] = $function_about->gambar;

		//data function galery untuk foreach
		$data['data_artikel'] = $function_artikel->result_array();
		$data['data_gallery'] = $function_gallery->result_array();
		$data['data_ourteam'] = $function_ourteam->result_array();
		$data['data_testimonial'] = $function_testimonial->result_array();

		//load view
		$this->load->view(template() . '/_header');
		$this->load->view(template() . '/_navbar');
		$this->load->view(template() . '/_slider_test');
		$this->load->view(template() . '/_landingpage', $data);
		$this->load->view(template() . '/_footer');
		//var_dump($data);
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
