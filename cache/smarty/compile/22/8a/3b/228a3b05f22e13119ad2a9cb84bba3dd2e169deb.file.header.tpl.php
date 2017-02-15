<?php /* Smarty version Smarty-3.1.19, created on 2016-12-01 19:08:15
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/modules/bestkit_psubscription/views/templates/front/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1298667928584058ff71a420-79570957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '228a3b05f22e13119ad2a9cb84bba3dd2e169deb' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/modules/bestkit_psubscription/views/templates/front/header.tpl',
      1 => 1479200172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1298667928584058ff71a420-79570957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_cms_of_terms' => 0,
    'subscribe' => 0,
    'subscription_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_584058ff753907_71282541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584058ff753907_71282541')) {function content_584058ff753907_71282541($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/vhosts/konim.biz/ps_yazmart/tools/smarty/plugins/modifier.escape.php';
?><script>
	var bestkitController = "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bestkit_psubscription','front',array()), false);?>
";
	<?php if ($_smarty_tpl->tpl_vars['id_cms_of_terms']->value) {?>
		var bestkitTermsUrl = "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['id_cms_of_terms']->value), false);?>
";
		if (bestkitTermsUrl.indexOf('?') == -1) {
			bestkitTermsUrl += '?content_only=1';
		} else {
			bestkitTermsUrl += '&content_only=1';
		}
	<?php } else { ?>
		var bestkitTermsUrl = 0;
	<?php }?>

	if (bestkitController.indexOf('?') == -1) {
		bestkitController += '?';
	} else {
		bestkitController += '&';
	}

	var bestkitTranslator = {
		subscription: '<?php echo smartyTranslate(array('s'=>'Subscription ','mod'=>'bestkit_psubscription','js'=>1),$_smarty_tpl);?>
',
		from: '<?php echo smartyTranslate(array('s'=>' from ','mod'=>'bestkit_psubscription','js'=>1),$_smarty_tpl);?>
',
		subscribe: '<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['subscribe']->value,'mod'=>'bestkit_psubscription','js'=>1),$_smarty_tpl);?>
',
	}; 

	var bestkitSubscriptionCount = <?php echo intval($_smarty_tpl->tpl_vars['subscription_count']->value);?>
;
</script>
<?php }} ?>
