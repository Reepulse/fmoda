<?php
/* Smarty version 3.1.33, created on 2019-04-20 13:57:17
  from '/home/fmodzvzg/public_html/themes/greylook/templates/checkout/_partials/steps/checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbafb0d7fe956_69498670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf4de03250a4469d3dea47c640637b65b98bbef6' => 
    array (
      0 => '/home/fmodzvzg/public_html/themes/greylook/templates/checkout/_partials/steps/checkout-step.tpl',
      1 => 1555244855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbafb0d7fe956_69498670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20528653195cbafb0d7fbcc0_90216397', 'step');
?>

<?php }
/* {block 'step_content'} */
class Block_1567299815cbafb0d7fe029_30672575 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
/* {block 'step'} */
class Block_20528653195cbafb0d7fbcc0_90216397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_20528653195cbafb0d7fbcc0_90216397',
  ),
  'step_content' => 
  array (
    0 => 'Block_1567299815cbafb0d7fe029_30672575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
          class = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
"
>
  <h1 class="step-title h3">
    <i class="material-icons done">&#xE876;</i>
    <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> edit</span>
  </h1>

  <div class="content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1567299815cbafb0d7fe029_30672575', 'step_content', $this->tplIndex);
?>

  </div>
</section>
<?php
}
}
/* {/block 'step'} */
}
