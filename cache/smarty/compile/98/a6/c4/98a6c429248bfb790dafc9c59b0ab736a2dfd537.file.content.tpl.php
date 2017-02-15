<?php /* Smarty version Smarty-3.1.19, created on 2016-11-11 00:20:47
         compiled from "/var/www/vhosts/konim.biz/ps_roval/adminKO/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13359858875824f2bf92a2d0-60129801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98a6c429248bfb790dafc9c59b0ab736a2dfd537' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_roval/adminKO/themes/default/template/controllers/localization/content.tpl',
      1 => 1474137652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13359858875824f2bf92a2d0-60129801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5824f2bf939686_11794984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5824f2bf939686_11794984')) {function content_5824f2bf939686_11794984($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
