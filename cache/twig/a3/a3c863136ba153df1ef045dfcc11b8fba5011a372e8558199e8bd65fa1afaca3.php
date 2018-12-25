<?php

/* partials/blog_sidebar_footer.html.twig */
class __TwigTemplate_097890dd22b02190735920b8b439c16da0b17a65ebc89f53f93664ce126a04df extends Twig_Template
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
        echo "</div>
</div>
</div>

<div class=\"span3\" id=\"side-bar\">
";
        // line 6
        $this->loadTemplate("partials/sidebar.html.twig", "partials/blog_sidebar_footer.html.twig", 6)->display($context);
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_sidebar_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("</div>
</div>
</div>

<div class=\"span3\" id=\"side-bar\">
{% include 'partials/sidebar.html.twig' %}
</div>
", "partials/blog_sidebar_footer.html.twig", "/Applications/MAMP/htdocs/grav-skeleton/user/themes/pinpress/templates/partials/blog_sidebar_footer.html.twig");
    }
}
