<?php

/* _include/menu.html.twig */
class __TwigTemplate_1d3f6c947117fd19d6f2a53f44e0aa20e60fde186cb6cac75ba9247aa360b210 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"#\">BLOG</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"/mvc/\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item dropdown\" >
        <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">administration</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"/mvc/?action=users\">Users</a>
          <a class=\"dropdown-item\" href=\"/mvc/?action=adduser\">Add user</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Something else here</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Features
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"/mvc/?action=addpost\">Add new Post</a>
          <a class=\"dropdown-item\" href=\"/mvc/?action=listPosts\">All articles</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Something else here</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
  </div>
</nav>
    ";
    }

    public function getTemplateName()
    {
        return "_include/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"#\">BLOG</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"/mvc/\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item dropdown\" >
        <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">administration</a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"/mvc/?action=users\">Users</a>
          <a class=\"dropdown-item\" href=\"/mvc/?action=adduser\">Add user</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Something else here</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Features
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"/mvc/?action=addpost\">Add new Post</a>
          <a class=\"dropdown-item\" href=\"/mvc/?action=listPosts\">All articles</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Something else here</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
  </div>
</nav>
    ", "_include/menu.html.twig", "/home/bob/Documents/web/testme.com/html/mvc/src/view/backend/_include/menu.html.twig");
    }
}
