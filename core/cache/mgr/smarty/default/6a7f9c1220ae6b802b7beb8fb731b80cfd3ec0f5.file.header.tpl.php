<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 13:37:31
         compiled from "/home/sta/public_html/styleguide/docroot/ueh764jku/templates/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52862309154d2209b511274-64038504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a7f9c1220ae6b802b7beb8fb731b80cfd3ec0f5' => 
    array (
      0 => '/home/sta/public_html/styleguide/docroot/ueh764jku/templates/default/header.tpl',
      1 => 1422370720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52862309154d2209b511274-64038504',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_direction']) ? $_smarty_tpl->getVariable('_config')->value['manager_direction'] : null);?>
" lang="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_lang_attribute']) ? $_smarty_tpl->getVariable('_config')->value['manager_lang_attribute'] : null);?>
" xml:lang="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_lang_attribute']) ? $_smarty_tpl->getVariable('_config')->value['manager_lang_attribute'] : null);?>
"<?php if ((isset($_smarty_tpl->getVariable('_config')->value['manager_html5_cache']) ? $_smarty_tpl->getVariable('_config')->value['manager_html5_cache'] : null)==1){?> manifest="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
cache.manifest.php"<?php }?>>
<head>
<title><?php if ($_smarty_tpl->getVariable('_pagetitle')->value){?><?php echo $_smarty_tpl->getVariable('_pagetitle')->value;?>
 | <?php }?><?php echo (isset($_smarty_tpl->getVariable('_config')->value['site_name']) ? $_smarty_tpl->getVariable('_config')->value['site_name'] : null);?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo (isset($_smarty_tpl->getVariable('_config')->value['modx_charset']) ? $_smarty_tpl->getVariable('_config')->value['modx_charset'] : null);?>
" />

<?php if ((isset($_smarty_tpl->getVariable('_config')->value['manager_favicon_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_favicon_url'] : null)){?><link rel="shortcut icon" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_favicon_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_favicon_url'] : null);?>
" /><?php }?>

<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/ext3/resources/css/ext-all-notheme-min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_theme']) ? $_smarty_tpl->getVariable('_config')->value['manager_theme'] : null);?>
/css/index.css" />

<?php if ((isset($_smarty_tpl->getVariable('_config')->value['ext_debug']) ? $_smarty_tpl->getVariable('_config')->value['ext_debug'] : null)){?>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/ext3/adapter/ext/ext-base-debug.js" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/ext3/ext-all-debug.js" type="text/javascript"></script>
<?php }else{ ?>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/ext3/adapter/ext/ext-base.js" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/ext3/ext-all.js" type="text/javascript"></script>
<?php }?>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/modext/core/modx.js" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['connectors_url']) ? $_smarty_tpl->getVariable('_config')->value['connectors_url'] : null);?>
lang.js.php?ctx=mgr&topic=topmenu,file,resource,<?php echo $_smarty_tpl->getVariable('_lang_topics')->value;?>
&action=<?php echo htmlspecialchars((isset($_GET['a'])? $_GET['a'] : null));?>
" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['connectors_url']) ? $_smarty_tpl->getVariable('_config')->value['connectors_url'] : null);?>
modx.config.js.php?action=<?php echo htmlspecialchars((isset($_GET['a'])? $_GET['a'] : null));?>
<?php if ($_smarty_tpl->getVariable('_ctx')->value){?>&wctx=<?php echo $_smarty_tpl->getVariable('_ctx')->value;?>
<?php }?>" type="text/javascript"></script>

<?php if ((isset($_smarty_tpl->getVariable('_config')->value['compress_js']) ? $_smarty_tpl->getVariable('_config')->value['compress_js'] : null)&&(isset($_smarty_tpl->getVariable('_config')->value['compress_js_groups']) ? $_smarty_tpl->getVariable('_config')->value['compress_js_groups'] : null)){?>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
min/index.php?g=coreJs1" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
min/index.php?g=coreJs2" type="text/javascript"></script>
<script src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
min/index.php?g=coreJs3" type="text/javascript"></script>
<?php }?>

<?php echo $_smarty_tpl->getVariable('maincssjs')->value;?>

<?php  $_smarty_tpl->tpl_vars['scr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cssjs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['scr']->key => $_smarty_tpl->tpl_vars['scr']->value){
?>
<?php echo (isset($_smarty_tpl->tpl_vars['scr']->value) ? $_smarty_tpl->tpl_vars['scr']->value : null);?>

<?php }} ?>

<?php if ($_smarty_tpl->getVariable('_search')->value){?>
<script type="text/javascript">
    Ext.onReady(function() {
        new MODx.SearchBar;
    });
</script>
<?php }?>
</head>
<body id="modx-body-tag">

<div id="modx-browser"></div>
<div id="modx-container">
    <div id="modx-header">
        <div id="modx-navbar">
            <ul id="modx-user-menu">
                <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->getVariable('userNav')->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->getRenderedTemplate(); ?>
            </ul>

            <ul id="modx-topnav">
                <li id="modx-home-dashboard">
                    <a href="?" title="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['dashboard']) ? $_smarty_tpl->getVariable('_lang')->value['dashboard'] : null);?>
"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['dashboard']) ? $_smarty_tpl->getVariable('_lang')->value['dashboard'] : null);?>
</a>
                </li>
                <?php if ($_smarty_tpl->getVariable('_search')->value){?>
                <li id="modx-manager-search"></li>
                <?php }?>
                <?php echo $_smarty_tpl->getVariable('navb')->value;?>

            </ul>
        </div>
    </div>
        <div id="modAB"></div>
        <div id="modx-leftbar"></div>
        <div id="modx-content">
            <div id="modx-panel-holder"></div>
