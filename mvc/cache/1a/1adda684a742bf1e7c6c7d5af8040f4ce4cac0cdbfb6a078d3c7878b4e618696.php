<?php

/* list_posts.twig */
class __TwigTemplate_3c43d716b8a53fe088ae2662b5a7f1fec7a7913d6f604e7679ba2677e86e786d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "list_posts.twig", 1);
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
        // line 4
        echo "Index
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        echo " 
";
        // line 8
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
<section class=\"container\">
<h1>Mon super ";
        // line 14
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " blog !</h1>


<p>Derniers billets du blog :</p>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "<div class=\"news border border-info\">
\t<h3>
\t\t<a href=\"?action=post&id=";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getTitle", array(), "method"), "html", null, true);
            echo "</a> <em>le
\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "dateCreation", array()), "html", null, true);
            echo "</em> par <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "author", array()), "userName", array()), "html", null, true);
            echo "</b>
\t</h3>

\t<p>
\t\t";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["item"], "getContent", array(), "method");
            echo " <br /> 
\t\t<em><a href=\"/mvc/?action=post&id=";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">Commentaires</a></em>
\t</p>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " 
</section>
";
    }

    public function getTemplateName()
    {
        return "list_posts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  94 => 27,  90 => 26,  81 => 22,  75 => 21,  71 => 19,  67 => 18,  60 => 14,  56 => 12,  53 => 11,  47 => 8,  42 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template.twig\" %}

{% block title %}
Index
{% endblock %} 

{% block head %} 
{{ parent() }}
{% endblock %} 

{% block content %}

<section class=\"container\">
<h1>Mon super {{title}} blog !</h1>


<p>Derniers billets du blog :</p>
{% for item in posts %}
<div class=\"news border border-info\">
\t<h3>
\t\t<a href=\"?action=post&id={{item.id}}\">{{ item.getTitle() }}</a> <em>le
\t\t\t{{ item.dateCreation}}</em> par <b>{{ item.author.userName }}</b>
\t</h3>

\t<p>
\t\t{{ item.getContent() | raw }} <br /> 
\t\t<em><a href=\"/mvc/?action=post&id={{item.id}}\">Commentaires</a></em>
\t</p>
</div>

{% endfor %} 
</section>
{% endblock %}
", "list_posts.twig", "/home/bob/Documents/web/testme.com/html/mvc/src/view/frontend/list_posts.twig");
    }
}
