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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
function __construct(){
		parent::__construct();

		$this->load->model('m_eColonia');
	}
	public function index(){ //Pagina principal
		$this->load->view('index');
	}

	public function ambiental(){ //Cargar pagina principal de Ambiental
		$this->load->view('ambiental');
	}
	public function ambActividades(){//Ver agenda de actividades
		$this->load->view('agenda_actividades');
	}
	public function ambResiduos(){ //Ver tablas de residuos solidos
		$this->load->view('manejo_residuos');
	}
	public function ambEcotecnias(){ //Ver caracteristicas de ecotecnias
		$this->load->view('ecotecnias');
	}
	public function ambAgregaEvento(){ //Agregar un nuevo evento
		$this->load->view('actividades');
	}
	public function ambAgregaTaller(){ //Agregar un taller nuevo
		$this->load->view('taller');
	}
	public function ambAgregarActEcotecnia(){ //Agregar una nueva actividad que incluya ecotecnias
		$this->load->view('actividadesEcotecnias');
	}
	public function ambAgregarEcotecnia(){ //Agregar una nueva ecotecnia
		$this->load->view('agregarEcotecnia');
	}
	public function ambAgregarCategoria(){ // Agregar una categoria nueva de residuos solidos
		$this->load->view('categoriaResiduos');
	}
}
