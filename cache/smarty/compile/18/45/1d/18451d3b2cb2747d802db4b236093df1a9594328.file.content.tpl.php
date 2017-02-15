<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 14:23:27
         compiled from "/var/www/vhosts/konim.biz/ps_boutique/adminKO/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92328888557dfcaafbfcf49-78644033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18451d3b2cb2747d802db4b236093df1a9594328' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_boutique/adminKO/themes/default/template/content.tpl',
      1 => 1474137652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92328888557dfcaafbfcf49-78644033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfcaafc09658_99901765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfcaafc09658_99901765')) {function content_57dfcaafc09658_99901765($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
