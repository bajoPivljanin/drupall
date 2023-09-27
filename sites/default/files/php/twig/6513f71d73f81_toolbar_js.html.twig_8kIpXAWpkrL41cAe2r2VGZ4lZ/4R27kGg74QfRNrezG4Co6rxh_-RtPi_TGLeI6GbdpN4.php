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

/* modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig */
class __TwigTemplate_83b674125713da6e4862748244e9ea46 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig"));

        // line 1
        echo "<div id=\"sfwdt";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 1, $this->source), "html", null, true);
        echo "\" class=\"sf-toolbar sf-display-none\" role=\"region\" aria-label=\"Drupal Webprofiler Toolbar\">
  ";
        // line 2
        $this->loadTemplate("@webprofiler/Profiler/toolbar.html.twig", "modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig", 2)->display(twig_array_merge($context, ["templates" => ["request" => "@webprofiler/Profiler/cancel.html.twig"], "profile" => null, "profiler_url" => $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("webprofiler.toolbar", ["token" =>         // line 7
($context["token"] ?? null)])]));
        // line 9
        echo "</div>

";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Profiler/base_js.html.twig"));
        echo "

<style";
        // line 13
        if (($context["csp_style_nonce"] ?? null)) {
            echo " nonce=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["csp_style_nonce"] ?? null), 13, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">
  ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Profiler/toolbar.css.twig"));
        echo "
</style>
<script";
        // line 16
        if (($context["csp_script_nonce"] ?? null)) {
            echo " nonce=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["csp_script_nonce"] ?? null), 16, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">/*<![CDATA[*/
  (function () {
    Sfjs.loadToolbar('";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 18, $this->source), "html", null, true);
        echo "');
  })();
/*]]>*/</script>
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  72 => 16,  67 => 14,  59 => 13,  54 => 11,  50 => 9,  48 => 7,  47 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/drupal-10.1.4/modules/contrib/webprofiler/templates/Profiler/toolbar_js.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 2, "if" => 13);
        static $filters = array("escape" => 1);
        static $functions = array("url" => 7, "include" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
                ['url', 'include']
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
