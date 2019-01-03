<?php
/* Smarty version 3.1.33, created on 2019-01-03 04:33:12
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2dd6d8e5c3f8_39607650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '005e5a78ccbc5be58ca4c011f3af37ab14cc4ea6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1544151520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5c2dd6d8e5c3f8_39607650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="filters-panel">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 view-mode left clearfix">
			<label class="sort-by">View mode:</label>
			<div class="button">
				<a class="view-grid <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 1) {?>active<?php }?>" href="#">
					<i class="fa fa-th"></i>
				</a> 
				<a class="view-list <?php if ($_smarty_tpl->tpl_vars['jpb_grid']->value == 0) {?>active<?php }?>" href="#">
					<i class="fa fa-th-list"></i>
				</a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 right">
			<div class="view-mode ">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1893482265c2dd6d8e5c3f2_69187307', 'sort_by');
?>

			</div>
		</div>
	</div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_1893482265c2dd6d8e5c3f2_69187307 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_1893482265c2dd6d8e5c3f2_69187307',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
			<?php
}
}
/* {/block 'sort_by'} */
}
