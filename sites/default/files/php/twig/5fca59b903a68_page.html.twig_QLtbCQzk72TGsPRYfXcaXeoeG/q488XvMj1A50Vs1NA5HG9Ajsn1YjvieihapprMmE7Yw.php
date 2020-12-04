<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/sdol/templates/page.html.twig */
class __TwigTemplate_99e64e8efb0391a6763161404cf2e3805a0e653648e46f96d5f63d69070ca5d0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        echo "
<section id=\"topbar\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-6 text-left phone\">
        ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topbarlt", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-xs-6 text-right\">
        ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topbarrt", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</section>
<section id=\"mainheader\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3 col-xs-8\">
        ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-9 col-xs-4\">
        ";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "mainnav", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</section>
<section id=\"titlebar\">
  <div class=\"container\">
    <div class=\"col-sm-6\">
      ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "titlebarlt", [])), "html", null, true);
        echo "
    </div>
    <div class=\"col-sm-6\">
      ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "titlebarrt", [])), "html", null, true);
        echo "
    </div>
  </div>
</section>
";
        // line 89
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 91
        $this->displayBlock('main', $context, $blocks);
        // line 156
        echo "<section id=\"delivery\">
  ";
        // line 157
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "delivery", [])), "html", null, true);
        echo "
</section>
<section id=\"prefooter\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6\">
        ";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter1", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-6\">
        ";
        // line 166
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter2", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</section>
<section id=\"copyright\">
  <div class=\"container\">
    <div class=\"col-sm-12 text-center\">
      <p>&copy;";
        // line 174
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Sheds Direct of Lexington. All rights reserved.
    </div>
  </div>
  
</section>";
    }

    // line 91
    public function block_main($context, array $blocks = [])
    {
        // line 92
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 96
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 97
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 102
            echo "      ";
        }
        // line 103
        echo "
      ";
        // line 105
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 106
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 111
            echo "      ";
        }
        // line 112
        echo "
      ";
        // line 114
        echo "      ";
        // line 115
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 116
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 117
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9 ") : ("")), 2 => ((($this->getAttribute(        // line 118
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 119
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 122
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 125
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 126
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 129
            echo "        ";
        }
        // line 130
        echo "
        ";
        // line 132
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 133
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 136
            echo "        ";
        }
        // line 137
        echo "
        ";
        // line 139
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 143
        echo "      </section>
      
      ";
        // line 146
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 147
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 152
            echo "      ";
        }
        // line 153
        echo "    </div>
  </div>
";
    }

    // line 97
    public function block_header($context, array $blocks = [])
    {
        // line 98
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 106
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 107
        echo "          <aside class=\"col-sm-3 \" role=\"complementary\">
            ";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 126
    public function block_highlighted($context, array $blocks = [])
    {
        // line 127
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 133
    public function block_help($context, array $blocks = [])
    {
        // line 134
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 139
    public function block_content($context, array $blocks = [])
    {
        // line 140
        echo "          <a id=\"main-content\"></a>
          ";
        // line 141
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 147
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 148
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 149
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/sdol/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 149,  291 => 148,  288 => 147,  282 => 141,  279 => 140,  276 => 139,  269 => 134,  266 => 133,  259 => 127,  256 => 126,  249 => 108,  246 => 107,  243 => 106,  236 => 99,  233 => 98,  230 => 97,  224 => 153,  221 => 152,  218 => 147,  215 => 146,  211 => 143,  208 => 139,  205 => 137,  202 => 136,  199 => 133,  196 => 132,  193 => 130,  190 => 129,  187 => 126,  184 => 125,  178 => 122,  176 => 119,  175 => 118,  174 => 117,  173 => 116,  172 => 115,  170 => 114,  167 => 112,  164 => 111,  161 => 106,  158 => 105,  155 => 103,  152 => 102,  149 => 97,  146 => 96,  139 => 92,  136 => 91,  127 => 174,  116 => 166,  110 => 163,  101 => 157,  98 => 156,  96 => 91,  94 => 89,  87 => 85,  81 => 82,  70 => 74,  64 => 71,  52 => 62,  46 => 59,  39 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/sdol/templates/page.html.twig", "/home/sdlex/shedsdirectoflexington.com/themes/sdol/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 89, "block" => 91, "if" => 96];
        static $filters = ["escape" => 59, "date" => 174];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
