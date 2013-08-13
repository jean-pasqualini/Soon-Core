<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_5ecdca9a0dd9921f94efe4f4542752b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email")), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  34 => 6,  160 => 54,  153 => 51,  129 => 41,  84 => 23,  76 => 19,  70 => 16,  65 => 13,  146 => 33,  100 => 32,  81 => 16,  58 => 10,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 32,  135 => 53,  119 => 49,  102 => 33,  71 => 21,  67 => 15,  63 => 11,  59 => 12,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 1,  26 => 4,  93 => 27,  88 => 25,  78 => 23,  46 => 8,  27 => 4,  44 => 7,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 52,  151 => 63,  142 => 49,  138 => 4,  136 => 56,  121 => 39,  117 => 44,  105 => 34,  91 => 27,  62 => 16,  49 => 8,  24 => 4,  25 => 3,  19 => 2,  79 => 18,  72 => 14,  69 => 25,  47 => 9,  40 => 8,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 47,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 16,  83 => 18,  74 => 15,  66 => 15,  55 => 11,  52 => 21,  50 => 10,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 51,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 42,  109 => 36,  106 => 36,  103 => 32,  99 => 27,  95 => 28,  92 => 21,  86 => 22,  82 => 22,  80 => 19,  73 => 19,  64 => 13,  60 => 11,  57 => 11,  54 => 10,  51 => 9,  48 => 8,  45 => 9,  42 => 6,  39 => 6,  36 => 5,  33 => 4,  30 => 7,);
    }
}
