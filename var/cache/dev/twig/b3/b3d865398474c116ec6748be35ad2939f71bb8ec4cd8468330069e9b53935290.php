<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8a4cf1fb090a8f763fd87066ab0e24c55984b2913749932d4ad361d0327e0591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b78a5542d41e61b67d60dd94e005141c6b17fb53fac4fae70bbbe4a22b6da69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b78a5542d41e61b67d60dd94e005141c6b17fb53fac4fae70bbbe4a22b6da69->enter($__internal_6b78a5542d41e61b67d60dd94e005141c6b17fb53fac4fae70bbbe4a22b6da69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1b42e75615a1744b8a7d14d890c30ee0a582ab62f39796ba11a2bc4a916cc3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b42e75615a1744b8a7d14d890c30ee0a582ab62f39796ba11a2bc4a916cc3be->enter($__internal_1b42e75615a1744b8a7d14d890c30ee0a582ab62f39796ba11a2bc4a916cc3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b78a5542d41e61b67d60dd94e005141c6b17fb53fac4fae70bbbe4a22b6da69->leave($__internal_6b78a5542d41e61b67d60dd94e005141c6b17fb53fac4fae70bbbe4a22b6da69_prof);

        
        $__internal_1b42e75615a1744b8a7d14d890c30ee0a582ab62f39796ba11a2bc4a916cc3be->leave($__internal_1b42e75615a1744b8a7d14d890c30ee0a582ab62f39796ba11a2bc4a916cc3be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b2000d44ac63c04a11628205baf6b8334ad7ad80b79d856609adfbeb287ceb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2000d44ac63c04a11628205baf6b8334ad7ad80b79d856609adfbeb287ceb43->enter($__internal_b2000d44ac63c04a11628205baf6b8334ad7ad80b79d856609adfbeb287ceb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c8a08d726079ff57406324f5ffeee3577682a0c2a33740b12c852b3ec214fcc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a08d726079ff57406324f5ffeee3577682a0c2a33740b12c852b3ec214fcc0->enter($__internal_c8a08d726079ff57406324f5ffeee3577682a0c2a33740b12c852b3ec214fcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c8a08d726079ff57406324f5ffeee3577682a0c2a33740b12c852b3ec214fcc0->leave($__internal_c8a08d726079ff57406324f5ffeee3577682a0c2a33740b12c852b3ec214fcc0_prof);

        
        $__internal_b2000d44ac63c04a11628205baf6b8334ad7ad80b79d856609adfbeb287ceb43->leave($__internal_b2000d44ac63c04a11628205baf6b8334ad7ad80b79d856609adfbeb287ceb43_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\corpora360\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
