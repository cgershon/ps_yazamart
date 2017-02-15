<?php /* Smarty version Smarty-3.1.19, created on 2016-11-16 13:35:22
         compiled from "/var/www/vhosts/konim.biz/ps_pazart/adminKO/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1402327769582c447a997c53-25740600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38ff44c36ce5e13d4b726826da6e53c1e632d081' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_pazart/adminKO/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1479200162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1402327769582c447a997c53-25740600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582c447a9a6408_36783224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c447a9a6408_36783224')) {function content_582c447a9a6408_36783224($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
