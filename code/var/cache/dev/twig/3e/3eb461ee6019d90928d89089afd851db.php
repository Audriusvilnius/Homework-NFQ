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

/* pages/index.html.twig */
class __TwigTemplate_3f42140e65e8e8fa5d52e6b303e7fb5f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/index.html.twig", 1);
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
\t\t\t\t<h1 class=\"fw-light\">Homepage</h1>
\t\t\t</div>
\t\t</div>
\t</section>

\t<main>

\t\t<div class=\"py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-grid gap-2 d-sm-flex justify-content-sm-end mb-5\">
\t\t\t\t\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-outline-info btn-lg px-4 gap-3\">Add Content</a>


\t\t\t\t</div>
\t\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 22, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            echo "\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t";
            // line 24
            $this->loadTemplate("_partials/article-card.html.twig", "pages/index.html.twig", 24)->display(twig_array_merge($context, ["article" =>             // line 25
$context["article"]]));
            // line 27
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 29,  105 => 27,  103 => 25,  102 => 24,  99 => 23,  82 => 22,  74 => 17,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
\t<section class=\"py-5 text-center container\">
\t\t<div class=\"row py-lg-5\">
\t\t\t<div class=\"col-lg-6 col-md-8 mx-auto\">
\t\t\t\t<h1 class=\"fw-light\">Homepage</h1>
\t\t\t</div>
\t\t</div>
\t</section>

\t<main>

\t\t<div class=\"py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"d-grid gap-2 d-sm-flex justify-content-sm-end mb-5\">
\t\t\t\t\t<a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-outline-info btn-lg px-4 gap-3\">Add Content</a>


\t\t\t\t</div>
\t\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
\t\t\t\t\t{% for article in articles %}
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t{% include '_partials/article-card.html.twig' with {
                                article: article
                            } %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor  %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>
{% endblock %}
", "pages/index.html.twig", "/code/templates/pages/index.html.twig");
    }
}
