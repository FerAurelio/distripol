<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function directory()
    {
            return view('contacto');
        }
    
    public function enviar2()
    {
     $nombre = $_POST['name'];
     $mail = $_POST['email'];
     
     

     $header = 'From: ' . $mail . " \r\n";
     $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
     $header .= "Mime-Version: 1.0 \r\n";
     $header .= "Content-Type: text/plain";

     $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
     $mensaje .= "Su e-mail es: " . $mail . " \r\n";     
     $mensaje .= "Enviado el " . date('d/m/Y', time());

     $para = 'distripol@distripol.com.ar';
     $asunto = 'Quiero Suscribirme a las Ofertas';

     mail($para, $asunto, utf8_decode($mensaje), $header);

     
}
}