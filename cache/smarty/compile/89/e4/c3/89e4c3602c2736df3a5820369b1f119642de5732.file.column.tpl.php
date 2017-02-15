<?php /* Smarty version Smarty-3.1.19, created on 2016-11-11 11:04:32
         compiled from "/var/www/vhosts/konim.biz/ps_roval/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1121253444582589a0ebee82-35851924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89e4c3602c2736df3a5820369b1f119642de5732' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_roval/modules/paypal/views/templates/hook/column.tpl',
      1 => 1474137660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1121253444582589a0ebee82-35851924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582589a0ee37d6_07356672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582589a0ee37d6_07356672')) {function content_582589a0ee37d6_07356672($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir_ssl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['logo']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>
