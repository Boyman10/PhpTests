<?php
/**
* This is the Post Entity
*
* To be used for hydratation
*
* @see Markdown
* @todo - implement hydratation
*/

namespace \OC\Test\Model\Entity;

class Post extends Model
{
    private $id;
    private $author;
    private $content;
    private $title;
    private $dateCreation;
    
    
    public getId() {
        
        return $this->id;
    }
    
    public getAuthor() // Récupère l'auteur
    {
        return $this->author;
    }
    
    public getContent() // Récupère le contenu
    {
        return $this->content;
    }
    
    public setAuthor($author) // Définit l'auteur
    {
        $this->author = $author;
    }
    
    public setContent($content) // Définit le contenu
    {
        $this->content = $content;
    }

    public getTitle() {
        
        return $this->title;
    }
    
    public setTitle($title) {
        
        $this->title = $title;
    }
    
    public getDateCreation() {
        
        return $this->dateCreation;
    }
    
    public setDateCreation($date) {
        
        $this->dateCreation = $date;
    }
}


