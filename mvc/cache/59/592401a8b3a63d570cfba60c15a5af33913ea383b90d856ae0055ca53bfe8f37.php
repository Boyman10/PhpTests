<?php

/* template.twig */
class __TwigTemplate_4e7a5bf9deaea145d5cc8df8a05a14dc0571f76ad7f578ca1971cd975bf19402 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'alert' => array($this, 'block_alert'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    
        ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
    
    
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
          <a class=\"dropdown-item\" href=\"/mvc/?action=login\">Sign in</a>
          <a class=\"dropdown-item\" href=\"/mvc/?action=register\">Register</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"/mvc/?action=logout\">logout</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Features
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
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
        // line 56
        $this->displayBlock('alert', $context, $blocks);
        // line 65
        echo "    
    
        <div id=\"content\">";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        <div id=\"footer\">
            ";
        // line 69
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "        </div>
        
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </body>
</html>";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "            <link rel=\"stylesheet\" href=\"/mvc/src/public/css/style.css\" />
            <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage with Twig</title>
        ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 56
    public function block_alert($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"alert-msg\" class=\"container\">
    ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "flash", array())) {
            // line 59
            echo "        <div class=\"alert alert-success\" role=\"alert\">
          <strong>Well done!</strong> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "flash", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 63
        echo "    </div>
    ";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        // line 70
        echo "                &copy; Copyright 2018 by <a href=\"/\">you</a>.
            ";
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 70,  151 => 69,  146 => 67,  141 => 63,  135 => 60,  132 => 59,  130 => 58,  127 => 57,  124 => 56,  114 => 9,  111 => 8,  108 => 7,  98 => 72,  96 => 69,  91 => 67,  87 => 65,  85 => 56,  38 => 11,  36 => 7,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
    
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    
        {% block head %}
            <link rel=\"stylesheet\" href=\"/mvc/src/public/css/style.css\" />
            <title>{% block title %}{% endblock %} - My Webpage with Twig</title>
        {% endblock %}
    </head>
    <body>
    
    
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
          <a class=\"dropdown-item\" href=\"/mvc/?action=login\">Sign in</a>
          <a class=\"dropdown-item\" href=\"/mvc/?action=register\">Register</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"/mvc/?action=logout\">logout</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Features
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
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
    
    {% block alert %}
    <div id=\"alert-msg\" class=\"container\">
    {% if session.flash  %}
        <div class=\"alert alert-success\" role=\"alert\">
          <strong>Well done!</strong> {{ session.flash }}
        </div>
    {% endif %}
    </div>
    {% endblock %}
    
    
        <div id=\"content\">{% block content %}{% endblock %}</div>
        <div id=\"footer\">
            {% block footer %}
                &copy; Copyright 2018 by <a href=\"/\">you</a>.
            {% endblock %}
        </div>
        
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    </body>
</html>", "template.twig", "/home/bob/Documents/web/testme.com/html/mvc/src/view/frontend/template.twig");
    }
}
