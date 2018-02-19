<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cf7f2dc5c96922ad62d86c4a8e9a9c0ef8d0fb8287bda5926cb1fc22c0129c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf7f2dc5c96922ad62d86c4a8e9a9c0ef8d0fb8287bda5926cb1fc22c0129c6->enter($__internal_1cf7f2dc5c96922ad62d86c4a8e9a9c0ef8d0fb8287bda5926cb1fc22c0129c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_27a95fb89a36a01be188900665e1ff3cc243b040de9feab4a63e32923b53f35f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a95fb89a36a01be188900665e1ff3cc243b040de9feab4a63e32923b53f35f->enter($__internal_27a95fb89a36a01be188900665e1ff3cc243b040de9feab4a63e32923b53f35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cf7f2dc5c96922ad62d86c4a8e9a9c0ef8d0fb8287bda5926cb1fc22c0129c6->leave($__internal_1cf7f2dc5c96922ad62d86c4a8e9a9c0ef8d0fb8287bda5926cb1fc22c0129c6_prof);

        
        $__internal_27a95fb89a36a01be188900665e1ff3cc243b040de9feab4a63e32923b53f35f->leave($__internal_27a95fb89a36a01be188900665e1ff3cc243b040de9feab4a63e32923b53f35f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5a2120fdd3c1eaf681776f7dd5878b97d2b10d7c94356e891023a20a45f2c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a2120fdd3c1eaf681776f7dd5878b97d2b10d7c94356e891023a20a45f2c46->enter($__internal_d5a2120fdd3c1eaf681776f7dd5878b97d2b10d7c94356e891023a20a45f2c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d258fceee577b50c2785c33a1471ecb7d1ca08b2e0537bece8ef3a0ac3d9b3f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d258fceee577b50c2785c33a1471ecb7d1ca08b2e0537bece8ef3a0ac3d9b3f3->enter($__internal_d258fceee577b50c2785c33a1471ecb7d1ca08b2e0537bece8ef3a0ac3d9b3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d258fceee577b50c2785c33a1471ecb7d1ca08b2e0537bece8ef3a0ac3d9b3f3->leave($__internal_d258fceee577b50c2785c33a1471ecb7d1ca08b2e0537bece8ef3a0ac3d9b3f3_prof);

        
        $__internal_d5a2120fdd3c1eaf681776f7dd5878b97d2b10d7c94356e891023a20a45f2c46->leave($__internal_d5a2120fdd3c1eaf681776f7dd5878b97d2b10d7c94356e891023a20a45f2c46_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68134187710aed5fef610eb77efd08178345b85d495aa680bd1d13f9a73dced0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68134187710aed5fef610eb77efd08178345b85d495aa680bd1d13f9a73dced0->enter($__internal_68134187710aed5fef610eb77efd08178345b85d495aa680bd1d13f9a73dced0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_962e792092c840893d877da48473156665ecfe0965c8806bcd54b3352657c222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962e792092c840893d877da48473156665ecfe0965c8806bcd54b3352657c222->enter($__internal_962e792092c840893d877da48473156665ecfe0965c8806bcd54b3352657c222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_962e792092c840893d877da48473156665ecfe0965c8806bcd54b3352657c222->leave($__internal_962e792092c840893d877da48473156665ecfe0965c8806bcd54b3352657c222_prof);

        
        $__internal_68134187710aed5fef610eb77efd08178345b85d495aa680bd1d13f9a73dced0->leave($__internal_68134187710aed5fef610eb77efd08178345b85d495aa680bd1d13f9a73dced0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47c2de436c29dcbcd0372917c06f21a466dd24638a95e725185f526b933f2f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c2de436c29dcbcd0372917c06f21a466dd24638a95e725185f526b933f2f67->enter($__internal_47c2de436c29dcbcd0372917c06f21a466dd24638a95e725185f526b933f2f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa9423cf59cab25ede17affefa83306aaf507710f92ff52b0c11ada2845f84e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9423cf59cab25ede17affefa83306aaf507710f92ff52b0c11ada2845f84e1->enter($__internal_aa9423cf59cab25ede17affefa83306aaf507710f92ff52b0c11ada2845f84e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aa9423cf59cab25ede17affefa83306aaf507710f92ff52b0c11ada2845f84e1->leave($__internal_aa9423cf59cab25ede17affefa83306aaf507710f92ff52b0c11ada2845f84e1_prof);

        
        $__internal_47c2de436c29dcbcd0372917c06f21a466dd24638a95e725185f526b933f2f67->leave($__internal_47c2de436c29dcbcd0372917c06f21a466dd24638a95e725185f526b933f2f67_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\corpora360\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
