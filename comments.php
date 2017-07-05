<?php
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0.0
 *
 * This file is here for backward compatibility with old themes and will be removed in a future version
 *
 */
_deprecated_file(
/* translators: %s: template name */
    sprintf(__('Theme without %s'), basename(__FILE__)),
    '3.0.0',
    null,
    /* translators: %s: template name */
    sprintf(__('Please include a %s template in your theme.'), basename(__FILE__))
);

// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

if (post_password_required()) { ?>
    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.'); ?></p>
    <?php
    return;
}
?>

<!-- You can start editing here. -->
<div class="comments-section">
    <?php if (have_comments()) : ?>
        <div class="c-num-add font-monserat">
            <p>
                <?php echo (get_comments_number() > 1) ? get_comments_number() . ' coments' : get_comments_number() . ' coment'; ?>
            </p>
            <p class="text-uppercase add-comment"><a href="#comment">add comment</a></p>

        </div>
        <div class="navigation">
            <div class="alignleft"><?php previous_comments_link() ?></div>
            <div class="alignright"><?php next_comments_link() ?></div>
        </div>

        <ul class="commentlist">
            <?php wp_list_comments(); ?>
        </ul>

        <div class="navigation">
            <div class="alignleft"><?php previous_comments_link() ?></div>
            <div class="alignright"><?php next_comments_link() ?></div>
        </div>


    <?php else : // this is displayed if there are no comments so far ?>

        <?php if (comments_open()) : ?>
            <!-- If comments are open, but there are no comments. -->

        <?php else : // comments are closed ?>
            <!-- If comments are closed. -->
            <p class="nocomments"><?php _e('Comments are closed.'); ?></p>

        <?php endif; ?>
    <?php endif; ?>
    <?php comment_form(); ?>
</div>

