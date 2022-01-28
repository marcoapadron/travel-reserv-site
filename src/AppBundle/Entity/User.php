<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="my_users")
 */
class User  implements UserInterface, \Serializable{
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;
    
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;
    
    /**
     * @ORM\Column(type="string", length=254, unique=true,nullable=TRUE)
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $role;
    
    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    
    public function __construct()
    {
        $this->role = 'ROLE_USER';
        // Por si la necesito mas adelante para validar caducidad de un usario previamente registrado 
        //ahora no me hace falta 
                $this->isActive = true;
    }
    
    //Segcion de geters
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getUsername()
    {
        return $this->username;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function getRoles()
    {
        return [$this->role];
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getIsActive()
    {
        return $this->isActive;
    }

    public function getSalt()
    {   
        //De momento tampoco necesito definir uno
        return NULL;
    }
    
    
 //Seccion de metodos seter
    
 public function setUsername(string $name)
 {
     $this->username= $name;
 }
 
 public function setPassword(string $password)
 {
     $this->password=$password;
 }
 
 public function setEmail(string $email)
 {
     $this->email=$email;
 }
 
 public function eraseCredentials() 
    {
        
    }
    
   /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password,
            // Si es necesario definir un salt() descomentar linea inferior
            // $this->salt,
        ]);
    }
    
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // Si es necesario definir un salt() descomentar linea inferior
            // $this->salt
        ) = unserialize($serialized, ['allowed_classes' => false]);
    } 
    
}
