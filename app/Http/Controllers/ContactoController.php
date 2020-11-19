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
     $telefono= $_POST['phone'];
     $empresa = $_POST['empresa'];
     $mail = $_POST['email'];
     $consulta= $_POST['consulta'];
     

     $header = 'From: ' . $mail . " \r\n";
     $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
     $header .= "Mime-Version: 1.0 \r\n";
     $header .= "Content-Type: text/plain";

     $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
     $mensaje .= "Su número telefónico es: " . $telefono . " \r\n";
     $mensaje .= "De la Empresa: " . $empresa . " \r\n";
     $mensaje .= "Su e-mail es: " . $mail . " \r\n";
     $mensaje .= "Mensaje: " . $consulta . " \r\n";
     $mensaje .= "Enviado el " . date('d/m/Y', time());

     //$para = 'distripol@distripol.com.ar';
     $para = 'fer.aurelio@hotmail.com';
     $asunto = 'Consulta desde la web';

     mail($para, $asunto, utf8_decode($mensaje), $header);
     
     
     header('Location: /contactoenviado');
die();

    

     
}
}