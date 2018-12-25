<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_28f9f7dce47fbe95b18104e953ce264cadf8cd557c32efe5ba4d259616b4ba30 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.category" => "sidebar"), "order" => array("by" => "default", "dir" => "asc"))), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 2
            if ($this->getAttribute($context["module"], "template", array())) {
                // line 3
                if ($this->getAttribute($this->getAttribute($context["module"], "header", array()), "surround", array())) {
                    // line 4
                    $this->loadTemplate((("sidebar/" . $this->getAttribute($context["module"], "template", array())) . ".html.twig"), "partials/sidebar.html.twig", 4)->display($context);
                }
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<div class=\"sidebar section\" id=\"sidebar\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.category" => "sidebar"), "order" => array("by" => "default", "dir" => "asc"))), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 11
            if ($this->getAttribute($context["module"], "template", array())) {
                // line 12
                if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "surround", array())) {
                    // line 13
                    $this->loadTemplate((("sidebar/" . $this->getAttribute($context["module"], "template", array())) . ".html.twig"), "partials/sidebar.html.twig", 13)->display($context);
                }
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 19
            echo "<div class=\"widget HTML\">
  <h2 class=\"title\">SimpleSearch</h2>
  <div class=\"widget-content simplesearch\">
    ";
            // line 22
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 22)->display($context);
            // line 23
            echo "  </div>
</div>
";
        }
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 27
            echo "<div class=\"widget HTML\">
  <h2 class=\"title\">Random Article</h2>
  <div class=\"widget-content\">
    <a class=\"button\" href=\"";
            // line 30
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
  </div>
</div>
";
        }
        // line 34
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 35
            echo "<div class=\"widget HTML\">
  <h2 class=\"title\">Popular Tags</h2>
  <div class=\"widget-content\">
    ";
            // line 38
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 38)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag")));
            // line 39
            echo "  </div>
</div>
";
        }
        // line 42
        echo "
";
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 44
            echo "<div class=\"widget HTML\">
  <h2 class=\"title\">Archives</h2>
  <div class=\"widget-content\">
    ";
            // line 47
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 47)->display($context);
            // line 48
            echo "  </div>
</div>
";
        }
        // line 51
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 52
            echo "<div class=\"widget HTML syndicate\">
  <h2 class=\"title\">Syndicate</h2>
  <div class=\"widget-content\">
    <a class=\"button\" href=\"";
            // line 55
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 56
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
  </div>
</div>
";
        }
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 60,  170 => 56,  166 => 55,  161 => 52,  159 => 51,  154 => 48,  152 => 47,  147 => 44,  145 => 43,  142 => 42,  137 => 39,  135 => 38,  130 => 35,  128 => 34,  121 => 30,  116 => 27,  114 => 26,  109 => 23,  107 => 22,  102 => 19,  100 => 18,  97 => 17,  81 => 13,  79 => 12,  77 => 11,  60 => 10,  56 => 8,  40 => 4,  38 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for module in page.collection({'items':{'@taxonomy.category': 'sidebar'},'order': {'by': 'default', 'dir': 'asc'}}) %}
{% if module.template %}
{% if module.header.surround %}
{% include 'sidebar/' ~ module.template ~ '.html.twig' %}
{% endif %}
{% endif %}
{% endfor %}

<div class=\"sidebar section\" id=\"sidebar\">
{% for module in page.collection({'items':{'@taxonomy.category': 'sidebar'},'order': {'by': 'default', 'dir': 'asc'}}) %}
{% if module.template %}
{% if not module.header.surround %}
{% include 'sidebar/' ~ module.template ~ '.html.twig' %}
{% endif %}
{% endif %}
{% endfor %}

{% if config.plugins.simplesearch.enabled %}
<div class=\"widget HTML\">
  <h2 class=\"title\">SimpleSearch</h2>
  <div class=\"widget-content simplesearch\">
    {% include 'partials/simplesearch_searchbox.html.twig' %}
  </div>
</div>
{% endif %}
{% if config.plugins.random.enabled %}
<div class=\"widget HTML\">
  <h2 class=\"title\">Random Article</h2>
  <div class=\"widget-content\">
    <a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
  </div>
</div>
{% endif %}
{% if config.plugins.taxonomylist.enabled %}
<div class=\"widget HTML\">
  <h2 class=\"title\">Popular Tags</h2>
  <div class=\"widget-content\">
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
  </div>
</div>
{% endif %}

{% if config.plugins.archives.enabled %}
<div class=\"widget HTML\">
  <h2 class=\"title\">Archives</h2>
  <div class=\"widget-content\">
    {% include 'partials/archives.html.twig' %}
  </div>
</div>
{% endif %}
{% if config.plugins.feed.enabled %}
<div class=\"widget HTML syndicate\">
  <h2 class=\"title\">Syndicate</h2>
  <div class=\"widget-content\">
    <a class=\"button\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
  </div>
</div>
{% endif %}
</div>
", "partials/sidebar.html.twig", "/Applications/MAMP/htdocs/grav-skeleton/user/themes/pinpress/templates/partials/sidebar.html.twig");
    }
}
