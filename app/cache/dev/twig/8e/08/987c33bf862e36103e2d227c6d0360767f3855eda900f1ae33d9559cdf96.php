<?php

/* DvdWorldWebsiteBundle:Default:cart.html.twig */
class __TwigTemplate_8e08987c33bf862e36103e2d227c6d0360767f3855eda900f1ae33d9559cdf96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DvdWorldWebsiteBundle::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'carousel' => array($this, 'block_carousel'),
            'genreList' => array($this, 'block_genreList'),
            'movieBlock' => array($this, 'block_movieBlock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DvdWorldWebsiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Cart";
    }

    // line 4
    public function block_carousel($context, array $blocks = array())
    {
        // line 5
        echo "    <h3>Cart</h3>
    <br />
    <br />
";
    }

    // line 9
    public function block_genreList($context, array $blocks = array())
    {
    }

    // line 10
    public function block_movieBlock($context, array $blocks = array())
    {
        // line 11
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/css/form/view.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/js/form/view.js"), "html", null, true);
        echo "\"></script>
    <style type=\"text/css\">
        .tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #ebab3a;border-collapse: collapse; }
        .tftable th {font-size:12px;background-color:#e6983b;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;text-align:center;}
        .tftable tr {background-color:#ffffff;}

        #contactForm {
            display: none;
        }
        .wrapper {
            text-align: right;
        }

        .button {
            position: absolute;
            top: 50%;
        }

    </style>
    <script>
        \$(document).ready(function(){
            \$(\"#orderButton\").click(function(){
                \$(\"#contactForm\").slideDown(\"slow\");
                \$('html, body').animate({
                    scrollTop: \$(\"#contactForm\").offset().top
                }, 1500);
            });
        });
    </script>
<div class=\"container\">

<table class=\"table\" >
    <thead>
        <tr>
            <th>Picture</th>
            <th>Title</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movieSets"]) ? $context["movieSets"] : $this->getContext($context, "movieSets")));
        foreach ($context['_seq'] as $context["_key"] => $context["movieSet"]) {
            // line 53
            echo "             <tr>
                 <td>
                     <img width=\"50\" height=\"75\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getImgUrl", array())), "html", null, true);
            echo "\">
                 </td>
                 <td>
                     <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("singleMovie", array("id" => $this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getTitle", array()), "html", null, true);
            echo "</a>
                 </td>
                 <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getPrice", array()), "html", null, true);
            echo " zl</td>
                 <td>
                    <a href=\"#\"><img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/delete-item.png"), "html", null, true);
            echo "\"
                         onclick=\"eraseCookie('";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["movieSet"], "nameOfCookie", array()), "html", null, true);
            echo "')\"
                            width=\"28\" height=\"28\"/></a>
                 </td>
             </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movieSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        <tr>
            <td colspan=\"2\"><b>Total price: </b></td>
            <td><b>";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : $this->getContext($context, "totalPrice")), "html", null, true);
        echo " zl</b></td>
            <td></td>
        </tr>
    </tbody>
    </table>
    <br />
    <div class=\"wrappe\" style=\"margin-left: 81.5%\">
        <button id=\"orderButton\" class=\"internalButton\"  type=\"button\" ";
        // line 77
        if ((twig_length_filter($this->env, (isset($context["movieSets"]) ? $context["movieSets"] : $this->getContext($context, "movieSets"))) == 0)) {
            echo "disabled";
        }
        echo ">Next</button>
    </div>
    </div>


    <div id=\"contactForm\">
    <img id=\"top\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/form/top.png"), "html", null, true);
        echo "\" alt=\"\">
    <div id=\"form_container\">

        <form method=\"POST\" action=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("movieOrder");
        echo "\">
            <h4 align=\"center\">Orders:</h4>
                <table>
                    <tr>
                        <th>Title</th>
                        <th>Date of order</th>
                        <th>Date of return</th>
                        <th>Price</th>
                    </tr>
                    ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movieSets"]) ? $context["movieSets"] : $this->getContext($context, "movieSets")));
        foreach ($context['_seq'] as $context["_key"] => $context["movieSet"]) {
            // line 96
            echo "                    <tr>
                        <td width=\"100\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getTitle", array()), "html", null, true);
            echo "</td>
                        <td width=\"150\">";
            // line 98
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "h:i:s d/m/Y"), "html", null, true);
            echo "</td>
                        <td width=\"150\">";
            // line 99
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+3 day"), "h:i:s d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getPrice", array()), "html", null, true);
            echo " zl.</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movieSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </table>
                <p>-------------------------------------------------------------------------------------------------</p>
                <b>Total price:   ";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : $this->getContext($context, "totalPrice")), "html", null, true);
        echo " zl </b><br />
                <input type=\"hidden\" name=\"movies_id\" value=\"
                ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movieSets"]) ? $context["movieSets"] : $this->getContext($context, "movieSets")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["movieSet"]) {
            // line 108
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["movieSet"], "movie", array()), "getId", array()), "html", null, true);
            echo "
                    ";
            // line 109
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                // line 110
                echo "                        ;
                    ";
            }
            // line 112
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movieSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                \">
                <input style=\"margin-left: 73%\" class=\"internalButton\" type=\"submit\" value=\"Order all\" onclick=\"deleteAllCookies()\">
        </form>
    </div>
    <img id=\"bottom\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dvdworld/images/form/bottom.png"), "html", null, true);
        echo "\" alt=\"\">
    </div>
";
    }

    public function getTemplateName()
    {
        return "DvdWorldWebsiteBundle:Default:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 117,  266 => 113,  252 => 112,  248 => 110,  246 => 109,  241 => 108,  224 => 107,  219 => 105,  215 => 103,  206 => 100,  202 => 99,  198 => 98,  194 => 97,  191 => 96,  187 => 95,  175 => 86,  169 => 83,  158 => 77,  148 => 70,  144 => 68,  133 => 63,  129 => 62,  124 => 60,  117 => 58,  111 => 55,  107 => 53,  103 => 52,  60 => 12,  55 => 11,  52 => 10,  47 => 9,  40 => 5,  37 => 4,  31 => 3,);
    }
}
