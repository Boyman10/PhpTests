<?php

/* template.twig */
class __TwigTemplate_502ca7d2d9922ca49fa04b6e101dd27c64cd3806fb03cd72b5f5d761505ceef9 extends Twig_Template
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
    
    ";
        // line 14
        $this->loadTemplate("_include/menu.html.twig", "template.twig", 14)->display($context);
        // line 15
        echo "    
        ";
        // line 16
        $this->displayBlock('alert', $context, $blocks);
        // line 25
        echo "    
    
        <div id=\"content\">";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        <div id=\"footer\">
            ";
        // line 29
        $this->displayBlock('footer', $context, $blocks);
        // line 32
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
        echo " - Backoffice with Twig</title>
        ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_alert($context, array $blocks = array())
    {
        // line 17
        echo "        <div id=\"alert-msg\" class=\"container\">
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "get", array(0 => "flash"), "method")) {
            // line 19
            echo "            <div class=\"alert alert-success\" role=\"alert\">
              <strong>Well done!</strong> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "get", array(0 => "flash"), "method"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 23
        echo "        </div>
        ";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "                &copy; Copyright 2018 by <a href=\"/\">you</a>.
            ";
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  114 => 29,  109 => 27,  104 => 23,  98 => 20,  95 => 19,  93 => 18,  90 => 17,  87 => 16,  77 => 9,  74 => 8,  71 => 7,  61 => 32,  59 => 29,  54 => 27,  50 => 25,  48 => 16,  45 => 15,  43 => 14,  38 => 11,  36 => 7,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
    
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    
        {% block head %}
            <link rel=\"stylesheet\" href=\"/mvc/src/public/css/style.css\" />
            <title>{% block title %}{% endblock %} - Backoffice with Twig</title>
        {% endblock %}
    </head>
    <body>
    
    {% include '_include/menu.html.twig' %}
    
        {% block alert %}
        <div id=\"alert-msg\" class=\"container\">
        {% if app.session.get('flash')  %}
            <div class=\"alert alert-success\" role=\"alert\">
              <strong>Well done!</strong> {{ app.session.get('flash') }}
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
</html>", "template.twig", "/home/bob/Documents/web/testme.com/html/mvc/src/view/backend/template.twig");
    }
}
