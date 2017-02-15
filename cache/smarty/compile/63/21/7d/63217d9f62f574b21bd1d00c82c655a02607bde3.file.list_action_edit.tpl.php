<?php /* Smarty version Smarty-3.1.19, created on 2016-12-02 04:58:57
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/adminKO/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20936010065840e3714af274-87312333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63217d9f62f574b21bd1d00c82c655a02607bde3' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/adminKO/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1479200162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20936010065840e3714af274-87312333',
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
  'unifunc' => 'content_5840e3714df6b6_44956079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5840e3714df6b6_44956079')) {function content_5840e3714df6b6_44956079($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
