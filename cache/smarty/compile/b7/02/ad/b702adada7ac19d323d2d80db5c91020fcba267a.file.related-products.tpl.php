<?php /* Smarty version Smarty-3.1.19, created on 2016-11-27 14:20:17
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/front/related-products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1926734611583acf81223aa2-77586467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b702adada7ac19d323d2d80db5c91020fcba267a' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/front/related-products.tpl',
      1 => 1480236481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1926734611583acf81223aa2-77586467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'related_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583acf8137eb25_26857061',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583acf8137eb25_26857061')) {function content_583acf8137eb25_26857061($_smarty_tpl) {?><div class="post-block simpleblog-related-products">
	<h3 class="block-title"><?php echo smartyTranslate(array('s'=>'Related products','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</h3>

	<div class="simpleblog-related-products-wrapper">
		<?php if (Configuration::get('PH_BLOG_RELATED_PRODUCTS_USE_DEFAULT_LIST')) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['related_products']->value,'is_blog'=>true), 0);?>

		<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['related_products']->value,'is_blog'=>true), 0);?>

		<?php }?>
	</div><!-- .simpleblog-related-products-wrapper -->
</div><!-- .simpleblog-related-products --><?php }} ?>
