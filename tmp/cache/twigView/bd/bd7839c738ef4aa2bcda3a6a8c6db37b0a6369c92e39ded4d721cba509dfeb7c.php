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

/* D:\Program Files (x86)\Ampps\www\facture_et_paiement\vendor\friendsofcake\bootstrap-ui\src\Template\Bake\\Template\edit.twig */
class __TwigTemplate_b6f8182811be78a19b41163827d41416eef6566aba28b79dfae0e2893748fe13 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "D:\\Program Files (x86)\\Ampps\\www\\facture_et_paiement\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\edit.twig"));

        // line 1
        echo "<?php \$this->extend('../Layout/TwitterBootstrap/dashboard'); ?>

<?php \$this->start('tb_actions'); ?>
";
        // line 4
echo $context['_view']->element("tb_actions",[],[]);
        // line 5
        echo "<?php \$this->end(); ?>
<?php \$this->assign('tb_sidebar', '<ul class=\"nav flex-column\">' . \$this->fetch('tb_actions') . '</ul>'); ?>

";
        // line 8
echo $context['_view']->element("form",[],[]);
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "D:\\Program Files (x86)\\Ampps\\www\\facture_et_paiement\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  40 => 5,  38 => 4,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<?php \$this->extend('../Layout/TwitterBootstrap/dashboard'); ?>

<?php \$this->start('tb_actions'); ?>
{% element 'tb_actions' %}
<?php \$this->end(); ?>
<?php \$this->assign('tb_sidebar', '<ul class=\"nav flex-column\">' . \$this->fetch('tb_actions') . '</ul>'); ?>

{% element 'form' %}
", "D:\\Program Files (x86)\\Ampps\\www\\facture_et_paiement\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\edit.twig", "D:\\Program Files (x86)\\Ampps\\www\\facture_et_paiement\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\edit.twig");
    }
}
