<?php
/* Smarty version 3.1.33, created on 2019-04-20 13:57:17
  from '/home/fmodzvzg/public_html/themes/greylook/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbafb0d879147_74699436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e755b5ad9548d275eea0625b7d76b74b189759c' => 
    array (
      0 => '/home/fmodzvzg/public_html/themes/greylook/templates/_partials/form-errors.tpl',
      1 => 1555244855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbafb0d879147_74699436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1484617865cbafb0d877cc7_54524833', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_1484617865cbafb0d877cc7_54524833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_1484617865cbafb0d877cc7_54524833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
