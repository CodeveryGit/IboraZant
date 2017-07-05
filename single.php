<?php get_header(); ?>
<article>
    <?php the_post(); ?>
    <div class="article-header first-post page-top-block f-bg-image"
         style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>')">
        <div class="post-prev-info text-center">
            <?php if (!empty(get_theme_mod('single_top_label'))): ?><p
                    class="latest-post c-white  l-bottom l-center l-white text-uppercase font-monserat"><?php echo get_theme_mod('single_top_label') ?></p><?php endif; ?>
            <h3 class="ib-post-title font-xl c-white text-uppercase"> <?php the_title(); ?> </h3>
            <p class="comments-count c-white font-survey italic "><?php comments_number(); ?></p>
            <?php if (!empty(get_theme_mod('single_more_label'))): ?><a href="#"
                                                                        class="leer-more  post-lm font-survey italic"><?php echo get_theme_mod('single_more_label') ?>
                <i class="fa fa-chevron-down" aria-hidden="true"></i></a><?php endif; ?>
        </div>
    </div>
    <div class="article-content-block">
        <div class="article-item a-side">
            <div class="a-about-block text-center">
                <?php if (!empty(get_theme_mod('single_sidebar_image'))): ?>
                <div class="a-about-image"
                     style="background-image: url('<?php echo get_theme_mod('single_sidebar_image') ?>')"></div><?php endif; ?>
                <div class="a-about-text">
                    <?php if (!empty(get_theme_mod('single_sidebar_headline'))): ?><p
                            class="font-survey italic font-xl"><?php echo get_theme_mod('single_sidebar_headline') ?></p><?php endif; ?>
                    <?php if (!empty(get_theme_mod('single_sidebar_second_line'))): ?><p
                            class="font-monserat font-s"><?php echo get_theme_mod('single_sidebar_second_line') ?></p><?php endif; ?>
                    <?php if (!empty(get_theme_mod('single_sidebar_text'))): ?><p class="gift-text">
                        <?php echo get_theme_mod('single_sidebar_text') ?>
                        </p><?php endif; ?>
                    <?php if (!empty(get_theme_mod('single_sidebar_more_label'))): ?><a
                        href="<?php echo get_theme_mod('single_sidebar_more_link') ?>"
                        class="leer-more border-black text-uppercase"><?php echo get_theme_mod('single_sidebar_more_label') ?></a><?php endif; ?>
                </div>

            </div>

        </div>
        <div class="article-item a-center-side">
            <?php the_content(); ?>
        </div>

        <div class="article-item a-side"></div>
        <?php
        $cat_ids = [];
        $categories = get_the_category();
        foreach ($categories as $category)
            $cat_ids[] = $category->cat_ID;

        $query = new WP_Query([
            'posts_per_page' => 3,
            'post_type' => 'post',
            'post_status' => 'publish',
            'cat' => $cat_ids,
            'orderby' => 'rand',
        ]);

        if ($query->have_posts()):
            ?>
            <div class="you-make-like">
                <?php if (!empty(get_theme_mod('single_related_label'))): ?>
                    <p class="font-s text-uppercase yml-title"><?php echo get_theme_mod('single_related_label') ?></p>
                <?php endif; ?>
                <ul class="rec-article">
                    <?php while ($query->have_posts()): ?>
                        <?php $query->the_post(); ?>
                        <li class="ra-item"
                            style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>')">
                            <a href="<?php echo get_permalink(get_the_ID()); ?>"
                               class="leer-more c-white text-uppercase ra-btn"><?php echo get_theme_mod('single_related_open') ?></a>
                        </li>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <?php
    wp_list_comments([
        'max_depth' => 3,
        'style' => 'div',
        'per_page' => 0,
    ]);
    comments_template();
    ?>

</article>

<?php get_footer(); ?>

