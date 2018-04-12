<?php

/* _task/_table.html.twig */
class __TwigTemplate_d882e753a90eb4194da5309590b9049351b4b0e8f231523a7320cbd155b858ab extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_task/_table.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_task/_table.html.twig"));

        // line 1
        echo "<table class=\"ui selectable table\">
    <thead>
    <tr>
        <th>Título</th>
        <th>Asignatura</th>
        <th class=\"collapsing\">Fecha entrega</th>
        <th class=\"collapsing\">Acciones</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new Twig_Error_Runtime('Variable "tasks" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 12
            echo "        <tr>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "subject", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["task"], "deadlineAt", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "deadlineAt", array()), "Y-m-d")) : ("")), "html", null, true);
            echo "</td>
            <td>
                <div class=\"ui buttons\">
                    ";
            // line 18
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("CHECK", $context["task"])) {
                // line 19
                echo "                        <a class=\"ui icon button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_check", array("id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", array()))), "html", null, true);
                echo "\"><i class=\"check icon\"></i></a>
                    ";
            } else {
                // line 21
                echo "                        <a class=\"ui green icon button\"><i class=\"check icon\"></i></a>
                    ";
            }
            // line 23
            echo "                    <a class=\"ui icon button\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_show", array("id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", array()))), "html", null, true);
            echo "\"><i class=\"eye icon\"></i></a>
                </div>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "        <tr>
            <td colspan=\"3\">No hay tareas</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_task/_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  86 => 28,  75 => 23,  71 => 21,  65 => 19,  63 => 18,  57 => 15,  53 => 14,  49 => 13,  46 => 12,  41 => 11,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"ui selectable table\">
    <thead>
    <tr>
        <th>Título</th>
        <th>Asignatura</th>
        <th class=\"collapsing\">Fecha entrega</th>
        <th class=\"collapsing\">Acciones</th>
    </tr>
    </thead>
    <tbody>
    {% for task in tasks %}
        <tr>
            <td>{{ task.title }}</td>
            <td>{{ task.subject }}</td>
            <td>{{ task.deadlineAt ? task.deadlineAt|date('Y-m-d') : '' }}</td>
            <td>
                <div class=\"ui buttons\">
                    {% if is_granted('CHECK', task) %}
                        <a class=\"ui icon button\" href=\"{{ path('task_check', {'id': task.id}) }}\"><i class=\"check icon\"></i></a>
                    {% else %}
                        <a class=\"ui green icon button\"><i class=\"check icon\"></i></a>
                    {% endif %}
                    <a class=\"ui icon button\" href=\"{{ path('task_show', {'id': task.id}) }}\"><i class=\"eye icon\"></i></a>
                </div>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"3\">No hay tareas</td>
        </tr>
    {% endfor %}
    </tbody>
</table>", "_task/_table.html.twig", "/home/daniel/Desktop/SEGUNDO_CARRERA/ucoworks/ucoworks/templates/_task/_table.html.twig");
    }
}
