<?php

/* add_post.twig */
class __TwigTemplate_34cb32227e4416f32394a71bca2516850e74a45887b8044b59556c1a96722350 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "add_post.twig", 1);
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

    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<style type=\"text/css\">
.important {
\tcolor: #336699;
}
</style>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>

<div class=\"container\">

\t<form>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"author\">Author</label> <input
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"author\"
\t\t\t\taria-describedby=\"authorHelp\" placeholder=\"Enter author name\"> <small
\t\t\t\tid=\"authorHelp\" class=\"form-text text-muted\">Named entered using Session element...</small>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"title\">Title</label> <input
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"title\"
\t\t\t\tplaceholder=\"Title\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"content\">Content</label> <textarea name=\"content\" class=\"form-control\" id=\"content\"></textarea>
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</form>
</div>
<script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
  <script type=\"text/javascript\">
  tinymce.init({
    selector: '#content'
  });
  </script>
";
    }

    public function getTemplateName()
    {
        return "add_post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  53 => 8,  39 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template.twig\" %} {% block title %}Index{% endblock %} {%
block head %} {{ parent() }}
<style type=\"text/css\">
.important {
\tcolor: #336699;
}
</style>
{% endblock %} {% block content %}
<h1>{{title}}</h1>

<div class=\"container\">

\t<form>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"author\">Author</label> <input
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"author\"
\t\t\t\taria-describedby=\"authorHelp\" placeholder=\"Enter author name\"> <small
\t\t\t\tid=\"authorHelp\" class=\"form-text text-muted\">Named entered using Session element...</small>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"title\">Title</label> <input
\t\t\t\ttype=\"text\" class=\"form-control\" id=\"title\"
\t\t\t\tplaceholder=\"Title\">
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"content\">Content</label> <textarea name=\"content\" class=\"form-control\" id=\"content\"></textarea>
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</form>
</div>
<script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
  <script type=\"text/javascript\">
  tinymce.init({
    selector: '#content'
  });
  </script>
{% endblock %}
", "add_post.twig", "/home/bob/Documents/web/testme.com/html/mvc/src/view/frontend/add_post.twig");
    }
}
