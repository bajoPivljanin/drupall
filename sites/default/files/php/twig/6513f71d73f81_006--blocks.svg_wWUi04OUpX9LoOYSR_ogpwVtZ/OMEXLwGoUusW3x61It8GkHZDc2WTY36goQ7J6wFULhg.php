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

/* @webprofiler/Icon/006--blocks.svg */
class __TwigTemplate_b4692ee2248a50b76c76c6199ad1b745 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Icon/006--blocks.svg"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 24 24\" style=\"enable-background:new 0 0 24 24;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#AAAAAA;}
</style>
<path class=\"st0\" d=\"M11.2,14.7v5.5c0,0.5-0.2,0.9-0.5,1.3c-0.3,0.4-0.7,0.5-1.1,0.5H3.5c-0.4,0-0.8-0.2-1.1-0.5
\tC2.2,21.1,2,20.7,2,20.2v-5.5c0-0.5,0.2-0.9,0.5-1.3c0.3-0.4,0.7-0.5,1.1-0.5h6.2c0.4,0,0.8,0.2,1.1,0.5
\tC11.1,13.8,11.2,14.2,11.2,14.7z M11.2,3.8v5.5c0,0.5-0.2,0.9-0.5,1.3c-0.3,0.4-0.7,0.5-1.1,0.5H3.5c-0.4,0-0.8-0.2-1.1-0.5
\tC2.2,10.2,2,9.8,2,9.3V3.8c0-0.5,0.2-0.9,0.5-1.3S3.1,2,3.5,2h6.2c0.4,0,0.8,0.2,1.1,0.5S11.2,3.3,11.2,3.8z M22,14.7v5.5
\tc0,0.5-0.2,0.9-0.5,1.3c-0.3,0.4-0.7,0.5-1.1,0.5h-6.2c-0.4,0-0.8-0.2-1.1-0.5c-0.3-0.4-0.5-0.8-0.5-1.3v-5.5c0-0.5,0.2-0.9,0.5-1.3
\tc0.3-0.4,0.7-0.5,1.1-0.5h6.2c0.4,0,0.8,0.2,1.1,0.5C21.8,13.8,22,14.2,22,14.7z M22,3.8v5.5c0,0.5-0.2,0.9-0.5,1.3
\tc-0.3,0.4-0.7,0.5-1.1,0.5h-6.2c-0.4,0-0.8-0.2-1.1-0.5c-0.3-0.4-0.5-0.8-0.5-1.3V3.8c0-0.5,0.2-0.9,0.5-1.3S13.9,2,14.3,2h6.2
\tc0.4,0,0.8,0.2,1.1,0.5C21.8,2.9,22,3.3,22,3.8z\"/>
</svg>
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Icon/006--blocks.svg";
    }

    public function getDebugInfo()
    {
        return array (  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Icon/006--blocks.svg", "/Applications/XAMPP/xamppfiles/htdocs/drupal-10.1.4/modules/contrib/webprofiler/templates/Icon/006--blocks.svg");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
