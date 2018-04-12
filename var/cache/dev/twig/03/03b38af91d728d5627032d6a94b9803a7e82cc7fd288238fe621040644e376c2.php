<?php

/* _subject/_table.html.twig */
class __TwigTemplate_af9d7620e2cdc10362a8e530a52f6836be005cb633bbd7fb01073dc5dc563b39 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_subject/_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_subject/_table.html.twig"));

        // line 1
        echo "<table class=\"ui selectable table\">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Curso</th>
        <th class=\"collapsing\">Acciones</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new Twig_Error_Runtime('Variable "subjects" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 11
            echo "        <tr>
            <td>
                ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "name", array()), "html", null, true);
            echo "
                ";
            // line 14
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("UNENROLL", $context["subject"])) {
                // line 15
                echo "                    <div class=\"ui green horizontal label\">Matriculado</div>
                ";
            }
            // line 17
            echo "            </td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "year", array()), "html", null, true);
            echo "</td>
            <td>
                <div class=\"ui buttons\">
                    ";
            // line 21
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ENROLL", $context["subject"])) {
                // line 22
                echo "                        <a class=\"ui icon button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subject_enroll", array("id" => twig_get_attribute($this->env, $this->source, $context["subject"], "id", array()))), "html", null, true);
                echo "\"><i class=\"plus icon\"></i></a>
                    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("UNENROLL",             // line 23
$context["subject"])) {
                // line 24
                echo "                        <a class=\"ui icon button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subject_unenroll", array("id" => twig_get_attribute($this->env, $this->source, $context["subject"], "id", array()))), "html", null, true);
                echo "\"><i class=\"minus icon\"></i></a>
                    ";
            }
            // line 26
            echo "                    <a class=\"ui icon button\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subject_show", array("id" => twig_get_attribute($this->env, $this->source, $context["subject"], "id", array()))), "html", null, true);
            echo "\"><i class=\"eye icon\"></i></a>
                </div>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "        <tr>
            <td colspan=\"3\">No se han encontrado</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_subject/_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  94 => 31,  83 => 26,  77 => 24,  75 => 23,  70 => 22,  68 => 21,  62 => 18,  59 => 17,  55 => 15,  53 => 14,  49 => 13,  45 => 11,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"ui selectable table\">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Curso</th>
        <th class=\"collapsing\">Acciones</th>
    </tr>
    </thead>
    <tbody>
    {% for subject in subjects %}
        <tr>
            <td>
                {{ subject.name }}
                {% if is_granted('UNENROLL', subject) %}
                    <div class=\"ui green horizontal label\">Matriculado</div>
                {% endif %}
            </td>
            <td>{{ subject.year }}</td>
            <td>
                <div class=\"ui buttons\">
                    {% if is_granted('ENROLL', subject) %}
                        <a class=\"ui icon button\" href=\"{{ path('subject_enroll', {'id': subject.id}) }}\"><i class=\"plus icon\"></i></a>
                    {% elseif is_granted('UNENROLL', subject) %}
                        <a class=\"ui icon button\" href=\"{{ path('subject_unenroll', {'id': subject.id}) }}\"><i class=\"minus icon\"></i></a>
                    {% endif %}
                    <a class=\"ui icon button\" href=\"{{ path('subject_show', {'id': subject.id}) }}\"><i class=\"eye icon\"></i></a>
                </div>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"3\">No se han encontrado</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "_subject/_table.html.twig", "/home/daniel/Desktop/SEGUNDO_CARRERA/ucoworks/ucoworks/templates/_subject/_table.html.twig");
    }
}
