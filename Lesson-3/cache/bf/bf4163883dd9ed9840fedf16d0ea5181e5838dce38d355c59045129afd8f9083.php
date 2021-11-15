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

/* home/showImage.html.twig */
class __TwigTemplate_f22740ebee40a2803d28fdbc99e6ea93aecbf4c1c395daef5e601d9ba5a1a64b extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templateArr"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 2
            echo "        ";
            if ((($context["getId"] ?? null) == twig_get_attribute($this->env, $this->source, $context["img"], "id", [], "any", false, false, false, 2))) {
                echo " <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["img"], "href", [], "any", false, false, false, 2), "html", null, true);
                echo "\"> ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "

";
    }

    public function getTemplateName()
    {
        return "home/showImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/showImage.html.twig", "C:\\OpenServer\\domains\\HOMEWORK\\templates\\home\\showImage.html.twig");
    }
}
