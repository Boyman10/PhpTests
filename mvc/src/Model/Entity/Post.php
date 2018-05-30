<?php
declare(strict_types = 1);
namespace OC\Model\Entity;

/**
 * This is the Post Entity
 *
 * To be used for hydratation
 *
 * @see Markdown
 * @todo - implement hydratation
 */
class Post //extends Model
{
    private $id;
    
    /**
     * @var User $author
     */
    private $author;
    private $content;
    private $title;
    private $dateCreation;
    
    
    public function getId() {
        
        return $this->id;
    }
    
    public function getAuthor() : User // Récupère l'auteur
    {
        return $this->author;
    }
    
    public function getContent() // Récupère le contenu
    {
        return $this->content;
    }
    
    public function setAuthor(User $author) // Définit l'auteur
    {
        $this->author = $author;
    }
    
    public function setContent($content) // Définit le contenu
    {
        $this->content = $content;
    }

    public function getTitle() {
        
        return $this->title;
    }
    
    public function setTitle($title) {
        
        $this->title = $title;
    }
    
    public function getDateCreation() {
        
        return $this->dateCreation;
    }
    
    public function setDateCreation($date) {
        
        $this->dateCreation = $date;
    }
}


