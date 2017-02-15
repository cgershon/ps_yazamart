<?php /* Smarty version Smarty-3.1.19, created on 2016-11-23 21:18:51
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/themes/default-bootstrap/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8450548115835eb9ba5fad0-85795350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdfc5f8603c2c441f44f601b7697ab775c049c34' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/themes/default-bootstrap/modules/blockwishlist/my-account.tpl',
      1 => 1479200172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8450548115835eb9ba5fad0-85795350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5835eb9bb1fb21_18237439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835eb9bb1fb21_18237439')) {function content_5835eb9bb1fb21_18237439($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
