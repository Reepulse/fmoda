<?php
/* Smarty version 3.1.33, created on 2019-04-20 16:53:46
  from '/home/fmodzvzg/public_html/themes/greylook/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbb246aaa1176_11092565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '977f300f7a5d621f49aca4b1ca5b24cc7fcede02' => 
    array (
      0 => '/home/fmodzvzg/public_html/themes/greylook/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1555244855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbb246aaa1176_11092565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="images-container">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19680034025cbb246aa959d6_25682302', 'product_cover');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3921142085cbb246aa97884_28109556', 'product_images');
?>

</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );
}
/* {block 'product_cover'} */
class Block_19680034025cbb246aa959d6_25682302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_19680034025cbb246aa959d6_25682302',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-cover">
      <img class="js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
      <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        <i class="material-icons zoom-in">&#xE8FF;</i>
      </div>
    </div>
  <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_3921142085cbb246aa97884_28109556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_3921142085cbb246aa97884_28109556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('sliderFor', 5);?> <!-- Define Number of product for SLIDER -->
	<?php $_smarty_tpl->_assignInScope('thumbCount', count($_smarty_tpl->tpl_vars['product']->value['images']));?>
	
	<div class="js-qv-mask mask <?php if ($_smarty_tpl->tpl_vars['thumbCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>additional_slider<?php } else { ?>additional_grid<?php }?>">		
		<?php if ($_smarty_tpl->tpl_vars['thumbCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<ul id="additional-carousel" class="tm-carousel product_list">
		<?php } else { ?>
			<ul id="additional-grid" class="product_list grid row gridcount">
		<?php }?>
	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
         <li class="thumb-container <?php if ($_smarty_tpl->tpl_vars['thumbCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-3<?php }?>">
            <img
              class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
              data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
              width="90"
              itemprop="image"
            >
          </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
	  
	  <?php if ($_smarty_tpl->tpl_vars['thumbCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
		<div class="customNavigation">
			<a class="btn prev additional_prev">&nbsp;</a>
			<a class="btn next additional_next">&nbsp;</a>
		</div>
	  <?php }?>
	  
    </div>
  <?php
}
}
/* {/block 'product_images'} */
}
