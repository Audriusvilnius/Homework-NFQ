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

/* pages/create.html.twig */
class __TwigTemplate_e1bdd4ce78b929b94ca43cbb9db1ef35 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/create.html.twig", 1);
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
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title_add\" value=\"\" class=\"form-control\" placeholder=\"Title leave a here...\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-title mt-3\">Text:</h6>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"Blog description leave a here...\" name=\"text_des\" rows=\"11\" cols=\"30\" value=\"\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Photo change:</h6>
\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm position-absolute top-0 start-100 translate-middle\" name=\"delete_photo\" value=\"1\"></button>
\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control mt-3\" name=\"photo\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"list-table d-flex d-grid gap-2 d-sm-flex justify-content-sm-end me-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary d-flex align-content-end px-4 gap-3\" name=\"save\">Update</button>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary\">Back</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  59 => 4,  52 => 3,  35 => 1,);
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
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title_add\" value=\"\" class=\"form-control\" placeholder=\"Title leave a here...\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-title mt-3\">Text:</h6>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"Blog description leave a here...\" name=\"text_des\" rows=\"11\" cols=\"30\" value=\"\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">Photo change:</h6>
\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm position-absolute top-0 start-100 translate-middle\" name=\"delete_photo\" value=\"1\"></button>
\t\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control mt-3\" name=\"photo\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"list-table d-flex d-grid gap-2 d-sm-flex justify-content-sm-end me-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary d-flex align-content-end px-4 gap-3\" name=\"save\">Update</button>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary\">Back</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</body>
{% endblock %}
", "pages/create.html.twig", "/code/templates/pages/create.html.twig");
    }
}
