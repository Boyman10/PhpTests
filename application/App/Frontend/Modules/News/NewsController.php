<?php
namespace App\Frontend\Modules\News;

use \OCFram\BackController;
use \OCFram\HTTPRequest;
use \Entity\Comment;
use \OCFram\Form;
use \OCFram\StringField;
use \OCFram\TextField;

use \FormBuilder\CommentFormBuilder;
use \OCFram\FormHandler;
use \Cache\NewsCacheManager; // load cache manager for news-id... in executeShow(HTTPRequest $request)


class NewsController extends BackController
{
  public function executeIndex(HTTPRequest $request)
  {
    $nombreNews = $this->app->config()->get('nombre_news');
    $nombreCaracteres = $this->app->config()->get('nombre_caracteres');
    
    // On ajoute une d�finition pour le titre.
    $this->page->addVar('title', 'Liste des '.$nombreNews.' derni�res news');
    
    // On r�cup�re le manager des news.
    $manager = $this->managers->getManagerOf('News');
    
    // Cette ligne, vous ne pouviez pas la deviner sachant qu'on n'a pas encore touch� au mod�le.
    // Contentez-vous donc d'�crire cette instruction, nous impl�menterons la m�thode ensuite.
    $listeNews = $manager->getList(0, $nombreNews);
    
    foreach ($listeNews as $news)
    {
      if (strlen($news->contenu()) > $nombreCaracteres)
      {
        $debut = substr($news->contenu(), 0, $nombreCaracteres);
        $debut = substr($debut, 0, strrpos($debut, ' ')) . '...';
        
        $news->setContenu($debut);
      }
    }
    
    // On ajoute la variable $listeNews � la vue.
    $this->page->addVar('listeNews', $listeNews);
  }
  
  public function executeShow(HTTPRequest $request)
  {
      
      // Let's retrieve a news from its Id if there is a cache version of this one :
      //$news = $this->managers->get
      
      $news = $this->managers->getManagerOf('News')->getUnique($request->getData('id'));
      
      if (empty($news))
      {
          $this->app->httpResponse()->redirect404();
      }
      
      $this->page->addVar('title', $news->titre());
      $this->page->addVar('news', $news);
      $this->page->addVar('comments', $this->managers->getManagerOf('Comments')->getListOf($news->id()));
  }
  
  public function executeInsertComment(HTTPRequest $request)
  {
      // Si le formulaire a �t� envoy�.
      if ($request->method() == 'POST')
      {
          $comment = new Comment([
              'news' => $request->getData('news'),
              'auteur' => $request->postData('auteur'),
              'contenu' => $request->postData('contenu')
          ]);
      }
      else
      {
          $comment = new Comment;
      }
      
      $formBuilder = new CommentFormBuilder($comment);
      $formBuilder->build();
      
      $form = $formBuilder->form();
      $formHandler = new \OCFram\FormHandler($form, $this->managers->getManagerOf('Comments'), $request);
      
      if ($formHandler->process())
      {
          $this->app->user()->setFlash('Le commentaire a bien �t� ajout�, merci !');
          $this->app->httpResponse()->redirect('news-'.$request->getData('news').'.html');
      }
      
      $this->page->addVar('comment', $comment);
      $this->page->addVar('form', $form->createView());
      $this->page->addVar('title', 'Ajout d\'un commentaire');
  }

}