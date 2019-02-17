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
            $this->envioCorreo($arrData); 
            // redirect('/contactanos'); 
            // exit(); 
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
    private function envioCorreo($arrData)
    {
        $this->load->library('My_PHPMailer'); 
        $htmlCorreo = '<div class="container-mensaje"> 
            <h2 class="header"> ¡'.strtoupper($arrData['nombres']).' te quiere contactar! </h2> 
            <ul class="list-info">
                <li> <label> NOMBRES Y APELLIDOS </label> <span>'.$arrData['nombres'].'</span> </li> 
                <li> <label> NOMBRES Y APELLIDOS </label> <span>'.$arrData['telefono'].'</span> </li> 
                <li> <label> NOMBRES Y APELLIDOS </label> <span>'.$arrData['mail'].'</span> </li> 
                <li> <label> NOMBRES Y APELLIDOS </label> <span>'.$arrData['mensaje'].'</span> </li> 
            </ul>
            <p>'.$arrData['fecha_registro'].'</p>
        </div>'; 

        $para      = 'dcisneros@dcyjvasociados.com';
        $asunto    = '¡'.$arrData['nombres'].' te quiere contactar!';
        // $mensaje   = 'Hola '.$arrData['nombres']; 
        // $cabeceras = 'From: dcisneros@dcyjvasociados.com' . "\r\n" .
        //     'Reply-To: dcisneros@dcyjvasociados.com' . "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();

        // mail($para, $titulo, $mensaje, $cabeceras);

        $mail = new PHPMailer();
        $mail->IsSMTP(true);
        $mail->SMTPDebug = 1;
        $mail->SMTPAuth = ($configuracion['smtp_auth'] == 1) ? TRUE : FALSE;
        $mail->SMTPSecure = $configuracion['smtp_secure'];
        $mail->Host = $configuracion['smtp_host'];
        $mail->Port = $configuracion['smtp_port'];
        $mail->Username =  $configuracion['smtp_username'];
        $mail->Password = $configuracion['smtp_password'];
        $mail->SetFrom($configuracion['smtp_username'],$setFromAleas);
        $mail->AddReplyTo($configuracion['smtp_username'],$setFromAleas);
        $mail->Subject = $asunto;
        $mail->IsHTML(true);
        $mail->AltBody = $htmlCorreo;
        $mail->MsgHTML($htmlCorreo);
        $mail->CharSet = 'UTF-8';

        $mail->addAddress($para);
        $mail->Send();
    }
}
