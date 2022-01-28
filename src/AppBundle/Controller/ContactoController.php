<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ContactoController extends Controller  
{
    /**
     * @Route("/contacto",name="contacto") 
     */
    public function  mostrarForm()
    {
        return $this->render('contacto/index.html.twig');  
    }

    public function filtrado($data)
    {
        $data = trim($data); // Elimina espacios antes y después de los datos
        $data = stripslashes($data); // Elimina backslashes \
        $data= htmlspecialchars($data); // Traduce caracteres especiales en entidades HTML
        return $data;
    }        
    /**
     * @Route("/procesado",name="procesado") 
     */                 
    public function prosesar()                  
    {            
       if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST")  
        {
           $nombre= $this->filtrado($_POST["nombre"]);
           $apellido= $this->filtrado($_POST["apellido"]);
           $email= $this->filtrado($_POST["email"]);
           $asunto= $this->filtrado($_POST["asunto"]);
           $texto= $this->filtrado($_POST["mensaje"]);


            return $this->redirectToRoute('homepage');
        }         
       
    }
}
