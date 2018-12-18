<?php
/* Smarty version 3.1.33, created on 2018-12-18 04:22:24
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\modules\jmspagebuilder\views\templates\hook\addonhotdeal_h6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c18bc50e61469_16599314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '353ac95918c1d3b01583e63e6bf4beb7ef4d603c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\modules\\jmspagebuilder\\views\\templates\\hook\\addonhotdeal_h6.tpl',
      1 => 1544061093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5c18bc50e61469_16599314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
	var h_items = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo $_smarty_tpl->tpl_vars['items_show']->value;
} else { ?>1<?php }?>,
	    h_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo $_smarty_tpl->tpl_vars['items_show']->value;
} else { ?>1<?php }?>,
	    h_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {
echo $_smarty_tpl->tpl_vars['items_show_md']->value;
} else { ?>1<?php }?>,
	    h_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {
echo $_smarty_tpl->tpl_vars['items_show_sm']->value;
} else { ?>1<?php }?>,
	    h_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {
echo $_smarty_tpl->tpl_vars['items_show_xs']->value;
} else { ?>1<?php }?>;
	    h_nav = <?php if ($_smarty_tpl->tpl_vars['navigation']->value == 1) {?>true<?php } else { ?>false<?php }?>;
		h_pag = <?php if ($_smarty_tpl->tpl_vars['pagination']->value == 1) {?>true<?php } else { ?>false<?php }?>;
		h_auto_play_carousel = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value == 1) {?>true<?php } else { ?>false<?php }?>;
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }?>
<div class="jms-hotdeal">
	<div class="product_box">
		<div class="hotdeal-carousel">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>	
				<div class="item">
					<div class="product-box" itemtype="http://schema.org/Product" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" data-id-product-attribute="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
" >
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17373524485c18bc50e26ad8_56335453', 'product_thumbnail');
?>

						<div class="product-info hotdeal">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14490325475c18bc50e364d1_56826467', 'product_name');
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11505421565c18bc50e364d0_28284125', 'product_price_and_shipping');
?>


							<div class="countdown" id="countdown-<?php echo $_smarty_tpl->tpl_vars['hotdeals']->value[$_smarty_tpl->tpl_vars['k']->value]['id_hotdeals'];?>
"><?php echo $_smarty_tpl->tpl_vars['hotdeals']->value[$_smarty_tpl->tpl_vars['k']->value]['deals_time'];?>
</div>
						</div>
						<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
						  	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20562349495c18bc50e45ed8_63040323', 'product_variants');
?>

						</div>
		  			</div>
		  		</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
	<?php if (($_smarty_tpl->tpl_vars['showall_link']->value == '1')) {?> 
		<div class="hotdeal-viewall col-lg-12 col-sm-12 col-xs-12 col-md-12">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('hotdeals','allproduct');?>
" class="btn-shopnow btn-effect1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All Product','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
</a>
		</div>
	<?php }?>
</div><?php }
/* {block 'product_thumbnail'} */
class Block_17373524485c18bc50e26ad8_56335453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_17373524485c18bc50e26ad8_56335453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="img-hotdeal">
						  	<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="product-image">
								<img class="img-responsive"
								  src = "<?php echo $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'];?>
"
								  alt = "<?php echo $_smarty_tpl->tpl_vars['product']->value['cover']['legend'];?>
"
								  data-full-size-image-url = "<?php echo $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'];?>
"
								>
						 	</a>
						 	<?php if (isset($_smarty_tpl->tpl_vars['jpb_wishlist']->value) && $_smarty_tpl->tpl_vars['jpb_wishlist']->value) {?>							
								<a class="addToWishlist product-btn" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
', false, 1); return false;" data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Wishlist'),$_smarty_tpl ) );?>
">
								</a>
							<?php }?>			 
						 </div>
						<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_14490325475c18bc50e364d1_56826467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_14490325475c18bc50e364d1_56826467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							   	<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="product-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
							<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_11505421565c18bc50e364d0_28284125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_11505421565c18bc50e364d0_28284125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
									<div class="content_price">
										<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
										  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

										  	<span class="old price"><?php echo $_smarty_tpl->tpl_vars['product']->value['regular_price'];?>
</span>
										<?php }?>
									  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

										<span itemprop="price" class="price new"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
										
										

										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

									</div>
								<?php }?>
							<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_variants'} */
class Block_20562349495c18bc50e45ed8_63040323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_20562349495c18bc50e45ed8_63040323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
							  		<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, true);
?>
								<?php }?>
						  	<?php
}
}
/* {/block 'product_variants'} */
}
