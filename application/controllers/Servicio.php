<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
    }
    public function servicio($alias)
    {
        $data['active'] = array(
            'faq'=> NULL,
            'blog'=> NULL,
            'contacto'=> NULL
        );
        $this->load->template('detalle-servicio',$data);
    }
}
