<?php
/* Smarty version 3.1.33, created on 2018-11-22 23:47:32
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\modules\jmsproductvideo\views\templates\hook\jmsproductvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf786641ef1b4_84119156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab1960ab5e9c0b77b7cc275133849676582702d1' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\modules\\jmsproductvideo\\views\\templates\\hook\\jmsproductvideo.tpl',
      1 => 1542795069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf786641ef1b4_84119156 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video\'s Product','mod'=>'jmsproductvideo'),$_smarty_tpl ) );?>
</h3>
<input type = "hidden" id="edit" value="0" name="edit" />
<input type = "hidden" id="position_" value="0" name="position_" />			
<div class="form-group">				
	<label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video Title','mod'=>'jmsproductvideo'),$_smarty_tpl ) );?>
</label>
	<div class="translations tabbable">
		<div class="translationsFields tab-content">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			<div class="translatable-field tab-pane translation-label-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
 <?php if ($_smarty_tpl->tpl_vars['id_lang_default']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>active<?php }?>">													
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('lang', $_smarty_tpl->tpl_vars['language']->value['id_lang']-1);?>						
				<input id="jms_product_titlevideo_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" type="text" class="form-control" name="videotitle[<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
]" value="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);
$_prefixVariable1 = ob_get_clean();
echo (($tmp = @smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['videos']->value[$_prefixVariable1]['title']))===null||$tmp==='' ? '' : $tmp);?>
" />
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			</div>													
			<?php }?>	
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>		
</div>
<div class="form-group">
	<label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video Links','mod'=>'jmsproductvideo'),$_smarty_tpl ) );?>
</label>				
	<div class="translations tabbable">
		<div class="translationsFields tab-content">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			<div class="translatable-field tab-pane translation-label-<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
 <?php if ($_smarty_tpl->tpl_vars['id_lang_default']->value == $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>active<?php }?>">													
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('lang', $_smarty_tpl->tpl_vars['language']->value['id_lang']-1);?>						
				<input id="jms_product_titlevideo_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" type="text" class="form-control" name="videolink[<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
]" value="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);
$_prefixVariable2 = ob_get_clean();
echo (($tmp = @smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['videos']->value[$_prefixVariable2]['link']))===null||$tmp==='' ? '' : $tmp);?>
" />
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			</div>													
			<?php }?>	
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<p class="help-block"> Videos seperate by "," . Eg : https://www.youtube.com/watch?v=GyrH6xiFiT0,https://vimeo.com/63528500 </p>
		</div>
	</div>		
</div><?php }
}
