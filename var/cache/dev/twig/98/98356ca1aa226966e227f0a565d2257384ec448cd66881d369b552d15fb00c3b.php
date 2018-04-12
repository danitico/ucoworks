<?php

/* security/register.html.twig */
class __TwigTemplate_3ba7f8604bd0737a498d41486c58ee278260347e5538668e7fc097f91ad217c6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/login.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 8
        echo "    <div class=\"ui middle aligned center aligned grid\">
        <div class=\"column\">
            <h2 class=\"ui teal image header\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" class=\"image\">
                <div class=\"content\">
                    UCOworks
                </div>
            </h2>

            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', array("attr" => array("class" => "large")));
        echo "
                <div class=\"ui stacked segment\">
                    ";
        // line 19
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "vars", array()), "errors", array()), "form", array()), "getErrors", array(0 => true), "method"))) {
            // line 20
            echo "                        <div class=\"ui negative message\">
                            <ul class=\"list\">
                                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "vars", array()), "errors", array()), "form", array()), "getErrors", array(0 => true), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 23
                echo "                                    <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", array()), "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                            </ul>
                        </div>
                    ";
        }
        // line 28
        echo "                    <div class=\"ui error message\"></div>

                    <div class=\"field\">
                        <div class=\"ui left icon input\">
                            <i class=\"user icon\"></i>
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "username", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->source); })()), "username", array()), "vars", array()), "label", array()))));
        echo "
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"ui left icon input\">
                            <i class=\"mail icon\"></i>
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "email", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "email", array()), "vars", array()), "label", array()))));
        echo "
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"ui left icon input\">
                            <i class=\"key icon\"></i>
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "plainPassword", array()), "first", array()), "vars", array()), "label", array()))));
        echo "
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"ui left icon input\">
                            <i class=\"key icon\"></i>
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "plainPassword", array()), "second", array()), "vars", array()), "label", array()))));
        echo "
                        </div>
                    </div>
                    <div class=\"ui fluid large teal submit button\">Registrarse</div>
                </div>
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "

            <div class=\"ui message\">
                ¿Ya tienes cuenta? <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Iniciar sesión</a>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registrar usuario";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/login.js"), "html", null, true);
        echo "\"></script>

    <script !src=\"\">
        \$(document)
            .ready(function() {
                \$('.ui.form')
                    .on('blur')
                    .form({
                        fields: {
                            register_user_username: {
                                rules: [
                                    {
                                        type: 'empty',
                                        prompt: 'Introduzca un nombre de usuario'
                                    }
                                ]
                            },
                            register_user_email: {
                                rules: [
                                    {
                                        type: 'email',
                                        prompt: 'Introduzca una dirección de correo válida'
                                    }
                                ]
                            },
                            register_user_plainPassword_first: {
                                rules: [
                                    {
                                        type: 'minLength[5]',
                                        prompt: 'Introduzca una clave de 5 caracteres como mínimo'
                                    }
                                ]
                            },
                            register_user_plainPassword_second: {
                                rules: [
                                    {
                                        type: 'match[register_user_plainPassword_first]',
                                        prompt: 'Las contraseñas no coinciden'
                                    }
                                ]
                            }
                        }
                    })
                ;
            })
        ;
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 69,  203 => 68,  185 => 66,  169 => 59,  163 => 56,  155 => 51,  146 => 45,  137 => 39,  128 => 33,  121 => 28,  116 => 25,  107 => 23,  103 => 22,  99 => 20,  97 => 19,  92 => 17,  83 => 11,  78 => 8,  69 => 7,  56 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/login.css') }}\">
{% endblock %}

{% block container %}
    <div class=\"ui middle aligned center aligned grid\">
        <div class=\"column\">
            <h2 class=\"ui teal image header\">
                <img src=\"{{ asset('img/logo.png') }}\" class=\"image\">
                <div class=\"content\">
                    UCOworks
                </div>
            </h2>

            {{ form_start(form, {attr: {class: 'large' } }) }}
                <div class=\"ui stacked segment\">
                    {% if form.vars.errors.form.getErrors(true) is not empty %}
                        <div class=\"ui negative message\">
                            <ul class=\"list\">
                                {% for error in form.vars.errors.form.getErrors(true) %}
                                    <li>{{ error.message }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    {% endif %}
                    <div class=\"ui error message\"></div>

                    <div class=\"field\">
                        <div class=\"ui left icon input\">
                            <i class=\"user icon\"></i>
                            {{ form_widget(form.username, { attr: { placeholder: form.username.vars.label } }) }}
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"ui left icon input\">
                            <i class=\"mail icon\"></i>
                            {{ form_widget(form.email, { attr: { placeholder: form.email.vars.label } }) }}
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"ui left icon input\">
                            <i class=\"key icon\"></i>
                            {{ form_widget(form.plainPassword.first, { attr: { placeholder: form.plainPassword.first.vars.label } }) }}
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"ui left icon input\">
                            <i class=\"key icon\"></i>
                            {{ form_widget(form.plainPassword.second, { attr: { placeholder: form.plainPassword.second.vars.label } }) }}
                        </div>
                    </div>
                    <div class=\"ui fluid large teal submit button\">Registrarse</div>
                </div>
            {{ form_end(form) }}

            <div class=\"ui message\">
                ¿Ya tienes cuenta? <a href=\"{{ path('login') }}\">Iniciar sesión</a>
            </div>
        </div>
    </div>

{% endblock %}

{% block title %}Registrar usuario{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('build/js/login.js') }}\"></script>

    <script !src=\"\">
        \$(document)
            .ready(function() {
                \$('.ui.form')
                    .on('blur')
                    .form({
                        fields: {
                            register_user_username: {
                                rules: [
                                    {
                                        type: 'empty',
                                        prompt: 'Introduzca un nombre de usuario'
                                    }
                                ]
                            },
                            register_user_email: {
                                rules: [
                                    {
                                        type: 'email',
                                        prompt: 'Introduzca una dirección de correo válida'
                                    }
                                ]
                            },
                            register_user_plainPassword_first: {
                                rules: [
                                    {
                                        type: 'minLength[5]',
                                        prompt: 'Introduzca una clave de 5 caracteres como mínimo'
                                    }
                                ]
                            },
                            register_user_plainPassword_second: {
                                rules: [
                                    {
                                        type: 'match[register_user_plainPassword_first]',
                                        prompt: 'Las contraseñas no coinciden'
                                    }
                                ]
                            }
                        }
                    })
                ;
            })
        ;
    </script>
{% endblock %}
", "security/register.html.twig", "/home/daniel/Desktop/SEGUNDO_CARRERA/ucoworks/ucoworks/templates/security/register.html.twig");
    }
}
