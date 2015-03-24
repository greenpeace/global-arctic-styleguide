<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 12:58:30
         compiled from "/home/sta/public_html/styleguide/docroot/setup/templates/language.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66412826854d21776c32203-93179283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b42d7d78e368e3032dbcddb3e24fa226d32b1e2f' => 
    array (
      0 => '/home/sta/public_html/styleguide/docroot/setup/templates/language.tpl',
      1 => 1422943994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66412826854d21776c32203-93179283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form id="install" action="?" method="post">

<?php if ($_smarty_tpl->getVariable('restarted')->value){?>
    <br class="clear" />
    <br class="clear" />
    <p class="note"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['restarted_msg']) ? $_smarty_tpl->getVariable('_lang')->value['restarted_msg'] : null);?>
</p>
<?php }?>

<div class="setup_navbar" style="border-top: 0;">
    <p class="title"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['choose_language']) ? $_smarty_tpl->getVariable('_lang')->value['choose_language'] : null);?>
:
        <select name="language" autofocus="autofocus">
            <?php echo $_smarty_tpl->getVariable('languages')->value;?>

    	</select>
    </p>

    <input type="submit" name="proceed" value="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['select']) ? $_smarty_tpl->getVariable('_lang')->value['select'] : null);?>
" />
</div>
</form>