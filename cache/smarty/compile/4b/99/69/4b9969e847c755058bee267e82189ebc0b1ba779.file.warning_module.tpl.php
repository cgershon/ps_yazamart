<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 19:57:03
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/adminKO/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1152835070582def6f2dfe78-62511520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b9969e847c755058bee267e82189ebc0b1ba779' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/adminKO/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1479200161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1152835070582def6f2dfe78-62511520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582def6f47b548_21322963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582def6f47b548_21322963')) {function content_582def6f47b548_21322963($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
