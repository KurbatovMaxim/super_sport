<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:04:28
         compiled from "Z:\home\livestreet\www/templates/skin/synio\actions\ActionError\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1467351ac783cefcbb2-36892996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b88c72cf5a2e17713c6cd9b57310a9836fe9349c' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\actions\\ActionError\\index.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1467351ac783cefcbb2-36892996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aMsgError' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac783d0e8763_20224737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac783d0e8763_20224737')) {function content_51ac783d0e8763_20224737($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.cfg.php';
?><?php $_smarty_tpl->tpl_vars["noSidebar"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('noShowSystemMessage'=>true), 0);?>



<div class="content-error">
	<?php if ($_smarty_tpl->tpl_vars['aMsgError']->value[0]['title']){?>
		<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['error'];?>
: <span><?php echo $_smarty_tpl->tpl_vars['aMsgError']->value[0]['title'];?>
</span></h2>
	<?php }?>

	<p><?php echo $_smarty_tpl->tpl_vars['aMsgError']->value[0]['msg'];?>
</p>
	<br />
	<br />
	<p><a href="javascript:history.go(-1);"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['site_history_back'];?>
</a><br />
	<a href="<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['site_go_main'];?>
</a></p>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>