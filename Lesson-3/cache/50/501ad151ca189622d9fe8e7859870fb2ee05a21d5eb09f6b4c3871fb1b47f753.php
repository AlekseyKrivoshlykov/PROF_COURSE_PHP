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

/* home/base.html.twig */
class __TwigTemplate_5a8b82b5b9931a2464c701c2cd0dc59083ea445e6989472248c52ee5ecd452c2 extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title></title>
        
    </head>
    <body>
    <div> 
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templateArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 11
            echo "        <a href=\"/showImages.php?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "href", [], "any", false, false, false, 11), "html", null, true);
            echo "\" width=\"115px\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/base.html.twig", "C:\\OpenServer\\domains\\HOMEWORK\\templates\\home\\base.html.twig");
    }
}
