<?php bb_get_header(); ?>
<div id="header">
    <h1><a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a></h1>
</div>

<div id="content">

<ul id="greeting">
<?php if (bb_is_user_logged_in()): ?>
<?php if ($user = bb_get_current_user_info()): ?>
<?php if ($avatar = bb_get_avatar($user->ID, '48')): ?>
<li id="avatar"><?php echo $avatar; ?></li>
<?php endif; ?>
<li id="message"><?php printf(__("Hello, %s!"), $user->display_name); ?></li>
<li id="logout"><?php bb_logout_link(); ?></li> 
<?php endif; ?>
<?php else: ?>
<li id="message"><?php printf(__('Hello, guest! Please <a href="%s">login</a>.'), bb_get_uri('bb-login.php')); ?></li>
<?php endif; ?>
</ul>

<?php if ($forums) : ?>

<?php if ($topics || $super_stickies): ?>
<h2><?php _e("Latest Discussion"); ?></h2>
<ul id="latest" class="menu-list">
<?php if ( $super_stickies ) : foreach ( $super_stickies as $topic ) : ?>
    <li class="menu">
        <a href="<?php topic_link(); ?>">
            <span class="name"><?php topic_title(); ?></span>
            <span class="comment"><?php topic_posts(); ?></span>
        </a>
    </li>
<?php endforeach; endif; // $super_stickies ?>
<?php if ( $topics ) : foreach ( $topics as $topic ) : ?>
    <li class="menu">
        <a href="<?php topic_link(); ?>">
            <span class="name"><?php topic_title(); ?></span>
            <span class="comment"><?php topic_posts(); ?></span>
        </a>
    </li>
<?php endforeach; endif; // $topics ?>
</ul>
<?php bb_latest_topics_pages( array( 'before' => '<div class="pagination">', 'after' => '</div>' ) ); ?>
<?php endif; // $topics || $super_stickies ?>
<?php endif; // $forums ?>

</div>

<?php bb_get_footer(); ?>
