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
class User
{

    private $id;

    /**
     *
     * @var String $name
     */
    private $name;

    /**
     * either ROLE_USER, ROLE_ADMIN...
     *
     * @var $role
     */
    private $role;

    public function __construct()
    {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }


    public function setRole(string $role)
    {
        $this->role = $role;
    }
}