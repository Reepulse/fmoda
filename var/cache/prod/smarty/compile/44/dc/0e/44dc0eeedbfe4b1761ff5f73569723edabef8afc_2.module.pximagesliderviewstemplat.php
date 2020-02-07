<?php
/* Smarty version 3.1.33, created on 2019-04-20 20:21:08
  from 'module:pximagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbb5504305816_51058659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44dc0eeedbfe4b1761ff5f73569723edabef8afc' => 
    array (
      0 => 'module:pximagesliderviewstemplat',
      1 => 1555244855,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbb5504305816_51058659 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pxhomeslider']->value['slides']) {?>
	<div class="flexslider" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pxhomeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pxhomeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
		<div class="loadingdiv spinner"></div>
		<ul class="slides">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pxhomeslider']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
				<li class="slide">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
					</a>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
						<div class="caption-description">
							<?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

						</div>
					<?php }?>					
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
<?php }?>

<?php }
}
