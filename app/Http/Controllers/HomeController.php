<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return \View::make('index');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mapa()
    {

        return \View::make('mapa');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function terminos()
    {

        return \View::make('terminos');
        
    }  


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function politicas()
    {

        return \View::make('politicas');
        
    }    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trabaja()
    {

        return \View::make('trabaja');
        
    } 

    public function enviar()
    {       
        
        if($_POST['cargo'] != 'otros') {

            $cargo = $_POST['cargo'];

        }else{

            $cargo = $_POST['otroCargo'];
        }


        if($_POST['sector'] != 'otros') {

            $sector = $_POST['sector'];

        }else{

            $sector = $_POST['otroSector'];
        } 

        $message = $_POST['message']."<br><br> Atte.: ".$_POST['name']."<br> Cargo: ".$cargo."<br> Sector: ".$sector."<br> Teléfono: ".$_POST['phone']."<br> Correo Electrónico: ".$_POST['email'];
                
        
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cabeceras .= "Content-Type: image/png";    
        $cabeceras .= 'To: ilernus <ventas@solucionesbestoffice.com>' . "\r\n";
        $cabeceras .= 'From: '.$_POST['name'].' <'.$_POST['email'].'>' . "\r\n";     
        
        if (!mail('ventas@ilernus.com', $_POST['asunto'].' - ilernus.com', $message, $cabeceras)) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!, el mensaje no se pudo enviar');
        } else {
            Session::flash('message','Su mensaje fue enviado exitosamente!');
        }



        //return Redirect::to('/#contacto');*/

    /*

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";

        //$mail->Username = "socialmedia@monitorbg.com";
        //$mail->Password = "Monitor.2017";
        //$mail->SetFrom('socialmedia@monitorbg.com');

        $mail->Username = "atrellus@gmail.com";
        $mail->Password = "falcor90dbb";
        $mail->SetFrom('socialmedia@monitorbg.com');        

        $mail->AddReplyTo($_POST['email'], $_POST['name']);
        //$mail->addAddress("ventas@ilernus.com");
        $mail->addAddress("ezebarazarte@gmail.com");
        
        $mail->Subject = "ilernus.com - ". $_POST['asunto'];
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        $mail->msgHTML($message);
        $mail->AltBody = 'Contactanos';
        //$mail->addAttachment('images/imagen_adjunta.png');
         
        if (!$mail->send()) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!'.$mail->ErrorInfo);
        } else {
            Session::flash('message','Su mensaje fue enviado exitosamente!');
        }


*/

        return Redirect::to('http://'.$_SERVER['SERVER_NAME'].'/#mensaje-enviado');

    } 

    public function enviarTrabaja()
    {  

        $archivoNombre = $_FILES['archivo']['name']; //nombre del archivo a ser enviado (sin la ruta, solo el nombre con la extensión, por ejemplo: imagen.jpg)
        $archivo = $_FILES['archivo']['tmp_name']; //ruta temporal del archivo a ser adjuntado (ubicación fisica del archivo subido en el servidor)
        $archivo = file_get_contents($archivo); //leeo del origen temporal el archivo y lo guardo como un string en la misma variable (piso la variable $archivo que antes contenía la ruta con el string del archivo)
        $archivo = chunk_split(base64_encode($archivo)); //codifico el string leido del archivo en base64 y la fragmento segun RFC 2045
        $uid = md5(uniqid(time())); //frabrico un ID único que usaré para el "boundary"
        
        $message = $_POST['message']. "\r\n"."Atte.: ".$_POST['name']."\r\n"." Teléfono: ".$_POST['phone']."\r\n"." Correo Electrónico: ".$_POST['email'];
                    
        $asuntoEmail = 'Archivo adjunto'; //asunto del email
        
        //cuerpo del email:
        $cuerpoMensaje = $message. "\r\n";

        //fin cuerpo del email.
        
        //cabecera del email (forma correcta de codificarla)
        $header =  'From: '.$_POST['name'].' <'.$_POST['email'].'>' . "\r\n"; 
        $header .= "Reply-To: " . $_POST['name'] . "\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";
        //armado del mensaje y attachment
        $mensaje = "--" . $uid . "\r\n";
        $mensaje .= "Content-type:text/plain; charset=utf-8\r\n";
        $mensaje .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $mensaje .= $cuerpoMensaje . "\r\n\r\n";
        $mensaje .= "--" . $uid . "\r\n";
        $mensaje .= "Content-Type: application/octet-stream; name=\"" . $archivoNombre . "\"\r\n";
        $mensaje .= "Content-Transfer-Encoding: base64\r\n";
        $mensaje .= "Content-Disposition: attachment; filename=\"" . $archivoNombre . "\"\r\n\r\n";
        $mensaje .= $archivo . "\r\n\r\n";
        $mensaje .= "--" . $uid . "--";
            
        if (!mail('reclutamiento@monitorbg.com', 'Trabajar con Best Office - solucionesbestoffice.com', $mensaje, $header)) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!, el mensaje no se pudo enviar');
        } else {
            Session::flash('message','Su mensaje fue enviado exitosamente!');
        }

        return Redirect::to('http://'.$_SERVER['SERVER_NAME'].'/Trabaja-con-Nosotros#mensaje-enviado');

    } 



    
}
