<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_507a0ef24d1a46264745590b77291766ebe68d3981baa223db48fbd90e3bb391 extends Twig_Template
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
        if ( !($context["truncate"] ?? null)) {
            // line 2
            echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
            echo ($context["theme_url"] ?? null);
            echo "/css/item.css\" />
";
        }
        // line 4
        echo "<div class=\"post\">
  <div class=\"entry-container\">
    <div class=\"entry-content\">

      ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 9
            echo "      <h1 class=\"entry-title\">
        ";
            // line 10
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 11
                echo "          <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
        ";
            }
            // line 13
            echo "          <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
      </h1>
      ";
        } else {
            // line 16
            echo "      <h1 class=\"entry-title\"><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h1>
      ";
        }
        // line 18
        echo "      ";
        if (($context["truncate"] ?? null)) {
            // line 19
            echo "
        <div class=\"meta\">
          <div><i class=\"fa fa-clock-o\"></i> ";
            // line 21
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "dateformat", array()), "long", array()));
            echo "</div>
          <div><i class=\"fa fa-user\"></i> <span style=\"color:#E74C3C\">
            ";
            // line 23
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array()) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array()))) {
                // line 24
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array())) {
                    // line 25
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "url", array())) {
                        // line 26
                        echo "            <a href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
                        echo "</a>
            ";
                    } else {
                        // line 28
                        echo "            ";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
                        echo "
            ";
                    }
                    // line 30
                    echo "            ";
                } else {
                    // line 31
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array())) {
                        // line 32
                        echo "            <a href=\"";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
                        echo "</a>
            ";
                    } else {
                        // line 34
                        echo "            ";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
                        echo "
            ";
                    }
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "            ";
            }
            // line 38
            echo "          </span></div>
          ";
            // line 39
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
                // line 40
                echo "          <div> <i class=\"fa fa-tags\"></i>
            ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 42
                    echo "            <a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/tag:";
                    echo $context["tag"];
                    echo "\" rel=\"tag\">";
                    echo $context["tag"];
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    echo "</a>
            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "          </div>
          ";
            }
            // line 46
            echo "        </div>
      ";
        } else {
            // line 48
            echo "      <div class=\"meta1\">
        <p>
          <small>
            <span><i class=\"fa fa-clock-o\"></i> ";
            // line 51
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "dateformat", array()), "long", array()));
            echo "</span>
            <span><i class=\"fa fa-user\"></i>
              ";
            // line 53
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array()) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array()))) {
                // line 54
                echo "              ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array())) {
                    // line 55
                    echo "              ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "url", array())) {
                        // line 56
                        echo "              <a href=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
                        echo "</a>
              ";
                    } else {
                        // line 58
                        echo "              ";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
                        echo "
              ";
                    }
                    // line 60
                    echo "              ";
                } else {
                    // line 61
                    echo "              ";
                    if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array())) {
                        // line 62
                        echo "              <a href=\"";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array());
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
                        echo "</a>
              ";
                    } else {
                        // line 64
                        echo "              ";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
                        echo "
              ";
                    }
                    // line 66
                    echo "              ";
                }
                // line 67
                echo "              ";
            }
            // line 68
            echo "            </span>
            ";
            // line 69
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
                // line 70
                echo "            <span> <i class=\"fa fa-tags\"></i>
              ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 72
                    echo "              <a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/tag:";
                    echo $context["tag"];
                    echo "\" rel=\"tag\">";
                    echo $context["tag"];
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    echo "</a>
              ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "            </span>
            ";
            }
            // line 76
            echo "          </small>
        </p>
      </div>
      ";
        }
        // line 80
        echo "
      <div class=\"clear\"></div>

      <div class=\"";
        // line 83
        if (($context["truncate"] ?? null)) {
            echo "entry-";
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array()) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "soundcloud", array())) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array()))) {
                echo "video";
            } else {
                echo "image";
            }
        } else {
            echo " resp_video";
        }
        echo "\">
        ";
        // line 84
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array())) {
            // line 85
            echo "        <iframe src=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array());
            echo "?showinfo=0\" frameborder=\"0\" allowfullscreen style=\"width: 750px; height: 421.429px; ";
            if ( !($context["truncate"] ?? null)) {
                echo "width: 680px;height: 392px;";
            }
            echo "\"></iframe>
        ";
        }
        // line 87
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array())) {
            // line 88
            echo "        <iframe src=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array());
            echo "\" frameborder=\"0\" allowfullscreen=\"\" data-aspectratio=\"0.5619047619047619\" style=\"width: 750px; height: 421.429px; ";
            if ( !($context["truncate"] ?? null)) {
                echo "width: 680px;height: 392px;";
            }
            echo "\"></iframe>
        ";
        }
        // line 90
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "soundcloud", array())) {
            // line 91
            echo "        <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "soundcloud", array());
            echo "&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
        ";
        }
        // line 93
        echo "        ";
        if (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))) {
            // line 94
            echo "          ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 750, 1 => 422), "method"), "html", array(0 => "", 1 => "", 2 => "thumb"), "method");
            echo "
        ";
        }
        // line 96
        echo "      </div>

            ";
        // line 98
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 99
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
            ";
            // line 100
            if ( !($context["truncate"] ?? null)) {
                // line 101
                echo "            ";
                $context["show_prev_next"] = true;
                // line 102
                echo "            ";
            }
            // line 103
            echo "            ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 104
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "
            ";
        } elseif (        // line 105
($context["truncate"] ?? null)) {
            // line 106
            echo "            ";
            echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", array()), 550);
            echo "
            ";
        } else {
            // line 108
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
            ";
            // line 109
            $context["show_prev_next"] = true;
            // line 110
            echo "            ";
        }
        // line 111
        echo "
            <div class=\"entry-meta clearfix\">
              <div class=\"up_arrow\"></div>
              <div class=\"pull-right share-story-container\">
                <ul class=\"share-story\">
                  <li>
                    <a href=\"http://www.facebook.com/share.php?u=";
        // line 117
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "\" target=\"_blank\">
                      <i class=\"fa fa-facebook\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://twitter.com/home?status=";
        // line 122
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
        echo "-";
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "\" target=\"_blank\">
                      <i class=\"fa fa-twitter\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://digg.com/submit?url=";
        // line 127
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
        echo "\" target=\"_blank\">
                      <i class=\"fa fa-digg\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://reddit.com/submit?url=";
        // line 132
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
        echo "\" target=\"_blank\">
                      <i class=\"fa fa-reddit\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 137
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "&amp;title=";
        echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
        echo "\" target=\"_blank\">
                      <i class=\"fa fa-linkedin\"></i>
                    </a>
                  </li>
                </ul>
              </div>

              ";
        // line 144
        if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 145
            echo "                ";
            if ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
                // line 146
                echo "                  <div class=\"pull-left\"><a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" class=\"read-more\">Continue Reading</a></div>
                ";
            } elseif (            // line 147
($context["truncate"] ?? null)) {
                // line 148
                echo "                  <div class=\"pull-left\"><a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\" class=\"read-more\">Continue Reading</a></div>
                ";
            }
            // line 150
            echo "              ";
        }
        // line 151
        echo "              <div class=\"clear\"></div>
            </div>

            ";
        // line 154
        if ( !($context["truncate"] ?? null)) {
            // line 155
            echo "            <div class=\"author-meta box\">
              ";
            // line 156
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array())) {
                // line 157
                echo "              ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "logo", array()) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "gravatar", array()))) {
                    // line 158
                    echo "              <div class=\"author-image\">
                ";
                    // line 159
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "gravatar", array())) {
                        // line 160
                        echo "                  <img src=\"http://www.gravatar.com/avatar/";
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "gravatar", array()));
                        echo "?s=90\" class=\"avatar-author\" alt=\"Gravatar\"/>
                ";
                    } elseif ($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 161
($context["page"] ?? null), "header", array()), "author", array()), "logo", array())) {
                        // line 162
                        echo "                  <img src=\"";
                        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "logo", array()), array(), "array"), "url", array());
                        echo "\" class=\"avatar-author\" />
                ";
                    }
                    // line 164
                    echo "              </div>
              ";
                }
                // line 166
                echo "              <div class=\"author-body\">
                <h2 class=\"vcard author\">
                  ";
                // line 168
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "url", array())) {
                    // line 169
                    echo "                  <a href=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "url", array());
                    echo "\" rel=\"author\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
                    echo "</a>
                  ";
                } else {
                    // line 171
                    echo "                  ";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "name", array());
                    echo "
                  ";
                }
                // line 173
                echo "                </h2>
                <p>
                  ";
                // line 175
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array()), "description", array());
                echo "
                </p>
              </div>
              ";
            } else {
                // line 179
                echo "              ";
                if (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "logo", array()) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "gravatar", array()))) {
                    // line 180
                    echo "              <div class=\"author-image\">
                ";
                    // line 181
                    if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "gravatar", array())) {
                        // line 182
                        echo "                  <img src=\"http://www.gravatar.com/avatar/";
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "gravatar", array()));
                        echo "?s=90\" class=\"avatar-author\" alt=\"Gravatar\"/>
                ";
                    } elseif ($this->getAttribute($this->getAttribute(                    // line 183
($context["site"] ?? null), "author", array()), "logo", array())) {
                        // line 184
                        echo "                  <img src=\"";
                        echo ($context["theme_url"] ?? null);
                        echo "/images/";
                        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "logo", array());
                        echo "\" class=\"avatar-author\" />
                ";
                    }
                    // line 186
                    echo "              </div>
              ";
                }
                // line 188
                echo "              <div class=\"author-body\">
                <h2 class=\"vcard author\">
                  ";
                // line 190
                if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array())) {
                    // line 191
                    echo "                  <a href=\"";
                    echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array());
                    echo "\" rel=\"author\">";
                    echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
                    echo "</a>
                  ";
                } else {
                    // line 193
                    echo "                  ";
                    echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
                    echo "
                  ";
                }
                // line 195
                echo "                </h2>
                <p>
                  ";
                // line 197
                echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "description", array());
                echo "
                </p>
              </div>
              ";
            }
            // line 201
            echo "
              <div class=\"clear\"></div>
            </div>
            ";
        }
        // line 205
        echo "
            ";
        // line 206
        if ( !($context["truncate"] ?? null)) {
            // line 207
            echo "            <div class=\"related_posts\">
              <div id=\"related-posts\">
                <div class=\"title\">
                  <h4>Related Posts</h4>
                </div>
                <div class=\"carousel_related owl-carousel owl-theme\" id=\"owl-demo\">
                  ";
            // line 213
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/blog_item.html.twig", 213)->display($context);
            // line 214
            echo "                </div>
              </div>
              <div style=\"clear:both\"></div>
            </div>
            <script type='text/javascript'>
              \$(document).ready(function() {
                \$(\"#owl-demo\").owlCarousel({
                  autoPlay: 3000,
                  items : 3,
                  itemsDesktop : [1200,3],
                  itemsDesktopSmall : [980,2],
                  itemsMobile : [480,1]
                });
              });
              </script>
            ";
        }
        // line 230
        echo "
      ";
        // line 231
        if ( !($context["truncate"] ?? null)) {
            // line 232
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "provider", array()))) {
                // line 233
                echo "        <div class=\"comments\" id=\"comments\">
          <h4>Comments:</h3>
          <div class=\"comments-content\">
            ";
                // line 236
                echo call_user_func_array($this->env->getFunction('jscomments')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "provider", array())));
                echo "
          </div>
        </div>
        ";
            }
            // line 240
            echo "
        ";
            // line 241
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 242
                echo "        <div class=\"comments\" id=\"comments\">
          <h4>";
                // line 243
                echo twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array()));
                echo " Comments:</h3>
          <div class=\"comments-content\">
            ";
                // line 245
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 245)->display(array_merge($context, array("page" => ($context["page"] ?? null))));
                // line 246
                echo "          </div>
        </div>
        ";
            }
            // line 249
            echo "
      ";
        }
        // line 251
        echo "    </div>
  </div>
