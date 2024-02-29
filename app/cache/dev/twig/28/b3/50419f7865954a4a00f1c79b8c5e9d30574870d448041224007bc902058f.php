<?php

/* ARSOFTDemoBundle:MisVistas:listarArticulos.html.twig */
class __TwigTemplate_28b350419f7865954a4a00f1c79b8c5e9d30574870d448041224007bc902058f extends Twig_Template
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
        // line 2
        echo "<head>
    <title>Practica 2</title>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
</head>

<body>
<h1>Listado de Articulos</h1>

<!-- Apartado para el nombre del alumno y el nombre de la universidad -->
<div class=\"informacion-academica\">
    <p>Nombre del Alumno: Emma Pérez García</p>
    <p>Asignatura: Arquitectura del software</p>
    <p>Nombre de la Universidad: Universidad Pontificia de Salamanca</p>
</div>

<!-- Hacer el listado en formato tabla -->

<table>
<tr>
    <!--Por cambiar-->
    <!--<th>ID</th>-->
    <th>Título</th>
    <th>Acciones</th>
</tr>
";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) ? $context["articulos"] : $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 27
            echo "<tr>
    <!--<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
            echo "</td>-->
    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
            echo "</a></td>
    <!--<td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arsoft_demo_practica2_tarea2", array("id" => $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
            echo "</a></td> -->
    <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arsoft_demo_practica2_tarea2", array("id" => $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"))), "html", null, true);
            echo "\">Ver Artículo</a></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>

<!-- Hacer el listado en formato lista -->
<!--
<ul>
    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) ? $context["articulos"] : $this->getContext($context, "articulos")));
        foreach ($context['_seq'] as $context["_key"] => $context["articulo"]) {
            // line 40
            echo "    <li>
        <strong>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
            echo "</strong> - 
        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("arsoft_demo_practica2_tarea2", array("id" => $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"))), "html", null, true);
            echo "\">Ver Artículo</a>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</ul> -->
    
</body>
";
    }

    public function getTemplateName()
    {
        return "ARSOFTDemoBundle:MisVistas:listarArticulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 45,  96 => 42,  92 => 41,  89 => 40,  85 => 39,  78 => 34,  69 => 31,  63 => 30,  59 => 29,  55 => 28,  52 => 27,  48 => 26,  23 => 4,  19 => 2,);
    }
}
