<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
    }
	public function index()
	{
		$data['active'] = array(
        	'faq'=> NULL,
        	'blog'=> NULL,
        	'contacto'=> NULL
        );
		$this->load->template('contacto',$data);
	}
}
