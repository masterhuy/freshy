<?php
/* Smarty version 3.1.33, created on 2018-12-11 05:31:47
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0f9213e00b82_32117845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b46fde5229a633a0788f81e9b51b1c9fd7fa1a07' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\templates\\page.tpl',
      1 => 1542795069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0f9213e00b82_32117845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1212034355c0f9213dfcd06_77052273', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_17843871315c0f9213dfcd05_26861214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12804315195c0f9213e00b81_61123289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4760125985c0f9213dfcd06_95805161 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block row">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17843871315c0f9213dfcd05_26861214', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12804315195c0f9213e00b81_61123289', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_8184343815c0f9213e00b87_54663006 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1212034355c0f9213dfcd06_77052273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1212034355c0f9213dfcd06_77052273',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4760125985c0f9213dfcd06_95805161',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17843871315c0f9213dfcd05_26861214',
  ),
  'page_content' => 
  array (
    0 => 'Block_12804315195c0f9213e00b81_61123289',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8184343815c0f9213e00b87_54663006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4760125985c0f9213dfcd06_95805161', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8184343815c0f9213e00b87_54663006', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
