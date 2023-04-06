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

/* pages/view.html.twig */
class __TwigTemplate_44c15d065e29987180cd226e8a4449f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "\t<main>
\t\t<div class=\"py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"py-5 text-center\">
\t\t\t\t\t<h1 class=\"fw-bold\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
\t\t\t\t\t<p class=\"text-muted\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "mins", [], "any", false, false, false, 9), "html", null, true);
        echo "
\t\t\t\t\t\tminutes</p>
\t\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["srting"]) || array_key_exists("srting", $context) ? $context["srting"] : (function () { throw new RuntimeError('Variable "srting" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "

\t\t\t\t\t";
        // line 14
        echo "

\t\t\t\t</div>

\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "image", [], "any", false, false, false, 18), "html", null, true);
        echo "\" alt=\"\">

\t\t\t\t<div class=\"lead mb-4 py-5\">";
        // line 20
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "text", [], "any", false, false, false, 20);
        echo "</div>


\t\t\t\t<div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  90 => 20,  85 => 18,  79 => 14,  74 => 11,  69 => 9,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
\t<main>
\t\t<div class=\"py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"py-5 text-center\">
\t\t\t\t\t<h1 class=\"fw-bold\">{{ article.title }}</h1>
\t\t\t\t\t<p class=\"text-muted\">{{ article.mins }}
\t\t\t\t\t\tminutes</p>
\t\t\t\t\t{{ srting }}

\t\t\t\t\t{# {{ stringCount }} #}


\t\t\t\t</div>

\t\t\t\t<img class=\"img-fluid\" src=\"{{ article.image }}\" alt=\"\">

\t\t\t\t<div class=\"lead mb-4 py-5\">{{ article.text | raw }}</div>


\t\t\t\t<div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
\t\t\t\t\t<a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
", "pages/view.html.twig", "/code/templates/pages/view.html.twig");
    }
}
