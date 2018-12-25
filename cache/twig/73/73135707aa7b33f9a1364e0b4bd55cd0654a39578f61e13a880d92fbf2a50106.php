<?php

/* partials/taxonomylist.html.twig */
class __TwigTemplate_4e46914b698a75c124fab7c5485d84a467f16ddd5c6f9344fec4165f4f52afb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["taxlist"] = $this->getAttribute(($context["taxonomylist"] ?? null), "get", array(), "method");
        // line 2
        echo "
";
        // line 3
        if (($context["taxlist"] ?? null)) {
            // line 4
            echo "<div class=\"widget-content list-label-widget-content\">
  <ul>
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), array(), "array"), 0, 5));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 7
                echo "    <li>
      ";
                // line 8
                $context["active"] = ((($this->getAttribute(($context["uri"] ?? null), "param", array(0 => ($context["taxonomy"] ?? null)), "method") == $context["tax"])) ? ("active") : (""));
                // line 9
                echo "      <a class=\"";
                echo ($context["active"] ?? null);
                echo "\" href=\"";
                echo ($context["base_url_absolute"] ?? null);
                echo "/";
                echo ($context["taxonomy"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo twig_escape_filter($this->env, $context["tax"], "url");
                echo "\">";
                echo $context["tax"];
                echo "</a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "  </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  39 => 9,  37 => 8,  34 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set taxlist = taxonomylist.get() %}

{% if taxlist %}
<div class=\"widget-content list-label-widget-content\">
  <ul>
    {% for tax,value in taxlist[taxonomy]|slice(0, 5) %}
    <li>
      {% set active = uri.param(taxonomy) == tax ? 'active' : '' %}
      <a class=\"{{ active }}\" href=\"{{ base_url_absolute }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax|e('url') }}\">{{ tax }}</a>
    </li>
    {% endfor %}
  </ul>
</div>
{% endif %}
", "partials/taxonomylist.html.twig", "/Applications/MAMP/htdocs/grav-skeleton/user/themes/pinpress/templates/partials/taxonomylist.html.twig");
    }
}
