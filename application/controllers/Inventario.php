<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Controlador inventarios
*/
class Inventario extends CI_Controller
{
	
	function __construct(){
		# code...
		parent::__construct();
		$this->load->model('vacas_model');
		$this->load->model('fincas_model');
		$this->load->model('file_model');
		$this->load->helper('form');
		$this->load->helper('uploadFiles');
	}

	function index(){
		$data['inventario'] = $this->vacas_model->getVacas();

		$this->load->view('templates/head');
		$this->load->view('dashboard/nav');
		$this->load->view('inventarios/inventario', $data);

	}

	function nuevo(){

		$data['lista_fincas']= $this->fincas_model->getFincas();
		
		$this->load->view('templates/head');
		$this->load->view('dashboard/nav');
		$this->load->view('inventarios/ingresarGanado', $data);

	}

	function insertar (){

		$post = $this->input->post();

		$config['upload_path']          = './public/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config); 

        if (!$this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            echo $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            var_dump($data);
        }
	}

	function html($value='')
    {
            return "
            <html>
            <head>
                    <title> Upload Error </title>
            </head>
            <body>
           
            </body>
            </html>";
    }

	

}















 ?>