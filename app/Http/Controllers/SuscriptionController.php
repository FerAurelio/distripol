<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;

class SuscriptionController extends Controller
{
    public function directory()
    {
            return view('/');
        }
    
    public function enviar()
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

     $para = 'info@distripol.com.ar';
     
     $asunto = 'Quiero Suscribirme a las Ofertas';

     mail($para, $asunto, utf8_decode($mensaje), $header);

     header('Location: #');
die();
}
}