<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quienes extends CI_Controller {
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
		$this->load->template('quienes-somos',$data);
	}
}