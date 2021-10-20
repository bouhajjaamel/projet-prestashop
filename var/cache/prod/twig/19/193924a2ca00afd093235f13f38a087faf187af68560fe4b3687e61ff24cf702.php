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

/* @PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/credit_slip_options.html.twig */
class __TwigTemplate_26caa7fda6ad98f42e4ffb8a5a7b672457013d4bb3a87290a2efa87bee48079d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'credit_slip_options_form_rest' => [$this, 'block_credit_slip_options_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/credit_slip_options.html.twig", 27)->unwrap();
        // line 28
        echo "
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["creditSlipOptionsForm"] ?? null), 'form_start', ["method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_credit_slips_process_options")]);
        // line 32
        echo "
<div class=\"card\">

  <h3 class=\"card-header\">
    <i class=\"material-icons\">settings</i> ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Credit slip options", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 41
        echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["creditSlipOptionsForm"] ?? null), "options", []), "slip_prefix", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Credit slip prefix", [], "Admin.Orderscustomers.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Prefix used for credit slips.", [], "Admin.Orderscustomers.Help")]);
        // line 44
        echo "
    </div>
    ";
        // line 46
        $this->displayBlock('credit_slip_options_form_rest', $context, $blocks);
        // line 49
        echo "  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>

</div>
";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["creditSlipOptionsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 46
    public function block_credit_slip_options_form_rest($context, array $blocks = [])
    {
        // line 47
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["creditSlipOptionsForm"] ?? null), 'rest');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/credit_slip_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 47,  85 => 46,  79 => 60,  70 => 54,  63 => 49,  61 => 46,  57 => 44,  55 => 41,  47 => 36,  41 => 32,  39 => 29,  36 => 28,  34 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/credit_slip_options.html.twig", "/opt/lampp/htdocs/prestashop3/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/CreditSlip/Blocks/credit_slip_options.html.twig");
    }
}
