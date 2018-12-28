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
        // line 48
        echo "</head>
<body>
  <div class=\"firstload-background\">
  </div>
  <script src=\"https://connect.facebook.net/en_US/all.js#xfbml=1\"></script>

  <div class=\"site\" id=\"page\">
    ";
        // line 55
        $this->displayBlock('header', $context, $blocks);
        // line 58
        echo "    <div class=\"clear\"></div>
    ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
    ";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 70
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
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
        ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"https://cdn0.covalent.ai/cova_assets_v3/images/favicon.png\">
        <!-- <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" /> -->
        <!--[if IE]> <script> (function() { var html5 = (\"abbr,article,aside,audio,canvas,datalist,details,\" + \"figure,footer,header,hgroup,mark,menu,meter,nav,output,\" + \"progress,section,time,video\").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'/>
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css' rel='stylesheet'/>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab%3A400%2C700&ver=4.2.2' id='roboto-slab-css' media='all' rel='stylesheet' type='text/css'/>
        <meta name=\"google-translate-customization\" content=\"";
        // line 17
        echo $this->getAttribute(($context["site"] ?? null), "google_translate_token", array());
        echo "\">
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        <script>
        \$(document).ready(function(){
          \$(\".widget h2\").wrapInner(\"<span></span>\");
        });
        </script>

        ";
        // line 43
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 44
            echo "            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        ";
        }
        // line 46
        echo "
    ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/widget.css"), "method");
        // line 20
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 21
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/content.css"), "method");
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/sidebar.css"), "method");
        // line 23
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/lightbox.css"), "method");
        // line 24
        echo "            ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 8))) {
            // line 25
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/ie.css"), "method");
            // line 26
            echo "            ";
        }
        // line 27
        echo "        ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 32
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/scripts.js"), "method");
        // line 33
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/video.js"), "method");
        // line 34
        echo "        ";
    }

    // line 55
    public function block_header($context, array $blocks = array())
    {
        // line 56
        echo "      ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "    ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "    <div class='container' id=\"content-wrapper\">
      <div class=\"row\" id=\"primary\">
      ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "    </div>
    </div>
    ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        // line 68
        echo "      ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 68)->display($context);
        // line 69
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
        return array (  225 => 69,  222 => 68,  219 => 67,  214 => 62,  208 => 63,  206 => 62,  202 => 60,  199 => 59,  195 => 57,  192 => 56,  189 => 55,  185 => 34,  182 => 33,  179 => 32,  176 => 31,  173 => 30,  169 => 27,  166 => 26,  163 => 25,  160 => 24,  157 => 23,  154 => 22,  151 => 21,  148 => 20,  145 => 19,  142 => 18,  137 => 46,  133 => 44,  131 => 43,  119 => 35,  117 => 30,  111 => 28,  109 => 18,  105 => 17,  96 => 11,  92 => 9,  90 => 8,  86 => 7,  83 => 6,  80 => 5,  72 => 70,  70 => 67,  67 => 66,  65 => 59,  62 => 58,  60 => 55,  51 => 48,  49 => 5,  31 => 3,  28 => 2,  26 => 1,);
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
        <title>{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"https://cdn0.covalent.ai/cova_assets_v3/images/favicon.png\">
        <!-- <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" /> -->
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
", "partials/base.html.twig", "/Applications/MAMP/htdocs/cova-blog/user/themes/pinpress/templates/partials/base.html.twig");
    }
}
