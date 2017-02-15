<?php /* Smarty version Smarty-3.1.19, created on 2016-12-02 04:59:14
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/adminKO/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10070343095840e382a5c6d5-68399634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '187bb723d3e51554b9793972d0ea773bc289bccb' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/adminKO/themes/default/template/content.tpl',
      1 => 1479200161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10070343095840e382a5c6d5-68399634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5840e382a6c396_48453315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5840e382a6c396_48453315')) {function content_5840e382a6c396_48453315($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
