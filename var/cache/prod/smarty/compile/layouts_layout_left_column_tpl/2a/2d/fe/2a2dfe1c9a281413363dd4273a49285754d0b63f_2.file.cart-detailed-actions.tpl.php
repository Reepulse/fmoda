<?php
/* Smarty version 3.1.33, created on 2019-04-20 13:57:43
  from '/home/fmodzvzg/public_html/themes/greylook/templates/checkout/_partials/cart-detailed-actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbafb27030692_28135622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a2dfe1c9a281413363dd4273a49285754d0b63f' => 
    array (
      0 => '/home/fmodzvzg/public_html/themes/greylook/templates/checkout/_partials/cart-detailed-actions.tpl',
      1 => 1555244855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbafb27030692_28135622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19168986005cbafb2702cb54_53381310', 'cart_detailed_actions');
?>

<?php }
/* {block 'cart_detailed_actions'} */
class Block_19168986005cbafb2702cb54_53381310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_actions' => 
  array (
    0 => 'Block_19168986005cbafb2702cb54_53381310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="checkout cart-detailed-actions card-block">
  <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
    <div class="alert alert-warning" role="alert">
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <div class="text-xs-center">
      <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    </div>
    <?php } elseif (empty($_smarty_tpl->tpl_vars['cart']->value['products'])) {?>
      <div class="text-xs-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
      </div>
  <?php } else { ?>
    <div class="text-xs-center">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayExpressCheckout'),$_smarty_tpl ) );?>

    </div>
  <?php }?>
</div>
<?php
}
}
/* {/block 'cart_detailed_actions'} */
}
