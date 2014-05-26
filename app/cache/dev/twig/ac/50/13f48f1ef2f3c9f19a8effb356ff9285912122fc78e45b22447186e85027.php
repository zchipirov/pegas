<?php

/* WebTestBundle:Welcome:about.html.twig */
class __TwigTemplate_ac5013f48f1ef2f3c9f19a8effb356ff9285912122fc78e45b22447186e85027 extends Twig_Template
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
        echo "О компании. Тестовый проект";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-lg-13\">
        <h3>О компании</h3>
        <br>
        <h4>Общая информация о компании</h4>
        <p align=\"justify\">
        PEGAS Touristik - один из лидеров российской туристической отрасли и одна из крупнейших международных туристических компаний.
        История компании началась в последней четверти ХХ века.
        PEGAS Touristik сегодня – это современная универсальная туристическая компания,
        которая предлагает широкий спектр услуг для всех групп клиентов, активно участвует в социальной и экономической жизни страны.
        </p>
        <ul>
            <li>Мы отправляем на отдых из 50 городов РФ подробнее</li>
            <li>Мы предлагаем отдых на лучших курортах и отелях (2500 отелей) в 22 странах мира</li>
            <li>Мы работаем с ведущими авиакомпаниями России подробнее</li>
            <li>Мы организуем групповые, индивидуальные, корпоративные, спортивные и VIP туры</li>
            <li>Мы предлагаем 7 дней в неделю, 24 часа в сутки онлайн заказ туров и билетов на регулярные рейсы по всему миру как аккредитованный агент IATA</li>
            <li>Мы оказываем качественное обслуживание в более чем 930 фирменных офисах продаж в 261 городах</li>
        </ul>
       
        <h4>Миссия и цели</h4>
        <p align=\"justify\">
        Мы работаем, чтобы сделать PEGAS Touristik лучшим туроператором для своих клиентов. 
        Мы хотим, чтобы каждому человеку, который находится на сайте компании, приходит в офисы PEGAS Touristik, 
        звонит в наш call-центр, пользуется услугами компании, нравилось быть клиентом PEGAS Touristik. А для этого необходимо:
        </p>
        <ul>
            <li>предоставлять качественное обслуживания в любом месте и в любое время</li>
            <li>сделать все услуги PEGAS Touristik, в соответствии с современными стандартами сервиса</li>
            <li>уделять внимание пожеланиям клиентов и оказывать максимальную заботу</li>
            <li>стараться, чтобы каждое наше решение принималось в интересах наших клиентов</li>
            <li>предлагать именно то, что нужно клиенту, и предвосхищать его желания</li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebTestBundle:Welcome:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
