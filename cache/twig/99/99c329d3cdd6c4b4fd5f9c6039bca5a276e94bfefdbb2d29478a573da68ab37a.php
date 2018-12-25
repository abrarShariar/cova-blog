<?php

/* partials/header.html.twig */
class __TwigTemplate_1a86c6479bb5419ad147c24990018e48373db240fb334955d6f0aa16efd0c13a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"masthead\" role=\"banner\" class=\"affix-top\">
  <div class=\"container\">
    <div class=\"navbar navbar-inverse\">
      <div class=\"navbar-inner\">
        <div class=\"btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\"><img src=\"";
        // line 5
        echo ($context["theme_url"] ?? null);
        echo "/images/bmenu.png\"></div>
        <div class=\"header section\" id=\"header\"><div class=\"widget Header\" id=\"Header1\">
          <div id=\"header-inner\">
            ";
        // line 8
        if ($this->getAttribute(($context["site"] ?? null), "title", array())) {
            // line 9
            echo "              <div class=\"titlewrapper\">
                <h1 class=\"title\">
                  <a href='";
            // line 11
            echo ($context["base_url_absolute"] ?? null);
            echo "' style='display: block'>";
            echo $this->getAttribute(($context["site"] ?? null), "title", array());
            echo "</a>
                </h1>
              </div>
            ";
        }
        // line 15
        echo "          </div>
        </div></div>
        <div class=\"nav-collapse collapse\">
          ";
        // line 18
        $this->displayBlock('navigation', $context, $blocks);
        // line 21
        echo "        </div>
      </div>
    </div>
  </div>
  <div class=\"clear\"></div>
</div>
";
    }

    // line 18
    public function block_navigation($context, array $blocks = array())
    {
        // line 19
        echo "              ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 19)->display($context);
        // line 20
        echo "          ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  67 => 19,  64 => 18,  54 => 21,  52 => 18,  47 => 15,  38 => 11,  34 => 9,  32 => 8,  26 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"masthead\" role=\"banner\" class=\"affix-top\">
  <div class=\"container\">
    <div class=\"navbar navbar-inverse\">
      <div class=\"navbar-inner\">
        <div class=\"btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\"><img src=\"{{ theme_url }}/images/bmenu.png\"></div>
        <div class=\"header section\" id=\"header\"><div class=\"widget Header\" id=\"Header1\">
          <div id=\"header-inner\">
            {% if site.title  %}
              <div class=\"titlewrapper\">
                <h1 class=\"title\">
                  <a href='{{ base_url_absolute }}' style='display: block'>{{ site.title }}</a>
                </h1>
              </div>
            {% endif %}
          </div>
        </div></div>
        <div class=\"nav-collapse collapse\">
          {% block navigation %}
              {% include 'partials/navigation.html.twig' %}
          {% endblock %}
        </div>
      </div>
    </div>
  </div>
  <div class=\"clear\"></div>
</div>
", "partials/header.html.twig", "/Applications/MAMP/htdocs/grav-skeleton/user/themes/pinpress/templates/partials/header.html.twig");
    }
}
