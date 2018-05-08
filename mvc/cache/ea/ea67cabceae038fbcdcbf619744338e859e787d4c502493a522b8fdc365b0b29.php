<?php

/* listPostsView.html */
class __TwigTemplate_ba28fe0dc0dab1319d215f1eb9923db6a30f474c5532c7c011bec6cb7dd2ca3b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html", "listPostsView.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html";
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
        echo "<h1>Mon super ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " blog !</h1>
<p>Derniers billets du blog :</p>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "<div class=\"news\">
\t<h3>
\t\t<a href=\"?action=post&id=";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getTitle", array(), "method"), "html", null, true);
            echo "</a> <em>le
\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getCreationDate", array(), "method"), "html", null, true);
            echo "</em>
\t</h3>

\t<p>
\t\t";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getContent", array(), "method"), "html", null, true);
            echo " <br /> <em><a
\t\t\thref=\"/mvc/?action=post&id=";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">Commentaires</a></em>
\t</p>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo " ";
    }

    public function getTemplateName()
    {
        return "listPostsView.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  87 => 20,  83 => 19,  76 => 15,  70 => 14,  66 => 12,  62 => 11,  56 => 9,  53 => 8,  39 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template.html\" %} {% block title %}Index{% endblock %} {%
block head %} {{ parent() }}
<style type=\"text/css\">
.important {
\tcolor: #336699;
}
</style>
{% endblock %} {% block content %}
<h1>Mon super {{title}} blog !</h1>
<p>Derniers billets du blog :</p>
{% for item in posts %}
<div class=\"news\">
\t<h3>
\t\t<a href=\"?action=post&id={{item.getId()}}\">{{ item.getTitle() }}</a> <em>le
\t\t\t{{ item.getCreationDate()}}</em>
\t</h3>

\t<p>
\t\t{{ item.getContent() }} <br /> <em><a
\t\t\thref=\"/mvc/?action=post&id={{item.id}}\">Commentaires</a></em>
\t</p>
</div>

{% endfor %} {% endblock %}
", "listPostsView.html", "/home/bob/Documents/web/testme.com/html/mvc/src/view/frontend/listPostsView.html");
    }
}
