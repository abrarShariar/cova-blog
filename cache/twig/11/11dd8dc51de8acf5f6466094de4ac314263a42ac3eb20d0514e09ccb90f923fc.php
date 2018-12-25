<?php

/* partials/base.html.twig */
class __TwigTemplate_84eae42c600af1189a2888ff15f8b60be3fcac39eb1dd876ebd31d5e1b4d6840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\" class='";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 8))) {
        } else {
            echo "v2";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 7))) {
            echo "ie ie7 ltie8 ltie9";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 8))) {
            echo "ie ie8 ltie9";
        }
        echo "'>
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 47
        echo "</head>
<body>
  <div class=\"firstload-background\">
  </div>
  <script src=\"https://connect.facebook.net/en_US/all.js#xfbml=1\"></script>

  <div class=\"site\" id=\"page\">
    ";
        // line 54
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "    <div class=\"clear\"></div>
    ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "  </div>

    </body>
    </html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
        ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />
        <!--[if IE]> <script> (function() { var html5 = (\"abbr,article,aside,audio,canvas,datalist,details,\" + \"figure,footer,header,hgroup,mark,menu,meter,nav,output,\" + \"progress,section,time,video\").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'/>
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>
        <meta name=\"google-translate-customization\" content=\"";
        // line 16
        echo $this->getAttribute(($context["site"] ?? null), "google_translate_token", array());
        echo "\">
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        <script>
        \$(document).ready(function(){
          \$(\".widget h2\").wrapInner(\"<span></span>\");
        });
        </script>

        ";
        // line 42
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 43
            echo "            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        ";
        }
        // line 45
        echo "
    ";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/widget.css"), "method");
        // line 19
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 20
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/content.css"), "method");
        // line 21
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/sidebar.css"), "method");
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/lightbox.css"), "method");
        // line 23
        echo "            ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 8))) {
            // line 24
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/ie.css"), "method");
            // line 25
            echo "            ";
        }
        // line 26
        echo "        ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 31
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/scripts.js"), "method");
        // line 32
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/video.js"), "method");
        // line 33
        echo "        ";
    }

    // line 54
    public function block_header($context, array $blocks = array())
    {
        // line 55
        echo "      ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "    ";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        echo "    <div class='container' id=\"content-wrapper\">
      <div class=\"row\" id=\"primary\">
      ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "    </div>
    </div>
    ";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        // line 67
        echo "      ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 67)->display($context);
        // line 68
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 68,  225 => 67,  222 => 66,  217 => 61,  211 => 62,  209 => 61,  205 => 59,  202 => 58,  198 => 56,  195 => 55,  192 => 54,  188 => 33,  185 => 32,  182 => 31,  179 => 30,  176 => 29,  172 => 26,  169 => 25,  166 => 24,  163 => 23,  160 => 22,  157 => 21,  154 => 20,  151 => 19,  148 => 18,  145 => 17,  140 => 45,  136 => 43,  134 => 42,  122 => 34,  120 => 29,  114 => 27,  112 => 17,  108 => 16,  99 => 10,  96 => 9,  94 => 8,  86 => 7,  83 => 6,  80 => 5,  72 => 69,  70 => 66,  67 => 65,  65 => 58,  62 => 57,  60 => 54,  51 => 47,  49 => 5,  31 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\" class='{% if browser.getBrowser == 'msie' and browser.getVersion == 7 and browser.getVersion == 8 %}{% else %}v2{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 7 %}ie ie7 ltie8 ltie9{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}ie ie8 ltie9{% endif %}'>
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />
        <!--[if IE]> <script> (function() { var html5 = (\"abbr,article,aside,audio,canvas,datalist,details,\" + \"figure,footer,header,hgroup,mark,menu,meter,nav,output,\" + \"progress,section,time,video\").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'/>
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>
        <meta name=\"google-translate-customization\" content=\"{{ site.google_translate_token }}\">
        {% block stylesheets %}
            {% do assets.addCss('theme://css/widget.css') %}
            {% do assets.addCss('theme://css/style.css') %}
            {% do assets.addCss('theme://css/content.css') %}
            {% do assets.addCss('theme://css/sidebar.css') %}
            {% do assets.addCss('theme://css/lightbox.css') %}
            {% if browser.getBrowser == 'msie' and browser.getVersion >= 7 and browser.getVersion <= 8 %}
                {% do assets.addCss('theme://css/ie.css') %}
            {% endif %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.add('theme://js/scripts.js') %}
            {% do assets.add('theme://js/video.js') %}
        {% endblock %}
        {{ assets.js() }}

        <script>
        \$(document).ready(function(){
          \$(\".widget h2\").wrapInner(\"<span></span>\");
        });
        </script>

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        {% endif %}

    {% endblock head %}
</head>
<body>
  <div class=\"firstload-background\">
  </div>
  <script src=\"https://connect.facebook.net/en_US/all.js#xfbml=1\"></script>

  <div class=\"site\" id=\"page\">
    {% block header %}
      {% include 'partials/header.html.twig' %}
    {% endblock %}
    <div class=\"clear\"></div>
    {% block body %}
    <div class='container' id=\"content-wrapper\">
      <div class=\"row\" id=\"primary\">
      {% block content %}{% endblock %}
    </div>
    </div>
    {% endblock %}

    {% block footer %}
      {% include 'partials/footer.html.twig' %}
    {% endblock %}
  </div>

    </body>
    </html>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/grav-skeleton/user/themes/pinpress/templates/partials/base.html.twig");
    }
}
