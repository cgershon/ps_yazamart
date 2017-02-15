<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 11:25:27
         compiled from "/var/www/vhosts/konim.biz/ps_boutique/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198868549257dfa0f702f940-76595548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4586da219dcde2527ddaf19c2019b31fef0f2b29' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_boutique/themes/default-bootstrap/category-count.tpl',
      1 => 1474137662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198868549257dfa0f702f940-76595548',
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
  'unifunc' => 'content_57dfa0f70b75d4_59815974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfa0f70b75d4_59815974')) {function content_57dfa0f70b75d4_59815974($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
