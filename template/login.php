<?php bb_get_header(); ?>

<div id="header">
    <h1><a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a></h1>
</div>

<div id="content">

<h2 id="userlogin" role="main"><?php isset($_POST['user_login']) ? _e('Log in Failed') : _e('Log in') ; ?></h2>

<?php
        $user_login_error = $bb_login_error->get_error_message( 'user_login' );
        $user_email_error = $bb_login_error->get_error_message( 'user_email' );
        $user_password_error = $bb_login_error->get_error_message( 'password' );
?>

<form id="login-form" method="post" action="<?php bb_uri('bb-login.php', null, BB_URI_CONTEXT_FORM_ACTION + BB_URI_CONTEXT_BB_USER_FORMS); ?>">

<ul class="form">

    <li>
        <label for="user_login"><?php _e('Username'); ?></label>
        <input name="user_login" id="user_login" type="text" value="<?php echo $user_login; ?>" />
    </li>

    <li>
        <label for="password"><?php _e('Password'); ?></label>
        <input name="password" id="password" type="password" />
    </li>

    <li>
        <label for="remember"><?php _e('Remember me'); ?></label>
        <input name="remember" type="checkbox" id="remember" value="1"<?php echo $remember_checked; ?> />
    </li>

    <li>
        <input name="re" type="hidden" value="<?php echo $redirect_to; ?>" />
        <input type="submit" value="<?php echo esc_attr( isset($_POST['user_login']) ?  __('Try Again &raquo;'): __('Log in &raquo;') ); ?>" />
    </li>

</ul>

</form>

</div>

<?php bb_get_footer(); ?>
