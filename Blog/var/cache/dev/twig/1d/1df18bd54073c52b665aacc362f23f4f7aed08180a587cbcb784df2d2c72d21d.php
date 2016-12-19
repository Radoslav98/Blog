<?php

/* base.html.twig */
class __TwigTemplate_00c437b138390b6d384e2da798accce79425d66ff5341fb61db340708a0f6920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf86609b5b0abf6777659efdc414f655ce1aead39f0c29c70cb691c2e115a005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf86609b5b0abf6777659efdc414f655ce1aead39f0c29c70cb691c2e115a005->enter($__internal_bf86609b5b0abf6777659efdc414f655ce1aead39f0c29c70cb691c2e115a005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 78
        echo "
<div class=\"container body-container\">
    ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "</div>

";
        // line 89
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "
</body>
</html>
";
        
        $__internal_bf86609b5b0abf6777659efdc414f655ce1aead39f0c29c70cb691c2e115a005->leave($__internal_bf86609b5b0abf6777659efdc414f655ce1aead39f0c29c70cb691c2e115a005_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_506fca5b01d9861ed69c4c253808fa74aa9e9a1ef1fb6b3968c2b3d9e474aabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506fca5b01d9861ed69c4c253808fa74aa9e9a1ef1fb6b3968c2b3d9e474aabe->enter($__internal_506fca5b01d9861ed69c4c253808fa74aa9e9a1ef1fb6b3968c2b3d9e474aabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoftUni Blog";
        
        $__internal_506fca5b01d9861ed69c4c253808fa74aa9e9a1ef1fb6b3968c2b3d9e474aabe->leave($__internal_506fca5b01d9861ed69c4c253808fa74aa9e9a1ef1fb6b3968c2b3d9e474aabe_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5629435387947ee059a2e5dd8a066fb816f797764626a9d5713c13dffb995fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5629435387947ee059a2e5dd8a066fb816f797764626a9d5713c13dffb995fd->enter($__internal_b5629435387947ee059a2e5dd8a066fb816f797764626a9d5713c13dffb995fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_b5629435387947ee059a2e5dd8a066fb816f797764626a9d5713c13dffb995fd->leave($__internal_b5629435387947ee059a2e5dd8a066fb816f797764626a9d5713c13dffb995fd_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7e03d4856f25b25543cb0ce274100036c8830ecbb97b8d356da2cbff398da095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e03d4856f25b25543cb0ce274100036c8830ecbb97b8d356da2cbff398da095->enter($__internal_7e03d4856f25b25543cb0ce274100036c8830ecbb97b8d356da2cbff398da095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_7e03d4856f25b25543cb0ce274100036c8830ecbb97b8d356da2cbff398da095->leave($__internal_7e03d4856f25b25543cb0ce274100036c8830ecbb97b8d356da2cbff398da095_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_9e9ae140cc62860ba3cc486394e565147ab7c3403e99cf1a6fe2077768f556e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9ae140cc62860ba3cc486394e565147ab7c3403e99cf1a6fe2077768f556e1->enter($__internal_9e9ae140cc62860ba3cc486394e565147ab7c3403e99cf1a6fe2077768f556e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 37
            echo "                        ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
                // line 38
                echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"true\">Admin <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"";
                // line 41
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_all");
                echo "\">Users</a></li>
                            </ul>
                        </li>
                    ";
            }
            // line 45
            echo "                            <li>
                                <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_create");
            echo "\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profile");
            echo "\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                    Logout
                                </a>
                            </li>
                        ";
        } else {
            // line 61
            echo "                            <li>
                                <a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
            echo "\">
                                    LOGIN
                                </a>
                            </li>
                        ";
        }
        // line 72
        echo "                    </ul>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_9e9ae140cc62860ba3cc486394e565147ab7c3403e99cf1a6fe2077768f556e1->leave($__internal_9e9ae140cc62860ba3cc486394e565147ab7c3403e99cf1a6fe2077768f556e1_prof);

    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        $__internal_725102746dd0018e994dd02f54e0450b0fa866b0ba6142bbe902718e984b955d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725102746dd0018e994dd02f54e0450b0fa866b0ba6142bbe902718e984b955d->enter($__internal_725102746dd0018e994dd02f54e0450b0fa866b0ba6142bbe902718e984b955d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 81
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 83
        $this->displayBlock('main', $context, $blocks);
        // line 84
        echo "            </div>
        </div>
    ";
        
        $__internal_725102746dd0018e994dd02f54e0450b0fa866b0ba6142bbe902718e984b955d->leave($__internal_725102746dd0018e994dd02f54e0450b0fa866b0ba6142bbe902718e984b955d_prof);

    }

    // line 83
    public function block_main($context, array $blocks = array())
    {
        $__internal_33f20a070dc452ad1b05e6da2b3db1b7182246026b87ada68a40a070bcd963c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f20a070dc452ad1b05e6da2b3db1b7182246026b87ada68a40a070bcd963c8->enter($__internal_33f20a070dc452ad1b05e6da2b3db1b7182246026b87ada68a40a070bcd963c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_33f20a070dc452ad1b05e6da2b3db1b7182246026b87ada68a40a070bcd963c8->leave($__internal_33f20a070dc452ad1b05e6da2b3db1b7182246026b87ada68a40a070bcd963c8_prof);

    }

    // line 89
    public function block_footer($context, array $blocks = array())
    {
        $__internal_109455c46fdc72c09994a3b5db9a4b37784b6ad97b13df5c13796f74bbd9d058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109455c46fdc72c09994a3b5db9a4b37784b6ad97b13df5c13796f74bbd9d058->enter($__internal_109455c46fdc72c09994a3b5db9a4b37784b6ad97b13df5c13796f74bbd9d058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 90
        echo "    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
";
        
        $__internal_109455c46fdc72c09994a3b5db9a4b37784b6ad97b13df5c13796f74bbd9d058->leave($__internal_109455c46fdc72c09994a3b5db9a4b37784b6ad97b13df5c13796f74bbd9d058_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5052193ecc9be8bcd66efecc320f5a9126901267387b669cf0a9419d9b9abd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5052193ecc9be8bcd66efecc320f5a9126901267387b669cf0a9419d9b9abd9c->enter($__internal_5052193ecc9be8bcd66efecc320f5a9126901267387b669cf0a9419d9b9abd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5052193ecc9be8bcd66efecc320f5a9126901267387b669cf0a9419d9b9abd9c->leave($__internal_5052193ecc9be8bcd66efecc320f5a9126901267387b669cf0a9419d9b9abd9c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 101,  292 => 100,  288 => 99,  283 => 98,  277 => 97,  265 => 90,  259 => 89,  248 => 83,  239 => 84,  237 => 83,  233 => 81,  227 => 80,  215 => 72,  207 => 67,  199 => 62,  196 => 61,  188 => 56,  180 => 51,  172 => 46,  169 => 45,  162 => 41,  157 => 38,  154 => 37,  152 => 36,  139 => 26,  133 => 22,  127 => 21,  116 => 19,  107 => 14,  102 => 13,  96 => 12,  84 => 11,  74 => 103,  72 => 97,  69 => 96,  67 => 89,  63 => 87,  61 => 80,  57 => 78,  55 => 21,  50 => 19,  43 => 16,  41 => 12,  37 => 11,  30 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}SoftUni Blog{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('blog_index') }}\" class=\"navbar-brand\">SOFTUNI BLOG</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        {% if app.user %}
                        {% if app.user.isAdmin() %}
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"true\">Admin <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"{{ path('admin_users_all') }}\">Users</a></li>
                            </ul>
                        </li>
                    {% endif %}
                            <li>
                                <a href=\"{{ path('article_create') }}\">
                                    Create Article
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('user_profile') }}\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_logout') }}\">
                                    Logout
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('user_register') }}\">
                                    REGISTER
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('security_login') }}\">
                                    LOGIN
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>

{% block footer %}
    <footer>
        <div class=\"container modal-footer\">
            <p>&copy; 2016 - Software University Foundation</p>
        </div>
    </footer>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
