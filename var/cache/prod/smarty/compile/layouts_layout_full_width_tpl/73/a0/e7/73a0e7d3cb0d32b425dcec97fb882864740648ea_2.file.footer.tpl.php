<?php
/* Smarty version 3.1.33, created on 2019-04-20 20:21:08
  from '/home/fmodzvzg/public_html/themes/greylook/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbb55047be495_29383594',
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
function content_5cbb55047be495_29383594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="footer-before">
	<div class="container">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21055963085cbb55047ba420_74373819', 'hook_footer_before');
?>

	</div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row footer">
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2989015755cbb55047bb187_09769822', 'hook_footer');
?>

    </div>
	
   	
    
  </div>
</div>
<div class="footer-after">
	<div class="container">
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1723687905cbb55047bbd32_53001709', 'hook_footer_after');
?>

	  <div class="row">
      <div class="col-md-6">
        <p class="copyright">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14208708325cbb55047bc8c9_71570424', 'copyright_link');
?>

        </p>
      </div>
    </div>
	</div>  
</div>
<a class="top_button" href="#" style="">&nbsp;</a>
<?php }
/* {block 'hook_footer_before'} */
class Block_21055963085cbb55047ba420_74373819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_21055963085cbb55047ba420_74373819',
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
class Block_2989015755cbb55047bb187_09769822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_2989015755cbb55047bb187_09769822',
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
class Block_1723687905cbb55047bbd32_53001709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_1723687905cbb55047bbd32_53001709',
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
class Block_14208708325cbb55047bc8c9_71570424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_14208708325cbb55047bc8c9_71570424',
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
