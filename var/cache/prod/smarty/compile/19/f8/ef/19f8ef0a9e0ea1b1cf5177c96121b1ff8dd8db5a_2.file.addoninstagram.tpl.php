<?php
/* Smarty version 3.1.33, created on 2018-11-26 23:42:16
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\modules\jmspagebuilder\views\templates\hook\addoninstagram.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfccb2803e5d3_90700915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19f8ef0a9e0ea1b1cf5177c96121b1ff8dd8db5a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagram.tpl',
      1 => 1542795069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfccb2803e5d3_90700915 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-title">
	<h3>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'INSTAGRAM','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

	</h3>
</div>
<div class="instagram-carousel">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['insta_images']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
		<a class="grouped_elements" data-fancybox-group="gallery" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['img']->value['link'];?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram Image','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
"/>
		</a>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
