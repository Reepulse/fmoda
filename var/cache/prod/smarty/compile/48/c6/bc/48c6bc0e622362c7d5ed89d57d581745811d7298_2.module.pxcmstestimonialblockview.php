<?php
/* Smarty version 3.1.33, created on 2019-04-20 20:21:08
  from 'module:pxcmstestimonialblockview' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbb5504148a12_92077363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48c6bc0e622362c7d5ed89d57d581745811d7298' => 
    array (
      0 => 'module:pxcmstestimonialblockview',
      1 => 1555244855,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbb5504148a12_92077363 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="pxcmstestimonialblock" class="block parallax" data-source-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/parallax-bg1.jpg">
	<div class="testimonial_main container">
  		<?php echo $_smarty_tpl->tpl_vars['pxcmstestimonialblockinfos']->value['text'];?>

  	</div>
</div>
<?php }
}
