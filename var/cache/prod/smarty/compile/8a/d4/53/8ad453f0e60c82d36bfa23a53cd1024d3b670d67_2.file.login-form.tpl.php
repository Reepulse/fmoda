<?php
/* Smarty version 3.1.33, created on 2019-04-20 13:57:17
  from '/home/fmodzvzg/public_html/themes/greylook/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbafb0d9aef13_90917023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ad453f0e60c82d36bfa23a53cd1024d3b670d67' => 
    array (
      0 => '/home/fmodzvzg/public_html/themes/greylook/templates/customer/_partials/login-form.tpl',
      1 => 1555244855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5cbafb0d9aef13_90917023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6377285165cbafb0d9a8ff7_67390851', 'login_form');
?>

<?php }
/* {block 'login_form_errors'} */
class Block_13834954995cbafb0d9a9506_71069025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_17799509465cbafb0d9aa6a1_94867816 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_16464885515cbafb0d9abd06_89564222 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_7093970425cbafb0d9aafa4_51983148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16464885515cbafb0d9abd06_89564222', 'form_field', $this->tplIndex);
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_16781932005cbafb0d9ade82_93904155 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <button class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
    <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_656239445cbafb0d9ada25_71013672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <footer class="form-footer text-xs-center clearfix">
    <input type="hidden" name="submitLogin" value="1">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16781932005cbafb0d9ade82_93904155', 'form_buttons', $this->tplIndex);
?>

  </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_6377285165cbafb0d9a8ff7_67390851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_6377285165cbafb0d9a8ff7_67390851',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_13834954995cbafb0d9a9506_71069025',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_17799509465cbafb0d9aa6a1_94867816',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_7093970425cbafb0d9aafa4_51983148',
  ),
  'form_field' => 
  array (
    0 => 'Block_16464885515cbafb0d9abd06_89564222',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_656239445cbafb0d9ada25_71013672',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_16781932005cbafb0d9ade82_93904155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13834954995cbafb0d9a9506_71069025', 'login_form_errors', $this->tplIndex);
?>


  <form id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17799509465cbafb0d9aa6a1_94867816', 'login_form_actionurl', $this->tplIndex);
?>
" method="post">

  <section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7093970425cbafb0d9aafa4_51983148', 'login_form_fields', $this->tplIndex);
?>

    <div class="forgot-password">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

      </a>
    </div>
  </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_656239445cbafb0d9ada25_71013672', 'login_form_footer', $this->tplIndex);
?>


</form>
<?php
}
}
/* {/block 'login_form'} */
}
