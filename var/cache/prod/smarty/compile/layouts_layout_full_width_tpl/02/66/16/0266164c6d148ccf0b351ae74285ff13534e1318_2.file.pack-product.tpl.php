<?php
/* Smarty version 3.1.33, created on 2018-12-23 21:11:36
  from 'D:\xamppp\htdocs\jms_freshy\themes\jms_freshy\templates\catalog\_partials\miniatures\pack-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c204058f273e8_36827441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0266164c6d148ccf0b351ae74285ff13534e1318' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_freshy\\themes\\jms_freshy\\templates\\catalog\\_partials\\miniatures\\pack-product.tpl',
      1 => 1542795069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c204058f273e8_36827441 (Smarty_Internal_Template $_smarty_tpl) {
?><article>
  <div class="card">
    <div class="pack-product-container">
      <div class="thumb-mask">
        <div class="mask">
          <img
            src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"
            alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
            data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          >
        </div>
      </div>
      <div class="pack-product-name">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

      </div>
      <div class="pack-product-price">
        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</strong>
      </div>
      <div class="pack-product-quantity">
        <span>x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['pack_quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    </div>
  </div>
</article>


<?php }
}
