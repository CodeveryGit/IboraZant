<?php get_header(); ?>
<?php while (have_rows('section')): the_row(); ?>
    <?php switch (get_sub_field('section_type')): ?>
<?php case 'block_0': ?>
            <section <?php if (!empty (get_sub_field('all_id'))): ?> id="<?php the_sub_field('all_id'); ?>" <?php endif; ?>>
                <?php echo do_shortcode(get_sub_field('b0b9_shortcode')); ?>
            </section>
            <?php break; ?>
        <?php case 'block_1': ?>
            <section <?php if (!empty (get_sub_field('all_id'))): ?> id="<?php the_sub_field('all_id'); ?>" <?php endif; ?>
                    class="palm text-center" <?php if (!empty (get_sub_field('b1b6_background_image'))): ?>
                style="background-image: url(<?php the_sub_field('b1b6_background_image'); ?>)"
            <?php endif; ?>>
                <?php if (!empty (get_sub_field('b1b2b3b5b7b8_headline'))): ?>
                    <div class=" palm-title font-xl c-white text-uppercase">
                        <?php the_sub_field('b1b2b3b5b7b8_headline'); ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty (get_sub_field('b1_middle_line'))): ?>
                    <div class=" palm-question font-xl italic l-bottom l-center l-white c-white">
                        <?php the_sub_field('b1_middle_line'); ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty (get_sub_field('b1b3b4b8_button_label'))): ?>
                    <a href="<?php echo (!empty (get_sub_field('b1b4b8_button_link'))) ? get_sub_field('b1b4b8_button_link') : 'javascript:void(0);'; ?>"
                       class="btn btn-default text-uppercase leer-more c-white"><?php the_sub_field('b1b3b4b8_button_label'); ?></a>
                <?php endif; ?>
            </section>
            <?php break; ?>
        <?php case 'block_2': ?>
            <section <?php if (!empty (get_sub_field('all_id'))): ?> id="<?php the_sub_field('all_id'); ?>" <?php endif; ?>
                    class="article-prev padding-2">

                <?php if (!empty (get_sub_field('b2b4b8_image'))): ?>
                    <div class="img-block">
                        <img src="<?php the_sub_field('b2b4b8_image'); ?>">
                    </div>
                <?php endif; ?>
                <div class="a-text-block">
                    <p class="<?php the_sub_field('b2b3b4b6_icon'); ?> a-icon"></p>
                    <?php if (!empty (get_sub_field('b1b2b3b5b7b8_headline'))): ?>
                        <p class="block-title text-uppercase l-bottom l-black">
                            <?php the_sub_field('b1b2b3b5b7b8_headline'); ?>
                        </p>
                    <?php endif; ?>
                    <?php if (!empty (get_sub_field('b2b3_second_line'))): ?>
                        <p class="block-s-title italic">
                            <?php the_sub_field('b2b3_second_line'); ?>
                        </p>
                    <?php endif; ?>
                    <?php if (!empty (get_sub_field('b2_third_line'))): ?>
                        <p class="block-description font-monserat">
                            <?php the_sub_field('b2_third_line'); ?>
                        </p>
                    <?php endif; ?>
                    <?php if (!empty (get_sub_field('b2_fourth_line'))): ?>
                        <p class="after-description italic font-survey">
                            <?php the_sub_field('b2_fourth_line'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </section>
            <?php break; ?>
        <?php case 'block_3': ?>
            <section <?php if (!empty (get_sub_field('all_id'))): ?> id="<?php the_sub_field('all_id'); ?>" <?php endif; ?>
                    class="download-section">
                <div class="download-block">
                    <?php if (!empty (get_sub_field('b3_left_image'))): ?>
                        <div class="d-image-block"
                             style="background-image: url('<?php the_sub_field('b3_left_image'); ?>')"></div>
                    <?php endif; ?>
                    <div class="d-info-block">
                        <?php if (!empty (get_sub_field('b3_right_image'))): ?>
                            <div class="d-iphone-image"
                                 style="background-image: url('<?php the_sub_field('b3_right_image'); ?>')"></div>
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b1b2b3b5b7b8_headline'))): ?>
                            <p class="d-title text-uppercase">
                                <span class="download-pre-icon <?php the_sub_field('b2b3b4b6_icon'); ?>"></span>
                                <?php the_sub_field('b1b2b3b5b7b8_headline'); ?></p>
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b2b3_second_line'))): ?>
                            <p class="d-subtitle l-bottom l-black italic font-survey font-m"><?php the_sub_field('b2b3_second_line'); ?></p>
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b3_middle_text'))): ?>
                            <p class="d-text">
                                <?php the_sub_field('b3_middle_text'); ?>
                            </p>
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b3b6b8_slogan'))): ?>
                            <p class="italic font-survey font-xl become-block"><?php the_sub_field('b3b6b8_slogan'); ?></p>
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b3_bottom_text'))): ?>
                            <p class="d-step-ook"><?php the_sub_field('b3_bottom_text'); ?></p>
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b1b3b4b8_button_label'))): ?>
                            <a href="javascript:void(0);"
                               class="manual-optin-trigger btn btm-default leer-more text-uppercase border-black download-btn"
                                <?php if (!empty (get_sub_field('b3_slug'))): ?>
                                    data-optin-slug="<?php the_sub_field('b3_slug'); ?>"
                                <?php endif; ?>><?php the_sub_field('b1b3b4b8_button_label'); ?></a>
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b3_sign'))): ?>
                            <span class="broadwayAlt ibora"><?php the_sub_field('b3_sign'); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php break; ?>
        <?php case 'block_4': ?>
            <section <?php if (!empty (get_sub_field('all_id'))): ?> id="<?php the_sub_field('all_id'); ?>" <?php endif; ?>
                    class="about-ibora-section">
                <div class="ai-maim-block">
                    <?php if (!empty (get_sub_field('b2b4b8_image'))): ?>
                        <div class="ai-image-block"
                             style="background-image: url('<?php the_sub_field('b2b4b8_image'); ?>')"></div>
                    <?php endif; ?>
                    <div class="ai-info-block">
                        <p class="<?php the_sub_field('b2b3b4b6_icon'); ?> ai-icon c-gold-gradient"></p>
                        <?php if (!empty (get_sub_field('b4_header_1'))): ?>
                            <p class="ai-title text-uppercase"><?php the_sub_field('b4_header_1'); ?></p>
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b4_header_2'))): ?>
                            <p class='ibora-name font-survey text-uppercase c-gold-gradient'><?php the_sub_field('b4_header_2'); ?></p>
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b4_after'))): ?>
                            <p class="font-survey italic ai-subtitle l-bottom l-black">
                                <?php the_sub_field('b4_after'); ?>
                            </p>
                        <?php endif; ?>
                        <div class="ai-text font-monserat">
                            <?php if (!empty (get_sub_field('b4_par_1'))): ?>
                                <p><?php the_sub_field('b4_par_1'); ?></p>
                            <?php endif; ?>
                            <?php if (!empty (get_sub_field('b4_par_2'))): ?>
                                <p><?php the_sub_field('b4_par_2'); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty (get_sub_field('b4_bottom'))): ?>
                            <p class="font-survey italic ai-italic"><?php the_sub_field('b4_bottom'); ?></p>
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b1b3b4b8_button_label'))): ?>
                            <p>
                                <a href="<?php echo (!empty (get_sub_field('b1b4b8_button_link'))) ? get_sub_field('b1b4b8_button_link') : 'javascript:void(0);'; ?>"
                                   class="manual-optin-trigger btn btm-default leer-more text-uppercase border-black download-btn"><?php the_sub_field('b1b3b4b8_button_label'); ?></a>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php break; ?>
        <?php case 'block_5': ?>
            <section <?php if (!empty (get_sub_field('all_id'))): ?> id="<?php the_sub_field('all_id'); ?>" <?php endif; ?>
                    class="home-pr-block">
                <?php if (!empty (get_sub_field('b1b2b3b5b7b8_headline'))): ?>
                    <div class="pr-title-block">
                        <p class="pr-title l-bottom l-center l-black text-center font-xl text-uppercase"><?php the_sub_field('b1b2b3b5b7b8_headline'); ?></p>
                    </div>
                <?php endif; ?>
                <div class="pr-list">
                    <div class="pr-item" style="background-image: url(<?php the_sub_field('b5_background_1'); ?>)">
                        <?php if (!empty (get_sub_field('b5_text_1'))): ?>
                            <a href="<?php echo (!empty (get_sub_field('b5_link_1'))) ? get_sub_field('b5_link_1') : 'javascript:void(0);'; ?>"
                               class="btn btn-default pr-btn text-uppercase"><?php the_sub_field('b5_text_1'); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="pr-item" style="background-image: url(<?php the_sub_field('b5_background_2'); ?>)">
                        <?php if (!empty (get_sub_field('b5_text_2'))): ?>
                            <a href="<?php echo (!empty (get_sub_field('b5_link_2'))) ? get_sub_field('b5_link_2') : 'javascript:void(0);'; ?>"
                               class="btn btn-default pr-btn text-uppercase"><?php the_sub_field('b5_text_2'); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="pr-item" style="background-image: url(<?php the_sub_field('b5_background_3'); ?>)">
                        <?php if (!empty (get_sub_field('b5_text_3'))): ?>
                            <a href="<?php echo (!empty (get_sub_field('b5_link_3'))) ? get_sub_field('b5_link_3') : 'javascript:void(0);'; ?>"
                               class="btn btn-default pr-btn text-uppercase"><?php the_sub_field('b5_text_3'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php break; ?>
        <?php case 'block_6': ?>
            <section <?php if (!empty (get_sub_field('all_id'))): ?> id="<?php the_sub_field('all_id'); ?>" <?php endif; ?>
                    class="iBelieve"
                <?php if (!empty (get_sub_field('b1b6_background_image'))): ?>
                    style="background-image: url(<?php the_sub_field('b1b6_background_image'); ?>)"
                <?php endif; ?>>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-2 col-md-6 col-md-offset-6">
                            <?php if (!empty (get_sub_field('b3b6b8_slogan'))): ?>
                                <p class="believe-title text-center broadwayAlt"><?php the_sub_field('b3b6b8_slogan'); ?></p>
                            <?php endif; ?>
                            <div class="belive-block text-center">
                                <?php if (!empty (get_sub_field('b6_header_1'))): ?>
                                    <p class="b-block-title text-uppercase font-xl">
                                        <?php the_sub_field('b6_header_1'); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty (get_sub_field('b6_middle_1'))): ?>
                                    <p class="b-sub-title font-survey italic">
                                        <?php the_sub_field('b6_middle_1'); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty (get_sub_field('b6_text_1'))): ?>
                                    <p class="d-desc i-font-xs">
                                        <?php the_sub_field('b6_text_1'); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty (get_sub_field('b6_header_2'))): ?>
                                    <p class="b-block-title font-xl">
                                        <?php the_sub_field('b6_header_2'); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty (get_sub_field('b6_middle_2'))): ?>
                                    <p class="b-sub-title font-survey italic">
                                        <?php the_sub_field('b6_middle_2'); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if (!empty (get_sub_field('b6_text_2'))): ?>
                                    <p class="b-bottom-text i-font-xs">
                                        <?php the_sub_field('b6_text_2'); ?>
                                        <span class="font-after <?php the_sub_field('b2b3b4b6_icon'); ?>"/>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php break; ?>
        <?php case 'block_7': ?>
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
            <section <?php if (!empty (get_sub_field('all_id'))): ?> id="<?php the_sub_field('all_id'); ?>" <?php endif; ?>
                    class="you-make-like">
                <?php if (!empty (get_sub_field('b1b2b3b5b7b8_headline'))): ?>
                    <p class="font-s text-uppercase yml-title"><?php the_sub_field('b1b2b3b5b7b8_headline'); ?></p>
                <?php endif; ?>
                <ul class="rec-article">
                    <?php while ($query->have_posts()): ?>
                        <?php $query->the_post(); ?>
                        <li class="ra-item"
                            style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>')">
                            <a href="<?php echo get_permalink(get_the_ID()); ?>"
                               class="leer-more c-white text-uppercase ra-btn"><?php the_sub_field('b7_label'); ?></a>
                        </li>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </ul>
            </section>
            <?php break; ?>
        <?php case 'block_8': ?>
            <?php
            /*$last = wp_get_recent_posts([
                'numberposts' => 1,
                'post_type' => 'post',
                'post_status' => 'publish'
            ], OBJECT)[0];
            <section class="first-post" style="background-image: url('<?php echo get_the_post_thumbnail_url($last->ID); ?>')">
                <div class="post-prev-info text-center" >
                    <p class="latest-post c-white  l-bottom l-center l-white text-uppercase font-monserat"><?php the_field('s8latest_label'); ?></p>
                    <h3 class="ib-post-title font-xl c-white text-uppercase"><?php echo $last->post_title; ?></h3>
                    <a href="<?php echo get_permalink($last->ID); ?>" class="leer-more text-uppercase post-lm"><?php the_field('s8more_button_label'); ?></a>
                </div>
            </section>
            */
            ?>
            <section <?php if (!empty (get_sub_field('all_id'))): ?> id="<?php the_sub_field('all_id'); ?>" <?php endif; ?>
                    class="article-prev reverse padding-2">
                <?php if (!empty (get_sub_field('b2b4b8_image'))): ?>
                    <div class="img-block">
                        <img src="<?php the_sub_field('b2b4b8_image'); ?>">
                    </div>
                <?php endif; ?>
                <div class="a-text-block">
                    <?php if (!empty (get_sub_field('b1b2b3b5b7b8_headline'))): ?>
                        <p class="block-title text-uppercase l-bottom l-black">
                            <?php the_sub_field('b1b2b3b5b7b8_headline'); ?>
                        </p>
                    <?php endif; ?>
                    <p class="block-description">
                        <?php if (!empty (get_sub_field('b3b6b8_slogan'))): ?>
                            <span class="desc-title italic text-uppercase font-monserat"><?php the_sub_field('b3b6b8_slogan'); ?></span>
                        <?php endif; ?>
                        <?php
                        if (!empty (get_sub_field('b8_text')))
                            the_sub_field('b8_text');
                        ?>
                    </p>
                    <?php if (!empty (get_sub_field('b1b3b4b8_button_label'))): ?>
                        <p>
                            <a href="<?php echo (!empty (get_sub_field('b1b4b8_button_link'))) ? get_sub_field('b1b4b8_button_link') : 'javascript:void(0);'; ?>"
                               class="leer-more text-uppercase border-black "><?php the_sub_field('b1b3b4b8_button_label'); ?></a>
                        </p>
                    <?php endif; ?>
                </div>
            </section>
            <?php break; ?>
        <?php case 'block_9': ?>
            <section <?php if (!empty (get_sub_field('all_id'))): ?> id="<?php the_sub_field('all_id'); ?>" <?php endif; ?>
                    class="testimonials-section">
                <div class="tes-block">
                    <div class="t-images-block">
                        <?php if (!empty (get_sub_field('b9_first_image'))): ?>
                            <img src="<?php the_sub_field('b9_first_image'); ?>" alt="">
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b9_second_image'))): ?>
                            <img src="<?php the_sub_field('b9_second_image'); ?>" alt="">
                        <?php endif; ?>
                        <?php if (!empty (get_sub_field('b9_third_image'))): ?>
                            <img src="<?php the_sub_field('b9_third_image'); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <?php if (!empty (get_sub_field('b0b9_shortcode'))): ?>
                        <div class="testimonials-block">
                            <?php echo do_shortcode(get_sub_field('b0b9_shortcode')); ?>
                        </div>
                    <?php endif; ?>
                </div>

            </section>
            <?php break; ?>
        <?php endswitch; ?>
<?php endwhile; ?>
<?php get_footer(); ?>