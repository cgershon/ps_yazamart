<?php /* Smarty version Smarty-3.1.19, created on 2016-11-27 10:49:50
         compiled from "/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/admin/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275971840583a9e2e990f11-08518409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd056389adcd0c8cece40487ef1212582e9fd893b' => 
    array (
      0 => '/var/www/vhosts/konim.biz/ps_yazmart/modules/ph_simpleblog/views/templates/admin/welcome.tpl',
      1 => 1480236481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275971840583a9e2e990f11-08518409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583a9e2eb4ea91_89723330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583a9e2eb4ea91_89723330')) {function content_583a9e2eb4ea91_89723330($_smarty_tpl) {?><div class="panel">
	<div class="panel-heading">
		<?php echo smartyTranslate(array('s'=>'Blog for PrestaShop','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

	</div>

	<p><?php echo smartyTranslate(array('s'=>'Thank you for choosing our module. Remember that if you need help we\'re available on http://prestahome.ticksy.com','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</p>
	<p><?php echo smartyTranslate(array('s'=>'You can start fun with Blog for PrestaShop by going to Blog for PrestaShop -> Posts','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</p>
</div>

<div class="panel">
	<div class="panel-heading">
		<?php echo smartyTranslate(array('s'=>'PrestaHome Newsletter - Stay updated!','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

	</div>
	<form action="//prestahome.us9.list-manage.com/subscribe/post?u=141a9ffd729586fe723fb1eaf&amp;id=711790c865" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate defaultForm form-horizontal" target="_blank" novalidate>
		<div class="form-wrapper">
			<p class="text-center">
				<img src="<?php echo $_smarty_tpl->tpl_vars['module_path']->value;?>
logo-big.png" alt="<?php echo smartyTranslate(array('s'=>'PrestaHome Newsletter','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
" style="max-width: 150px;" />
			</p>
			<div class="row">
				<div class="col-lg-4 col-lg-push-4 alert alert-info">
					<?php echo smartyTranslate(array('s'=>'If you\'re interested in our work, and you want to receive information about PrestaHome new products, updates or new articles on our blog, you can add your e-mail to PrestaHome Newsletter list!','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-5">
					<?php echo smartyTranslate(array('s'=>'Your e-mail address:','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

				</label>
				<div class="col-lg-6 ">
					<div class="input-group" style="width: 40%;">
						<input type="text" name="EMAIL">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-5">
					<?php echo smartyTranslate(array('s'=>'Your First Name:','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

				</label>
				<div class="col-lg-6 ">
					<div class="input-group" style="width: 40%;">
						<input type="text" name="FNAME" placeholder="<?php echo smartyTranslate(array('s'=>'optional','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
" />
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-5">
					<?php echo smartyTranslate(array('s'=>'Your Last Name:','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

				</label>
				<div class="col-lg-6">
					<div class="input-group" style="width: 40%;">
						<input type="text" name="LNAME" placeholder="<?php echo smartyTranslate(array('s'=>'optional','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
" />
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-5">
					<?php echo smartyTranslate(array('s'=>'Your website URL:','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

				</label>
				<div class="col-lg-6 ">
					<div class="input-group" style="width: 40%;">
						<input type="text" name="MMERGE3" placeholder="<?php echo smartyTranslate(array('s'=>'optional','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
" />
					</div>
				</div>
			</div>
		</div>
		<div style="position: absolute; left: -5000px;"><input type="text" name="b_141a9ffd729586fe723fb1eaf_711790c865" tabindex="-1" value=""></div>
	<div class="panel-footer">
		<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default pull-right">
			<i class="process-icon-save"></i>
			<?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

		</button>
	</div>
	</form>
</div>

<?php if (Configuration::get('PH_BLOG_ADVERTISING')) {?>
<iframe style="overflow:hidden;border:1px solid #f0f0f0;border-radius:10px;width:100%;height:175px;" src="https://api.prestahome.com/check_offer.php?from=ph_simpleblog" border="0"></iframe>
<small><?php echo smartyTranslate(array('s'=>'You can disable this panel in the Settings','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</small>
<?php }?><?php }} ?>
