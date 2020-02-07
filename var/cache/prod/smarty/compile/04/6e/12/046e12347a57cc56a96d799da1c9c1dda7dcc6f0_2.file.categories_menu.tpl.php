<?php
/* Smarty version 3.1.33, created on 2019-04-20 20:45:56
  from '/home/fmodzvzg/public_html/modules/psblog/views/templates/hook/categories_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbb5ad4b945e1_67876314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '046e12347a57cc56a96d799da1c9c1dda7dcc6f0' => 
    array (
      0 => '/home/fmodzvzg/public_html/modules/psblog/views/templates/hook/categories_menu.tpl',
      1 => 1555489324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbb5ad4b945e1_67876314 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block categories module -->
    <?php if ($_smarty_tpl->tpl_vars['tree']->value) {?>
    <div id="categories_blog_menu" class="block blog-menu">
      <h4 class="block_title"><?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentCategory']->value->title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog Categories','d'=>'Modules.PsBlog.Admin'),$_smarty_tpl ) );
}?></h4>
        <div class="block_content">
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>
        </div>
    </div>
    <?php }?>
    <!-- /Block categories module -->
<?php }
}
