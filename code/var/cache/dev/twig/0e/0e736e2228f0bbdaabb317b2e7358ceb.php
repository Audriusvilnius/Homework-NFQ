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
        echo "\t<section class=\"py-5 text-center container\">
\t\t<div class=\"row py-lg-5\">
\t\t\t<div class=\"col-lg-6 col-md-8 mx-auto\">
\t\t\t\t<h1 class=\"fw-bold\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
\t\t\t</div>
\t\t</div>
\t</section>

\t<main>
\t\t<div class=\"bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"py-5 text-center\">
\t\t\t\t\t";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "mins", [], "any", false, false, false, 16) != 0)) {
            // line 17
            echo "\t\t\t\t\t\t<p class=\"text-muted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "mins", [], "any", false, false, false, 17), "html", null, true);
            echo "
\t\t\t\t\t\t\treading times
\t\t\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t\t\t<p class=\"text-muted\">";
            echo twig_escape_filter($this->env, (isset($context["srtings"]) || array_key_exists("srtings", $context) ? $context["srtings"] : (function () { throw new RuntimeError('Variable "srtings" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\treading times
\t\t\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "image", [], "any", false, false, false, 25), "html", null, true);
        echo "\" alt=\"image\">
\t\t\t\t\t<div class=\"lead mb-4 py-5 text-justify\">";
        // line 26
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "text", [], "any", false, false, false, 26);
        echo "</div>
\t\t\t\t\t<div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
\t\t\t\t\t\t<a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
\t\t\t\t\t</div>
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
        return array (  105 => 28,  100 => 26,  96 => 25,  92 => 23,  85 => 20,  78 => 17,  76 => 16,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
\t<section class=\"py-5 text-center container\">
\t\t<div class=\"row py-lg-5\">
\t\t\t<div class=\"col-lg-6 col-md-8 mx-auto\">
\t\t\t\t<h1 class=\"fw-bold\">{{ article.title }}</h1>
\t\t\t</div>
\t\t</div>
\t</section>

\t<main>
\t\t<div class=\"bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"py-5 text-center\">
\t\t\t\t\t{% if ( article.mins != 0) %}
\t\t\t\t\t\t<p class=\"text-muted\">{{ article.mins }}
\t\t\t\t\t\t\treading times
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p class=\"text-muted\">{{ srtings }}
\t\t\t\t\t\t\t\treading times
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ article.image }}\" alt=\"image\">
\t\t\t\t\t<div class=\"lead mb-4 py-5 text-justify\">{{ article.text | raw }}</div>
\t\t\t\t\t<div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
\t\t\t\t\t\t<a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
", "pages/view.html.twig", "/code/templates/pages/view.html.twig");
    }
}
