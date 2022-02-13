<?php get_header(); ?>

<?php
/* 
Template Name:priceページ
*/
?>
    <?php get_template_part("inc/header"); ?>

    <?php get_template_part("inc/price/mainvisual"); ?>

    <div class="panwrap">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
    </div>
   

    <main class="main-price">
        <div class="wrapper">
            <section class="taikei">
                <h2>料金体系</h2>
                <div class="flex">
                    <p class="blue">入会金 39,800円</p>
                    <p class="plus">+</p>
                    <p class="blue">月額費用</p>
                </div>
                <p class="desc">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
            </section>
        </div>

   
            <section class="table">
                    <h2>料金表</h2>

                    <div class="scroll">
                        <div class="price-table js-scrollable">
                            <div class="flex-item">
                                <h3>基礎プラン</h3>

                                <div class="border">
                                    <p class="flex-price"><?php echo get_field ('kiso',53);?></p>
                                    <p class="flex-getu">*月額（税抜価格）</p>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">カリキュラム作成</li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">TOEFL学習サポート</li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">週一回のビデオMTG</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="flex-item">
                                <h3>演習ぷらん</h3>

                                <div class="border">
                                    <p class="flex-price"><?php echo get_field ('enshu',53);?></p>
                                    <p class="flex-getu">*月額（税抜価格）</p>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">カリキュラム作成</li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">TOEFL学習サポート</li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">週一回のビデオMTG</li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">月二回の模試（解説付き）</li>

                                    </ul>
                                </div>
                            </div>

                            <div class="flex-item">
                                <h3 id="osusume">おすすめ<br>志望校対策プラン</h3>

                                <div class="border">
                                    <p class="flex-price yell"><?php echo get_field ('sibou',53);?></p>
                                    <p class="flex-getu">*月額（税抜価格）</p>
                                    <ul>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">カリキュラム作成</li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">TOEFL学習サポート</li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">週一回のビデオMTG</li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">月二回の模試（解説付き）</li>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/reten.png" alt="">週一の英語面接対策</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="flex-item">
                                <h3>フレックスプラン</h3>

                                <div class="border">
                                    <p class="flex-price"><?php echo get_field ('flex',53);?></p>
                                    <p class="flex-getu">*月額（税抜価格）</p>
                                    <ul>
                                        <li>＊別途ご相談ください</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    </main>

    <?php get_template_part("inc/footer"); ?>
<?php get_footer(); ?>

