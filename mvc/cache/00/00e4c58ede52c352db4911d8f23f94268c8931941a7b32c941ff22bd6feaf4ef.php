<?php

/* login.twig */
class __TwigTemplate_3589f572e3d930f53875fa774ac423f95f3ac78f89e02447795759060764f15b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "login.twig", 1);
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
        echo "Backoffice - login in";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"container\">
<h1>";
        // line 10
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>



\t<form>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\">Username</label> <input
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"username\"
\t\t\t\taria-describedby=\"authorHelp\" placeholder=\"Enter user name\"> <small
\t\t\t\tid=\"authorHelp\" class=\"form-text text-muted\">User name or email</small>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\">Password</label> 
\t\t\t<input type=\"password\" class=\"form-control\" id=\"title\" placeholder=\"password\">
\t\t</div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  53 => 9,  50 => 8,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template.twig\" %} 

{% block title %}Backoffice - login in{% endblock %} 
{% block head %} {{ parent() }}

{% endblock %} 

{% block content %}
<div class=\"container\">
<h1>{{title}}</h1>



\t<form>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\">Username</label> <input
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"username\"
\t\t\t\taria-describedby=\"authorHelp\" placeholder=\"Enter user name\"> <small
\t\t\t\tid=\"authorHelp\" class=\"form-text text-muted\">User name or email</small>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"password\">Password</label> 
\t\t\t<input type=\"password\" class=\"form-control\" id=\"title\" placeholder=\"password\">
\t\t</div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</form>
</div>

{% endblock %}
", "login.twig", "/home/bob/Documents/web/testme.com/html/mvc/src/view/backend/login.twig");
    }
}
