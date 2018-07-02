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

    /**
     * @var int $id
     */
    private $id;

    /**
     *
     * @var String $userName
     */
    private $user_name;
    
    /**
     * either ROLE_USER, ROLE_ADMIN...
     * @var String $userRole
     */
    private $user_role;
    
    /**
     * @var $dateCreated;
     */
    private $date_created;
    
    /**
     * @var $userEmail;
     */
    private $user_email;

    /**
     * @var $userPass;
     */
    private $user_pass;
    
    /**
     * Waking up properly after unserializing...
     */
    public function __wakeup()
    {
        $this->id = (int) $this->id;
    }
    
    public function getUserName(): string
    {
        return $this->user_name;
    }
    public function getUserEmail(): string
    {
        return $this->user_email;
    }
    
    public function getDateCreated(): string
    {
        return $this->date_created;
    }
    
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getUserRole(): string
    {
        return $this->user_role;
    }

    public function setUserName(string $name)
    {
        $this->user_name = $name;
    }
    public function getUserPass(): string
    {
        return $this->user_pass;
    }
    
    public function setUserPass(string $pass)
    {
        $this->user_pass = $pass;
    }
    public function setUserEmail(string $email)
    {
        $this->user_email = $email;
    }
    
    public function setDateCreated(string $dateCreated)
    {
        $this->date_created = $dateCreated;
    }
    
    public function setUserRole(string $role)
    {
        $this->user_role = $role;
    }
}