<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_412930169cab5812e4c6f9ba98c814a7b0977534048d3ddfcdd45ed6e523db62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7722a333155205bf86b7536d2b1b18fbb58c0981b96eb263a40be83946e39c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7722a333155205bf86b7536d2b1b18fbb58c0981b96eb263a40be83946e39c21->enter($__internal_7722a333155205bf86b7536d2b1b18fbb58c0981b96eb263a40be83946e39c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f9c5161bd615f3a3eab4782bbaf3134e327c733070b3e5b43cb91dbd1af5e2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c5161bd615f3a3eab4782bbaf3134e327c733070b3e5b43cb91dbd1af5e2aa->enter($__internal_f9c5161bd615f3a3eab4782bbaf3134e327c733070b3e5b43cb91dbd1af5e2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7722a333155205bf86b7536d2b1b18fbb58c0981b96eb263a40be83946e39c21->leave($__internal_7722a333155205bf86b7536d2b1b18fbb58c0981b96eb263a40be83946e39c21_prof);

        
        $__internal_f9c5161bd615f3a3eab4782bbaf3134e327c733070b3e5b43cb91dbd1af5e2aa->leave($__internal_f9c5161bd615f3a3eab4782bbaf3134e327c733070b3e5b43cb91dbd1af5e2aa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_79e4374f9cf5c089b011f4dd3f61a76d77c75d00223137217831cc3e9ba7df9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e4374f9cf5c089b011f4dd3f61a76d77c75d00223137217831cc3e9ba7df9d->enter($__internal_79e4374f9cf5c089b011f4dd3f61a76d77c75d00223137217831cc3e9ba7df9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cbefef56418bca484f7aab2efaca7e96a10f95fef0f27414c525e8aea0e250af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbefef56418bca484f7aab2efaca7e96a10f95fef0f27414c525e8aea0e250af->enter($__internal_cbefef56418bca484f7aab2efaca7e96a10f95fef0f27414c525e8aea0e250af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cbefef56418bca484f7aab2efaca7e96a10f95fef0f27414c525e8aea0e250af->leave($__internal_cbefef56418bca484f7aab2efaca7e96a10f95fef0f27414c525e8aea0e250af_prof);

        
        $__internal_79e4374f9cf5c089b011f4dd3f61a76d77c75d00223137217831cc3e9ba7df9d->leave($__internal_79e4374f9cf5c089b011f4dd3f61a76d77c75d00223137217831cc3e9ba7df9d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cce51e8bbc285382f50c86d78dfc4a88fd9bfab7a6263e6aef2fec9fb800260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cce51e8bbc285382f50c86d78dfc4a88fd9bfab7a6263e6aef2fec9fb800260->enter($__internal_6cce51e8bbc285382f50c86d78dfc4a88fd9bfab7a6263e6aef2fec9fb800260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_20f864ed12500b8abc154efde2d506d836a727c95908083237657970e16ef129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f864ed12500b8abc154efde2d506d836a727c95908083237657970e16ef129->enter($__internal_20f864ed12500b8abc154efde2d506d836a727c95908083237657970e16ef129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_20f864ed12500b8abc154efde2d506d836a727c95908083237657970e16ef129->leave($__internal_20f864ed12500b8abc154efde2d506d836a727c95908083237657970e16ef129_prof);

        
        $__internal_6cce51e8bbc285382f50c86d78dfc4a88fd9bfab7a6263e6aef2fec9fb800260->leave($__internal_6cce51e8bbc285382f50c86d78dfc4a88fd9bfab7a6263e6aef2fec9fb800260_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_563975e2adb96a3f3cd293f7eeedc4a96637fc1fc5869b1471e3a40c7a8bca0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563975e2adb96a3f3cd293f7eeedc4a96637fc1fc5869b1471e3a40c7a8bca0f->enter($__internal_563975e2adb96a3f3cd293f7eeedc4a96637fc1fc5869b1471e3a40c7a8bca0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f752412a141e30df484fea8b76c1077babf6568bef18ff17e87a6a56bd424a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f752412a141e30df484fea8b76c1077babf6568bef18ff17e87a6a56bd424a74->enter($__internal_f752412a141e30df484fea8b76c1077babf6568bef18ff17e87a6a56bd424a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f752412a141e30df484fea8b76c1077babf6568bef18ff17e87a6a56bd424a74->leave($__internal_f752412a141e30df484fea8b76c1077babf6568bef18ff17e87a6a56bd424a74_prof);

        
        $__internal_563975e2adb96a3f3cd293f7eeedc4a96637fc1fc5869b1471e3a40c7a8bca0f->leave($__internal_563975e2adb96a3f3cd293f7eeedc4a96637fc1fc5869b1471e3a40c7a8bca0f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\corpora360\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
