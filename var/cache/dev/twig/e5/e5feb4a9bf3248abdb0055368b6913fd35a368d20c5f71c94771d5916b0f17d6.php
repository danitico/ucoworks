<?php

/* @HarmonyUi/menu/semantic_2_menu.html.twig */
class __TwigTemplate_9e8ee527f1284a5938a175adc7a3efeeac32ece03f07982f533253258fed700a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("KnpMenuBundle::menu.html.twig", "@HarmonyUi/menu/semantic_2_menu.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'embeddedMenuElement' => array($this, 'block_embeddedMenuElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'submenuElement' => array($this, 'block_submenuElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HarmonyUi/menu/semantic_2_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HarmonyUi/menu/semantic_2_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        echo "  ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->source); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 4, $this->source); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->source); })()), "displayChildren", array()))) {
            // line 5
            echo "    ";
            $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "@HarmonyUi/menu/semantic_2_menu.html.twig", 5);
            // line 7
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "bare", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 7, $this->source); })()), "bare", array()))) {
                // line 8
                $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 8, $this->source); })()), array("bare" => false, "root" => false));
                // line 9
                echo "      ";
                $this->displayBlock("children", $context, $blocks);
            } else {
                // line 11
                echo "      ";
                // line 12
                $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["listAttributes"] ?? null), "class", array(), "array", true, true)) ? (array(0 => twig_get_attribute($this->env, $this->source, (isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 12, $this->source); })()), "class", array(), "array"))) : (array()));
                // line 13
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 13, $this->source); })()), array(0 => "menu"));
                // line 14
                if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "root", array(), "any", true, true) || twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 14, $this->source); })()), "root", array()))) {
                    // line 15
                    $context["classes"] = twig_array_merge(array(0 => "ui"), (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 15, $this->source); })()));
                    // line 16
                    $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 16, $this->source); })()), array("root" => false));
                }
                // line 19
                $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 19, $this->source); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 19, $this->source); })()), " ")));
                // line 20
                echo "      <div";
                echo $context["knp_menu"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 20, $this->source); })()));
                echo ">
        ";
                // line 21
                $this->displayBlock("children", $context, $blocks);
                echo "
      </div>";
            }
            // line 24
            echo "  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_item($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 28
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->source); })()), "displayed", array())) {
            // line 29
            echo "    ";
            // line 30
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->source); })()), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->source); })()), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 31
            if (twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 31, $this->source); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 31, $this->source); })())), "method")) {
                // line 32
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 32, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 32, $this->source); })()), "currentClass", array()), 1 => "active"));
            } elseif (twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 33, $this->source); })()), "isAncestor", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 33, $this->source); })()), "matchingDepth", array())), "method")) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 34, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 34, $this->source); })()), "ancestorClass", array())));
            }
            // line 36
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 36, $this->source); })()), "actsLikeFirst", array())) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 37, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 37, $this->source); })()), "firstClass", array())));
            }
            // line 39
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->source); })()), "actsLikeLast", array())) {
                // line 40
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 40, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 40, $this->source); })()), "lastClass", array())));
            }
            // line 42
            echo "
    ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->source); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 44, $this->source); })()), "depth", array()) === 0))) {
                // line 45
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 45, $this->source); })()), "branch_class", array())) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 45, $this->source); })()), "displayChildren", array()))) {
                    // line 46
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 46, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 46, $this->source); })()), "branch_class", array())));
                }
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 48
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 48, $this->source); })()), "leaf_class", array()))) {
                // line 49
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 49, $this->source); })()), array(0 => twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 49, $this->source); })()), "leaf_class", array())));
            }
            // line 52
            $context["attributes"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 52, $this->source); })()), "attributes", array());
            // line 53
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 53, $this->source); })()))) {
                // line 54
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 54, $this->source); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 54, $this->source); })()), " ")));
            }
            // line 56
            echo "
    ";
            // line 58
            $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "@HarmonyUi/menu/semantic_2_menu.html.twig", 58);
            // line 59
            if (((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 59, $this->source); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 59, $this->source); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 59, $this->source); })()), "displayChildren", array()))) {
                // line 60
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extras", array(), "any", false, true), "submenu", array(), "array", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 60, $this->source); })()), "extras", array()), "submenu", array(), "array"))) {
                    // line 61
                    echo "        ";
                    $this->displayBlock("submenuElement", $context, $blocks);
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 62
($context["item"] ?? null), "extras", array(), "any", false, true), "dropdown", array(), "array", true, true) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 62, $this->source); })()), "extras", array()), "dropdown", array(), "array"))) {
                    // line 63
                    echo "        ";
                    $this->displayBlock("embeddedMenuElement", $context, $blocks);
                } else {
                    // line 65
                    echo "        ";
                    $this->displayBlock("dropdownElement", $context, $blocks);
                }
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 67
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 67, $this->source); })()), "uri", array())) && ( !twig_get_attribute($this->env, $this->source, (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 67, $this->source); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 67, $this->source); })())), "method") || twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 67, $this->source); })()), "currentAsLink", array())))) {
                // line 68
                echo "      ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 70
                echo "      ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 72
            echo "  ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 76
        echo "  ";
        ob_start();
        // line 77
        echo "    ";
        $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "@HarmonyUi/menu/semantic_2_menu.html.twig", 77);
        // line 78
        echo "
    ";
        // line 79
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", array(), "array", true, true)) ? (array(0 => twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 79, $this->source); })()), "class", array(), "array"))) : (array()));
        // line 80
        echo "    ";
        $context["classes"] = twig_array_merge(array(0 => "ui"), (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 80, $this->source); })()));
        // line 81
        echo "    ";
        $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 81, $this->source); })()), array(0 => "dropdown item"));
        // line 82
        echo "    ";
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 82, $this->source); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 82, $this->source); })()), " ")));
        // line 83
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 84
        echo "
  <div";
        // line 85
        echo $context["knp_menu"]->macro_attributes((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 85, $this->source); })()));
        echo ">
    ";
        // line 86
        $this->displayBlock("label", $context, $blocks);
        echo "
    <i class=\"dropdown icon\"></i>";
        // line 90
        $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 90, $this->source); })()), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 90, $this->source); })()), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
        // line 91
        $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 91, $this->source); })()), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 91, $this->source); })()), "level", array()))));
        // line 92
        $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 92, $this->source); })()), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 92, $this->source); })()), " ")));
        // line 93
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        echo "
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_embeddedMenuElement($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "embeddedMenuElement"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "embeddedMenuElement"));

        // line 98
        echo "  ";
        $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "@HarmonyUi/menu/semantic_2_menu.html.twig", 98);
        // line 99
        echo "
  ";
        // line 101
        $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->source); })()), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->source); })()), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
        // line 102
        $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 102, $this->source); })()), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 102, $this->source); })()), "level", array()))));
        // line 103
        $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 103, $this->source); })()), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 103, $this->source); })()), " ")));
        // line 104
        echo "  ";
        $this->displayBlock("list", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 108
        echo "  ";
        ob_start();
        // line 109
        echo "    ";
        $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "@HarmonyUi/menu/semantic_2_menu.html.twig", 109);
        // line 110
        echo "
    ";
        // line 111
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", array(), "array", true, true)) ? (array(0 => twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 111, $this->source); })()), "class", array(), "array"))) : (array()));
        // line 112
        echo "    ";
        $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 112, $this->source); })()), array(0 => "item"));
        // line 113
        echo "    ";
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 113, $this->source); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 113, $this->source); })()), " ")));
        // line 114
        echo "
    <a href=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 115, $this->source); })()), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->macro_attributes((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 115, $this->source); })()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 120
        echo "  ";
        ob_start();
        // line 121
        echo "    ";
        $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "@HarmonyUi/menu/semantic_2_menu.html.twig", 121);
        // line 122
        echo "
    ";
        // line 123
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", array(), "array", true, true)) ? (array(0 => twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 123, $this->source); })()), "class", array(), "array"))) : (array()));
        // line 124
        echo "    ";
        $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 124, $this->source); })()), array(0 => "item"));
        // line 125
        echo "    ";
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 125, $this->source); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 125, $this->source); })()), " ")));
        // line 126
        echo "
    <div";
        // line 127
        echo $context["knp_menu"]->macro_attributes((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 127, $this->source); })()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_submenuElement($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenuElement"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submenuElement"));

        // line 132
        echo "  ";
        ob_start();
        // line 133
        echo "    ";
        $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "@HarmonyUi/menu/semantic_2_menu.html.twig", 133);
        // line 134
        echo "
    ";
        // line 135
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", array(), "array", true, true)) ? (array(0 => twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 135, $this->source); })()), "class", array(), "array"))) : (array()));
        // line 136
        echo "    ";
        $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 136, $this->source); })()), array(0 => "item"));
        // line 137
        echo "    ";
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 137, $this->source); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 137, $this->source); })()), " ")));
        // line 138
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 139
        echo "
  <div";
        // line 140
        echo $context["knp_menu"]->macro_attributes((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 140, $this->source); })()));
        echo ">
    ";
        // line 141
        $this->displayBlock("label", $context, $blocks);
        echo "

    ";
        // line 144
        $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 144, $this->source); })()), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 144, $this->source); })()), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
        // line 145
        $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 145, $this->source); })()), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 145, $this->source); })()), "level", array()))));
        // line 146
        $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 146, $this->source); })()), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 146, $this->source); })()), " ")));
        // line 147
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        echo "
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@HarmonyUi/menu/semantic_2_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 147,  441 => 146,  439 => 145,  437 => 144,  432 => 141,  428 => 140,  425 => 139,  422 => 138,  419 => 137,  416 => 136,  414 => 135,  411 => 134,  408 => 133,  405 => 132,  396 => 131,  381 => 127,  378 => 126,  375 => 125,  372 => 124,  370 => 123,  367 => 122,  364 => 121,  361 => 120,  352 => 119,  335 => 115,  332 => 114,  329 => 113,  326 => 112,  324 => 111,  321 => 110,  318 => 109,  315 => 108,  306 => 107,  293 => 104,  291 => 103,  289 => 102,  287 => 101,  284 => 99,  281 => 98,  272 => 97,  258 => 93,  256 => 92,  254 => 91,  252 => 90,  248 => 86,  244 => 85,  241 => 84,  238 => 83,  235 => 82,  232 => 81,  229 => 80,  227 => 79,  224 => 78,  221 => 77,  218 => 76,  209 => 75,  198 => 72,  194 => 70,  190 => 68,  188 => 67,  184 => 65,  180 => 63,  178 => 62,  175 => 61,  173 => 60,  171 => 59,  169 => 58,  166 => 56,  163 => 54,  161 => 53,  159 => 52,  156 => 49,  154 => 48,  151 => 46,  149 => 45,  147 => 44,  144 => 42,  141 => 40,  139 => 39,  136 => 37,  134 => 36,  131 => 34,  129 => 33,  127 => 32,  125 => 31,  123 => 30,  121 => 29,  118 => 28,  109 => 27,  98 => 24,  93 => 21,  88 => 20,  86 => 19,  83 => 16,  81 => 15,  79 => 14,  77 => 13,  75 => 12,  73 => 11,  69 => 9,  67 => 8,  65 => 7,  62 => 5,  59 => 4,  50 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'KnpMenuBundle::menu.html.twig' %}

