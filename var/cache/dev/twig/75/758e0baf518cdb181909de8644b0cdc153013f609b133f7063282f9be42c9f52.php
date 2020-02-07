<?php

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig */
class __TwigTemplate_dd6433112e6981f9f814bef2753d319d14989e512184b04093a52b297172d90c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'copy_language' => array($this, 'block_copy_language'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('copy_language', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_copy_language($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "copy_language"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "copy_language"));

        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["copyLanguageForm"] ?? $this->getContext($context, "copyLanguageForm")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_international_translations_copy_language")));
        echo "

  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">file_copy</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copy", array(), "Admin.Actions"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copies data from one language to another.", array(), "Admin.International.Help"), "html", null, true);
        echo "<br>
                ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning: This will replace all of the existing data inside the destination language.", array(), "Admin.International.Help"), "html", null, true);
        echo "<br>
                ";
        // line 44
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If necessary [1][2] you must first create a new language[/1].", array(), "Admin.International.Help"), array("[1]" => (("<a href=\"" . ($context["addLanguageUrl"] ?? $this->getContext($context, "addLanguageUrl"))) . "\">"), "[2]" => "<i class=\"material-icons\">launch</i>", "[/1]" => "</a>"));
        echo "
              </div>
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", array(), "Admin.Global"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language files must be complete to allow copying of translations.", array(), "Admin.International.Notification")), "method"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? $this->getContext($context, "copyLanguageForm")), "from_language", array()), 'errors');
        echo "
              ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? $this->getContext($context, "copyLanguageForm")), "from_language", array()), 'widget');
        echo "

              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? $this->getContext($context, "copyLanguageForm")), "from_theme", array()), 'errors');
        echo "
              ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? $this->getContext($context, "copyLanguageForm")), "from_theme", array()), 'widget');
        echo "
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", array(), "Admin.Global"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? $this->getContext($context, "copyLanguageForm")), "to_language", array()), 'errors');
        echo "
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? $this->getContext($context, "copyLanguageForm")), "to_language", array()), 'widget');
        echo "

              ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? $this->getContext($context, "copyLanguageForm")), "to_theme", array()), 'errors');
        echo "
              ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["copyLanguageForm"] ?? $this->getContext($context, "copyLanguageForm")), "to_theme", array()), 'widget');
        echo "
            </div>
          </div>
        </div>
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["copyLanguageForm"] ?? $this->getContext($context, "copyLanguageForm")), 'rest');
        echo "
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">file_copy</i>
          <span>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copy", array(), "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>

  ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["copyLanguageForm"] ?? $this->getContext($context, "copyLanguageForm")), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 93,  157 => 87,  146 => 79,  139 => 75,  135 => 74,  130 => 72,  126 => 71,  119 => 67,  109 => 60,  105 => 59,  100 => 57,  96 => 56,  89 => 52,  78 => 44,  74 => 43,  70 => 42,  58 => 33,  50 => 29,  32 => 28,  29 => 27,  26 => 25,);
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

{% block copy_language %}
  {{ form_start(copyLanguageForm, {action: path('admin_international_translations_copy_language')}) }}

  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">file_copy</i> {{ 'Copy'|trans({}, 'Admin.Actions') }}
    </h3>

    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"row\">
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <div class=\"alert-text\">
                {{ 'Copies data from one language to another.'|trans({}, 'Admin.International.Help') }}<br>
                {{ 'Warning: This will replace all of the existing data inside the destination language.'|trans({}, 'Admin.International.Help') }}<br>
                {{ 'If necessary [1][2] you must first create a new language[/1].'|trans({}, 'Admin.International.Help')|replace({'[1]': '<a href=\"'~addLanguageUrl~'\">','[2]': '<i class=\"material-icons\">launch</i>','[/1]': '</a>'})|raw }}
              </div>
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ ps.label_with_help('From'|trans({}, 'Admin.Global'), 'Language files must be complete to allow copying of translations.'|trans({}, 'Admin.International.Notification')) }}
          </label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              {{ form_errors(copyLanguageForm.from_language) }}
              {{ form_widget(copyLanguageForm.from_language) }}

              {{ form_errors(copyLanguageForm.from_theme) }}
              {{ form_widget(copyLanguageForm.from_theme) }}
            </div>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'To'|trans({}, 'Admin.Global') }}
          </label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              {{ form_errors(copyLanguageForm.to_language) }}
              {{ form_widget(copyLanguageForm.to_language) }}

              {{ form_errors(copyLanguageForm.to_theme) }}
              {{ form_widget(copyLanguageForm.to_theme) }}
            </div>
          </div>
        </div>
        {{ form_rest(copyLanguageForm) }}
      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">file_copy</i>
          <span>{{ 'Copy'|trans({}, 'Admin.Actions') }}</span>
        </button>
      </div>
    </div>
  </div>

  {{ form_end(copyLanguageForm) }}
{% endblock %}
", "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig", "/home/fmodzvzg/public_html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/Blocks/copy_language.html.twig");
    }
}
