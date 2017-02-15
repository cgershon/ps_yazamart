<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 14:41:32
         compiled from "/var/www/vhosts/konim.biz/ps_boutique/modules/blockspecials/views/templates/hook/blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47906699157dfceecd78d57-78300369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0729236f4f19ce3e7c2e1f9b63f2fcefe1f69b64' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_boutique/modules/blockspecials/views/templates/hook/blockspecials-home.tpl',
      1 => 1474137658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47906699157dfceecd78d57-78300369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfceecd8ab00_26614952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfceecd8ab00_26614952')) {function content_57dfceecd8ab00_26614952($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
