<?php
/* Smarty version 3.1.33, created on 2019-01-04 04:26:31
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\modules\jmspagebuilder\views\templates\hook\addontestimonial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2f26c72e4e03_65240506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8d1974fe82fc662d639a758570597ca9f2e39ae' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\modules\\jmspagebuilder\\views\\templates\\hook\\addontestimonial.tpl',
      1 => 1543833675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2f26c72e4e03_65240506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_freshy\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">
	var testi_items = 3,
	    testi_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>,
	    testi_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>,
	    testi_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>,
	    testi_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>;
		var p_nav_testi = <?php if ($_smarty_tpl->tpl_vars['navigation']->value == 1) {?>true<?php } else { ?>false<?php }?>;
	    var p_pag_testi = <?php if ($_smarty_tpl->tpl_vars['pagination']->value == 1) {?>true<?php } else { ?>false<?php }?>;
		var auto_play_testi = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value == 1) {?>true<?php } else { ?>false<?php }?>;
	
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
	<p class="addon-desc"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>	

<div id="testimonial">
	<div class="testimonial_box">
		<div class="testimonial-carousel">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials_slides']->value, 'testimonials_slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['testimonials_slide']->value) {
?>
				<div class="item">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials_slide']->value, 'testimonial');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->value) {
?>
						<div class="testimonial-box">
						<div class="testimonial-info">
							<div class="testimonial-comment" >
								<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimonial']->value['comment'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

							</div>
							<?php if ($_smarty_tpl->tpl_vars['show_time']->value) {?>
								<div class="testimonial-date">
									<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format($_smarty_tpl->tpl_vars['testimonial']->value['posttime'],"%b %e, %Y"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

								</div>
							<?php }?>
						</div>
						<div class="testimonial-img">
							<?php if ($_smarty_tpl->tpl_vars['show_image']->value) {?>
								<img class="img-responsive" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
resized_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimonial']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimonial']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
							<?php }?>
							<div class="info_people">
								<div class="testimonial-author">
									<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimonial']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

								</div>
								<?php if ($_smarty_tpl->tpl_vars['show_office']->value) {?>
									<span class="show_office">
										<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimonial']->value['office'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

									</span>
								<?php }?>
							</div>
							<div class="id_testimonial">#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['testimonial']->value['id_testimonial'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
							
						</div>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div>

<?php }
}
