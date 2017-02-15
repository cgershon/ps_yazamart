<?php /* Smarty version Smarty-3.1.19, created on 2016-11-18 06:01:09
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/modules/blockspecials/views/templates/hook/blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1202484709582d75d95457e9-56816403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8043b3fb36248bc9a6e4ee5df86954d55af3fb5' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/modules/blockspecials/views/templates/hook/blockspecials-home.tpl',
      1 => 1479405720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1202484709582d75d95457e9-56816403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582d75d9577dd5_59048363',
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582d75d9577dd5_59048363')) {function content_582d75d9577dd5_59048363($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
