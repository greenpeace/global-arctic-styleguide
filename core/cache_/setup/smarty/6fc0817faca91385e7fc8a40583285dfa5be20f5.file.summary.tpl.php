<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 12:58:49
         compiled from "/home/sta/public_html/styleguide/docroot/setup/templates/summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12019845454d217891a8a84-18423079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fc0817faca91385e7fc8a40583285dfa5be20f5' => 
    array (
      0 => '/home/sta/public_html/styleguide/docroot/setup/templates/summary.tpl',
      1 => 1422943995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12019845454d217891a8a84-18423079',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript" src="assets/js/sections/summary.js"></script>
<form id="install" action="?action=summary" method="post">
<h2><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['install_summary']) ? $_smarty_tpl->getVariable('_lang')->value['install_summary'] : null);?>
</h2>
<?php if ($_smarty_tpl->getVariable('failed')->value){?>
<p><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['preinstall_failure']) ? $_smarty_tpl->getVariable('_lang')->value['preinstall_failure'] : null);?>
</p>
<?php }else{ ?>
<p><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['preinstall_success']) ? $_smarty_tpl->getVariable('_lang')->value['preinstall_success'] : null);?>
</p>
<?php }?>
<ul class="checklist">
<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('test')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
<li class="<?php echo (isset($_smarty_tpl->tpl_vars['result']->value['class']) ? $_smarty_tpl->tpl_vars['result']->value['class'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['result']->value['msg']) ? $_smarty_tpl->tpl_vars['result']->value['msg'] : null);?>
</li>
<?php }} ?>
</ul>

<br />

<div class="setup_navbar">
<?php if ($_smarty_tpl->getVariable('failed')->value){?>
    <button type="button" id="modx-next" onclick="MODx.go('summary');"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['retry']) ? $_smarty_tpl->getVariable('_lang')->value['retry'] : null);?>
</button>
<?php }else{ ?>
    <input type="submit" id="modx-next" name="proceed" value="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['install']) ? $_smarty_tpl->getVariable('_lang')->value['install'] : null);?>
" autofocus="autofocus" />
<?php }?>
    <button type="button" id="modx-back" onclick="MODx.go('<?php echo $_smarty_tpl->getVariable('back')->value;?>
');"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['back']) ? $_smarty_tpl->getVariable('_lang')->value['back'] : null);?>
</button>
</div>
</form>