</div>

";
        // line 255
        if (($context["show_prev_next"] ?? null)) {
            // line 256
            echo "<div class=\"blog-pager\" id=\"blog-pager\">
  ";
            // line 257
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 258
                echo "  <span id=\"blog-pager-newer-link\">
    <a class=\"blog-pager-newer-link\" href=\"";
                // line 259
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Newer Post</a>
  </span>
  ";
            }
            // line 262
            echo "
  ";
            // line 263
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 264
                echo "  <span id=\"blog-pager-older-link\">
    <a class=\"blog-pager-older-link\" href=\"";
                // line 265
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">Older Post <i class=\"fa fa-chevron-right\"></i></a>
  </span>
  ";
            }
            // line 268
            echo "  <a class=\"home-link\" href=\"";
            echo ($context["base_url_absolute"] ?? null);
            echo "\">Home</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  727 => 268,  721 => 265,  718 => 264,  716 => 263,  713 => 262,  707 => 259,  704 => 258,  702 => 257,  699 => 256,  697 => 255,  691 => 251,  687 => 249,  682 => 246,  680 => 245,  675 => 243,  672 => 242,  670 => 241,  667 => 240,  660 => 236,  655 => 233,  652 => 232,  650 => 231,  647 => 230,  629 => 214,  627 => 213,  619 => 207,  617 => 206,  614 => 205,  608 => 201,  601 => 197,  597 => 195,  591 => 193,  583 => 191,  581 => 190,  577 => 188,  573 => 186,  565 => 184,  563 => 183,  558 => 182,  556 => 181,  553 => 180,  550 => 179,  543 => 175,  539 => 173,  533 => 171,  525 => 169,  523 => 168,  519 => 166,  515 => 164,  509 => 162,  507 => 161,  502 => 160,  500 => 159,  497 => 158,  494 => 157,  492 => 156,  489 => 155,  487 => 154,  482 => 151,  479 => 150,  473 => 148,  471 => 147,  466 => 146,  463 => 145,  461 => 144,  449 => 137,  439 => 132,  429 => 127,  419 => 122,  411 => 117,  403 => 111,  400 => 110,  398 => 109,  393 => 108,  387 => 106,  385 => 105,  380 => 104,  377 => 103,  374 => 102,  371 => 101,  369 => 100,  364 => 99,  362 => 98,  358 => 96,  352 => 94,  349 => 93,  343 => 91,  340 => 90,  330 => 88,  327 => 87,  317 => 85,  315 => 84,  302 => 83,  297 => 80,  291 => 76,  287 => 74,  263 => 72,  246 => 71,  243 => 70,  241 => 69,  238 => 68,  235 => 67,  232 => 66,  226 => 64,  218 => 62,  215 => 61,  212 => 60,  206 => 58,  198 => 56,  195 => 55,  192 => 54,  190 => 53,  185 => 51,  180 => 48,  176 => 46,  172 => 44,  148 => 42,  131 => 41,  128 => 40,  126 => 39,  123 => 38,  120 => 37,  117 => 36,  111 => 34,  103 => 32,  100 => 31,  97 => 30,  91 => 28,  83 => 26,  80 => 25,  77 => 24,  75 => 23,  70 => 21,  66 => 19,  63 => 18,  55 => 16,  46 => 13,  40 => 11,  38 => 10,  35 => 9,  33 => 8,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not truncate %}
