<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller { 
	public function __construct()
    {
    	parent::__construct(); 
        $this->load->driver('cache');
        $this->load->helper(array('form', 'url','fechas_helper'));
    }
    public function index() 
    {
    	$data['saludo'] = 'Hola Demo! INDEX';
    	$data['despedida'] = 'Chau Demo! INDEX';
        $this->load->template('demo_vista',$data); 
    }
    public function demo_saludo()
    {

    	$data['saludo'] = 'Hola Demo!';
    	$data['despedida'] = 'Chau Demo!';
        $this->load->template('demo_vista',$data); 
    }
}