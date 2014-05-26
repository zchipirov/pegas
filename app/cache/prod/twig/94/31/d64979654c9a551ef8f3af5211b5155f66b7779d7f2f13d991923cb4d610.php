<?php

/* WebTestBundle:Welcome:index.html.twig */
class __TwigTemplate_9431d64979654c9a551ef8f3af5211b5155f66b7779d7f2f13d991923cb4d610 extends Twig_Template
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
        echo "Главная страница. Тестовый проект";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"jumbotron\">
        <h1>Приемная Pegas</h1>
        <p class=\"lead\">Вы можете отправить нам письмо и в кратнчайшие сроки сы ответим на Ваши вопросы!</p>
        <p><a class=\"btn btn-lg btn-success\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\" role=\"button\">отправить письмо</a></p>
    </div>

    <div class=\"col-lg-6\">
        <h4>Общая информация</h4>
        <p>PEGAS Touristik - один из лидеров российской туристической отрасли и одна из крупнейших международных туристических компаний. История компании началась в последней четверти ХХ века.</p>
    </div>

    <div class=\"col-lg-6\">
      <h4>Миссия и цели</h4>
        <p>Мы работаем, чтобы сделать PEGAS Touristik лучшим туроператором для своих клиентов.</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebTestBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
