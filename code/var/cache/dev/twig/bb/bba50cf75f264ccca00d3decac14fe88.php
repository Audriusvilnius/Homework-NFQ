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

/* _partials/article-card.html.twig */
class __TwigTemplate_065e2e3a304f9fdaa9419bc907d6ad05 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/article-card.html.twig"));

        // line 1
        echo "<div class=\"card shadow-sm\">
\t<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 2, $this->source); })()), "image", [], "any", false, false, false, 2), "html", null, true);
        echo "\" class=\"card-img-top\">
\t<div class=\"card-body\">
\t\t<h5 class=\"card-title\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h5>

\t\t<p class=\"card-text\">
\t\t\t";
        // line 7
        $context["cutoff"] = 80;
        // line 8
        echo "\t\t\t";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "text", [], "any", false, false, false, 8)) > (isset($context["cutoff"]) || array_key_exists("cutoff", $context) ? $context["cutoff"] : (function () { throw new RuntimeError('Variable "cutoff" does not exist.', 8, $this->source); })()))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "text", [], "any", false, false, false, 8), 0, (isset($context["cutoff"]) || array_key_exists("cutoff", $context) ? $context["cutoff"] : (function () { throw new RuntimeError('Variable "cutoff" does not exist.', 8, $this->source); })())) . "...")) : (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "text", [], "any", false, false, false, 8))), "html", null, true);
        echo "
\t\t</p>

\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t<div class=\"btn-group\">
\t\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">View</a>
\t\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">Edit</a>
\t\t\t</div>

\t\t\t<small class=\"text-muted\">
\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "mins", [], "any", false, false, false, 18), "html", null, true);
        echo "
\t\t\t\tmins
\t\t\t\t<h6 class=\"card-title\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "updateAt", [], "any", false, false, false, 20), "html", null, true);
        echo "</h6>
\t\t\t</small>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/article-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  76 => 18,  69 => 14,  65 => 13,  56 => 8,  54 => 7,  48 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card shadow-sm\">
\t<img src=\"{{ article.image }}\" class=\"card-img-top\">
\t<div class=\"card-body\">
\t\t<h5 class=\"card-title\">{{ article.title }}</h5>

\t\t<p class=\"card-text\">
\t\t\t{% set cutoff = 80 %}
\t\t\t{{ article.text|length > cutoff ? article.text|slice(0, cutoff) ~ '...' : article.text  }}
\t\t</p>

\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t<div class=\"btn-group\">
\t\t\t\t<a href=\"{{ path('article_view', {id: article.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">View</a>
\t\t\t\t<a href=\"{{ path('article_edit', {id: article.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">Edit</a>
\t\t\t</div>

\t\t\t<small class=\"text-muted\">
\t\t\t\t{{ article.mins }}
\t\t\t\tmins
\t\t\t\t<h6 class=\"card-title\">{{ article.updateAt}}</h6>
\t\t\t</small>
\t\t</div>
\t</div>
</div>
", "_partials/article-card.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/homework-main/code/templates/_partials/article-card.html.twig");
    }
}
