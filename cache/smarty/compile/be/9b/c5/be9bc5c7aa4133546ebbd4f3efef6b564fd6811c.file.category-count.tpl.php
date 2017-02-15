<?php /* Smarty version Smarty-3.1.19, created on 2016-11-29 13:49:22
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316966965583d6b429a78b5-64868028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be9bc5c7aa4133546ebbd4f3efef6b564fd6811c' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/themes/default-bootstrap/category-count.tpl',
      1 => 1479200172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316966965583d6b429a78b5-64868028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583d6b42a8ded1_49330729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583d6b42a8ded1_49330729')) {function content_583d6b42a8ded1_49330729($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
