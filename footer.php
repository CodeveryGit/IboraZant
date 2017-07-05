<?php if (is_front_page() || get_field('include_footer') || is_single() && get_theme_mod('single_include_footer')): ?>
    <footer class="ibora-footer text-center">
        <?php
        wp_nav_menu(array(
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'footer-menu ' . get_theme_mod('footer_icon'),
                'walker' => new Ibora_Walker_Nav_Primary()
            )
        )
        ?>
        <?php if (!empty (get_theme_mod('footer_copyright'))): ?>
            <p class="f-copyright italic"><?php echo get_theme_mod('footer_copyright'); ?></p>
        <?php endif; ?>
        <ul class="f-social">
            <?php if (!empty (get_theme_mod('facebook_link'))): ?>
                <li class="soc-item"><a href="<?php echo get_theme_mod('facebook_link'); ?>"><i class="fa fa-facebook"
                                                                                                aria-hidden="true"></i></a>
                </li>
            <?php endif; ?>
            <?php if (!empty (get_theme_mod('youtube_link'))): ?>
                <li class="soc-item"><a href="<?php echo get_theme_mod('youtube_link'); ?>"><i
                                class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <?php endif; ?>
            <?php if (!empty (get_theme_mod('pinterest_link'))): ?>
                <li class="soc-item"><a href="<?php echo get_theme_mod('pinterest_link'); ?>"><i
                                class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <?php endif; ?>
            <?php if (!empty (get_theme_mod('instagram_link'))): ?>
                <li class="soc-item"><a href="<?php echo get_theme_mod('instagram_link'); ?>"><i class="fa fa-instagram"
                                                                                                 aria-hidden="true"></i></a>
                </li>
            <?php endif; ?>
            <?php if (!empty (get_theme_mod('linkedin_link'))): ?>
                <li class="soc-item"><a href="<?php echo get_theme_mod('linkedin_link'); ?>"><i class="fa fa-linkedin"
                                                                                                aria-hidden="true"></i></a>
                </li>
            <?php endif; ?>
        </ul>
        <?php if (!empty (get_theme_mod('footer_question'))): ?>
            <div class="count-me-block text-uppercase c-white">
                <p><?php echo get_theme_mod('footer_question'); ?></p>
                <?php if (!empty (get_theme_mod('footer_question_button_label'))): ?>
                    <a href="<?php echo (!empty (get_theme_mod('footer_question_button_link'))) ? get_theme_mod('footer_question_button_link') : 'javascript:void(0);'; ?>"
                       class="btn btn-defaunt count-me-btn text-uppercase"><?php echo get_theme_mod('footer_question_button_label'); ?></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </footer>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
