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

/* /opt/lampp/htdocs/prestashop3/mails/themes/modern/modules/ps_emailalerts/order_changed.html.twig */
class __TwigTemplate_5c03a1f4b7c29099700532cdb52492f932364f56b8155b5b9071f0c0e5d8ab8c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'styles' => [$this, 'block_styles'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MailThemes/modern/components/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@MailThemes/modern/components/layout.html.twig", "/opt/lampp/htdocs/prestashop3/mails/themes/modern/modules/ps_emailalerts/order_changed.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order changed", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "<!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                
            <tr>
              <td
                 class=\"\" width=\"604px\"
              >
          
      <table
         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:604px;\" width=\"604\"
      >
        <tr>
          <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
      <![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:ltr;font-size:0px;padding:0 25px;text-align:center;\">
                        <!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                
        <tr>
      
            <td
               class=\"\" style=\"vertical-align:top;width:554px;\"
            >
          <![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <!-- TITLE BEGINING -->
                                    <tr>
                                      <td align=\"left\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:20px;word-break:break-word;\">
                                        <div style=\"font-family:Open sans, arial, sans-serif;font-size:20px;font-weight:600;line-height:25px;text-align:left;color:#363A41;\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi {firstname} {lastname},", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</div>
                                      </td>
                                    </tr>
                                    <!-- TITLE ENDING -->
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
              </td>
            </tr>
          <![endif]-->
              <!-- BORDER BEGINING -->
              <!--[if mso | IE]>
            <tr>
              <td
                 class=\"\" width=\"604px\"
              >
          
      <table
         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:604px;\" width=\"604\"
      >
        <tr>
          <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
      <![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:ltr;font-size:0px;padding:0 50px 40px;text-align:left;\">
                        <!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                
        <tr>
      
            <td
               class=\"\" style=\"vertical-align:top;width:25px;\"
            >
          <![endif]-->
                        <div class=\"mj-column-px-25 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tr>
                              <td class=\"left\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-right:0;padding-left:0;word-break:break-word;\">
                                <p style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\">
                                </p>
                                <!--[if mso | IE]>
        <table
           align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\" role=\"presentation\" width=\"25px\"
        >
          <tr>
            <td style=\"height:0;line-height:0;\">
              &nbsp;
            </td>
          </tr>
        </table>
      <![endif]-->
                              </td>
                            </tr>
                          </table>
                        </div>
                        <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
              </td>
            </tr>
          <![endif]-->
              <!-- BORDER ENDING -->
              <!-- SUBTITLE BEGINING -->
              <!--[if mso | IE]>
            <tr>
              <td
                 class=\"\" width=\"604px\"
              >
          
      <table
         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:604px;\" width=\"604\"
      >
        <tr>
          <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
      <![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:ltr;font-size:0px;padding:0 25px 0;text-align:center;\">
                        <!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                
        <tr>
      
            <td
               class=\"\" style=\"vertical-align:top;width:554px;\"
            >
          <![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tr>
                                      <td align=\"left\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;\">
                                        <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;font-weight:600;line-height:25px;text-align:left;color:#363A41;\">";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order ID {order_name}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order changed", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</div>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
              </td>
            </tr>
          <![endif]-->
              <!-- SUBTITLE ENDING -->
              <!-- BOX BEGINING -->
              <!--[if mso | IE]>
            <tr>
              <td
                 class=\"\" width=\"604px\"
              >
          
      <table
         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:604px;\" width=\"604\"
      >
        <tr>
          <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
      <![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:ltr;font-size:0px;padding:15px 50px 40px;text-align:center;\">
                        <!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                
        <tr>
      
            <td
               class=\"\" style=\"vertical-align:top;width:504px;\"
            >
          <![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"background-color:#fefefe;border:1px solid #DFDFDF;vertical-align:top;padding-top:10px;padding-bottom:10px;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tr>
                                      <td align=\"left\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                        <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:left;color:#363A41;\">";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your order with the reference [1]{order_name}[/1] from [1]{shop_name}[/1] has been changed by the merchant.", ["[1]" => "<span class=\"label\">", "[/1]" => "</span>"], "Emails.Body", ($context["locale"] ?? null));
        echo "</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td align=\"left\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;word-break:break-word;\">
                                        <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:left;color:#363A41;\">";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Go to your customer account to learn more about it.", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</div>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
              </td>
            </tr>
          <![endif]-->
              <!-- BOX ENDING -->
              <!-- FIRST TEXT BEGINING -->
              <!--[if mso | IE]>
            <tr>
              <td
                 class=\"\" width=\"604px\"
              >
          
      <table
         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:604px;\" width=\"604\"
      >
        <tr>
          <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
      <![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:ltr;font-size:0px;padding:0 25px 20px;text-align:center;\">
                        <!--[if mso | IE]>
                  <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
                
        <tr>
      
            <td
               class=\"\" style=\"vertical-align:top;width:554px;\"
            >
          <![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tr>
                              <td align=\"left\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:left;color:#363A41;\">";
        // line 308
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.", ["%guest_tracking_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Guest Tracking", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "</div>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <!--[if mso | IE]>
            </td>
          
        </tr>
      
                  </table>
                <![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]>
          </td>
        </tr>
      </table>
      
              </td>
            </tr>
          <![endif]-->
              <!-- FIRST TEXT ENDING -->
              <!--[if mso | IE]>
                  </table>
                <![endif]-->

";
    }

    // line 340
    public function block_styles($context, array $blocks = [])
    {
        // line 341
        $this->displayParentBlock("styles", $context, $blocks);
        echo "
<style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style><style type=\"text/css\">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700);
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i);
  </style><style type=\"text/css\">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }

      .mj-column-px-25 {
        width: 25px !important;
        max-width: 25px;
      }
    }
  </style><style type=\"text/css\">
  </style><style type=\"text/css\">
    .shadow {
      box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.1);
    }

    .label {
      font-weight: 700;
    }

    .warning {
      font-weight: 700;
      font-size: 16px;
    }

    a {
      color: #25B9D7;
      text-decoration: underline;
      font-weight: 600;
    }

    a.light {
      font-weight: 400;
    }

    span.strong {
      font-weight: 600;
    }

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }
    }
  </style>

";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/prestashop3/mails/themes/modern/modules/ps_emailalerts/order_changed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 341,  403 => 340,  368 => 308,  304 => 247,  296 => 242,  226 => 177,  89 => 43,  50 => 6,  47 => 5,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "/opt/lampp/htdocs/prestashop3/mails/themes/modern/modules/ps_emailalerts/order_changed.html.twig", "/opt/lampp/htdocs/prestashop3/mails/themes/modern/modules/ps_emailalerts/order_changed.html.twig");
    }
}
