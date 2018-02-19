<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_684ffddd21d5b9d3e8a15b9f5ca3ecf1def222b10048330c555f938c17138a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684ffddd21d5b9d3e8a15b9f5ca3ecf1def222b10048330c555f938c17138a54->enter($__internal_684ffddd21d5b9d3e8a15b9f5ca3ecf1def222b10048330c555f938c17138a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_82ffd7690fb9d709e30c03dc9bd6e97de8884cd7a33121d15537fee45291657d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ffd7690fb9d709e30c03dc9bd6e97de8884cd7a33121d15537fee45291657d->enter($__internal_82ffd7690fb9d709e30c03dc9bd6e97de8884cd7a33121d15537fee45291657d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_684ffddd21d5b9d3e8a15b9f5ca3ecf1def222b10048330c555f938c17138a54->leave($__internal_684ffddd21d5b9d3e8a15b9f5ca3ecf1def222b10048330c555f938c17138a54_prof);

        
        $__internal_82ffd7690fb9d709e30c03dc9bd6e97de8884cd7a33121d15537fee45291657d->leave($__internal_82ffd7690fb9d709e30c03dc9bd6e97de8884cd7a33121d15537fee45291657d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_884195c1feb26d968ffe8dfc22429108dd9b5943e9121220f1eed1c1da3be3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884195c1feb26d968ffe8dfc22429108dd9b5943e9121220f1eed1c1da3be3c1->enter($__internal_884195c1feb26d968ffe8dfc22429108dd9b5943e9121220f1eed1c1da3be3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f26c272368ab52a2f1f1dec2180876b29f34d26564591ba79787c82190be300e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26c272368ab52a2f1f1dec2180876b29f34d26564591ba79787c82190be300e->enter($__internal_f26c272368ab52a2f1f1dec2180876b29f34d26564591ba79787c82190be300e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f26c272368ab52a2f1f1dec2180876b29f34d26564591ba79787c82190be300e->leave($__internal_f26c272368ab52a2f1f1dec2180876b29f34d26564591ba79787c82190be300e_prof);

        
        $__internal_884195c1feb26d968ffe8dfc22429108dd9b5943e9121220f1eed1c1da3be3c1->leave($__internal_884195c1feb26d968ffe8dfc22429108dd9b5943e9121220f1eed1c1da3be3c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8062d4ee4a4f62a58ad2aef9f8f155b61ddf1728ab9963e29b9a549827b61608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8062d4ee4a4f62a58ad2aef9f8f155b61ddf1728ab9963e29b9a549827b61608->enter($__internal_8062d4ee4a4f62a58ad2aef9f8f155b61ddf1728ab9963e29b9a549827b61608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0800beaa524e7bc6434609dc16e10aeeeacaafa90611b0783e1cc903d110937f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0800beaa524e7bc6434609dc16e10aeeeacaafa90611b0783e1cc903d110937f->enter($__internal_0800beaa524e7bc6434609dc16e10aeeeacaafa90611b0783e1cc903d110937f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0800beaa524e7bc6434609dc16e10aeeeacaafa90611b0783e1cc903d110937f->leave($__internal_0800beaa524e7bc6434609dc16e10aeeeacaafa90611b0783e1cc903d110937f_prof);

        
        $__internal_8062d4ee4a4f62a58ad2aef9f8f155b61ddf1728ab9963e29b9a549827b61608->leave($__internal_8062d4ee4a4f62a58ad2aef9f8f155b61ddf1728ab9963e29b9a549827b61608_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c323fa613ac87ff78d07479b480672b8ddc005f76d8b3a3c909f5cc2ed0c647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c323fa613ac87ff78d07479b480672b8ddc005f76d8b3a3c909f5cc2ed0c647->enter($__internal_1c323fa613ac87ff78d07479b480672b8ddc005f76d8b3a3c909f5cc2ed0c647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_92996e71fe18595e2973b87330b9251322144e45b23e9bac86b90c4b30d89d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92996e71fe18595e2973b87330b9251322144e45b23e9bac86b90c4b30d89d2c->enter($__internal_92996e71fe18595e2973b87330b9251322144e45b23e9bac86b90c4b30d89d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_92996e71fe18595e2973b87330b9251322144e45b23e9bac86b90c4b30d89d2c->leave($__internal_92996e71fe18595e2973b87330b9251322144e45b23e9bac86b90c4b30d89d2c_prof);

        
        $__internal_1c323fa613ac87ff78d07479b480672b8ddc005f76d8b3a3c909f5cc2ed0c647->leave($__internal_1c323fa613ac87ff78d07479b480672b8ddc005f76d8b3a3c909f5cc2ed0c647_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\corpora360\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
