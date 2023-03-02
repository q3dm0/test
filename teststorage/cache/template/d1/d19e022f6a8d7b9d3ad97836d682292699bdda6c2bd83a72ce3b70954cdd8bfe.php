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

/* default/template/extension/module/test.twig */
class __TwigTemplate_32470dbd6dc8b9aa439ad70a6d066f440f88165be284ee953e475074cd5195f4 extends \Twig\Template
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
        echo "<h3>Новинки</h3>
<div class=\"row\">
 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["latest_month"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 4
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["month"], "href", [], "any", false, false, false, 6);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["month"], "thumb", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["month"], "name", [], "any", false, false, false, 6);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["month"], "name", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption\">
        <h4><a href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["month"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["month"], "name", [], "any", false, false, false, 8);
            echo "</a></h4>
        <p>";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["month"], "description", [], "any", false, false, false, 9);
            echo "</p>
        ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["month"], "rating", [], "any", false, false, false, 10)) {
                // line 11
                echo "        <div class=\"rating\">
          ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 13
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["month"], "rating", [], "any", false, false, false, 13) < $context["i"])) {
                        // line 14
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 16
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 18
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "        </div>
        ";
            }
            // line 21
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["month"], "price", [], "any", false, false, false, 21)) {
                // line 22
                echo "        <p class=\"price\">
          ";
                // line 23
                if ( !twig_get_attribute($this->env, $this->source, $context["month"], "special", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["month"], "price", [], "any", false, false, false, 24);
                    echo "
          ";
                } else {
                    // line 26
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["month"], "special", [], "any", false, false, false, 26);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["month"], "price", [], "any", false, false, false, 26);
                    echo "</span>
          ";
                }
                // line 28
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["month"], "tax", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["month"], "tax", [], "any", false, false, false, 29);
                    echo "</span>
          ";
                }
                // line 31
                echo "        </p>
        ";
            }
            // line 33
            echo "      </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["month"], "product_id", [], "any", false, false, false, 35);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 36
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["month"], "product_id", [], "any", false, false, false, 36);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 37
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["month"], "product_id", [], "any", false, false, false, 37);
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>

<h3>Ликвидация</h3>
<div class=\"row\">
 ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["kick_ass_if_you_use"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["uses"]) {
            // line 47
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["uses"], "href", [], "any", false, false, false, 49);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["uses"], "thumb", [], "any", false, false, false, 49);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["uses"], "name", [], "any", false, false, false, 49);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["uses"], "name", [], "any", false, false, false, 49);
            echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption\">
        <h4><a href=\"";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["uses"], "href", [], "any", false, false, false, 51);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["uses"], "name", [], "any", false, false, false, 51);
            echo "</a></h4>
        <p>";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["uses"], "description", [], "any", false, false, false, 52);
            echo "</p>
        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["uses"], "rating", [], "any", false, false, false, 53)) {
                // line 54
                echo "        <div class=\"rating\">
          ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 56
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["uses"], "rating", [], "any", false, false, false, 56) < $context["i"])) {
                        // line 57
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    } else {
                        // line 59
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    // line 61
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "        </div>
        ";
            }
            // line 64
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["uses"], "price", [], "any", false, false, false, 64)) {
                // line 65
                echo "        <p class=\"price\">
          ";
                // line 66
                if ( !twig_get_attribute($this->env, $this->source, $context["uses"], "special", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "          ";
                    echo twig_get_attribute($this->env, $this->source, $context["uses"], "price", [], "any", false, false, false, 67);
                    echo "
          ";
                } else {
                    // line 69
                    echo "          <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["uses"], "special", [], "any", false, false, false, 69);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["uses"], "price", [], "any", false, false, false, 69);
                    echo "</span>
          ";
                }
                // line 71
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["uses"], "tax", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "          <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["uses"], "tax", [], "any", false, false, false, 72);
                    echo "</span>
          ";
                }
                // line 74
                echo "        </p>
        ";
            }
            // line 76
            echo "      </div>
      <div class=\"button-group\">
        <button type=\"button\" onclick=\"cart.add('";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["uses"], "product_id", [], "any", false, false, false, 78);
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["button_cart"] ?? null);
            echo "</span></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 79
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["uses"], "product_id", [], "any", false, false, false, 79);
            echo "');\"><i class=\"fa fa-heart\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 80
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["uses"], "product_id", [], "any", false, false, false, 80);
            echo "');\"><i class=\"fa fa-exchange\"></i></button>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/test.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 85,  284 => 80,  278 => 79,  272 => 78,  268 => 76,  264 => 74,  256 => 72,  253 => 71,  245 => 69,  239 => 67,  237 => 66,  234 => 65,  231 => 64,  227 => 62,  221 => 61,  217 => 59,  213 => 57,  210 => 56,  206 => 55,  203 => 54,  201 => 53,  197 => 52,  191 => 51,  180 => 49,  176 => 47,  172 => 46,  166 => 42,  153 => 37,  147 => 36,  141 => 35,  137 => 33,  133 => 31,  125 => 29,  122 => 28,  114 => 26,  108 => 24,  106 => 23,  103 => 22,  100 => 21,  96 => 19,  90 => 18,  86 => 16,  82 => 14,  79 => 13,  75 => 12,  72 => 11,  70 => 10,  66 => 9,  60 => 8,  49 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/test.twig", "");
    }
}
