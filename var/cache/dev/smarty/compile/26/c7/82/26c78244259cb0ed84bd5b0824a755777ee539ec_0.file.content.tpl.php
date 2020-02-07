<?php
/* Smarty version 3.1.33, created on 2019-04-18 23:01:18
  from '/home/fmodzvzg/public_html/admin-fmoda/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb8d78e1d4fd9_17181864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26c78244259cb0ed84bd5b0824a755777ee539ec' => 
    array (
      0 => '/home/fmodzvzg/public_html/admin-fmoda/themes/new-theme/template/content.tpl',
      1 => 1550022572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb8d78e1d4fd9_17181864 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
