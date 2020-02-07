<?php
/* Smarty version 3.1.33, created on 2019-04-20 20:45:56
  from '/home/fmodzvzg/public_html/themes/greylook/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbb5ad4ba40b5_73895456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a0e7d3cb0d32b425dcec97fb882864740648ea' => 
    array (
      0 => '/home/fmodzvzg/public_html/themes/greylook/templates/_partials/footer.tpl',
      1 => 1555269272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbb5ad4ba40b5_73895456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-before">
	<div class="container">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8910794085cbb5ad4b9fd90_47000687', 'hook_footer_before');
?>

	</div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row footer">
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18422388145cbb5ad4ba0af6_24608534', 'hook_footer');
?>

    </div>
	
   	
    
  </div>
</div>
<div class="footer-after">
	<div class="container">
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9180073785cbb5ad4ba1744_46879318', 'hook_footer_after');
?>

	  <div class="row">
      <div class="col-md-6">
        <p class="copyright">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11936292535cbb5ad4ba2383_84232834', 'copyright_link');
?>

        </p>
      </div>
    </div>
	</div>  
</div>
<a class="top_button" href="#" style="">&nbsp;</a>
<?php }
/* {block 'hook_footer_before'} */
class Block_8910794085cbb5ad4b9fd90_47000687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_8910794085cbb5ad4b9fd90_47000687',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_18422388145cbb5ad4ba0af6_24608534 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_18422388145cbb5ad4ba0af6_24608534',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_9180073785cbb5ad4ba1744_46879318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_9180073785cbb5ad4ba1744_46879318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_11936292535cbb5ad4ba2383_84232834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_11936292535cbb5ad4ba2383_84232834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a class="_blank" href="#" >
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - All rights reserved by %prestashop%','sprintf'=>array('%prestashop%'=>'F Moda','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme'),$_smarty_tpl ) );?>

          </a>
          <?php
}
}
/* {/block 'copyright_link'} */
}
