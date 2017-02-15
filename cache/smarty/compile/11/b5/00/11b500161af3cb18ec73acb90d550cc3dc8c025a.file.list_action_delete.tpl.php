<?php /* Smarty version Smarty-3.1.19, created on 2016-11-16 13:35:22
         compiled from "/var/www/vhosts/konim.biz/ps_pazart/adminKO/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:766633401582c447a9adfe1-21124723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11b500161af3cb18ec73acb90d550cc3dc8c025a' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_pazart/adminKO/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1479200162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '766633401582c447a9adfe1-21124723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582c447a9c6574_32204493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c447a9c6574_32204493')) {function content_582c447a9c6574_32204493($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
