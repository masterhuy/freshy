<?php
/* Smarty version 3.1.33, created on 2019-01-03 05:18:36
  from 'D:\xamppp\htdocs\jms_freshy\admin031gwo77f\themes\default\template\helpers\tree\tree_node_item_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2de17c2d35b9_27279869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f5cd1f5f5c72167807b842c0eefdf4139f49102' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\admin031gwo77f\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1541535861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2de17c2d35b9_27279869 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
