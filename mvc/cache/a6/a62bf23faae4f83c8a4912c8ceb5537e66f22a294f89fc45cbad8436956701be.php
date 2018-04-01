<?php

/* listPostsView.html */
class __TwigTemplate_ce4a2f8d884aa1ebd51a881affda622b5ecc8666018f887779cedba509593daf extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "\t<h1>Mon super ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " blog !</h1>
\t<p>Derniers billets du blog :</p>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "                <div class=\"news\">
        <h3>
            <a href=\"?action=post&id=";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</a>
            <em>le ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "creation_date_fr", array()), "html", null, true);
            echo "</em>
        </h3>
        
        <p>
\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content", array()), "html", null, true);
            echo "            <br />
            <em><a href=\"/mvc/?action=post&id=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "\">Commentaires</a></em>
        </p>
    </div>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  87 => 22,  83 => 21,  76 => 17,  70 => 16,  66 => 14,  62 => 13,  56 => 11,  53 => 10,  43 => 5,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template.html\" %}

{% block title %}Index{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
{% endblock %}
{% block content %}
\t<h1>Mon super {{title}} blog !</h1>
\t<p>Derniers billets du blog :</p>
        {% for item in posts %}
                <div class=\"news\">
        <h3>
            <a href=\"?action=post&id={{item.id}}\">{{ item.title }}</a>
            <em>le {{ item.creation_date_fr}}</em>
        </h3>
        
        <p>
\t\t\t{{ item.content }}            <br />
            <em><a href=\"/mvc/?action=post&id={{item.id}}\">Commentaires</a></em>
        </p>
    </div>
            
        {% endfor %}
{% endblock %}
        ", "listPostsView.html", "C:\\Users\\hackme\\eclipse-workspace9\\PhpTests\\mvc\\src\\view\\frontend\\listPostsView.html");
    }
}
