<?php

/* ARSOFTDemoBundle:Default:articuloId.html.twig */
class __TwigTemplate_959d23947ed3891c1f8beb806fc129d2e4cdb3be1d8b5b1a6fc7231d12cabd4c extends Twig_Template
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
        echo "<h1>Articulo</h1>
<table border=”1”>
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Fecha de Creacion</th>
    </tr>

    <tr>
        <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
        echo "</td>
        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
        echo "</td>
        <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "html", null, true);
        echo "</td>
    </tr>
 
</table>";
    }

    public function getTemplateName()
    {
        return "ARSOFTDemoBundle:Default:articuloId.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
