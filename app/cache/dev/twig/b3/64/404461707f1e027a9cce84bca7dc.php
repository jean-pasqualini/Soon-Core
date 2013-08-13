<?php

/* FTC56BlogBundle:Blog:index.html.twig */
class __TwigTemplate_b364404461707f1e027a9cce84bca7dc extends Twig_Template
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
        echo "Accueil";
    }

    // line 5
    public function block_blog_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list_articles"]) ? $context["list_articles"] : $this->getContext($context, "list_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "\t\t<div class=\"well well-small\">
\t\t\t<h2 class='blog-header'><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</a>
\t\t\t\t<small>
\t\t\t\t\t<span class=\"glyphicon glyphicon-pencil\"></span> Ecrit le <time
\t\t\t\t\t\t\tdatetime=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "creation"), "Y/m/d"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "creation"), "d/m/Y"), "html", null, true);
            echo "</time>
\t\t\t\t\t                            par ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author"), "html", null, true);
            echo ".
\t\t\t\t\t";
            // line 13
            if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "modification")) {
                echo "<i class=\"icon-edit\"></i> Modifié le <time
\t\t\t\t\t\t\tdatetime=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "modification"), "Y/m/d"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "modification"), "d/m/Y"), "html", null, true);
                echo "</time>.";
            }
            // line 15
            echo "\t\t\t\t</small>
\t\t\t</h2>

\t\t\t<p class=\"\">
\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), "html", null, true);
            echo "
\t\t\t</p>

\t\t\t<p class=\"text-right\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "#comment\">Affciher les commentaires (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comment")), "html", null, true);
            echo ")</a></p>
\t\t</div>
\t\t<hr />

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "FTC56BlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  86 => 22,  80 => 19,  74 => 15,  68 => 14,  64 => 13,  60 => 12,  54 => 11,  46 => 8,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
