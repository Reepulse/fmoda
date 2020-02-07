<?php

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig */
class __TwigTemplate_22d08ea18ef31674091f8a6757abbeed356675f372ff675ba6ac7b328ad018c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'modify_translations' => array($this, 'block_modify_translations'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('modify_translations', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_modify_translations($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modify_translations"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modify_translations"));

        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), 'form_start', array("method" => "get", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_admin_international_translations_modify")));
        echo "

  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">description</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modify translations", array(), "Admin.International.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"row\">
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <div class=\"alert-text\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here you can modify translations for every line of text inside PrestaShop.", array(), "Admin.International.Help"), "html", null, true);
        echo "
                <br>
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First, select a type of translation (such as \"Back office\" or \"Installed modules\"), and then select the language you want to translate strings in.", array(), "Admin.International.Help"), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type of translation", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), "translation_type", array()), 'errors');
        echo "
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), "translation_type", array()), 'widget', array("attr" => array("class" => "js-translation-type")));
        echo "
          </div>
        </div>
        <div class=\"form-group row js-email-form-group d-none\">
          <label class=\"form-control-label\">
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select the type of email content", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), "email_content_type", array()), 'errors');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), "email_content_type", array()), 'widget', array("attr" => array("class" => "js-email-content-type")));
        echo "
          </div>
        </div>
        <div class=\"form-group row js-theme-form-group d-none\">
          <label class=\"form-control-label\">
            ";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your theme", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), "theme", array()), 'errors');
        echo "
            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), "theme", array()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row js-module-form-group d-none\">
          <label class=\"form-control-label\">
            ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your module", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), "module", array()), 'errors');
        echo "
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), "module", array()), 'widget', array("attr" => array("data-minimumResultsForSearch" => "7", "data-toggle" => "select2")));
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select your language", array(), "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), "language", array()), 'errors');
        echo "
            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), "language", array()), 'widget');
        echo "
          </div>
        </div>
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), 'rest');
        echo "
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">edit</i>
          <span>";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modify", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>

  ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["modifyTranslationsForm"] ?? $this->getContext($context, "modifyTranslationsForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  194 => 109,  185 => 103,  174 => 95,  168 => 92,  164 => 91,  158 => 88,  150 => 83,  146 => 82,  140 => 79,  132 => 74,  128 => 73,  122 => 70,  114 => 65,  110 => 64,  104 => 61,  96 => 56,  92 => 55,  86 => 52,  75 => 44,  70 => 42,  58 => 33,  50 => 29,  32 => 28,  29 => 27,  26 => 25,);
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

{% block modify_translations %}
  {{ form_start(modifyTranslationsForm, {method: 'get', action: path('_admin_international_translations_modify')}) }}

  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">description</i> {{ 'Modify translations'|trans }}
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"row\">
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <div class=\"alert-text\">
                {{ 'Here you can modify translations for every line of text inside PrestaShop.'|trans({}, 'Admin.International.Help') }}
                <br>
                {{ 'First, select a type of translation (such as \"Back office\" or \"Installed modules\"), and then select the language you want to translate strings in.'|trans({}, 'Admin.International.Help') }}
              </div>
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Type of translation'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(modifyTranslationsForm.translation_type) }}
            {{ form_widget(modifyTranslationsForm.translation_type, {'attr': {'class': 'js-translation-type'}}) }}
          </div>
        </div>
        <div class=\"form-group row js-email-form-group d-none\">
          <label class=\"form-control-label\">
            {{ 'Select the type of email content'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(modifyTranslationsForm.email_content_type) }}
            {{ form_widget(modifyTranslationsForm.email_content_type, {'attr': {'class': 'js-email-content-type'}}) }}
          </div>
        </div>
        <div class=\"form-group row js-theme-form-group d-none\">
          <label class=\"form-control-label\">
            {{ 'Select your theme'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(modifyTranslationsForm.theme) }}
            {{ form_widget(modifyTranslationsForm.theme) }}
          </div>
        </div>
        <div class=\"form-group row js-module-form-group d-none\">
          <label class=\"form-control-label\">
            {{ 'Select your module'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(modifyTranslationsForm.module) }}
            {{ form_widget(modifyTranslationsForm.module, {'attr': {'data-minimumResultsForSearch': '7', 'data-toggle': 'select2'}}) }}
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Select your language'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(modifyTranslationsForm.language) }}
            {{ form_widget(modifyTranslationsForm.language) }}
          </div>
        </div>
        {{ form_rest(modifyTranslationsForm) }}
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">edit</i>
          <span>{{ 'Modify'|trans({}, 'Admin.Actions') }}</span>
        </button>
      </div>
    </div>
  </div>

  {{ form_end(modifyTranslationsForm) }}
{% endblock %}
", "@PrestaShop/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig", "/home/fmodzvzg/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/Blocks/modify_translations.html.twig");
    }
}
