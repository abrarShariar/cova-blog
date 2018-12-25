<?php

/* sidebar/about.html.twig */
class __TwigTemplate_6e7e42d927efa43d59a2207708f4de2133254b20743556ac087d4e1c84b813d6 extends Twig_Template
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
        echo "<div class=\"authorzo\">
  <div class=\"widget widget-about\">
    <div class=\"widget-about-img\">
      <a href=\"";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "image", array()), array(), "array"), "url", array());
        echo "\">
        <img src=\"";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "image", array()), array(), "array"), "url", array());
        echo "\">\"
      </a>
    </div>
    ";
        // line 8
        echo $this->getAttribute(($context["module"] ?? null), "content", array());
        echo "
    ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "social", array())) {
            // line 10
            echo "    <div class=\"social-ul\">
      <ul>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "social", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\" target=\"_blank\"><i class=\"fa fa-";
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></i></a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </ul>
    </div>
    ";
        }
        // line 18
        echo "    <div class=\"clearfix\"></div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sidebar/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  59 => 15,  48 => 13,  44 => 12,  40 => 10,  38 => 9,  34 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"authorzo\">
  <div class=\"widget widget-about\">
    <div class=\"widget-about-img\">
      <a href=\"{{ module.media.images[module.header.image].url }}\">
        <img src=\"{{ module.media.images[module.header.image].url }}\">\"
      </a>
    </div>
    {{ module.content }}
    {% if module.header.social %}
    <div class=\"social-ul\">
      <ul>
        {% for item in module.header.social %}
        <li><a href=\"{{ item.url }}\" target=\"_blank\"><i class=\"fa fa-{{ item.icon }}\"></i></a></li>
        {% endfor %}
      </ul>
    </div>
    {% endif %}
    <div class=\"clearfix\"></div>
  </div>
</div>
", "sidebar/about.html.twig", "/Applications/MAMP/htdocs/grav-skeleton/user/themes/pinpress/templates/sidebar/about.html.twig");
    }
}
