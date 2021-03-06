<?php

/* postView.html */
class __TwigTemplate_4de4afbf5046b4f332ddd1216e33e2beb85322bccb43ae729ce986ace9ecc632 extends Twig_Template
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
        echo "

<h1>Mon super blog !</h1>
<p>
\t<a href=\"index.php\">Retour � la liste des billets</a>
</p>

<div class=\"news\">
\t<h3>
\t\t";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", array()), "html", null, true);
        echo " <em>le ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "creation_date_fr", array()), "html", null, true);
        echo "</em>
\t</h3>

\t<p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", array()), "html", null, true);
        echo "</p>
</div>

<h2>Commentaires</h2>
";
        // line 25
        $context["forms"] = $this->loadTemplate("forms.html", "postView.html", 25);
        // line 26
        echo "
<p>";
        // line 27
        echo $context["forms"]->macro_input("username");
        echo "</p>


";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "<p>
\t<strong>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "author", array()), "html", null, true);
            echo "</strong> le ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "comment_date_fr", array()), "html", null, true);
            echo " (<a
\t\thref=\"/mvc/?action=comment&id=";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
            echo "\">modifier</a>)
</p>
<p>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content", array()), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo " ";
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
        return array (  120 => 37,  111 => 35,  106 => 33,  100 => 32,  97 => 31,  93 => 30,  87 => 27,  84 => 26,  82 => 25,  75 => 21,  67 => 18,  56 => 9,  53 => 8,  39 => 2,  15 => 1,);
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


<h1>Mon super blog !</h1>
<p>
\t<a href=\"index.php\">Retour � la liste des billets</a>
</p>

<div class=\"news\">
\t<h3>
\t\t{{post.title}} <em>le {{post.creation_date_fr}}</em>
\t</h3>

\t<p>{{post.content}}</p>
</div>

<h2>Commentaires</h2>
{% import \"forms.html\" as forms %}

<p>{{ forms.input('username') }}</p>


{% for item in comments %}
<p>
\t<strong>{{item.author}}</strong> le {{item.comment_date_fr}} (<a
\t\thref=\"/mvc/?action=comment&id={{post.id}}\">modifier</a>)
</p>
<p>{{item.content}}</p>

{% endfor %} {% endblock %}
", "postView.html", "/home/bob/Documents/web/testme.com/html/mvc/src/view/frontend/postView.html");
    }
}
