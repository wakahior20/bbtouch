<?php bb_get_header(); ?>

<div id="header">
    <h1><a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a></h1>
</div>

<ul id="navigation">
    <li class="button"><a href="<?php bb_uri(); ?>">Top</a></li>
</ul>

<div id="content">
<?php if ($topics || $stickies): ?>
    <div id="forum">
        <h2 class="forum-title"><?php forum_name(); ?></h2>
        <p class="forum-meta"></p>

        <ul id="topic-list" class="menu-list">
<?php if ($stickies): foreach ($stickies as $topic): ?>
<?php endforeach; endif; ?>

<?php if ($topics): foreach ($topics as $topic): ?>
            <li class="menu">
                <a href="<?php topic_link(); ?>">
                    <span class="name"><?php topic_title(); ?></span>
                    <span class="comment"><?php topic_time(); ?></span>
                </a>
            </li>
<?php endforeach; endif; ?>
        </ul>
        <?php forum_pages( array( 'before' => '<div class="pagination">', 'after' => '</div>' ) ); ?>
<?php endif; // if ($topics || $stickies): ?>
        <div id="post-form">
        <?php post_form() ?>
        </div>
    </div>
</div>
<?php bb_get_footer(); ?>
