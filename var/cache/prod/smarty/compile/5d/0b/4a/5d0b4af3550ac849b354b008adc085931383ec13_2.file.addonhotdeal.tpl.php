<?php
/* Smarty version 3.1.33, created on 2019-01-04 04:26:31
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\modules\jmspagebuilder\views\templates\hook\addonhotdeal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2f26c7292d69_80774029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d0b4af3550ac849b354b008adc085931383ec13' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\modules\\jmspagebuilder\\views\\templates\\hook\\addonhotdeal.tpl',
      1 => 1545903982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2f26c7292d69_80774029 (Smarty_Internal_Template $_smarty_tpl) {
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
					<div class="product-box product-preview js-product-miniature" itemtype="http://schema.org/Product" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20441221675c2f26c7267de1_53108670', 'product_thumbnail');
?>

						<a class="addToWishlist product-btn" onclick="WishlistCart('wishlist_block_list', 'add', '26', false, 1); return false;" data-id-product="26" title="Add to Wishlist"></a>


						<div class="product-info hotdeal">
							<div class="countdown" id="countdown-<?php echo $_smarty_tpl->tpl_vars['hotdeals']->value[$_smarty_tpl->tpl_vars['k']->value]['id_hotdeals'];?>
"><?php echo $_smarty_tpl->tpl_vars['hotdeals']->value[$_smarty_tpl->tpl_vars['k']->value]['deals_time'];?>
</div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5677220135c2f26c726fae9_63779031', 'product_name');
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17678195245c2f26c7273960_38064449', 'product_price_and_shipping');
?>

						</div>

						<div class="product_action">
							<button <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>" class="ajax-add-to-cart product-btn cart-button btn-effect1 <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] < 1) {?>disabled<?php }?>" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-minimal-quantity="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" data-token="<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value) && $_smarty_tpl->tpl_vars['static_token']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');
}?>">
								<span class="fa fa-spin fa-spinner"></span>
								<span class="fa fa-check"></span>
								<span class="text-addcart"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>		
								<span class="text-outofstock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>			
						   	</button>
						   	<a data-link-action="quickview" class="quick-view product-btn hidden-xs" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
								Quick view
							</a>
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
class Block_20441221675c2f26c7267de1_53108670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_20441221675c2f26c7267de1_53108670',
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
						 </div>
						<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_5677220135c2f26c726fae9_63779031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_5677220135c2f26c726fae9_63779031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							   	<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="product-link"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
							<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_17678195245c2f26c7273960_38064449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_17678195245c2f26c7273960_38064449',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
									<div class="content_price">
									  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


									  	<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
										  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

										  	<span class="old price"><?php echo $_smarty_tpl->tpl_vars['product']->value['regular_price'];?>
</span>
										<?php }?>

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
}
