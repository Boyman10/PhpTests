<?php

/* add-post.twig */
class __TwigTemplate_d935e1a582d760cec0286469d60edf1348af9e055f1a32b3357386ceaa810508 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "add-post.twig", 1);
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
        echo "Backoffice - Adding post form";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
 <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>

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



\t<form method=\"post\" action=\"?action=addpost\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\">Title</label> <input
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"title\" name=\"title\"
\t\t\t\taria-describedby=\"postHelp\" placeholder=\"Enter title of post\"> 
\t\t</div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"content\">Content</label> 
\t\t\t<textarea name=\"content\" class=\"form-control\" id=\"content\"></textarea> 
\t\t</div>

\t\t\t<input type=\"hidden\" name=\"token\" id=\"title\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">

\t\t
\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</form>
</div>

  <script>
  tinymce.init({
\t    selector:   \"textarea\",
\t    width:      '100%',
\t    height:     500,

\t});

  </script>
  
";
    }

    public function getTemplateName()
    {
        return "add-post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  57 => 11,  54 => 10,  51 => 9,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template.twig\" %} 

{% block title %}Backoffice - Adding post form{% endblock %} 
{% block head %} {{ parent() }}
 <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>

{% endblock %} 

{% block content %}
<div class=\"container\">
<h1>{{title}}</h1>



\t<form method=\"post\" action=\"?action=addpost\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"username\">Title</label> <input
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"title\" name=\"title\"
\t\t\t\taria-describedby=\"postHelp\" placeholder=\"Enter title of post\"> 
\t\t</div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<label for=\"content\">Content</label> 
\t\t\t<textarea name=\"content\" class=\"form-control\" id=\"content\"></textarea> 
\t\t</div>

\t\t\t<input type=\"hidden\" name=\"token\" id=\"title\" value=\"{{ token }}\">

\t\t
\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</form>
</div>

  <script>
  tinymce.init({
\t    selector:   \"textarea\",
\t    width:      '100%',
\t    height:     500,

\t});

  </script>
  
{% endblock %}
", "add-post.twig", "/home/bob/Documents/web/testme.com/html/mvc/src/view/backend/add-post.twig");
    }
}
