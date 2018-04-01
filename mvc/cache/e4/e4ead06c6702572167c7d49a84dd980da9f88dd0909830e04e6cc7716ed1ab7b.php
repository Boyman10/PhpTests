<?php

/* postView.html */
class __TwigTemplate_366324ffb1cf0a319cbd29189003e745a4e56dfee11f7b76392faa8ea37da2c5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.html", "postView.html", 1);
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
        echo "

        <h1>Mon super blog !</h1>
        <p><a href=\"index.php\">Retour à la liste des billets</a></p>

        <div class=\"news\">
            <h3>
                ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "
                <em>le ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "creation_date_fr", array()), "html", null, true);
        echo "</em>
            </h3>
            
            <p>
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", array()), "html", null, true);
        echo "
            </p>
        </div>

        <h2>Commentaires</h2>
";
        // line 28
        $context["forms"] = $this->loadTemplate("forms.html", "postView.html", 28);
        // line 29
        echo "
<p>";
        // line 30
        echo $context["forms"]->macro_input("username");
        echo "</p>


";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "            <p><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "author", array()), "html", null, true);
            echo "</strong> le ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "comment_date_fr", array()), "html", null, true);
            echo " (<a href=\"/mvc/?action=comment&id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
            echo "\">modifier</a>)
            </p>
            <p>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content", array()), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "postView.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  99 => 34,  95 => 33,  89 => 30,  86 => 29,  84 => 28,  76 => 23,  69 => 19,  65 => 18,  56 => 11,  53 => 10,  43 => 5,  40 => 4,  34 => 3,  15 => 1,);
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


        <h1>Mon super blog !</h1>
        <p><a href=\"index.php\">Retour à la liste des billets</a></p>

        <div class=\"news\">
            <h3>
                {{post.title}}
                <em>le {{post.creation_date_fr}}</em>
            </h3>
            
            <p>
                {{post.content}}
            </p>
        </div>

        <h2>Commentaires</h2>
{% import \"forms.html\" as forms %}

<p>{{ forms.input('username') }}</p>


{% for item in comments %}
            <p><strong>{{item.author}}</strong> le {{item.comment_date_fr}} (<a href=\"/mvc/?action=comment&id={{post.id}}\">modifier</a>)
            </p>
            <p>{{item.content}}</p>

{% endfor %}
{% endblock %}", "postView.html", "C:\\Users\\hackme\\eclipse-workspace9\\PhpTests\\mvc\\src\\view\\frontend\\postView.html");
    }
}
