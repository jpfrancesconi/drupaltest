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

/* __string_template__e3cece410d5ca69ae41c7091a916870a8197159feff49fe77054038dc243ef70 */
class __TwigTemplate_2547069baac91db064fb95e2c949177a715103222c30b4730cbbe4bb43ecb9c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "trans" => 13];
        $filters = ["escape" => 18];
        $functions = ["path" => 8];

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
        // line 7
        echo "
";
        // line 8
        $context["simple_rows"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("tabledrag_example.simple_form");
        // line 9
        $context["nested"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("tabledrag_example.parent_form");
        // line 10
        $context["roots_and_leaves"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("tabledrag_example.rootleaf_form");
        // line 11
        $context["reset_form"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("tabledrag_example.reset_form");
        // line 12
        echo "
";
        // line 13
        echo t("<p>Below are examples of Drupal 8's table element with 'tabledrag' functionality.</p>

<ol>
    <li><a href=@simple_rows>Simple Rows</a></li>
    <li><a href=@nested>Nested</a></li>
    <li><a href=@roots_and_leaves>Roots and Leaves</a></li>
</ol>

<p><a href=@reset_form>Reset Tablesort Sample Data</a></p>", array("@simple_rows" =>         // line 18
($context["simple_rows"] ?? null), "@nested" =>         // line 19
($context["nested"] ?? null), "@roots_and_leaves" =>         // line 20
($context["roots_and_leaves"] ?? null), "@reset_form" =>         // line 23
($context["reset_form"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "__string_template__e3cece410d5ca69ae41c7091a916870a8197159feff49fe77054038dc243ef70";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  80 => 20,  79 => 19,  78 => 18,  69 => 13,  66 => 12,  64 => 11,  62 => 10,  60 => 9,  58 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e3cece410d5ca69ae41c7091a916870a8197159feff49fe77054038dc243ef70", "");
    }
}
