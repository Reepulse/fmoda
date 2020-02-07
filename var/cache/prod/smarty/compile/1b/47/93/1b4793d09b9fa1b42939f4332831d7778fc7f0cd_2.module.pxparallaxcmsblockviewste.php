<?php
/* Smarty version 3.1.33, created on 2019-04-20 20:21:08
  from 'module:pxparallaxcmsblockviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbb550431cbd0_27744740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b4793d09b9fa1b42939f4332831d7778fc7f0cd' => 
    array (
      0 => 'module:pxparallaxcmsblockviewste',
      1 => 1555244855,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbb550431cbd0_27744740 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="pxparallaxcmsblock" class="block parallax" data-source-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/parallax-bg.jpg">
	<?php echo $_smarty_tpl->tpl_vars['pxparallaxcmsblockinfos']->value['text'];?>

</div>
<?php }
}