<link type=\"text/css\" rel=\"stylesheet\" href=\"{{ theme_url }}/css/item.css\" />
{% endif %}
<div class=\"post\">
  <div class=\"entry-container\">
    <div class=\"entry-content\">

      {% if page.header.link %}
      <h1 class=\"entry-title\">
        {% if page.header.continue_link is not sameas(false) %}
          <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
        {% endif %}
          <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
      </h1>
      {% else %}
      <h1 class=\"entry-title\"><a href=\"{{ page.url }}\">{{ page.title }}</a></h1>
      {% endif %}
      {% if truncate %}

        <div class=\"meta\">
          <div><i class=\"fa fa-clock-o\"></i> {{ page.date|date(config.system.pages.dateformat.long) }}</div>
          <div><i class=\"fa fa-user\"></i> <span style=\"color:#E74C3C\">
            {% if page.header.author.name or site.author.name %}
            {% if page.header.author.name %}
            {% if page.header.author.url %}
            <a href=\"{{ page.header.author.url }}\">{{ page.header.author.name }}</a>
            {% else %}
            {{ page.header.author.name }}
            {% endif %}
            {% else %}
            {% if site.author.url %}
            <a href=\"{{ site.author.url }}\">{{ site.author.name }}</a>
            {% else %}
            {{ site.author.name }}
            {% endif %}
            {% endif %}
            {% endif %}
          </span></div>
          {% if page.taxonomy.tag %}
          <div> <i class=\"fa fa-tags\"></i>
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ base_url }}/tag:{{ tag }}\" rel=\"tag\">{{ tag }}{% if not loop.last %}, {% endif %}</a>
            {% endfor %}
          </div>
          {% endif %}
        </div>
      {% else %}
      <div class=\"meta1\">
        <p>
          <small>
            <span><i class=\"fa fa-clock-o\"></i> {{ page.date|date(config.system.pages.dateformat.long) }}</span>
            <span><i class=\"fa fa-user\"></i>
              {% if page.header.author.name or site.author.name %}
              {% if page.header.author.name %}
              {% if page.header.author.url %}
              <a href=\"{{ page.header.author.url }}\">{{ page.header.author.name }}</a>
              {% else %}
              {{ page.header.author.name }}
              {% endif %}
              {% else %}
              {% if site.author.url %}
              <a href=\"{{ site.author.url }}\">{{ site.author.name }}</a>
              {% else %}
              {{ site.author.name }}
              {% endif %}
              {% endif %}
              {% endif %}
            </span>
            {% if page.taxonomy.tag %}
            <span> <i class=\"fa fa-tags\"></i>
              {% for tag in page.taxonomy.tag %}
              <a href=\"{{ base_url }}/tag:{{ tag }}\" rel=\"tag\">{{ tag }}{% if not loop.last %}, {% endif %}</a>
              {% endfor %}
            </span>
            {% endif %}
          </small>
        </p>
      </div>
      {% endif %}

      <div class=\"clear\"></div>

      <div class=\"{% if truncate %}entry-{% if page.header.youtube or page.header.soundcloud or page.header.vimeo %}video{% else %}image{% endif %}{% else %} resp_video{% endif %}\">
        {% if page.header.youtube %}
        <iframe src=\"{{ page.header.youtube }}?showinfo=0\" frameborder=\"0\" allowfullscreen style=\"width: 750px; height: 421.429px; {% if not truncate %}width: 680px;height: 392px;{% endif %}\"></iframe>
        {% endif %}
        {% if page.header.vimeo %}
        <iframe src=\"{{ page.header.vimeo }}\" frameborder=\"0\" allowfullscreen=\"\" data-aspectratio=\"0.5619047619047619\" style=\"width: 750px; height: 421.429px; {% if not truncate %}width: 680px;height: 392px;{% endif %}\"></iframe>
        {% endif %}
        {% if page.header.soundcloud %}
        <iframe width=\"100%\" height=\"403\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{{ page.header.soundcloud }}&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true&amp;buying=false\"></iframe>
        {% endif %}
        {% if page.media.images|first %}
          {{ page.media.images|first.cropZoom(750,422).html('','', 'thumb') }}
        {% endif %}
      </div>

            {% if page.header.continue_link is sameas(false) %}
            {{ page.content }}
            {% if not truncate %}
            {% set show_prev_next = true %}
            {% endif %}
            {% elseif truncate and page.summary != page.content %}
            {{ page.summary }}
            {% elseif truncate %}
            {{ page.content|truncate(550) }}
            {% else %}
            {{ page.content }}
            {% set show_prev_next = true %}
            {% endif %}

            <div class=\"entry-meta clearfix\">
              <div class=\"up_arrow\"></div>
              <div class=\"pull-right share-story-container\">
                <ul class=\"share-story\">
                  <li>
                    <a href=\"http://www.facebook.com/share.php?u={{ page.url(true) }}\" target=\"_blank\">
                      <i class=\"fa fa-facebook\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://twitter.com/home?status={{ page.title|replace({' ': \"%20\"}) }}-{{ page.url(true) }}\" target=\"_blank\">
                      <i class=\"fa fa-twitter\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://digg.com/submit?url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\" target=\"_blank\">
                      <i class=\"fa fa-digg\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://reddit.com/submit?url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\" target=\"_blank\">
                      <i class=\"fa fa-reddit\"></i>
                    </a>
                  </li>
                  <li>
                    <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url={{ page.url(true) }}&amp;title={{ page.title|replace({' ': \"%20\"}) }}\" target=\"_blank\">
                      <i class=\"fa fa-linkedin\"></i>
                    </a>
                  </li>
                </ul>
              </div>

              {% if page.header.continue_link is not sameas(false) %}
                {% if truncate and page.summary != page.content %}
                  <div class=\"pull-left\"><a href=\"{{ page.url }}\" class=\"read-more\">Continue Reading</a></div>
                {% elseif truncate %}
                  <div class=\"pull-left\"><a href=\"{{ page.url }}\" class=\"read-more\">Continue Reading</a></div>
                {% endif %}
              {% endif %}
              <div class=\"clear\"></div>
            </div>

            {% if not truncate %}
            <div class=\"author-meta box\">
              {% if page.header.author %}
              {% if page.header.author.logo or page.header.author.gravatar %}
              <div class=\"author-image\">
                {% if page.header.author.gravatar %}
                  <img src=\"http://www.gravatar.com/avatar/{{ page.header.author.gravatar|md5 }}?s=90\" class=\"avatar-author\" alt=\"Gravatar\"/>
                {% elseif page.header.author.logo  %}
                  <img src=\"{{ page.media.images[page.header.author.logo].url }}\" class=\"avatar-author\" />
                {% endif %}
              </div>
              {% endif %}
              <div class=\"author-body\">
                <h2 class=\"vcard author\">
                  {% if page.header.author.url %}
                  <a href=\"{{ page.header.author.url }}\" rel=\"author\">{{ page.header.author.name }}</a>
                  {% else %}
                  {{ page.header.author.name }}
                  {% endif %}
                </h2>
                <p>
                  {{ page.header.author.description }}
                </p>
              </div>
              {% else %}
              {% if site.author.logo or site.author.gravatar %}
              <div class=\"author-image\">
                {% if site.author.gravatar  %}
                  <img src=\"http://www.gravatar.com/avatar/{{ site.author.gravatar|md5 }}?s=90\" class=\"avatar-author\" alt=\"Gravatar\"/>
                {% elseif site.author.logo  %}
                  <img src=\"{{ theme_url }}/images/{{ site.author.logo }}\" class=\"avatar-author\" />
                {% endif %}
              </div>
              {% endif %}
              <div class=\"author-body\">
                <h2 class=\"vcard author\">
                  {% if site.author.url %}
                  <a href=\"{{ site.author.url }}\" rel=\"author\">{{ site.author.name }}</a>
                  {% else %}
                  {{ site.author.name }}
                  {% endif %}
                </h2>
                <p>
                  {{ site.author.description }}
                </p>
              </div>
              {% endif %}

              <div class=\"clear\"></div>
            </div>
            {% endif %}

            {% if not truncate %}
            <div class=\"related_posts\">
              <div id=\"related-posts\">
                <div class=\"title\">
                  <h4>Related Posts</h4>
                </div>
                <div class=\"carousel_related owl-carousel owl-theme\" id=\"owl-demo\">
                  {% include 'partials/relatedpages.html.twig' %}
                </div>
              </div>
              <div style=\"clear:both\"></div>
            </div>
            <script type='text/javascript'>
              \$(document).ready(function() {
                \$(\"#owl-demo\").owlCarousel({
                  autoPlay: 3000,
                  items : 3,
                  itemsDesktop : [1200,3],
                  itemsDesktopSmall : [980,2],
                  itemsMobile : [480,1]
                });
              });
              </script>
            {% endif %}

      {% if not truncate %}
        {% if config.plugins.jscomments.enabled and config.plugins.jscomments.provider %}
        <div class=\"comments\" id=\"comments\">
          <h4>Comments:</h3>
          <div class=\"comments-content\">
            {{ jscomments(config.plugins.jscomments.provider) }}
          </div>
        </div>
        {% endif %}

        {% if config.plugins.comments.enabled %}
        <div class=\"comments\" id=\"comments\">
          <h4>{{ grav.twig.comments|length }} Comments:</h3>
          <div class=\"comments-content\">
            {% include 'partials/comments.html.twig' with {'page': page} %}
          </div>
        </div>
        {% endif %}

      {% endif %}
    </div>
  </div>
</div>

{% if show_prev_next %}
<div class=\"blog-pager\" id=\"blog-pager\">
  {% if not page.isFirst %}
  <span id=\"blog-pager-newer-link\">
    <a class=\"blog-pager-newer-link\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Newer Post</a>
  </span>
  {% endif %}

  {% if not page.isLast %}
  <span id=\"blog-pager-older-link\">
    <a class=\"blog-pager-older-link\" href=\"{{ page.prevSibling.url }}\">Older Post <i class=\"fa fa-chevron-right\"></i></a>
  </span>
  {% endif %}
  <a class=\"home-link\" href=\"{{ base_url_absolute }}\">Home</a>
</div>
{% endif %}
", "partials/blog_item.html.twig", "/Applications/MAMP/htdocs/grav-skeleton/user/themes/pinpress/templates/partials/blog_item.html.twig");
    }
}
