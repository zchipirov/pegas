<?php

/* WebTestBundle:Welcome:contact.html.twig */
class __TwigTemplate_1598766dede088288b5d39b2d00a07279f10bab31bad401c7eb91f6035e726ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebTestBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebTestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Контакты. Тестовый проект";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-lg-13\">
        ";
        // line 7
        if ((array_key_exists("message", $context) && ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) != ""))) {
            // line 8
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</div>
            
            <div class=\"col-lg-6\">
                <a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("_contact");
            echo "\" class=\"btn btn-primary\" role=\"button\">Отправить новое</a>
            </div>
            <div class=\"col-lg-6\">
                <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("_welcome");
            echo "\" class=\"btn btn-primary\" role=\"button\">Вернуться на главную</a>
            </div>
        ";
        } else {
            // line 17
            echo "        <h3><span class=\"glyphicon glyphicon-envelope\"></span> Напишите нам</h3>
        <br>
        <form action=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("_contact");
            echo "\" method=\"POST\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " style=\"width: 40%;\">
            ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            ";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label', array("label" => "Заголовок"));
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            ";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'label', array("label" => "Сообщение"));
            echo " ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            <br>

            <input type=\"submit\" value=\"Отправить\" class=\"form-control\" />
        </form>
        ";
        }
        // line 28
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "WebTestBundle:Welcome:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  82 => 22,  76 => 21,  72 => 20,  66 => 19,  62 => 17,  56 => 14,  50 => 11,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
