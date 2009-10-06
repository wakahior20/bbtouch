<?php bb_get_header(); ?>
<div id="header">
    <h1><a href="<?php bb_uri(); ?>"><?php bb_option('name'); ?></a></h1>
</div>
<ul id="navigation">
    <li class="button"><a href="<?php bb_uri(); ?>">Top</a></li>
    <li class="button"><a href="<?php forum_link(); ?>"><?php forum_name(); ?></a></li>
</ul>
<div id="content">

    <div id="topic">
        <h2 class="topic-title"><?php topic_title(); ?></h2>
        <p class="topic-meta">
                <?php printf(__('Started %1$s ago by %2$s'), get_topic_start_time(), get_topic_author()); ?>
            <?php do_action('topicmeta'); ?>
        </p>
        <?php do_action('under_title'); ?>

        <ul id="post-list">
        <?php foreach ($posts as $bb_post) : $del_class = post_del_class(); ?>
            <li id="post-<?php post_id(); ?>">
                <ul class="post">
                    <?php if (bb_get_option('avatars_show')): ?>
                    <li class="post-avatar"><?php post_author_avatar('48'); ?></li>
                    <?php endif; ?>
                    <li class="post-meta"><?php printf(__('%1$s ago'), bb_get_post_time()); ?></li>
                    <li class="post-author"><?php post_author(); ?></li>
                    <li class="post-text"><?php post_text(); ?></li>
                </ul>
            </li>
        <?php endforeach; ?>
        </ul>
        <?php topic_pages( array( 'before' => '<div class="pagination">', 'after' => '</div>' ) ); ?>

        <?php if (topic_is_open()): ?>
        <div id="post-form">
            <?php post_form(array('h3' => 'hoge')); ?>
        </div>
        <?php endif; ?>
    </div>

</div>
<?php bb_get_footer(); ?>
