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
	 
	// Métodos de ruta a páginas del index
	public function index()
	{
		$data['pagina'] = 'inicio.php';
		$data['section'] = 'index';
		$this->load->view('base', $data);
	}
	
	public function nosotros()
	{
		$data['pagina'] = 'nosotros.php';
		$data['section'] = 'proit';
		$this->load->view('base', $data);
	}
	
	// Métodos de ruta a páginas de mercados
	public function partnerships()
	{
		$data['pagina'] = 'new/partnerships.php';
		$data['section'] = 'proit';
		$this->load->view('base', $data);
	}
	
	public function smartcities()
	{
		$data['pagina'] = 'new/smartcities.php';
		$data['section'] = 'solutions';
		$this->load->view('base', $data);
	}
	
	public function smartindustries()
	{
		$data['pagina'] = 'new/smartindustries.php';
		$data['section'] = 'solutions';
		$this->load->view('base', $data);
	}
	
	public function energyconsumption()
	{
		$data['pagina'] = 'new/energyconsumption.php';
		$data['section'] = 'solutions';
		$this->load->view('base', $data);
	}
	
	public function greenspaces()
	{
		$data['pagina'] = 'new/greenspaces.php';
		$data['section'] = 'solutions';
		$this->load->view('base', $data);
	}
	
	public function wastlecollection()
	{
		$data['pagina'] = 'new/wastlecollection.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}
	
	public function fleetmanagement()
	{
		$data['pagina'] = 'new/fleetmanagement.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}
	
	public function citizeninterface()
	{
		$data['pagina'] = 'new/citizeninterface.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}
	
	public function agriculture()
	{
		$data['pagina'] = 'new/agriculture.php';
		$data['section'] = 'solutions';
		$this->load->view('base', $data);
	}
	
	public function cargomanagement()
	{
		$data['pagina'] = 'new/cargomanagement.php';
		$data['section'] = 'solutions';
		$this->load->view('base', $data);
	}
	
	public function cargologistic()
	{
		$data['pagina'] = 'new/cargologistic.php';
		$data['section'] = 'solutions';
		$this->load->view('base', $data);
	}
	
	// Métodos de ruta a páginas de soluciones
	public function products()
	{
		$data['pagina'] = 'new/products.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}
	
	// Método de ruta a página de login
	public function login()
	{
		$data['pagina'] = 'login.php';
		$data['section'] = 'login';
		$this->load->view('login', $data);
	}
	
	// Método de ruta a página de login
	public function public_perfil()
	{
		$data['pagina'] = 'public_perfil.php';
		$data['section'] = 'index';
		$this->load->view('base', $data);
	}
	
	
	#lists products
	public function bee2energy()
	{
		$data['pagina'] = 'new/bee2energy.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}

	public function bee2waste()
	{
		$data['pagina'] = 'new/bee2waste.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}

	public function bee2lighting()
	{
		$data['pagina'] = 'new/bee2lighting.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}

	public function bee2green()
	{
		$data['pagina'] = 'new/bee2green.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}

	public function bee2crop()
	{
		$data['pagina'] = 'new/bee2crop.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}

	public function bee2firedetection()
	{
		$data['pagina'] = 'new/bee2firedetection.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}

	public function bee2citizen()
	{
		$data['pagina'] = 'new/bee2citizen.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}

	public function cargoebusiness()
	{
		$data['pagina'] = 'new/cargoebusiness.php';
		$data['section'] = 'products';
		$this->load->view('base', $data);
	}



	
	
	
	public function intraestructura()
	{
		$this->load->view('intraestructura');
	}
	
	public function seguridad()
	{
		$this->load->view('seguridad');
	}
	
	public function plataformas()
	{
		$this->load->view('plataformas');
	}
	
	public function redes_i()
	{
		$this->load->view('redes_i');
	}
	
	public function gestion_s()
	{
		$this->load->view('gestion_s');
	}
	
	public function outsourcing()
	{
		$this->load->view('outsourcing');
	}
	
	public function productos()
	{
		$this->load->view('productos');
	}
	
	// Métodos de ruta a la página de contacto
	public function contacto()
	{
		$data['pagina'] = 'contacto.php';
		$data['section'] = 'contact';
		$this->load->view('base', $data);
	}
}
