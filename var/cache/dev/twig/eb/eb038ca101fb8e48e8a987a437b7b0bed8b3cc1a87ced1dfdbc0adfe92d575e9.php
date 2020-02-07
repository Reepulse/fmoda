<?php

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig */
class __TwigTemplate_93f32e8ffe57c346e3be34ce4400e188fcd6255d01a0266c8bf4835b509c8981 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["exportLanguageForm"] ?? $this->getContext($context, "exportLanguageForm")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_international_translations_export_theme")));
        echo "

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">cloud_upload</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export a language", array(), "Admin.International.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"row\">
        <div class=\"col-sm\">
          <div class=\"alert alert-info\" role=\"alert\">
            <div class=\"alert-text\">
              ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export data from one language to a file (language pack).", array(), "Admin.International.Help"), "html", null, true);
        echo " <br>
              ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select which theme you would like to export your translations to.", array(), "Admin.International.Help"), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", array(), "Admin.Global"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["exportLanguageForm"] ?? $this->getContext($context, "exportLanguageForm")), "iso_code", array()), 'errors');
        echo "
          ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["exportLanguageForm"] ?? $this->getContext($context, "exportLanguageForm")), "iso_code", array()), 'widget');
        echo "
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your theme", array(), "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["exportLanguageForm"] ?? $this->getContext($context, "exportLanguageForm")), "theme_name", array()), 'errors');
        echo "
          ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["exportLanguageForm"] ?? $this->getContext($context, "exportLanguageForm")), "theme_name", array()), 'widget');
        echo "
        </div>
      </div>
      ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["exportLanguageForm"] ?? $this->getContext($context, "exportLanguageForm")), 'rest');
        echo "
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        <i class=\"material-icons\">cloud_download</i>
        <span>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
      </button>
    </div>
  </div>
</div>

";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["exportLanguageForm"] ?? $this->getContext($context, "exportLanguageForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 80,  110 => 74,  99 => 66,  93 => 63,  89 => 62,  83 => 59,  74 => 53,  70 => 52,  64 => 49,  53 => 41,  49 => 40,  38 => 32,  31 => 28,  28 => 27,  25 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}

{% trans_default_domain 'Admin.International.Feature' %}

{{ form_start(exportLanguageForm, {action: path('admin_international_translations_export_theme')}) }}

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">cloud_upload</i> {{ 'Export a language'|trans }}
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"row\">
        <div class=\"col-sm\">
          <div class=\"alert alert-info\" role=\"alert\">
            <div class=\"alert-text\">
              {{ 'Export data from one language to a file (language pack).'|trans({}, 'Admin.International.Help') }} <br>
              {{ 'Select which theme you would like to export your translations to.'|trans({}, 'Admin.International.Help') }}
            </div>
          </div>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Language'|trans({}, 'Admin.Global') }}
        </label>
        <div class=\"col-sm\">
          {{ form_errors(exportLanguageForm.iso_code) }}
          {{ form_widget(exportLanguageForm.iso_code) }}
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Select your theme'|trans }}
        </label>
        <div class=\"col-sm\">
          {{ form_errors(exportLanguageForm.theme_name) }}
          {{ form_widget(exportLanguageForm.theme_name) }}
        </div>
      </div>
      {{ form_rest(exportLanguageForm) }}
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        <i class=\"material-icons\">cloud_download</i>
        <span>{{ 'Export'|trans({}, 'Admin.Actions') }}</span>
      </button>
    </div>
  </div>
</div>

{{ form_end(exportLanguageForm) }}
", "@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig", "/home/fmodzvzg/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/Blocks/export_language.html.twig");
    }
}
