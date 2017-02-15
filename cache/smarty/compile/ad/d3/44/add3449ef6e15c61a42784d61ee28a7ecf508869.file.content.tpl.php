<?php /* Smarty version Smarty-3.1.19, created on 2016-11-16 13:35:23
         compiled from "/var/www/vhosts/konim.biz/ps_pazart/adminKO/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1118208897582c447b394cc7-37397102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'add3449ef6e15c61a42784d61ee28a7ecf508869' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_pazart/adminKO/themes/default/template/content.tpl',
      1 => 1479200161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1118208897582c447b394cc7-37397102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582c447b39dbb1_05471859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c447b39dbb1_05471859')) {function content_582c447b39dbb1_05471859($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
