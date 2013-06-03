<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:16:09
         compiled from "Z:\home\livestreet\www/templates/skin/synio\menu.blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145051ac7af95228c3-56451164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26912235354fc758dcb9d5d0596849f3624208d9' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\menu.blog.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145051ac7af95228c3-56451164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuItemSelect' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac7af9657625_73721876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac7af9657625_73721876')) {function content_51ac7af9657625_73721876($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.cfg.php';
if (!is_callable('smarty_function_router')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_hook')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.hook.php';
?><ul class="nav nav-menu">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='index'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_all'];?>
</a>
	</li>

	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='blog'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_collective'];?>
</a>
	</li>

	<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='log'){?>class="active"<?php }?>>
		<a href="<?php echo smarty_function_router(array('page'=>'personal_blog'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_personal'];?>
</a>
	</li>
	
	<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='feed'){?>class="active"<?php }?>>
			<a href="<?php echo smarty_function_router(array('page'=>'feed'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_title'];?>
</a>
		</li>
	<?php }?>

	<?php echo smarty_function_hook(array('run'=>'menu_blog'),$_smarty_tpl);?>

</ul><?php }} ?>