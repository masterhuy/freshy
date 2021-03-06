<?php
/* Smarty version 3.1.33, created on 2018-12-28 02:44:54
  from 'D:\xamppp\htdocs\jms_freshy\admin031gwo77f\themes\default\template\controllers\themes\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c25d47671d619_37407074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a2b319bf0fe4cdeb93ff971c8faf14863b290db' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\admin031gwo77f\\themes\\default\\template\\controllers\\themes\\helpers\\options\\options.tpl',
      1 => 1541535861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c25d47671d619_37407074 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14853735035c25d4766cf415_77605913', "input");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14494655445c25d4766f6514_66941399', "footer");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17455900175c25d47671d618_10947188', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "input"} */
class Block_14853735035c25d4766cf415_77605913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_14853735035c25d4766cf415_77605913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'theme') {?>
		<?php if ($_smarty_tpl->tpl_vars['field']->value['can_display_themes']) {?>
			<div class="col-lg-12">
				<div class="row">

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['themes'], 'theme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
?>
						<div class="col-sm-4 col-lg-3">
							<div class="theme-container">
								<h4 class="theme-title"><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
</h4>
								<div class="thumbnail-wrapper">
									<div class="action-wrapper">
										<div class="action-overlay"></div>
										<div class="action-buttons">
											<div class="btn-group">
												<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'),'html','UTF-8' ));?>
&amp;action=enableTheme&amp;theme_name=<?php echo urlencode($_smarty_tpl->tpl_vars['theme']->value->getName());?>
" class="btn btn-default">
													<i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this theme'),$_smarty_tpl ) );?>

												</a>

												<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="icon-caret-down"></i>&nbsp;
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes'),'html','UTF-8' ));?>
&amp;action=deleteTheme&amp;theme_name=<?php echo urlencode($_smarty_tpl->tpl_vars['theme']->value->getName());?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this theme'),$_smarty_tpl ) );?>
" class="delete">
															<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this theme'),$_smarty_tpl ) );?>

														</a>
													</li>
												</ul>

											</div>
										</div>
									</div>
									<img class="center-block img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getBaseLink();
echo $_smarty_tpl->tpl_vars['theme']->value->get('preview');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
" />
								</div>
							</div>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				</div>
			</div>
		<?php }?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "footer"} */
class Block_14494655445c25d4766f6514_66941399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_14494655445c25d4766f6514_66941399',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['after_tabs'])) {?>
		<?php $_smarty_tpl->_assignInScope('cur_theme', $_smarty_tpl->tpl_vars['categoryData']->value['after_tabs']['cur_theme']);?>
		<div class="row row-padding-top">

			<div class="col-md-3">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="_blank">
					<img class="center-block img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getBaseLink();
echo $_smarty_tpl->tpl_vars['cur_theme']->value->get('preview');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cur_theme']->value->getName();?>
" />
				</a>
			</div>

			<div id="js_theme_form_container" class="col-md-9">
				<h2><?php echo $_smarty_tpl->tpl_vars['cur_theme']->value->getName();?>
 <small>version <?php echo $_smarty_tpl->tpl_vars['cur_theme']->value->get('version');?>
</small></h2>
				<p>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Designed by %s','sprintf'=>array($_smarty_tpl->tpl_vars['cur_theme']->value->get('author.name'))),$_smarty_tpl ) );?>

				</p>

				<hr />
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure your page layouts'),$_smarty_tpl ) );?>
</h4>
				<div class="row">
					<div class="col-sm-8">
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Each page can use a different layout, choose it among the layouts bundled in your theme.'),$_smarty_tpl ) );?>
</p>
					</div>
					<div class="col-sm-4 text-right">
						<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes');?>
&display=configureLayouts">
							<i class="icon icon-file"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose layouts'),$_smarty_tpl ) );?>

						</a>
						<?php if (@constant('_PS_MODE_DEV_')) {?>
							<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes');?>
&amp;action=resetToDefaults&amp;theme_name=<?php echo $_smarty_tpl->tpl_vars['cur_theme']->value->getName();?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset to defaults'),$_smarty_tpl ) );?>

							</a>
						<?php }?>
					</div>
				</div>
			</div>
		</div>

	<?php }?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>


<?php
}
}
/* {/block "footer"} */
/* {block "after"} */
class Block_17455900175c25d47671d618_10947188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_17455900175c25d47671d618_10947188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		// These variable will move the form to another location
		var formToMove = "appearance";
		var formDestination = "js_theme_form_container";
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "after"} */
}