{% block list %}
  {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import 'knp_menu.html.twig' as knp_menu %}

    {%- if options.bare is defined and options.bare %}
      {%- set options = options|merge({'bare': false, 'root': false}) %}
      {{ block('children') }}
    {%- else %}
      {# Add Semantic UI classes to the list element #}
      {%- set classes = listAttributes['class'] is defined ? [listAttributes['class']] : [] %}
      {%- set classes = classes|merge(['menu']) %}
      {%- if options.root is not defined or options.root %}
        {%- set classes = ['ui']|merge(classes) %}
        {%- set options = options|merge({'root': false}) %}
      {%- endif %}

      {%- set listAttributes = listAttributes|merge({'class': classes|join(' ')}) %}
      <div{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
      </div>
    {%- endif %}
  {% endif %}
{% endblock %}

{% block item %}
  {% if item.displayed %}
    {# Build the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
      {%- set classes = classes|merge([options.currentClass, 'active']) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
      {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
      {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
      {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {%- if item.hasChildren and options.depth is not same as(0) %}
      {%- if options.branch_class is not empty and item.displayChildren %}
        {%- set classes = classes|merge([options.branch_class]) %}
      {%- endif %}
    {%- elseif options.leaf_class is not empty %}
      {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
      {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}

    {# Display the item #}
    {%- import 'knp_menu.html.twig' as knp_menu %}
    {%- if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
      {%- if item.extras['submenu'] is defined and item.extras['submenu'] %}
        {{ block('submenuElement') }}
      {%- elseif item.extras['dropdown'] is defined and not item.extras['dropdown'] %}
        {{ block('embeddedMenuElement') }}
      {%- else %}
        {{ block('dropdownElement') }}
      {%- endif %}
    {%- elseif item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
      {{ block('linkElement') }}
    {%- else %}
      {{ block('spanElement') }}
    {%- endif %}
  {% endif %}
{% endblock %}

{% block dropdownElement %}
  {% spaceless %}
    {% import 'knp_menu.html.twig' as knp_menu %}

    {% set classes = attributes['class'] is defined ? [attributes['class']] : [] %}
    {% set classes = ['ui']|merge(classes) %}
    {% set classes = classes|merge(['dropdown item']) %}
    {% set attributes = attributes|merge({'class': classes|join(' ')}) %}
  {% endspaceless %}

  <div{{ knp_menu.attributes(attributes) }}>
    {{ block('label') }}
    <i class=\"dropdown icon\"></i>

    {#- Render the list of children #}
    {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
    {{ block('list') }}
  </div>
{% endblock %}

{% block embeddedMenuElement %}
  {% import 'knp_menu.html.twig' as knp_menu %}

  {# Render the list of children #}
  {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
  {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
  {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
  {{ block('list') }}
{% endblock %}

{% block linkElement %}
  {% spaceless %}
    {% import 'knp_menu.html.twig' as knp_menu %}

    {% set classes = attributes['class'] is defined ? [attributes['class']] : [] %}
    {% set classes = classes|merge(['item']) %}
    {% set attributes = attributes|merge({'class': classes|join(' ')}) %}

    <a href=\"{{ item.uri }}\"{{ knp_menu.attributes(attributes) }}>{{ block('label') }}</a>
  {% endspaceless %}
{% endblock %}

{% block spanElement %}
  {% spaceless %}
    {% import 'knp_menu.html.twig' as knp_menu %}

    {% set classes = attributes['class'] is defined ? [attributes['class']] : [] %}
    {% set classes = classes|merge(['item']) %}
    {% set attributes = attributes|merge({'class': classes|join(' ')}) %}

    <div{{ knp_menu.attributes(attributes) }}>{{ block('label') }}</div>
  {% endspaceless %}
{% endblock %}

{% block submenuElement %}
  {% spaceless %}
    {% import 'knp_menu.html.twig' as knp_menu %}

    {% set classes = attributes['class'] is defined ? [attributes['class']] : [] %}
    {% set classes = classes|merge(['item']) %}
    {% set attributes = attributes|merge({'class': classes|join(' ')}) %}
  {% endspaceless %}

  <div{{ knp_menu.attributes(attributes) }}>
    {{ block('label') }}

    {# Render the list of children #}
    {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
    {{ block('list') }}
  </div>
{% endblock %}
", "@HarmonyUi/menu/semantic_2_menu.html.twig", "/home/daniel/Desktop/SEGUNDO_CARRERA/ucoworks/ucoworks/vendor/harmony-project/ui-bundle/Resources/views/menu/semantic_2_menu.html.twig");
    }
}
