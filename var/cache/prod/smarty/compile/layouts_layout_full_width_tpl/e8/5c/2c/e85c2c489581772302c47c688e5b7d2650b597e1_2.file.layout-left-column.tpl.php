<?php
/* Smarty version 3.1.33, created on 2018-12-25 05:04:27
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2200abc8fcc0_95230582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85c2c489581772302c47c688e5b7d2650b597e1' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\templates\\layouts\\layout-left-column.tpl',
      1 => 1542795069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2200abc8fcc0_95230582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13540342835c2200abc8fcc1_18730451', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11972677165c2200abc8fcc2_91697353', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_13540342835c2200abc8fcc1_18730451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_13540342835c2200abc8fcc1_18730451',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_12415422165c2200abc8fcc7_62626224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_11972677165c2200abc8fcc2_91697353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_11972677165c2200abc8fcc2_91697353',
  ),
  'content' => 
  array (
    0 => 'Block_12415422165c2200abc8fcc7_62626224',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="left-column col-sm-12 col-md-9 col-lg-9 col-xs-12">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12415422165c2200abc8fcc7_62626224', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
