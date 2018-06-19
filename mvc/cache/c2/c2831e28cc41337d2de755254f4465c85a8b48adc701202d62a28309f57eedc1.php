<?php

/* register.twig */
class __TwigTemplate_1e41d08e410448101d22aae721302757bf65fe037ae52dde540152a77e4d419d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "register.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Backoffice - Registration form";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        echo " 
";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<script src='https://www.google.com/recaptcha/api.js'></script>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"container\">
<h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>



\t<form method=\"POST\" action=\"?action=register\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\">Username</label> <input
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"username\" name=\"username\"
\t\t\t\taria-describedby=\"authorHelp\" placeholder=\"Enter user name\"> 
\t\t</div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\">Email</label> <input name=\"email\"
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"email\"
\t\t\t\taria-describedby=\"authorHelp\" placeholder=\"Enter your email address\"> 
\t\t</div>
\t\t\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\">Password</label> 
\t\t\t<input type=\"password\" name=\"pass\" class=\"form-control\" id=\"title\" placeholder=\"password\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"conf\">Confirm Password</label> 
\t\t\t<input type=\"password\" name=\"conf\" class=\"form-control\" id=\"title\" placeholder=\"confirm password\">
\t\t</div>
\t\t
\t\t<div class=\"g-recaptcha\" data-sitekey=\"6LdTw18UAAAAAL2TQfdYRrT3SNtFVzL9RhNL0RzV\"></div>
\t\t
\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  55 => 10,  52 => 9,  45 => 5,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template.twig\" %} 

{% block title %}Backoffice - Registration form{% endblock %} 
{% block head %} 
{{ parent() }}
<script src='https://www.google.com/recaptcha/api.js'></script>
{% endblock %} 

{% block content %}
<div class=\"container\">
<h1>{{title}}</h1>



\t<form method=\"POST\" action=\"?action=register\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\">Username</label> <input
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"username\" name=\"username\"
\t\t\t\taria-describedby=\"authorHelp\" placeholder=\"Enter user name\"> 
\t\t</div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"email\">Email</label> <input name=\"email\"
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"email\"
\t\t\t\taria-describedby=\"authorHelp\" placeholder=\"Enter your email address\"> 
\t\t</div>
\t\t\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\">Password</label> 
\t\t\t<input type=\"password\" name=\"pass\" class=\"form-control\" id=\"title\" placeholder=\"password\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"conf\">Confirm Password</label> 
\t\t\t<input type=\"password\" name=\"conf\" class=\"form-control\" id=\"title\" placeholder=\"confirm password\">
\t\t</div>
\t\t
\t\t<div class=\"g-recaptcha\" data-sitekey=\"6LdTw18UAAAAAL2TQfdYRrT3SNtFVzL9RhNL0RzV\"></div>
\t\t
\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</form>
</div>

{% endblock %}
", "register.twig", "/home/bob/Documents/web/testme.com/html/mvc/src/view/backend/register.twig");
    }
}
