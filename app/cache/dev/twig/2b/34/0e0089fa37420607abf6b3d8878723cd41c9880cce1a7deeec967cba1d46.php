<?php

/* WebTestBundle:EmailTemp:email.html.twig */
class __TwigTemplate_2b340e0089fa37420607abf6b3d8878723cd41c9880cce1a7deeec967cba1d46 extends Twig_Template
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
        echo "<strong>Параметры:</strong><br>
";
        // line 2
        if (array_key_exists("params", $context)) {
            // line 3
            echo "<ul>
    ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 5
                echo "        <li>";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</ul>
";
        }
        // line 9
        echo "<br><br>
<strong>Подпись сообщения:</strong><br>
";
        // line 11
        if (array_key_exists("content", $context)) {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "WebTestBundle:EmailTemp:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  50 => 11,  46 => 9,  42 => 7,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
