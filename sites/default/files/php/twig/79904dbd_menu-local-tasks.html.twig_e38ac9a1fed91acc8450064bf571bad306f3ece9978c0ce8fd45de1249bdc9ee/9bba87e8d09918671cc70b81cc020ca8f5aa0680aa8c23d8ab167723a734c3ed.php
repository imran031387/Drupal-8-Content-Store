<?php

/* core/themes/classy/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_e3207e715b3f032b29624bc5ef0b2486b13375d81e7bc31fc7e36f8e9de8e836 extends Twig_Template
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
        // line 16
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 17
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Primary tabs"));
            echo "</h2>
  <ul class=\"tabs primary\">";
            // line 18
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true);
            echo "</ul>
";
        }
        // line 20
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 21
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Secondary tabs"));
            echo "</h2>
  <ul class=\"tabs secondary\">";
            // line 22
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true);
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 22,  33 => 21,  31 => 20,  26 => 18,  21 => 17,  19 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display primary and secondary local tasks.*/
/*  **/
/*  * Available variables:*/
/*  * - primary: HTML list items representing primary tasks.*/
/*  * - secondary: HTML list items representing primary tasks.*/
/*  **/
/*  * Each item in these variables (primary and secondary) can be individually*/
/*  * themed in menu-local-task.html.twig.*/
/*  **/
/*  * @see template_preprocess_menu_local_tasks()*/
/*  *//* */
/* #}*/
/* {% if primary %}*/
/*   <h2 class="visually-hidden">{{ 'Primary tabs'|t }}</h2>*/
/*   <ul class="tabs primary">{{ primary }}</ul>*/
/* {% endif %}*/
/* {% if secondary %}*/
/*   <h2 class="visually-hidden">{{ 'Secondary tabs'|t }}</h2>*/
/*   <ul class="tabs secondary">{{ secondary }}</ul>*/
/* {% endif %}*/
/* */
