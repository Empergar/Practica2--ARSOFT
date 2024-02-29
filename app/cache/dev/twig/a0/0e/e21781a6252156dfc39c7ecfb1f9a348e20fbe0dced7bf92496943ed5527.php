<?php

/* ARSOFTDemoBundle:MisVistas:articuloId.html.twig */
class __TwigTemplate_a00ee21781a6252156dfc39c7ecfb1f9a348e20fbe0dced7bf92496943ed5527 extends Twig_Template
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
        // line 1
        echo "<head>
    <title>Practica 2</title>
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
</head>

<body>
    <h1>Articulo</h1>
    
    <!-- Apartado para el nombre del alumno y el nombre de la universidad -->
    <div class=\"informacion-academica\">
        <p>Nombre del Alumno: Emma Pérez García</p>
        <p>Asignatura: Arquitectura del software</p>
        <p>Nombre de la Universidad: Universidad Pontificia de Salamanca</p>
    </div>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Fecha de Creacion</th>
        </tr>

        <tr>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
        echo "</td>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
        echo "</td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "html", null, true);
        echo "</td>
        </tr>

    </table>

</body>";
    }

    public function getTemplateName()
    {
        return "ARSOFTDemoBundle:MisVistas:articuloId.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 26,  51 => 25,  47 => 24,  23 => 3,  19 => 1,);
    }
}
