<?php
/* Smarty version 3.1.33, created on 2019-01-03 05:30:38
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\templates\checkout\_partials\cart-detailed-product-line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2de44e040528_15789556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7570d1fc26b26c1df0b4b201f8cd224301b9c0a2' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\templates\\checkout\\_partials\\cart-detailed-product-line.tpl',
      1 => 1545192323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2de44e040528_15789556 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-line-grid">
    <!-- remove button -->
    <div class="row_cs remove-button col-lg-1 col-md-1 col-sm-1 col-xs-12">
        <div class="cart-line-product-actions ">
            <a
                class                     = "remove-from-cart"
                rel                       = "nofollow"
                href                      = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
                data-link-action          = "delete-from-cart"
                data-id-product           = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                data-id-product-attribute = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
                data-id-customization     = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript' )), ENT_QUOTES, 'UTF-8');?>
"
            >
            <?php if (!isset($_smarty_tpl->tpl_vars['product']->value['is_gift']) || !$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
                <i class="pull-xs-left fa fa-times"></i>
            <?php }?>
            </a>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartExtraProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

        </div>
    </div> 
    <!--  products -->
    <div class="row_cs product-info col-lg-5 col-md-5 col-sm-5 col-xs-12">
        <span class="product-image media-middle">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
">
            <div class="product-line-info">
                <a class="label product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-id_customization="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <div class="product-line-info">
                        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
?>
                    <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
                                </div>
                                <div class="modal-body">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                                        <div class="product-customization-line row">
                                            <div class="col-sm-3 col-xs-4 label">
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                                            </div>
                                            <div class="col-sm-9 col-xs-8 value">
                                                <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                                    <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                                                    <?php } else { ?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                                                    <?php }?>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </span>
    </div>

    <!--  price -->
    <div class="row_cs product-price col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <div class="product-line-info">
    		<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
                <div class="unit-price-cart"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</div>
            <?php }?>
        </div>
    </div>

    <!--  qty -->
    <div class="row_cs product-qty col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift']) && $_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
            <span class="gift-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } else { ?>
        <input
            class="js-cart-line-product-quantity"
            data-down-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
            data-up-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
            data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
            data-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
            type="text"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
            name="product-quantity-spin"
            min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
        />
        <?php }?>
    </div>

    <!--  total -->
    <div class="row_cs product-total col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <span class="product-price">
            <span class="value">
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift']) && $_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
                  <span class="gift"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
                <?php } else { ?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
            </span>
             <span class="value"> </span>
        </span>
    </div>

    <div class="clearfix"></div>
</div>
<?php }
}
