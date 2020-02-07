<?php

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig */
class __TwigTemplate_9e10f2ec7851b697c98d80e4bce725248beea3e52ba77edc499be4a327fc168d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addUpdateLanguageForm"] ?? $this->getContext($context, "addUpdateLanguageForm")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_international_translations_add_update_language")));
        echo "

<div class=\"card\">
  <h3 class=\"card-header\">
    <div class=\"material-icons\">arrow_drop_down_circle</div> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add / Update a language", array(), "Admin.International.Feature"), "html", null, true);
        echo "
  </h3>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"row\">
        <div class=\"col-sm\">
          <div class=\"alert alert-info\" role=\"alert\">
            <div class=\"alert-text\">
              ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can add or update a language directly from the PrestaShop website here.", array(), "Admin.International.Help"), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please select the language you want to add or update", array(), "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addUpdateLanguageForm"] ?? $this->getContext($context, "addUpdateLanguageForm")), "iso_localization_pack", array()), 'errors');
        echo "
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addUpdateLanguageForm"] ?? $this->getContext($context, "addUpdateLanguageForm")), "iso_localization_pack", array()), 'widget', array("attr" => array("data-minimumResultsForSearch" => "7", "data-toggle" => "select2")));
        echo "
        </div>
      </div>
      ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["addUpdateLanguageForm"] ?? $this->getContext($context, "addUpdateLanguageForm")), 'rest');
        echo "
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        <i class=\"material-icons\">settings</i>
        <span>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add or update a language", array(), "Admin.International.Feature"), "html", null, true);
        echo "</span>
      </button>
    </div>
  </div>
</div>

";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addUpdateLanguageForm"] ?? $this->getContext($context, "addUpdateLanguageForm")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 69,  87 => 63,  76 => 55,  70 => 52,  66 => 51,  60 => 48,  50 => 41,  38 => 32,  31 => 28,  28 => 27,  25 => 25,);
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

{{ form_start(addUpdateLanguageForm, {action: path('admin_international_translations_add_update_language')}) }}

<div class=\"card\">
  <h3 class=\"card-header\">
    <div class=\"material-icons\">arrow_drop_down_circle</div> {{ 'Add / Update a language'|trans }}
  </h3>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"row\">
        <div class=\"col-sm\">
          <div class=\"alert alert-info\" role=\"alert\">
            <div class=\"alert-text\">
              {{ 'You can add or update a language directly from the PrestaShop website here.'|trans({}, 'Admin.International.Help') }}
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Please select the language you want to add or update'|trans }}
        </label>
        <div class=\"col-sm\">
          {{ form_errors(addUpdateLanguageForm.iso_localization_pack) }}
          {{ form_widget(addUpdateLanguageForm.iso_localization_pack, {'attr': {'data-minimumResultsForSearch': '7', 'data-toggle': 'select2'}}) }}
        </div>
      </div>
      {{ form_rest(addUpdateLanguageForm) }}
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        <i class=\"material-icons\">settings</i>
        <span>{{ 'Add or update a language'|trans }}</span>
      </button>
    </div>
  </div>
</div>

{{ form_end(addUpdateLanguageForm) }}
", "@PrestaShop/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig", "/home/fmodzvzg/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/Blocks/add_update_language.html.twig");
    }
}
