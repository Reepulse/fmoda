<?php
/* Smarty version 3.1.33, created on 2019-04-18 23:00:59
  from '/home/fmodzvzg/public_html/themes/greylook/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb8d77bd7a679_93363845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48af23c2b1f5ca5a9d4d2dc9198a6866923872b4' => 
    array (
      0 => '/home/fmodzvzg/public_html/themes/greylook/templates/page.tpl',
      1 => 1555244855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb8d77bd7a679_93363845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12197547745cb8d77bd76775_05689939', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2883993075cb8d77bd77194_97164897 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_15862284935cb8d77bd76c24_84678289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2883993075cb8d77bd77194_97164897', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_15513367935cb8d77bd78781_63017548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7830901775cb8d77bd78db1_80896337 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4472835635cb8d77bd78308_57392545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15513367935cb8d77bd78781_63017548', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7830901775cb8d77bd78db1_80896337', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12708843855cb8d77bd79b14_19206095 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16024035785cb8d77bd796f1_80404508 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12708843855cb8d77bd79b14_19206095', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12197547745cb8d77bd76775_05689939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12197547745cb8d77bd76775_05689939',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_15862284935cb8d77bd76c24_84678289',
  ),
  'page_title' => 
  array (
    0 => 'Block_2883993075cb8d77bd77194_97164897',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4472835635cb8d77bd78308_57392545',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15513367935cb8d77bd78781_63017548',
  ),
  'page_content' => 
  array (
    0 => 'Block_7830901775cb8d77bd78db1_80896337',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16024035785cb8d77bd796f1_80404508',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12708843855cb8d77bd79b14_19206095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15862284935cb8d77bd76c24_84678289', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4472835635cb8d77bd78308_57392545', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16024035785cb8d77bd796f1_80404508', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
