<?php
/* Smarty version 3.1.33, created on 2019-04-18 23:00:46
  from '/home/fmodzvzg/public_html/admin-fmoda/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb8d76ec90d37_98706659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fa5d32d8432c79386df70f2e64989c61c4158dc' => 
    array (
      0 => '/home/fmodzvzg/public_html/admin-fmoda/themes/default/template/content.tpl',
      1 => 1550022572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb8d76ec90d37_98706659 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
