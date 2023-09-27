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

/* @webprofiler/Collector/request.html.twig */
class __TwigTemplate_5c95b2f218a739f9ae3cd4487007627e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/request.html.twig"));

        // line 20
        echo "
";
        // line 21
        $this->displayBlock('toolbar', $context, $blocks);
        // line 110
        echo "
";
        // line 111
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 21
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 22
        echo "
  ";
        // line 23
        $macros["helper"] = $this;
        // line 24
        echo "  ";
        ob_start(function () { return ''; });
        // line 25
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["helper"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, true, 25)], 25, $context, $this->getSourceContext()));
        echo "
  ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
  ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 28)) {
            // line 29
            echo "    ";
            ob_start(function () { return ''; });
            // line 30
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["helper"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 30), "controller", [], "any", false, false, true, 30), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 30), "route", [], "any", false, false, true, 30), ((("GET" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 30), "method", [], "any", false, false, true, 30))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 30), "method", [], "any", false, false, true, 30)) : (""))], 30, $context, $this->getSourceContext()));
            echo "
    ";
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 32
            echo "  ";
        }
        // line 33
        echo "
  ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, true, 34)) {
            // line 35
            echo "    ";
            $context["forward_profile"] = twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [0 => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, true, 35)], "method", false, false, true, 35);
            // line 36
            echo "    ";
            ob_start(function () { return ''; });
            // line 37
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["helper"], "macro_set_handler", [((($context["forward_profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", [0 => "request"], "method", false, false, true, 37), "controller", [], "any", false, false, true, 37)) : ("n/a"))], 37, $context, $this->getSourceContext()));
            echo "
    ";
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            echo "  ";
        }
        // line 40
        echo "
  ";
        // line 41
        $context["request_status_code_color"] = (((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, true, 41) >= 400)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, true, 41) >= 300)) ? ("yellow") : ("green"))));
        // line 42
        echo "
  ";
        // line 43
        ob_start(function () { return ''; });
        // line 44
        echo "    <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["request_status_code_color"] ?? null), 44, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "</span>
    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, true, 45)) {
            // line 46
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 46)) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Icon/redirect.svg"));
            }
            // line 47
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, true, 47)) {
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Icon/forward.svg"));
            }
            // line 48
            echo "      <span class=\"sf-toolbar-label\">";
            ((("GET" != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, true, 48))) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, true, 48), "html", null, true))) : (print ("")));
            echo " @</span>
      <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</span>
    ";
        }
        // line 51
        echo "  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
  ";
        // line 53
        ob_start(function () { return ''; });
        // line 54
        echo "    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece\">
        <b>HTTP status</b>
        <span>";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statustext", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "</span>
      </div>

      ";
        // line 60
        if (("GET" != twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, true, 60))) {
            // line 61
            echo "<div class=\"sf-toolbar-info-piece\">
          <b>Method</b>
          <span>";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "</span>
        </div>";
        }
        // line 66
        echo "
      <div class=\"sf-toolbar-info-piece\">
        <b>Controller</b>
        <span>";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["request_handler"] ?? null), 69, $this->source), "html", null, true);
        echo "</span>
      </div>

      <div class=\"sf-toolbar-info-piece\">
        <b>Route name</b>
        <span>";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", true, true, true, 74)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, true, 74), 74, $this->source), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
      </div>

      <div class=\"sf-toolbar-info-piece\">
        <b>Has session</b>
        <span>";
        // line 79
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, true, 79))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
      </div>
    </div>

    ";
        // line 83
        if (array_key_exists("redirect_handler", $context)) {
            // line 84
            echo "<div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
          <b>
            <span
              class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 88), "status_code", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "</span>
            Redirect from
          </b>
          <span>";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["redirect_handler"] ?? null), 91, $this->source), "html", null, true);
            echo "(<a
              href=\"";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("webprofiler.dashboard", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 92), "token", [], "any", false, false, true, 92)]), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, true, 92), "token", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "</a>)</span>
        </div>
      </div>
    ";
        }
        // line 96
        echo "
    ";
        // line 97
        if (array_key_exists("forward_handler", $context)) {
            // line 98
            echo "      <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
          <b>Forwarded to</b>
          <span>";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["forward_handler"] ?? null), 101, $this->source), "html", null, true);
            echo "(<a
              href=\"";
            // line 102
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("webprofiler.dashboard", ["token" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, true, 102)]), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo "</a>)</span>
        </div>
      </div>
    ";
        }
        // line 106
        echo "  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 107
        echo "
  ";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_include($this->env, $context, "@webprofiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]));
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 111
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 112
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "panel", [], "method", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

    }

    // line 1
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 2
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, true, 2)) {
                // line 3
                if (((array_key_exists("method", $context)) ? (_twig_default_filter(($context["method"] ?? null), false)) : (false))) {
                    echo "<span
      class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    // line 4
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["method"] ?? null), 4, $this->source), "html", null, true);
                    echo "</span>";
                }
                // line 5
                $context["link"] = $this->extensions['Drupal\webprofiler\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, true, 5), 5, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, true, 5), 5, $this->source));
                // line 6
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 6, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                    echo "\">";
                }
                // line 8
                if (((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? null), false)) : (false))) {
                    // line 9
                    echo "@";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 9, $this->source), "html", null, true);
                } else {
                    // line 11
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_striptags($this->extensions['Drupal\webprofiler\Twig\Extension\CodeExtension']->abbrClass($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, true, 11), 11, $this->source), "html", null, true))), "html", null, true);
                    // line 12
                    ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, true, 12)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" :: " . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, true, 12)), "html", null, true))) : (print ("")));
                }
                // line 15
                if (($context["link"] ?? null)) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 17
                echo "<span>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("route", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["route"] ?? null), 17, $this->source), $this->sandbox->ensureToStringAllowed(($context["controller"] ?? null), 17, $this->source))) : (($context["controller"] ?? null))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 17,  356 => 15,  353 => 12,  351 => 11,  347 => 9,  345 => 8,  333 => 6,  331 => 5,  327 => 4,  323 => 3,  320 => 2,  302 => 1,  292 => 112,  285 => 111,  276 => 108,  273 => 107,  270 => 106,  261 => 102,  257 => 101,  252 => 98,  250 => 97,  247 => 96,  238 => 92,  234 => 91,  228 => 88,  222 => 84,  220 => 83,  209 => 79,  201 => 74,  193 => 69,  188 => 66,  183 => 63,  179 => 61,  177 => 60,  169 => 57,  164 => 54,  162 => 53,  159 => 52,  156 => 51,  151 => 49,  146 => 48,  141 => 47,  136 => 46,  134 => 45,  127 => 44,  125 => 43,  122 => 42,  120 => 41,  117 => 40,  114 => 39,  108 => 37,  105 => 36,  102 => 35,  100 => 34,  97 => 33,  94 => 32,  88 => 30,  85 => 29,  83 => 28,  80 => 27,  74 => 25,  71 => 24,  69 => 23,  66 => 22,  59 => 21,  52 => 111,  49 => 110,  47 => 21,  44 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/request.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/drupal-10.1.4/modules/contrib/webprofiler/templates/Collector/request.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 21, "import" => 23, "set" => 24, "if" => 28, "macro" => 1);
        static $filters = array("escape" => 44, "default" => 74, "length" => 79, "file_link" => 5, "striptags" => 11, "abbr_class" => 11);
        static $functions = array("include" => 46, "path" => 92);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'import', 'set', 'if', 'macro'],
                ['escape', 'default', 'length', 'file_link', 'striptags', 'abbr_class'],
                ['include', 'path']
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
