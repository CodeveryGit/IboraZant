<?php get_header(); ?>
    <section>
        <?php echo do_shortcode(get_field('sshortcode')); ?>
    </section>
    <section class="palm text-center"
             style="background-image: url(<?php echo wp_get_attachment_url(get_field('s1background_image')); ?>)">
        <div class=" palm-title font-xl c-white text-uppercase">
            <?php the_field('s1headline'); ?>
        </div>
        <div class=" palm-question font-xl italic l-bottom l-center l-white c-white">
            <?php the_field('s1middle_line'); ?>
        </div>
        <a href="<?php the_field('s1button_link'); ?>"
           class="btn btn-default text-uppercase leer-more c-white"><?php the_field('s1button_label'); ?></a>
    </section>

    <section class="article-prev padding-2">

        <div class="img-block">
            <img src="<?php echo wp_get_attachment_url(get_field('s2picture')); ?>">
        </div>
        <div class="a-text-block">
            <p class="icon-treug a-icon"></p>
            <p class="block-title text-uppercase l-bottom l-black">
                <?php the_field('s2headline'); ?>

            </p>
            <p class="block-s-title italic">
                <?php the_field('s2second_line'); ?>
            </p>
            <p class="block-description">
                <?php the_field('s2third_line'); ?>
            </p>
            <p class="after-description italic">
                <?php the_field('s2fourth_line'); ?>
            </p>
        </div>
    </section>
    <section class="download-section">
        <div class="download-block">
            <div class="d-image-block"
                 style="background-image: url('<?php echo wp_get_attachment_url(get_field('download_left_picture')); ?>')"></div>
            <div class="d-info-block">
                <div class="d-iphone-image"
                     style="background-image: url('<?php echo wp_get_attachment_url(get_field('download_right_picture')); ?>')"></div>
                <p class="d-title text-uppercase"><?php the_field('download_headline'); ?></p>
                <p class="d-subtitle l-bottom l-black italic font-survey font-m"><?php the_field('download_second_line'); ?></p>
                <p class="d-text">
                    <?php the_field('download_middle_text'); ?>
                </p>
                <p class="italic font-survey font-xl become-block"><?php the_field('download_slogan'); ?></p>
                <p class="d-step-ook"><?php the_field('download_bottom_text'); ?></p>
                <a href="#"
                   class="manual-optin-trigger btn btm-default leer-more text-uppercase border-black download-btn"
                   data-optin-slug="<?php the_field('download_button_optinmonster_slug'); ?>"><?php the_field('download_button_label'); ?></a>
                <span class="broadwayAlt ibora"><?php the_field('download_sign'); ?></span>
            </div>
        </div>
    </section>
    <section class="about-ibora-section">
        <div class="ai-maim-block">
            <div class="ai-image-block"
                 style="background-image: url('<?php echo wp_get_attachment_url(get_field('s4new_image')); ?>')"></div>
            <div class="ai-info-block">
                <p class="icon-circle3 ai-icon c-gold-gradient"></p>
                <p class="ai-title text-uppercase"><?php the_field('s4new_first_headline'); ?></p>
                <p class='ibora-name font-survey text-uppercase c-gold-gradient'><?php the_field('s4new_second_headline'); ?></p>
                <p class="font-survey italic ai-subtitle l-bottom l-black">
                    <?php the_field('s4new_after_headline_text'); ?>
                </p>
                <div class="ai-text font-monserat">
                    <p>
                        <?php the_field('s4new_first_paragraph'); ?>
                    </p>
                    <p>
                        <?php the_field('s4new_second_paragraph'); ?>
                    </p>
                </div>
                <p class="font-survey italic ai-italic">
                    <?php the_field('s4new_bottom_italics_text'); ?>
                </p>
                <p>
                    <a href="<?php the_field('button_link'); ?>"
                       class="manual-optin-trigger btn btm-default leer-more text-uppercase border-black download-btn"><?php the_field('s4new_button_label'); ?></a>
                </p>
            </div>
        </div>
    </section>
    <section class="home-pr-block">
        <div class="pr-title-block">
            <p class="pr-title l-bottom l-center l-black text-center font-xl text-uppercase"><?php the_field('s4text_line'); ?></p>
        </div>
        <div class="pr-list">
            <div class="pr-item"
                 style="background-image: url(<?php echo wp_get_attachment_url(get_field('c1background_image')); ?>)">
                <a href="<?php the_field('c1link'); ?>"
                   class="btn btn-default pr-btn text-uppercase"><?php the_field('c1text'); ?></a>
            </div>
            <div class="pr-item"
                 style="background-image: url(<?php echo wp_get_attachment_url(get_field('c2background_image')); ?>)">
                <a href="<?php the_field('c2link'); ?>"
                   class="btn btn-default pr-btn text-uppercase"><?php the_field('c2text'); ?></a>
            </div>
            <div class="pr-item"
                 style="background-image: url(<?php echo wp_get_attachment_url(get_field('c3background_image')); ?>)">
                <a href="<?php the_field('c3link'); ?>"
                   class="btn btn-default pr-btn text-uppercase"><?php the_field('c3text'); ?></a>
            </div>
        </div>
    </section>
    <section class="iBelieve"
             style="background-image: url(<?php echo wp_get_attachment_url(get_field('s3background_image')); ?>)">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-2 col-md-6 col-md-offset-6">
                    <p class="believe-title text-center broadwayAlt"><?php the_field('s3slogan'); ?></p>
                    <div class="belive-block text-center">
                        <p class="b-block-title text-uppercase font-xl">
                            <?php the_field('s3first_headline'); ?>
                        </p>
                        <p class="b-sub-title italic">
                            <?php the_field('s3first_middle_line'); ?>
                        </p>
                        <p class="d-desc">
                            <?php the_field('s3first_text_line'); ?>
                        </p>
                        <p class="b-block-title font-xl">
                            <?php the_field('s3second_headline'); ?>
                        </p>
                        <p class="b-sub-title italic">
                            <?php the_field('s3second_middle_line'); ?>
                        </p>
                        <p class="b-bottom-text font-after">
                            <?php the_field('s3second_text_line'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
$cat_ids = [];
$categories = get_the_category();
foreach ($categories as $category)
    $cat_ids[] = $category->cat_ID;

$query = new WP_Query([
    'posts_per_page' => 3,
    'post_type' => 'post',
    'post_status' => 'publish',
]);
?>
    <section class="you-make-like">
        <p class="font-s text-uppercase yml-title"><?php echo get_theme_mod('single_related_label') ?></p>
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
    </section>
    <section class="article-prev reverse padding-2">

        <div class="img-block">
            <img src="<?php echo wp_get_attachment_url(get_field('s9image')); ?>">
        </div>
        <div class="a-text-block">
            <p class="block-title text-uppercase l-bottom l-black">
                <?php the_field('s9headline'); ?>
            </p>
            <p class="block-description">
                <span class="desc-title italic text-uppercase font-monserat"><?php the_field('s9slogan'); ?></span>
                <?php the_field('s9text'); ?>
            </p>
            <p>
                <a href="<?php the_field('s9button_label'); ?>"
                   class="leer-more text-uppercase border-black "><?php the_field('s9button_label'); ?></a>
            </p>
        </div>
    </section>

<?php get_footer(); ?>