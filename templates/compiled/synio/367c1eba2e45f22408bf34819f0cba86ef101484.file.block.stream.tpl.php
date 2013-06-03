<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:16:09
         compiled from "Z:\home\livestreet\www/templates/skin/synio\blocks\block.stream.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1157651ac7af9726a23-59300573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '367c1eba2e45f22408bf34819f0cba86ef101484' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\blocks\\block.stream.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1157651ac7af9726a23-59300573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    'sItemsHook' => 0,
    'sStreamComments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac7af9842f37_05029356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac7af9842f37_05029356')) {function content_51ac7af9842f37_05029356($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_router')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.router.php';
?><section class="block block-type-stream">
	<?php echo smarty_function_hook(array('run'=>'block_stream_nav_item','assign'=>"sItemsHook"),$_smarty_tpl);?>


	<header class="block-header sep">
		<h3><a href="<?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments_all'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream'];?>
</a></h3>
		<div class="block-update js-block-stream-update"></div>
		
		<ul class="nav nav-pills js-block-stream-nav" <?php if ($_smarty_tpl->tpl_vars['sItemsHook']->value){?>style="display: none;"<?php }?>>
			<li class="active js-block-stream-item" data-type="comment"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments'];?>
</a></li>
			<li class="js-block-stream-item" data-type="topic"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_topics'];?>
</a></li>
			<?php echo $_smarty_tpl->tpl_vars['sItemsHook']->value;?>

		</ul>
		
		<ul class="nav nav-pills js-block-stream-dropdown" <?php if (!$_smarty_tpl->tpl_vars['sItemsHook']->value){?>style="display: none;"<?php }?>>
			<li class="dropdown active js-block-stream-dropdown-trigger"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments'];?>
</a> <i class="icon-synio-arrows"></i>
				<ul class="dropdown-menu js-block-stream-dropdown-items">
					<li class="active js-block-stream-item" data-type="comment"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments'];?>
</a></li>
					<li class="js-block-stream-item" data-type="topic"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_topics'];?>
</a></li>
					<?php echo $_smarty_tpl->tpl_vars['sItemsHook']->value;?>

				</ul>
			</li>
		</ul>
	</header>
	
	<div class="block-content">
		<div class="js-block-stream-content">
			<?php echo $_smarty_tpl->tpl_vars['sStreamComments']->value;?>

		</div>
	</div>
</section>

<?php }} ?>