<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/edit.html.twig */
class __TwigTemplate_55284c7ccf541db2503409beda63125e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<main>
\t\t<div class=\"py-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<div class=\"card mt-2\" style=\"max-width: 1wm;\">
\t\t\t\t\t\t<div class=\"row g-0 shadow p-3 bg-body-tertiary rounded\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Title:</h6>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title_add\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Title leave a here...\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-title mt-3\">Text:</h6>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"Blog description leave a here...\" name=\"text_des\" rows=\"11\" cols=\"30\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "text", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "text", [], "any", false, false, false, 15), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Photo change:</h6>
\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm position-absolute top-0 start-100 translate-middle\" name=\"delete_photo\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-x-circle bg-danger rounded-5\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 28, $this->source); })()), "image", [], "any", false, false, false, 28), "html", null, true);
        echo "\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control mt-3\" name=\"photo\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-table d-flex d-grid gap-2 d-sm-flex justify-content-sm-end me-3\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary d-flex align-content-end px-4 gap-3\" name=\"save\">Update</button>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary\">Back</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 33,  93 => 28,  75 => 15,  70 => 13,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<main>
\t\t<div class=\"py-5\">
\t\t\t<div class=\"container\">
\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t<div class=\"card mt-2\" style=\"max-width: 1wm;\">
\t\t\t\t\t\t<div class=\"row g-0 shadow p-3 bg-body-tertiary rounded\">
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Title:</h6>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title_add\" value=\"{{article.title}}\" class=\"form-control\" placeholder=\"Title leave a here...\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-title mt-3\">Text:</h6>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"Blog description leave a here...\" name=\"text_des\" rows=\"11\" cols=\"30\" value=\"{{article.text}}\">{{article.text}}</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Photo change:</h6>
\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm position-absolute top-0 start-100 translate-middle\" name=\"delete_photo\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-x-circle bg-danger rounded-5\" viewbox=\"0 0 16 16\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded\" src=\"{{ article.image }}\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control mt-3\" name=\"photo\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-table d-flex d-grid gap-2 d-sm-flex justify-content-sm-end me-3\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary d-flex align-content-end px-4 gap-3\" name=\"save\">Update</button>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary\">Back</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</body>{% endblock %}
", "pages/edit.html.twig", "/code/templates/pages/edit.html.twig");
    }
}
