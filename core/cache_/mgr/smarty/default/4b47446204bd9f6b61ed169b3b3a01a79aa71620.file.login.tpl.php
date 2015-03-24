<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 12:56:51
         compiled from "/home/sta/public_html/styleguide/docroot/manager/templates/default/security/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64099259054d21713b25af5-16514077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b47446204bd9f6b61ed169b3b3a01a79aa71620' => 
    array (
      0 => '/home/sta/public_html/styleguide/docroot/manager/templates/default/security/login.tpl',
      1 => 1422370867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64099259054d21713b25af5-16514077',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php if ((isset($_smarty_tpl->getVariable('_config')->value['manager_direction']) ? $_smarty_tpl->getVariable('_config')->value['manager_direction'] : null)=='rtl'){?>dir="rtl"<?php }?> lang="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_lang_attribute']) ? $_smarty_tpl->getVariable('_config')->value['manager_lang_attribute'] : null);?>
" xml:lang="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_lang_attribute']) ? $_smarty_tpl->getVariable('_config')->value['manager_lang_attribute'] : null);?>
">
<head>
	<title><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_title']) ? $_smarty_tpl->getVariable('_lang')->value['login_title'] : null);?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo (isset($_smarty_tpl->getVariable('_config')->value['modx_charset']) ? $_smarty_tpl->getVariable('_config')->value['modx_charset'] : null);?>
" />
    <?php if ((isset($_smarty_tpl->getVariable('_config')->value['manager_favicon_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_favicon_url'] : null)){?><link rel="shortcut icon" type="image/x-icon" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_favicon_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_favicon_url'] : null);?>
" /><?php }?>

    <link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
assets/ext3/resources/css/ext-all-notheme-min.css" />
  	<link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/css/index.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/css/login.css" />

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
    <script src="assets/modext/core/modx.js" type="text/javascript"></script>

    <script src="assets/modext/core/modx.component.js" type="text/javascript"></script>
    <script src="assets/modext/util/utilities.js" type="text/javascript"></script>
	<script src="assets/modext/widgets/core/modx.panel.js" type="text/javascript"></script>
    <script src="assets/modext/widgets/core/modx.window.js" type="text/javascript"></script>
    <script src="assets/modext/sections/login.js" type="text/javascript"></script>

    <meta name="robots" content="noindex, nofollow" />
</head>

<body id="login">
<div id="modx-login-language-select-div">
    <label><?php echo $_smarty_tpl->getVariable('language_str')->value;?>
:
    <select name="cultureKey" id="modx-login-language-select">
        <?php echo $_smarty_tpl->getVariable('languages')->value;?>

    </select>
    </label>
</div>
<?php echo $_smarty_tpl->getVariable('onManagerLoginFormPrerender')->value;?>

<br />

<div id="container">
    <div id="modx-login-logo">
        <!--[if gte IE 9]><!--><img alt="MODX CMS/CMF" src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/images/modx-logo-color.svg" data-fallback="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/images/modx-logo-color.png" onerror="this.src=this.getAttribute('data-fallback');this.onerror=null;" /><!--<![endif]-->
        <!--[if lt IE 9]><img alt="MODX CMS/CMF" src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['manager_url']) ? $_smarty_tpl->getVariable('_config')->value['manager_url'] : null);?>
templates/default/images/modx-logo-color.png" /><![endif]-->
    </div>

<div id="modx-panel-login-div" class="x-panel modx-form x-form-label-right">

    <form id="modx-login-form" action="" method="post">
        <input type="hidden" name="login_context" value="mgr" />
        <input type="hidden" name="modahsh" value="<?php echo $_smarty_tpl->getVariable('modahsh')->value;?>
" />
        <input type="hidden" name="returnUrl" value="<?php echo $_smarty_tpl->getVariable('returnUrl')->value;?>
" />

        <div class="x-panel x-panel-noborder"><div class="x-panel-bwrap"><div class="x-panel-body x-panel-body-noheader">
        <h2><?php echo (isset($_smarty_tpl->getVariable('_config')->value['site_name']) ? $_smarty_tpl->getVariable('_config')->value['site_name'] : null);?>
</h2>
        <br class="clear" />

        <?php if ($_smarty_tpl->getVariable('error_message')->value){?><p class="error"><?php echo $_smarty_tpl->getVariable('error_message')->value;?>
</p><?php }?>
        </div></div></div>

        <div class="x-form-item login-form-item login-form-item-first">
          <label for="modx-login-username"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_username']) ? $_smarty_tpl->getVariable('_lang')->value['login_username'] : null);?>
