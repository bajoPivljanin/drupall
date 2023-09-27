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

/* @webprofiler/Icon/drupal-10.svg */
class __TwigTemplate_76d4a779c5317d1aa71e9ae5cf97e187 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Icon/drupal-10.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\"
\t viewBox=\"0 0 24 24\" style=\"enable-background:new 0 0 24 24;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:#AAAAAA;}
</style>
<g>
\t<path class=\"st0\" d=\"M12,2c5.5,0,10,4.5,10,10l0,0v0c0,5.5-4.5,10-10,10C6.5,22,2,17.5,2,12C2,6.5,6.5,2,12,2z M12,4.6
\t\tc-0.3,1-1.2,2-2.2,2.9C8.3,9,6.7,10.6,6.7,13.1c0,2.9,2.4,5.3,5.3,5.3c2.9,0,5.3-2.4,5.3-5.3c0-2.5-1.6-4.1-3.1-5.6l0,0L14,7.4
\t\tC13.1,6.5,12.2,5.6,12,4.6z M12,12.5c0.6,0.6,1,1.1,1.4,1.6c0,0,0.1,0.1,0.1,0.1c0.5,0.7,0.4,1.6-0.2,2.3c-0.7,0.7-1.8,0.8-2.6,0.1
\t\tC10,15.8,10,14.7,10.7,14C11,13.5,11.5,13,12,12.5z M9.6,10l0.3,0.2l1.2,1.2c0,0.1,0,0.1,0,0.2l0,0L9.8,13l-0.4,0.5
\t\tC9.2,13.8,9.1,14,9,14.2c0,0,0,0.1-0.1,0.1l0,0h0c-0.1,0-0.3-0.2-0.3-0.2l0,0l0,0c0,0-0.1-0.1-0.1-0.1l0,0l0-0.1
\t\tc-0.2-0.5-0.2-1.1,0-1.7l0,0l0-0.1c0.1-0.5,0.3-0.9,0.6-1.3C9.2,10.5,9.4,10.3,9.6,10L9.6,10z M12,7.6c0.3,0.4,0.7,0.7,1,1l0,0l0,0
\t\tc0.7,0.7,1.3,1.4,1.9,2.1c0.5,0.7,0.7,1.5,0.7,2.3c0,0.4-0.1,0.7-0.2,1l0,0l0,0c0,0.1-0.1,0.1-0.2,0.1l0,0h0
\t\tc-0.1,0-0.1-0.1-0.2-0.1l0,0L15,14c-0.3-0.4-0.6-0.9-1-1.3l0,0l-0.5-0.5l-1.6-1.7c-0.3-0.3-0.8-0.7-1-1c0,0,0,0,0,0
\t\tc-0.1-0.1-0.1-0.2-0.1-0.3l0,0V9.3c0-0.2,0-0.3,0.1-0.5c0-0.1,0.1-0.2,0.2-0.3C11.4,8.2,11.7,7.9,12,7.6z\"/>
</g>
</svg>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Icon/drupal-10.svg";
    }

    public function getDebugInfo()
    {
        return array (  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Icon/drupal-10.svg", "/Applications/XAMPP/xamppfiles/htdocs/drupal-10.1.4/modules/contrib/webprofiler/templates/Icon/drupal-10.svg");
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
