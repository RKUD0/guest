<?php get_header(); ?>

<?php if ( is_page('contact') ) : ?>
    <div class="cform">
    <?php  echo do_shortcode('[contact-form-7 id="12" title="コンタクトフォーム 1"]'); ?>

    </div>





<?php elseif ( is_page('web') ) : ?>
    <div class="web">
        <h3><span>WEB制作実績</span> </h3>
        <div class="web-cons">
            <div class="web-con">
                <a href="https://www.tennis-fleek2021.info/">
                <h4>Fleek <span>様</span></h4>
                <p>スポーツ</p>
                <div class="web-con-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/スクリーンショット (156).png" alt="">

                </div>
                </a>
            </div>
            <div class="web-con">
                <a href="https://sonsbeing.com/">
                <h4>さんずビーイング<span>様</span></h4>
                <p>訪問介護</p>
                <div class="web-con-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/スクリーンショット (157).png" alt="">

                    </div>
    </a>
            </div>

            <div class="web-con">
                <a href="https://fit-indoor-tennis.com/">
                <h4>フィットインドアテニススクール<span>様</span></h4>
                <p>スポーツ</p>
                <div class="web-con-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/スクリーンショット (158).png" alt="">

                    </div>
    </a>
            </div>

            <div class="web-con">
                <a href="https://nagoya-green-tennis-club.com/">
                <h4>名古屋グリーンテニスクラブ<span>様</span></h4>
                <p>スポーツ</p>
                <div class="web-con-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/スクリーンショット (159).png" alt="">

                    </div>
    </a>
            </div>

        </div>
    </div>

<?php endif; ?>

<?php get_footer(); ?>