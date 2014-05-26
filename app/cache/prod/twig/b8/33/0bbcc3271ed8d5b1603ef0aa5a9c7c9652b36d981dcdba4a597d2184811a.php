<?php

/* WebTestBundle::layout.html.twig */
class __TwigTemplate_b8330bbcc3271ed8d5b1603ef0aa5a9c7c9652b36d981dcdba4a597d2184811a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/test/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/test/css/jumbotron-narrow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"container\">
      <div class=\"header\">
        <ul class=\"nav nav-pills pull-right\">
          <li ";
        // line 12
        if ((array_key_exists("page", $context) && ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "welcome"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_welcome");
        echo "\">Главная</a></li>
          <li ";
        // line 13
        if ((array_key_exists("page", $context) && ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "about"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_about");
        echo "\">О нас</a></li>
          <li ";
        // line 14
        if ((array_key_exists("page", $context) && ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == "contact"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Контакты</a></li>
        </ul>
        <h3 class=\"text-muted\">Pegas Touristik</h3>
      </div>
            
        <div class=\"row marketing\">
        ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "        </div>
        
      <div class=\"footer\">
        <p>&copy; 2014 Pegas Touristik</p>
      </div>

    </div> <!-- /container -->
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "WebTestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  83 => 21,  81 => 20,  68 => 14,  60 => 13,  52 => 12,  47 => 9,  44 => 8,  33 => 4,  30 => 3,  93 => 28,  82 => 22,  76 => 21,  72 => 20,  66 => 19,  62 => 17,  56 => 14,  50 => 11,  43 => 8,  41 => 7,  38 => 5,  35 => 5,  29 => 3,);
    }
}
