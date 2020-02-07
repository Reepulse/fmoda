<?php
/* Smarty version 3.1.33, created on 2019-04-18 23:00:59
  from '/home/fmodzvzg/public_html/themes/greylook/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb8d77bd72cd9_41488989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70087483d288c99bf75f9f540fd2d2e5b7795cda' => 
    array (
      0 => '/home/fmodzvzg/public_html/themes/greylook/templates/index.tpl',
      1 => 1555244855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb8d77bd72cd9_41488989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14404853015cb8d77bd6d4e0_75959260', 'page_content_container');
?>

	
	
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_9571012645cb8d77bd6daa0_65806243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_15720847355cb8d77bd719e6_44894020 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11105880675cb8d77bd71577_35172069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15720847355cb8d77bd719e6_44894020', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14404853015cb8d77bd6d4e0_75959260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14404853015cb8d77bd6d4e0_75959260',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9571012645cb8d77bd6daa0_65806243',
  ),
  'page_content' => 
  array (
    0 => 'Block_11105880675cb8d77bd71577_35172069',
  ),
  'hook_home' => 
  array (
    0 => 'Block_15720847355cb8d77bd719e6_44894020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9571012645cb8d77bd6daa0_65806243', 'page_content_top', $this->tplIndex);
?>

        
		<!-- Pixothemes start -->	
			<section class="tm-hometabcontent container">
				<h2 class="h1 products-section-title text-capitalize"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top categories','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
				<div class="tabs">
					<ul id="home-page-tabs" class="nav nav-tabs clearfix">
						<li class="nav-item">
							<a data-toggle="tab" href="#featureProduct" class="nav-link active" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab" href="#newProduct" class="nav-link" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab" href="#bestseller" class="nav-link" data-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div id="featureProduct" class="tm_productinner tab-pane active">	
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPxFeature'),$_smarty_tpl ) );?>

						</div>
						<div id="newProduct" class="tm_productinner tab-pane">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPxNew'),$_smarty_tpl ) );?>

						</div>
						<div id="bestseller" class="tm_productinner tab-pane">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPxBestseller'),$_smarty_tpl ) );?>

						</div>
					</div>					
				</div>
			</section>
			

		<!-- Pixothemes end -->
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11105880675cb8d77bd71577_35172069', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
