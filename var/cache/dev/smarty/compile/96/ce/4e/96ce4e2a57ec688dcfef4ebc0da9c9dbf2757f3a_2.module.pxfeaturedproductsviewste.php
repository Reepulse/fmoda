<?php
/* Smarty version 3.1.33, created on 2019-04-18 23:00:59
  from 'module:pxfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb8d77beb5319_86902448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ce4e2a57ec688dcfef4ebc0da9c9dbf2757f3a' => 
    array (
      0 => 'module:pxfeaturedproductsviewste',
      1 => 1555244855,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5cb8d77beb5319_86902448 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/fmodzvzg/public_html/modules/px_featuredproducts/views/templates/hook/px_featuredproducts.tpl -->
<section class="featured-products clearfix">
	<h2 class="h1 products-section-title text-uppercase">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured products','d'=>'Modules.FeaturedProducts'),$_smarty_tpl ) );?>

	</h2>
	<div class="products">			
		<?php $_smarty_tpl->_assignInScope('sliderFor', 5);?> <!-- Define Number of product for SLIDER -->
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<ul id="feature-carousel" class="tm-carousel product_list">
		<?php } else { ?>
			<ul id="feature-grid" class="featured_grid product_list grid row gridcount">
		<?php }?>
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-3<?php }?>">
				<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	 	
		</ul>	
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<div class="customNavigation">
				<a class="btn prev feature_prev">&nbsp;</a>
				<a class="btn next feature_next">&nbsp;</a>
			</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 0 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<a class="all-product-link pull-xs-left pull-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
<i class="material-icons">&#xE315;</i>
			</a>
		<?php }?>
	</div>
</section><!-- end /home/fmodzvzg/public_html/modules/px_featuredproducts/views/templates/hook/px_featuredproducts.tpl --><?php }
}
