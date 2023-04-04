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
class __TwigTemplate_f503735da36c5a4c8c98c25ed6f7f580 extends Template
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
        echo "    <main>
     <div class=\"py-5 bg-light\">
        <div class=\"container\">
        <form  method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"card mt-2\" style=\"max-width: 1wm;\">
                    <div class=\"row g-0 shadow p-3 bg-body-tertiary rounded\">
                        <div class=\"col-md-4\">
                            <div class=\"card-body\">
                                <h6>Title: </h6>
                                <h6>Additional info: </h6>
                                <input type=\"text\" class=\"form-control\" name=\"food_add\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card-body\">
                                <h6 class=\"card-title\">Description:</h6>
                                <textarea class=\"form-control\" placeholder=\"Food description leave a comment here\" name=\"food_des\" rows=\"11\" cols=\"30\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "text", [], "any", false, false, false, 20), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "text", [], "any", false, false, false, 20), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card-body\">
                                <h6>Photo change:</h6>
                                 <img class=\"img-fluid\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "image", [], "any", false, false, false, 26), "html", null, true);
        echo "\" alt=\"image\">
                                <input type=\"file\" class=\"form-control mt-3\" name=\"photo\">
                            </div>
                        </div>
                        <div class=\"col-md-12 \">
                            <div class=\"card-body\">
                                <div class=\"list-table__buttons \">
                                    <button type=\"submit\" class=\"btn btn-danger\" name=\"delete_photo\" value=\"1\">Delete photo</button>
                                    <button type=\"submit\" class=\"btn btn-primary d-flex align-content-end m-2 \" style=\"width: 80px;\" name=\"save\">Update</button>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                            <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </main>
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
        return array (  107 => 39,  91 => 26,  80 => 20,  71 => 14,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <main>
     <div class=\"py-5 bg-light\">
        <div class=\"container\">
        <form  method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"card mt-2\" style=\"max-width: 1wm;\">
                    <div class=\"row g-0 shadow p-3 bg-body-tertiary rounded\">
                        <div class=\"col-md-4\">
                            <div class=\"card-body\">
                                <h6>Title: </h6>
                                <h6>Additional info: </h6>
                                <input type=\"text\" class=\"form-control\" name=\"food_add\" value=\"{{article.title}}\">
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card-body\">
                                <h6 class=\"card-title\">Description:</h6>
                                <textarea class=\"form-control\" placeholder=\"Food description leave a comment here\" name=\"food_des\" rows=\"11\" cols=\"30\" value=\"{{article.text}}\">{{ article.text}}</textarea>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"card-body\">
                                <h6>Photo change:</h6>
                                 <img class=\"img-fluid\" src=\"{{ article.image }}\" alt=\"image\">
                                <input type=\"file\" class=\"form-control mt-3\" name=\"photo\">
                            </div>
                        </div>
                        <div class=\"col-md-12 \">
                            <div class=\"card-body\">
                                <div class=\"list-table__buttons \">
                                    <button type=\"submit\" class=\"btn btn-danger\" name=\"delete_photo\" value=\"1\">Delete photo</button>
                                    <button type=\"submit\" class=\"btn btn-primary d-flex align-content-end m-2 \" style=\"width: 80px;\" name=\"save\">Update</button>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                            <a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </main>
{% endblock %}
", "pages/edit.html.twig", "/code/templates/pages/edit.html.twig");
    }
}