</label>
          <div class="x-form-element login-form-element">
            <input type="text" id="modx-login-username" name="username" tabindex="1" autocomplete="on" value="<?php echo (isset($_smarty_tpl->getVariable('_post')->value['username']) ? $_smarty_tpl->getVariable('_post')->value['username'] : null);?>
" class="x-form-text x-form-field" placeholder="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_username']) ? $_smarty_tpl->getVariable('_lang')->value['login_username'] : null);?>
" />
          </div>
        </div>

        <div class="x-form-item login-form-item">
          <label for="modx-login-password"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_password']) ? $_smarty_tpl->getVariable('_lang')->value['login_password'] : null);?>
</label>
          <div class="x-form-element login-form-element">
            <input type="password" id="modx-login-password" name="password" tabindex="2" autocomplete="on" class="x-form-text x-form-field" placeholder="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_password']) ? $_smarty_tpl->getVariable('_lang')->value['login_password'] : null);?>
" />
          </div>
        </div>


        <div class="login-cb-row">
            <div class="login-cb-col one">
                <div class="modx-login-fl-link">
                   <a href="javascript:void(0);" id="modx-fl-link" style="<?php if ((isset($_smarty_tpl->getVariable('_post')->value['username_reset']) ? $_smarty_tpl->getVariable('_post')->value['username_reset'] : null)){?>display:none;<?php }?>"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_forget_your_login']) ? $_smarty_tpl->getVariable('_lang')->value['login_forget_your_login'] : null);?>
</a>
                </div>
            </div>
            <div class="login-cb-col two">
                <div class="x-form-check-wrap modx-login-rm-cb">
                    <input type="checkbox" id="modx-login-rememberme" name="rememberme" tabindex="3" autocomplete="on" <?php if ((isset($_smarty_tpl->getVariable('_post')->value['rememberme']) ? $_smarty_tpl->getVariable('_post')->value['rememberme'] : null)){?>checked="checked"<?php }?> class="x-form-checkbox x-form-field" value="1" />
                    <label for="modx-login-rememberme" class="x-form-cb-label"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_remember']) ? $_smarty_tpl->getVariable('_lang')->value['login_remember'] : null);?>
</label>
                </div>
                <button class="x-btn x-btn-small x-btn-icon-small-left primary-button x-btn-noicon login-form-btn" name="login" type="submit" value="1" id="modx-login-btn" tabindex="4"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_button']) ? $_smarty_tpl->getVariable('_lang')->value['login_button'] : null);?>
</button>
            </div>
        </div>

        <?php echo $_smarty_tpl->getVariable('onManagerLoginFormRender')->value;?>

    </form>

    <?php if ($_smarty_tpl->getVariable('allow_forgot_password')->value){?>
      <div class="modx-forgot-login">
        <form id="modx-fl-form" action="" method="post">
           <div id="modx-forgot-login-form" style="<?php if (!(isset($_smarty_tpl->getVariable('_post')->value['username_reset']) ? $_smarty_tpl->getVariable('_post')->value['username_reset'] : null)){?>display: none;<?php }?>">

               <div class="x-form-item login-form-item">
                  <div class="x-form-element login-form-element">
                    <input type="text" id="modx-login-username-reset" name="username_reset" class="x-form-text x-form-field" value="<?php echo (isset($_smarty_tpl->getVariable('_post')->value['username_reset']) ? $_smarty_tpl->getVariable('_post')->value['username_reset'] : null);?>
" placeholder="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_username_or_email']) ? $_smarty_tpl->getVariable('_lang')->value['login_username_or_email'] : null);?>
" />
                  </div>
                  <div class="x-form-clear-left"></div>
               </div>


               <button class="x-btn x-btn-small x-btn-icon-small-left primary-button x-btn-noicon login-form-btn" name="forgotlogin" type="submit" value="1" id="modx-fl-btn"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_send_activation_email']) ? $_smarty_tpl->getVariable('_lang')->value['login_send_activation_email'] : null);?>
</button>

           </div>
        </form>
        </div>
    <?php }?>

    <br class="clear" />
</div>

<p class="loginLicense">
<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['login_copyright']) ? $_smarty_tpl->getVariable('_lang')->value['login_copyright'] : null);?>

</p>
</div>

</body>
</html>
