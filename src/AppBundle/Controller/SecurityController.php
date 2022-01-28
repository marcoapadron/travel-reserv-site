<?php
namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
//use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends Controller {
    
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(AuthenticationUtils $authenUtils)
    {
        //Obtener el error en el login si falla algo
        $error = $authenUtils->getLastAuthenticationError();
        $lastUsername = $authenUtils->getLastUsername();
        
        return $this->render('accounts/login.html.twig',['last_username' => $lastUsername,'error'=> $error]);
        
    }
    
   
}
