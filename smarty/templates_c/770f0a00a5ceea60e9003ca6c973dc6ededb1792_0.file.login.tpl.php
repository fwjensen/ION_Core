<?php
/* Smarty version 3.1.29, created on 2016-05-29 13:00:29
  from "D:\wamp64\www\ION_Core\smarty\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574ae7ed1f3623_71564054',
  'file_dependency' => 
  array (
    '770f0a00a5ceea60e9003ca6c973dc6ededb1792' => 
    array (
      0 => 'D:\\wamp64\\www\\ION_Core\\smarty\\templates\\login.tpl',
      1 => 1464526827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574ae7ed1f3623_71564054 ($_smarty_tpl) {
?>
<div class="overlay">
    <div class="panel panel-default login">

        <!--<input src="images/close.png" type="image" name="exit" class="loginExit">!-->
        <button type="button" class="loginExit btn btn-default btn-xs">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
        <form class="form-group">
            <div class="form-group">
                <label for="username">Username: </label>
                <input type="email" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        </form>
    </div>
</div>
<?php }
}
