<?php /* Smarty version Smarty-3.1.19, created on 2016-11-11 11:51:28
         compiled from "/var/www/vhosts/konim.biz/ps_roval/adminKO/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130957248582594a0d849c7-61205269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f91b18a6066ec10a449c341fb86a12ef9bf79b65' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_roval/adminKO/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1474137652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130957248582594a0d849c7-61205269',
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
  'unifunc' => 'content_582594a0d8caf4_69849424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582594a0d8caf4_69849424')) {function content_582594a0d8caf4_69849424($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
