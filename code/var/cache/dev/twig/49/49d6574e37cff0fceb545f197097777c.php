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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/create.html.twig", 1);
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
        echo "
\t<section class=\"py-5 text-center container\">
\t\t<div class=\"row py-lg-5\">
\t\t\t<div class=\"col-lg-6 col-md-8 mx-auto\">
\t\t\t\t<h1 class=\"fw-bold\">Create new content</h1>
\t\t\t</div>
\t\t</div>
\t</section>
\t<main>
\t\t<div class=\"py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
\t\t\t\t<div class=\"card mt-2\" style=\"max-width: 1wm;\">
\t\t\t\t\t<div class=\"row g-0 shadow p-3 bg-body-tertiary rounded\">
\t\t\t\t\t\t<div class=\"col-md-12 \">
\t\t\t\t\t\t\t<div class=\"card-body d-flex\">
\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), 'widget');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "text", [], "any", false, false, false, 24), 'widget');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t<p>Choose image to upload (.jpg, .jpeg, .png)</p>
\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"list-table d-flex d-grid gap-2 d-sm-flex justify-content-sm-end me-3\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary px-4\">Back</a>
\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success d-flex align-content-end px-4 gap-3\">Create</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</main>
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
        return array (  119 => 44,  110 => 38,  106 => 37,  95 => 29,  87 => 24,  80 => 20,  72 => 15,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}

\t<section class=\"py-5 text-center container\">
\t\t<div class=\"row py-lg-5\">
\t\t\t<div class=\"col-lg-6 col-md-8 mx-auto\">
\t\t\t\t<h1 class=\"fw-bold\">Create new content</h1>
\t\t\t</div>
\t\t</div>
\t</section>
\t<main>
\t\t<div class=\"py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t{{form_start(form)}}
\t\t\t\t<div class=\"card mt-2\" style=\"max-width: 1wm;\">
\t\t\t\t\t<div class=\"row g-0 shadow p-3 bg-body-tertiary rounded\">
\t\t\t\t\t\t<div class=\"col-md-12 \">
\t\t\t\t\t\t\t<div class=\"card-body d-flex\">
\t\t\t\t\t\t\t\t{{ form_widget(form.title)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t{{ form_widget(form.text)}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t{{ form_widget(form.image)}}
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t<p>Choose image to upload (.jpg, .jpeg, .png)</p>
\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"list-table d-flex d-grid gap-2 d-sm-flex justify-content-sm-end me-3\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary px-4\">Back</a>
\t\t\t\t\t\t\t\t{{ form_widget(form)}}
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success d-flex align-content-end px-4 gap-3\">Create</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{{form_end(form)}}
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
", "pages/create.html.twig", "/code/templates/pages/create.html.twig");
    }
}
