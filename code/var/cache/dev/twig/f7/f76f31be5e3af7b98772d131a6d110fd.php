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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/edit.html.twig", 1);
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
\t\t\t\t<h1 class=\"fw-bold\">Edit content</h1>
\t\t\t</div>
\t\t</div>
\t</section>
\t<main>
\t\t<div class=\"py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
\t\t\t\t<div class=\"card mt-2\" style=\"max-width: 1wm;\">
\t\t\t\t\t<div class=\"row g-0 shadow p-3 bg-body-tertiary rounded\">
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), 'widget');
        echo "
\t\t\t\t\t\t\t\t<div class=\"card-title mt-3\"></div>
\t\t\t\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "text", [], "any", false, false, false, 21), 'widget');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26), "html", null, true);
        echo "\" alt=\"image\">
\t\t\t\t\t\t\t\t<div class=\"card-title mt-3\"></div>
\t\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "image", [], "any", false, false, false, 28), 'widget');
        echo "
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t<p>Choose image to upload (.jpg, .jpeg, .png)</p>
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-table d-flex d-grid gap-2 d-sm-flex justify-content-sm-end me-3\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary px-4\">Back</a>
\t\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary d-flex align-content-end px-4 gap-3\">Update</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
\t</main>
";
        
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
        return array (  121 => 43,  110 => 35,  106 => 34,  97 => 28,  92 => 26,  84 => 21,  79 => 19,  71 => 14,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
\t<section class=\"py-5 text-center container\">
\t\t<div class=\"row py-lg-5\">
\t\t\t<div class=\"col-lg-6 col-md-8 mx-auto\">
\t\t\t\t<h1 class=\"fw-bold\">Edit content</h1>
\t\t\t</div>
\t\t</div>
\t</section>
\t<main>
\t\t<div class=\"py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t{{form_start(form)}}
\t\t\t\t<div class=\"card mt-2\" style=\"max-width: 1wm;\">
\t\t\t\t\t<div class=\"row g-0 shadow p-3 bg-body-tertiary rounded\">
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t{{ form_widget(form.title)}}
\t\t\t\t\t\t\t\t<div class=\"card-title mt-3\"></div>
\t\t\t\t\t\t\t\t{{ form_widget(form.text)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded\" src=\"{{ article.image }}\" alt=\"image\">
\t\t\t\t\t\t\t\t<div class=\"card-title mt-3\"></div>
\t\t\t\t\t\t\t\t{{ form_widget(form.image)}}
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t<p>Choose image to upload (.jpg, .jpeg, .png)</p>
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"list-table d-flex d-grid gap-2 d-sm-flex justify-content-sm-end me-3\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary px-4\">Back</a>
\t\t\t\t\t\t\t\t{{ form_widget(form)}}
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary d-flex align-content-end px-4 gap-3\">Update</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{{form_end(form)}}
\t</main>
{% endblock %}
", "pages/edit.html.twig", "/code/templates/pages/edit.html.twig");
    }
}
