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

/* __string_template__047d631ff5f71b46c43687192c02ac62d21ff4b55b527d71c02ad017bdfdefd6 */
class __TwigTemplate_b681a377a147e95b8c384b1b58675ef7cb6b415378d065d532e8ddb2981dd62a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "trans" => 9];
        $filters = ["escape" => 12];
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
        $context["edit_content_types"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node_type.collection");
        // line 8
        echo "
";
        // line 9
        echo t("<p>The Field Example provides a field composed of an HTML RGB value, like
<code>#ff00ff</code>. To use it, <a href=@edit_content_types>add the
field to a content type</a>.</p>", array("@edit_content_types" =>         // line 12
($context["edit_content_types"] ?? null), ));
    }

    public function getTemplateName()
    {
        return "__string_template__047d631ff5f71b46c43687192c02ac62d21ff4b55b527d71c02ad017bdfdefd6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  63 => 9,  60 => 8,  58 => 7,  55 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__047d631ff5f71b46c43687192c02ac62d21ff4b55b527d71c02ad017bdfdefd6", "");
    }
}
