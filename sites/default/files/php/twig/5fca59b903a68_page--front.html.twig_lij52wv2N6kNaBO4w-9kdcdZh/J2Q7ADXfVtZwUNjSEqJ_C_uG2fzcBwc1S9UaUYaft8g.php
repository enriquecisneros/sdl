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

/* themes/sdol/templates/page--front.html.twig */
class __TwigTemplate_5ca89471c321ea057bfd0bd6f214ed1666832356d43a29e1a93763500f1d4bc9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        echo "<section id=\"topbar\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6 text-left phone\">
\t\t\t\t";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topbarlt", [])), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 text-right\">
\t\t\t\t";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topbarrt", [])), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section id=\"mainheader\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3 col-xs-8\">
        ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-sm-9 col-xs-4\">
        ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "mainnav", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</section>
<section id=\"hero\">
\t<div class=\"container\">
\t";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "hero", [])), "html", null, true);
        echo "\t
\t</div>
\t
</section>
<section id=\"visualnav\">
\t<div class=\"container\">
\t\t";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "visualnav", [])), "html", null, true);
        echo "
\t</div>
</section>

<section id=\"shedbuilder\">
\t<div class=\"container\">
\t\t";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "shedbuilder", [])), "html", null, true);
        echo "
\t</div>
</section>
<section id=\"amish\">
\t
\t\t";
        // line 97
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "amish", [])), "html", null, true);
        echo "
\t
</section>
</section>
\t";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "delivery", [])), "html", null, true);
        echo "
</section>

<section id=\"testimonials\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t\t\t\t";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "testimonials", [])), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>\t\t
\t</div>
</section>
<section id=\"leavereview\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-8 col-sm-offset-2\">
\t\t\t\t";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "review", [])), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 122
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 123
        echo "


<section id=\"prefooter\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter1", [])), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
        // line 133
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "prefooter2", [])), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section id=\"copyright\">
\t<div class=\"container\">
\t\t<div class=\"col-sm-12 text-center\">
\t\t\t<p>&copy;";
        // line 141
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Sheds Direct of Lexington. All rights reserved.
\t\t</div>
\t</div>
\t
</section>";
    }

    public function getTemplateName()
    {
        return "themes/sdol/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 141,  152 => 133,  146 => 130,  137 => 123,  135 => 122,  127 => 117,  115 => 108,  105 => 101,  98 => 97,  90 => 92,  81 => 86,  72 => 80,  62 => 73,  56 => 70,  44 => 61,  38 => 58,  32 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/sdol/templates/page--front.html.twig", "/home/sdlex/shedsdirectoflexington.com/themes/sdol/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 122];
        static $filters = ["escape" => 58, "date" => 141];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
