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

/* @PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/pdf_by_date.html.twig */
class __TwigTemplate_6c04998b57b48bd6984c4b4bb36a153600bdc95708e8c27deb04db96eb60da53 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'credit_slip_pdf_by_date_form_rest' => [$this, 'block_credit_slip_pdf_by_date_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 27
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/pdf_by_date.html.twig", 27)->unwrap();
        // line 28
        echo "
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pdfByDateForm"] ?? null), 'form_start', ["method" => "GET", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_admin_credit_slips_pdf_by_date")]);
        // line 32
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">date_range</i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("By date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 40
        $context["dateHint"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Format: 2011-12-31 (inclusive).", [], "Admin.Orderscustomers.Help");
        // line 41
        echo "      ";
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["pdfByDateForm"] ?? null), "from", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", [], "Admin.Global"), "help" =>         // line 43
($context["dateHint"] ?? null)]);
        // line 44
        echo "

      ";
        // line 46
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["pdfByDateForm"] ?? null), "to", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", [], "Admin.Global"), "help" =>         // line 48
($context["dateHint"] ?? null)]);
        // line 49
        echo "
    </div>
    ";
        // line 51
        $this->displayBlock('credit_slip_pdf_by_date_form_rest', $context, $blocks);
        // line 54
        echo "  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate PDF file by date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>
";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["pdfByDateForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 51
    public function block_credit_slip_pdf_by_date_form_rest($context, array $blocks = [])
    {
        // line 52
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["pdfByDateForm"] ?? null), 'rest');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/pdf_by_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 52,  94 => 51,  88 => 64,  80 => 59,  73 => 54,  71 => 51,  67 => 49,  65 => 48,  64 => 46,  60 => 44,  58 => 43,  56 => 41,  54 => 40,  46 => 35,  41 => 32,  39 => 29,  36 => 28,  34 => 27,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/CreditSlip/Blocks/pdf_by_date.html.twig", "/opt/lampp/htdocs/prestashop3/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/CreditSlip/Blocks/pdf_by_date.html.twig");
    }
}
