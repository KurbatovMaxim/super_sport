<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:04:30
         compiled from "Z:\home\livestreet\www/templates/skin/synio\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1755251ac783e25cc29-69776497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70c9e82df16a71b63bd935afeafd25149332770b' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\footer.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1755251ac783e25cc29-69776497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac783e4836d0_84953713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac783e4836d0_84953713')) {function content_51ac783e4836d0_84953713($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_router')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_cfg')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.cfg.php';
?>			<?php echo smarty_function_hook(array('run'=>'content_end'),$_smarty_tpl);?>

		</div> <!-- /content -->
	</div> <!-- /wrapper -->


	
	<footer id="footer">
		<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
			<ul class="footer-list">
				<li class="footer-list-header word-wrap"><?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getLogin();?>
</li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_user_profile'];?>
</a></li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
profile/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_settings'];?>
</a></li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/" class="js-write-window-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
</a></li>
				<?php echo smarty_function_hook(array('run'=>'footer_menu_user_item','oUser'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value),$_smarty_tpl);?>

				<li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
exit/?security_ls_key=<?php echo $_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['exit'];?>
</a></li>
			</ul>
		<?php }else{ ?>
			<ul class="footer-list">
				<li class="footer-list-header word-wrap"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_user_quest_title'];?>
</li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" class="js-registration-form-show"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_submit'];?>
</a></li>
				<li><a href="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" class="js-login-form-show sign-in"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</a></li>
				<?php echo smarty_function_hook(array('run'=>'footer_menu_user_item','isGuest'=>true),$_smarty_tpl);?>

			</ul>
		<?php }?>
		
		<ul class="footer-list">
			<li class="footer-list-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['footer_menu_navigate_title'];?>
</li>
			<li><a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_title'];?>
</a></li>
			<li><a href="<?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blogs'];?>
</a></li>
			<li><a href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['people'];?>
</a></li>
			<li><a href="<?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['stream_menu'];?>
</a></li>
			<?php echo smarty_function_hook(array('run'=>'footer_menu_navigate_item'),$_smarty_tpl);?>

		</ul>
		
		
		
		
		
		
	
		<div class="copyright">
			<?php echo smarty_function_hook(array('run'=>'copyright'),$_smarty_tpl);?>

			
			<div class="design-by">
				<img src="<?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/xeoart.png" alt="xeoart" />
				Design by <a href="http://xeoart.com">xeoart</a>
				<div>2012</div>
			</div>
		</div>
		
		<?php echo smarty_function_hook(array('run'=>'footer_end'),$_smarty_tpl);?>

	</footer>
</div> <!-- /container -->

<?php echo $_smarty_tpl->getSubTemplate ('toolbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo smarty_function_hook(array('run'=>'body_end'),$_smarty_tpl);?>


</body>
</html><?php }} ?>