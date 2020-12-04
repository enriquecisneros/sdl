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

/* modules/contrib/slick/templates/slick-slide.html.twig */
class __TwigTemplate_a5e2e8626efb24631b1e71e1ca5728abafece7990c53e71531889d3c45501735 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'slick_slide' => [$this, 'block_slick_slide'],
            'slick_caption' => [$this, 'block_slick_caption'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 21
        $context["classes"] = [0 => "slick__slide", 1 => "slide", 2 => ("slide--" . $this->sandbox->ensureToStringAllowed(        // line 22
($context["delta"] ?? null))), 3 => ((twig_test_empty($this->getAttribute(        // line 23
($context["item"] ?? null), "slide", []))) ? ("slide--text") : ("")), 4 => (($this->getAttribute(        // line 24
($context["settings"] ?? null), "layout", [])) ? (("slide--caption--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["settings"] ?? null), "layout", []))))) : ("")), 5 => (($this->getAttribute(        // line 25
($context["settings"] ?? null), "class", [])) ? ($this->getAttribute(($context["settings"] ?? null), "class", [])) : (""))];
        // line 29
        $context["content_classes"] = [0 => (($this->getAttribute(        // line 30
($context["settings"] ?? null), "detroy", [])) ? ("slide") : ("")), 1 => (( !$this->getAttribute(        // line 31
($context["settings"] ?? null), "detroy", [])) ? ("slide__content") : (""))];
        // line 35
        $context["caption_classes"] = [0 => "slide__caption"];
        // line 39
        ob_start(function () { return ''; });
        // line 40
        echo "  ";
        $this->displayBlock('slick_slide', $context, $blocks);
        $context["slide"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo "
";
        // line 49
        if ($this->getAttribute(($context["settings"] ?? null), "wrapper", [])) {
            // line 50
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  ";
            // line 51
            if (twig_test_empty($this->getAttribute(($context["settings"] ?? null), "grid", []))) {
                echo "<div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
                echo ">";
            }
        }
        // line 53
        echo "
  ";
        // line 54
        if ($this->getAttribute(($context["item"] ?? null), "slide", [])) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 57
        echo "
  ";
        // line 58
        if ($this->getAttribute(($context["item"] ?? null), "caption", [])) {
            // line 59
            echo "    ";
            $this->displayBlock('slick_caption', $context, $blocks);
            // line 89
            echo "  ";
        }
        // line 90
        echo "
";
        // line 91
        if ($this->getAttribute(($context["settings"] ?? null), "wrapper", [])) {
            // line 92
            echo "  ";
            if (twig_test_empty($this->getAttribute(($context["settings"] ?? null), "grid", []))) {
                echo "</div>";
            }
            // line 93
            echo "  </div>
";
        }
    }

    // line 40
    public function block_slick_slide($context, array $blocks = [])
    {
        // line 41
        echo "    ";
        if (($this->getAttribute(($context["settings"] ?? null), "split", []) &&  !$this->getAttribute(($context["settings"] ?? null), "unslick", []))) {
            // line 42
            echo "      <div class=\"slide__media\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "slide", [])), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 44
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "slide", [])), "html", null, true);
            echo "
    ";
        }
        // line 46
        echo "  ";
    }

    // line 59
    public function block_slick_caption($context, array $blocks = [])
    {
        // line 60
        echo "      ";
        if ($this->getAttribute(($context["settings"] ?? null), "fullwidth", [])) {
            echo "<div class=\"slide__constrained\">";
        }
        // line 61
        echo "
        <div";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["caption_attributes"] ?? null), "addClass", [0 => ($context["caption_classes"] ?? null)], "method")), "html", null, true);
        echo ">
          ";
        // line 63
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "overlay", [])) {
            // line 64
            echo "            <div class=\"slide__overlay\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "overlay", [])), "html", null, true);
            echo "</div>
            ";
            // line 65
            if ($this->getAttribute(($context["settings"] ?? null), "data", [])) {
                echo "<div class=\"slide__data\">";
            }
            // line 66
            echo "          ";
        }
        // line 67
        echo "
          ";
        // line 68
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "title", [])) {
            // line 69
            echo "            <h2 class=\"slide__title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "title", [])), "html", null, true);
            echo "</h2>
          ";
        }
        // line 71
        echo "
          ";
        // line 72
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "alt", [])) {
            // line 73
            echo "            <p class=\"slide__description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "alt", [])), "html", null, true);
            echo "</p>
          ";
        }
        // line 75
        echo "
          ";
        // line 76
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "data", [])) {
            // line 77
            echo "            <div class=\"slide__description\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "data", [])), "html", null, true);
            echo "</div>
          ";
        }
        // line 79
        echo "
          ";
        // line 80
        if ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "link", [])) {
            // line 81
            echo "            <div class=\"slide__link\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "link", [])), "html", null, true);
            echo "</div>
          ";
        }
        // line 83
        echo "
          ";
        // line 84
        if (($this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "overlay", []) && $this->getAttribute(($context["settings"] ?? null), "data", []))) {
            echo "</div>";
        }
        // line 85
        echo "        </div>

      ";
        // line 87
        if ($this->getAttribute(($context["settings"] ?? null), "fullwidth", [])) {
            echo "</div>";
        }
        // line 88
        echo "    ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/slick/templates/slick-slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 88,  213 => 87,  209 => 85,  205 => 84,  202 => 83,  196 => 81,  194 => 80,  191 => 79,  185 => 77,  183 => 76,  180 => 75,  174 => 73,  172 => 72,  169 => 71,  163 => 69,  161 => 68,  158 => 67,  155 => 66,  151 => 65,  146 => 64,  144 => 63,  140 => 62,  137 => 61,  132 => 60,  129 => 59,  125 => 46,  119 => 44,  113 => 42,  110 => 41,  107 => 40,  101 => 93,  96 => 92,  94 => 91,  91 => 90,  88 => 89,  85 => 59,  83 => 58,  80 => 57,  74 => 55,  72 => 54,  69 => 53,  62 => 51,  57 => 50,  55 => 49,  52 => 48,  48 => 40,  46 => 39,  44 => 35,  42 => 31,  41 => 30,  40 => 29,  38 => 25,  37 => 24,  36 => 23,  35 => 22,  34 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/slick/templates/slick-slide.html.twig", "/home/sdlex/shedsdirectoflexington.com/modules/contrib/slick/templates/slick-slide.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 21, "block" => 40, "if" => 49];
        static $filters = ["clean_class" => 24, "escape" => 50];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
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
