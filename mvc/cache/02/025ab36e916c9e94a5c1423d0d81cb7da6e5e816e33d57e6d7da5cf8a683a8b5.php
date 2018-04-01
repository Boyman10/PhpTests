<?php

/* template.html */
class __TwigTemplate_db649619866657a7423d58da6920a705787917929214c631c4133f879f59dbf2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
        <div id=\"content\">";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        <div id=\"footer\">
            ";
        // line 12
        $this->displayBlock('footer', $context, $blocks);
        // line 15
        echo "        </div>
    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <link rel=\"stylesheet\" href=\"/mvc/src/public/css/style.css\" />
            <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage with Twig</title>
        ";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
        // line 13
        echo "                &copy; Copyright 2018 by <a href=\"/\">you</a>.
            ";
    }

    public function getTemplateName()
    {
        return "template.html";
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  67 => 10,  57 => 6,  54 => 5,  51 => 4,  45 => 15,  43 => 12,  38 => 10,  34 => 8,  32 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% block head %}
            <link rel=\"stylesheet\" href=\"/mvc/src/public/css/style.css\" />
            <title>{% block title %}{% endblock %} - My Webpage with Twig</title>
        {% endblock %}
    </head>
    <body>
        <div id=\"content\">{% block content %}{% endblock %}</div>
        <div id=\"footer\">
            {% block footer %}
                &copy; Copyright 2018 by <a href=\"/\">you</a>.
            {% endblock %}
        </div>
    </body>
</html>", "template.html", "C:\\Users\\hackme\\eclipse-workspace9\\PhpTests\\mvc\\src\\view\\frontend\\template.html");
    }
}
