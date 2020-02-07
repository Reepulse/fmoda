<?php
/* Smarty version 3.1.33, created on 2019-04-20 20:45:56
  from '/home/fmodzvzg/public_html/themes/greylook/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbb5ad4b99b88_81861829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb30a85cfbe6ba0dd67b99f06e3490b9418a56d9' => 
    array (
      0 => '/home/fmodzvzg/public_html/themes/greylook/templates/errors/not-found.tpl',
      1 => 1555244855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbb5ad4b99b88_81861829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17668551605cbb5ad4b971f8_15841082', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_20733343045cbb5ad4b98236_67372129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_15585114215cbb5ad4b98e22_66376174 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_17668551605cbb5ad4b971f8_15841082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17668551605cbb5ad4b971f8_15841082',
  ),
  'search' => 
  array (
    0 => 'Block_20733343045cbb5ad4b98236_67372129',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_15585114215cbb5ad4b98e22_66376174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h4>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20733343045cbb5ad4b98236_67372129', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15585114215cbb5ad4b98e22_66376174', 'hook_not_found', $this->tplIndex);
?>


  <?php
}
}
/* {/block 'page_content'} */
}
