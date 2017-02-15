<?php /* Smarty version Smarty-3.1.19, created on 2016-11-18 06:01:09
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286009142582d75d959d823-23079519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a1472250456ef61f86834ae1727fc7ed9d552f9' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl',
      1 => 1479405719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286009142582d75d959d823-23079519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582d75d95d1d24_78238898',
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d75d95d1d24_78238898')) {function content_582d75d95d1d24_78238898($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
