<?php /* Smarty version Smarty-3.1.19, created on 2016-11-27 14:11:44
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19055257583acd80e76176-96875053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '793ae76b6213ba4f717da4474fbfb5b77d0b277a' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/hook/header.tpl',
      1 => 1480236481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19055257583acd80e76176-96875053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post_title' => 0,
    'post_description' => 0,
    'post_image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583acd810a9115_31158890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583acd810a9115_31158890')) {function content_583acd810a9115_31158890($_smarty_tpl) {?>
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:type" content="article" />
<meta property="og:site_name" content="<?php echo htmlspecialchars(Configuration::get('PS_SHOP_NAME'), ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['post_image']->value)&&!empty($_smarty_tpl->tpl_vars['post_image']->value)) {?>
<meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_image']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<meta property="fb:admins" content="<?php echo intval(Configuration::get('PH_BLOG_FACEBOOK_MODERATOR'));?>
"/>
<meta property="fb:app_id" content="<?php echo intval(Configuration::get('PH_BLOG_FACEBOOK_APP_ID'));?>
"/><?php }} ?>
