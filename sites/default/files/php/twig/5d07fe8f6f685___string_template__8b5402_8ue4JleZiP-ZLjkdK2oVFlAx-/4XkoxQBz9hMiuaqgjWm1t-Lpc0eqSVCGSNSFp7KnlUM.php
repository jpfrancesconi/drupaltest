<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__8b5402bb9465e24ecf949c3f25bd50ff92962b4f7bec9884eb23432bce34b1fe */
class __TwigTemplate_ac1d0af1b59de67f892c8c6857976d3893eb3cd64973ae52a7ff5faf513c0de3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 17];
        $filters = ["escape" => 20];
        $functions = ["path" => 7];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        echo "
";
        // line 7
        $context["simple_ajax_example"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.simplest");
        // line 8
        $context["ajax_generate_textfields"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.autotextfields");
        // line 9
        $context["ajax_submit"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.submit_driven_ajax");
        // line 10
        $context["ajax_dependent_dropdown"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.dependent_dropdown");
        // line 11
        $context["ajax_dependent_dropdown_nojs"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.dependent_dropdown", ["nojs" => "nojs"]);
        // line 12
        $context["ajax_dynamic_form"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.dynamic_form_sections");
        // line 13
        $context["ajax_dynamic_form_nojs"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.dynamic_form_sections", ["nojs" => "nojs"]);
        // line 14
        $context["ajax_wizard_example"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.wizard");
        // line 15
        $context["ajax_wizard_example_nojs"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("ajax_example.wizardnojs");
        // line 16
        echo "
";
        // line 17
        echo t("<p>The AJAX example module provides many examples of AJAX including forms, links, and AJAX commands.</p>
<p><a href=@simple_ajax_example>Simplest AJAX Example</a></p>
<p><a href=@ajax_generate_textfields>Generate textfields</a></p>
<p><a href=@ajax_submit>Submit-driven AJAX</a></p>
<p><a href=@ajax_dependent_dropdown>Dependent dropdown</a></p>
<p><a href=@ajax_dependent_dropdown_nojs>Dependent dropdown w/ no JS</a></p>
<p><a href=@ajax_dynamic_form>Dynamic form sections</a></p>
<p><a href=@ajax_dynamic_form_nojs>Dynamic form sections w/ no JS</a></p>
<p><a href=@ajax_wizard_example>AJAX Wizard Example</a></p>
<p><a href=@ajax_wizard_example_nojs>AJAX Wizard Example w/JS turned off</a></p>", array("@simple_ajax_example" =>         // line 20
($context["simple_ajax_example"] ?? null), "@ajax_generate_textfields" =>         // line 21
($context["ajax_generate_textfields"] ?? null), "@ajax_submit" =>         // line 22
($context["ajax_submit"] ?? null), "@ajax_dependent_dropdown" =>         // line 23
($context["ajax_dependent_dropdown"] ?? null), "@ajax_dependent_dropdown_nojs" =>         // line 24
($context["ajax_dependent_dropdown_nojs"] ?? null), "@ajax_dynamic_form" =>         // line 25
($context["ajax_dynamic_form"] ?? null), "@ajax_dynamic_form_nojs" =>         // line 26
($context["ajax_dynamic_form_nojs"] ?? null), "@ajax_wizard_example" =>         // line 27
($context["ajax_wizard_example"] ?? null), "@ajax_wizard_example_nojs" =>         // line 28
($context["ajax_wizard_example_nojs"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "__string_template__8b5402bb9465e24ecf949c3f25bd50ff92962b4f7bec9884eb23432bce34b1fe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  96 => 27,  95 => 26,  94 => 25,  93 => 24,  92 => 23,  91 => 22,  90 => 21,  89 => 20,  79 => 17,  76 => 16,  74 => 15,  72 => 14,  70 => 13,  68 => 12,  66 => 11,  64 => 10,  62 => 9,  60 => 8,  58 => 7,  55 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8b5402bb9465e24ecf949c3f25bd50ff92962b4f7bec9884eb23432bce34b1fe", "");
    }
}
