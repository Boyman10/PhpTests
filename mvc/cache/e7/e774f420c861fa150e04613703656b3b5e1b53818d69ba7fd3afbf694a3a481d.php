<?php

/* admin.twig */
class __TwigTemplate_9d256ef1b02a18d98e96c61cf90abb1782f8fb1a98f1e0e10ee4908b37ac0738 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "admin.twig", 1);
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
        echo "Backoffice - Index";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"container\">
<h1>";
        // line 9
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>


<p>
You are on the admin interface here - new template to implement - access rights...
</p>

</div>

  
";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  52 => 8,  49 => 7,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template.twig\" %} 

{% block title %}Backoffice - Index{% endblock %} 
{% block head %} {{ parent() }}
{% endblock %} 

{% block content %}
<div class=\"container\">
<h1>{{title}}</h1>


<p>
You are on the admin interface here - new template to implement - access rights...
</p>

</div>

  
{% endblock %}
", "admin.twig", "/home/bob/Documents/web/testme.com/html/mvc/src/view/backend/admin.twig");
    }
}
