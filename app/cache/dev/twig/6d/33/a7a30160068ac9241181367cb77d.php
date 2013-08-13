<?php

/* FTC56BlogBundle:Blog:view.html.twig */
class __TwigTemplate_6d33a7a30160068ac9241181367cb77d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FTC56BlogBundle::layout.html.twig");

        $this->blocks = array(
            'blog_title' => array($this, 'block_blog_title'),
            'blog_body' => array($this, 'block_blog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTC56BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_blog_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
    }

    // line 5
    public function block_blog_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
        echo "</h2>
\t<div class=\"muted text-right\">
\t\t<span class=\"glyphicon glyphicon-pencil\"></span> Ecrit le <time
\t\t\t\tdatetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "creation"), "Y/m/d"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "creation"), "d/m/Y"), "html", null, true);
        echo "</time>
\t\t                                                 par ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author"), "html", null, true);
        echo ".
\t\t";
        // line 11
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "modification")) {
            echo "<span class=\"glyphicon glyphicon-edit\"></span> Modifié le <time
\t\t\t\tdatetime=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "modification"), "Y/m/d"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "modification"), "d/m/Y"), "html", null, true);
            echo "</time>.";
        }
        // line 13
        echo "\t</div>

\t<p class=\"text-jutify\">
\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), "html", null, true);
        echo "
\t</p>

\t<p><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">Retourner à l'accueil</a></p>

\t<div class=\"row\">
\t";
        // line 22
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTHOR")) {
            // line 23
            echo "\t<div class=\"col-4\">
\t\t<div class=\"btn-group btn-group-justified\">
\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-warning\"><span
\t\t\t\t\t\tclass=\"glyphicon glyphicon-edit\"></span> Editer</a>
\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><span
\t\t\t\t\t\tclass=\"glyphicon glyphicon-remove-sign\"></span> Supprimer</a>
\t\t</div>
\t</div>

\t<div class=\"col-8 well well-small\">";
        } else {
            // line 33
            echo "\t\t<div class=\"col-12 well well-small\">";
        }
        // line 34
        echo "\t\t\t<span>Catégoreis :</span>
\t\t\t<span class=\"btn-group\">
\t\t\t";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories"), "count") > 0)) {
            // line 37
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 38
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categories_view", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
                echo "\"
\t\t\t\t\t   class=\"btn btn-small\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                echo "</a>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t";
        }
        echo "</span>
\t\t</div>
\t</div>

\t<hr />

\t<h3 class=\"text-center\" id=\"comment\">Commentaires</h3>
\t";
        // line 48
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comment")) > 0)) {
            // line 49
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comment"));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 50
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t";
        } else {
            // line 52
            echo "\t\t<p class=\"alert alert-info text-center\">Il n'y a pas d'article pour le moment !</p>
\t";
        }
        // line 54
        echo "
";
    }

    public function getTemplateName()
    {
        return "FTC56BlogBundle:Blog:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  153 => 51,  129 => 41,  84 => 23,  76 => 19,  70 => 16,  65 => 13,  146 => 33,  100 => 32,  81 => 16,  58 => 10,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 32,  135 => 53,  119 => 49,  102 => 33,  71 => 21,  67 => 15,  63 => 11,  59 => 12,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 1,  26 => 4,  93 => 27,  88 => 25,  78 => 23,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 52,  151 => 63,  142 => 49,  138 => 4,  136 => 56,  121 => 39,  117 => 44,  105 => 34,  91 => 27,  62 => 16,  49 => 8,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 14,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 47,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 16,  83 => 18,  74 => 15,  66 => 15,  55 => 11,  52 => 21,  50 => 10,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 51,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 42,  109 => 36,  106 => 36,  103 => 32,  99 => 27,  95 => 28,  92 => 21,  86 => 22,  82 => 22,  80 => 19,  73 => 19,  64 => 13,  60 => 12,  57 => 11,  54 => 11,  51 => 10,  48 => 13,  45 => 9,  42 => 14,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
