<?php
declare(strict_types = 1);
namespace OC\Model\Entity;

/**
 * This is the User Entity
 *
 * To be used for hydratation
 *
 * @see Markdown
 * @todo - implement hydratation
 */
class User extends Model
{

    private $id;

    /**
     *
     * @var String $userName
     */
    private $userName;
    
    /**
     * either ROLE_USER, ROLE_ADMIN...
     * @var String $userRole
     */
    private $userRole;
    
    /**
     * @var $dateCreated;
     */
    private $dateCreated;
    
    /**
     * @var $userEmail;
     */
    private $userEmail;


    public function getUserName(): string
    {
        return $this->userName;
    }
    public function getUserEmail(): string
    {
        return $this->userEmail;
    }
    
    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }
    
    public function getId(): int
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getUserRole(): string
    {
        return $this->userRole;
    }

    public function setUserName(string $name)
    {
        $this->userName = $name;
    }

    public function setUserEmail(string $email)
    {
        $this->userEmail = $email;
    }
    
    public function setDateCreated(string $dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }
    
    public function setUserRole(string $role)
    {
        $this->userRole = $role;
    }
}