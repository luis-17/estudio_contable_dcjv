<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
    }
	public function index()
	{
		
        if( $this->input->post('nombres') ){ 
            $arrData = array(
                'nombres'=> $this->input->post('nombres'),
                'telefono'=> $this->input->post('telefono'),
                'mail'=> $this->input->post('mail'),
                'mensaje'=> $this->input->post('mensaje'),
                'fecha_registro'=> date('Y-m-d H:i:s') 
            ); 
            if($this->model_contacto->registrar_contacto($arrData)){
                $this->session->set_flashdata('bool_info', 'ok');
            }else{
                $this->session->set_flashdata('bool_info', 'error');
            }
            redirect('/contactanos'); 
            exit(); 
        }else{
            $data['active'] = array( 
                'inicio'=> NULL,
                'nosotros'=> NULL,
                'servicios'=> NULL,
                'clientes'=> NULL,
                'contacto'=> '-active' 
            );
            $this->load->template('contacto',$data); 
        }
	}
}
