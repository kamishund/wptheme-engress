<?php get_header(); ?>

<?php
/* 
Template Name:トップページ
*/
?>
    <?php get_template_part("inc/header"); ?>
    <?php get_template_part("inc/mainvisual"); ?>
    <main>
        <section class="nayami">
            <h2>TOEFL学習でこんな悩みありませんか？</h2>
            <div class="nayami_wrap">
                <p>勉強の習慣が<br>身についていない</p>
                <p>勉強しているはず<br>なのに点数が伸びない</p>
                <p>正しい勉強方法が<br>わからない</p>
            </div>

            <div class="tokka">
                <div class="tokka_wrap">
                <p class="ttl">
                   Engressは<br><span>TOEFLに特化した<br class="spbr">スクール</span>です
                </p>
                <p>完全オーダーメイドで、<br class="tabbr">１人１人の悩みに合わせた<br class="spbr">最適な指導で<br>TOEFLの苦手分野を<br class="spbr">克服します。</p>
                </div>
            </div>
        </section>

        <section class="strong">
            <h2>TOEFL対策に特化したEngress3つの強み</h2>
            <div class="wrapper">
                <div class="textarea">
                    <p class="fea">特長 １</p>
                    <h3>TOEFLに最適化された<br>無駄のないカリキュラム</h3>
                    <p class="text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
                </div>

                <div class="imgarea">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature01.jpg" alt="">
                </div>
            </div>

            <div class="wrapper seconditem">
            <div class="imgarea">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature02.jpg" alt="">
                </div>

                <div class="textarea">
                    <p class="fea">特長 ２</p>
                    <h3>日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
                    <p class="text">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
                </div>
            </div>

            <div class="wrapper">
                <div class="textarea">
                    <p class="fea">特長 ３</p>
                    <h3>平均3ヶ月で<br>TOEFL iBT20点アップ</h3>
                    <p class="text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
                </div>

                <div class="imgarea">
                <img src="<?php echo get_template_directory_uri(); ?>/img/feature03.jpg" alt="">
                </div>
            </div>

            <div class="inner">
                <div class="pricewrap" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/price.jpg ?>');">
                    <h3>Engressの<br>料金プランはこちら</h3>
                    <a href="/price/" class="pricebtn">料金を見てみる</a>
                </div>
            </div>
        </section>

        <section class="achive">
            <h2>TOEFL成功事例</h2>
            <div class="wrapper">
                <div class="item">
                    <p class="ttl"><?php echo get_field ('title1',12);?></p>
                    <img src="<?php the_field('image1',12); ?>" />
                    <div class="zokuseiwrap">
                        <p class="status">
                             <?php echo get_field ('status1',12);?>
                        </p>
                        <p class="name">
                             <?php echo get_field ('name1',12);?>
                        </p>
                    </div>

                    <p class="ach"><?php echo get_field ('seika1',12);?></p>
                </div>

                <div class="item">
                    <p class="ttl"><?php echo get_field ('title2',12);?></p>
                    <img src="<?php the_field('image2',12); ?>" />
                    <div class="zokuseiwrap">
                        <p class="status">
                             <?php echo get_field ('status2',12);?>
                        </p>
                        <p class="name">
                             <?php echo get_field ('name2',12);?>
                        </p>
                    </div>

                    <p class="ach"><?php echo get_field ('seika2',12);?></p>
                </div>


                <div class="item">
                    <p class="ttl"><?php echo get_field ('title3',12);?></p>
                    <img src="<?php the_field('image3',12); ?>" />
                    <div class="zokuseiwrap">
                        <p class="status">
                             <?php echo get_field ('status3',12);?>
                        </p>
                        <p class="name">
                             <?php echo get_field ('name3',12);?>
                        </p>
                    </div>

                    <p class="ach"><?php echo get_field ('seika3',12);?></p>
                </div>

            </div>
        </section>

        <section class="nagare">
            <h2>ご利用の流れ</h2>
            <ul>
                <li class="wrapper">
                    <p class="num"><span>01</span></p>
                    <div class="inner">
                        <p class="ttl">お問い合わせ</p>
                        <div class="line"><span></span></div>
                        <p class="desc">まずはフォームまたはお電話からお申し込みください。</p>
                    </div>
                </li>

                <li class="wrapper">
                    <p class="num"><span>02</span></p>
                    <div class="inner">
                        <p class="ttl">ヒアリング</p>
                        <div class="line"><span></span></div>
                        <p class="desc">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
                    </div>
                </li>

                <li class="wrapper">
                    <p class="num"><span>03</span></p>
                    <div class="inner">
                        <p class="ttl">学習プランのご提供</p>
                        <div class="line"><span></span></div>
                        <p class="desc">目標達成のために最適な学習プランをご提案致します。</p>
                    </div>
                </li>

                <li class="wrapper">
                    <p class="num"><span>04</span></p>
                    <div class="inner">
                        <p class="ttl">ご入会</p>
                        <div class="line"><span></span></div>
                        <p class="desc">お申込み完了後、レッスンがスタートします。</p>
                    </div>
                </li>

            </ul>
            
        </section>

        <section class="qanda">
            <h2>よくある質問</h2>
            <ul class="accordion-area">
                <li>
                    <h3 class="title">Engressはサラリーマンでも学習を続けられるでしょうか？</h3>
                    <div class="box">
                        <p>Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                    </div>
                </li>

                <li>
                    <h3 class="title">教材はオリジナルのものを使用しているのでしょうか？</h3>
                    <div class="box">
                        <p>教材は弊社のノウハウを詰め込んだ完全オリジナル教材となっております。最新の傾向に合わせて日々ブラッシュアップしております。</p>
                    </div>
                </li>


                <li>
                    <h3 class="title">講師に日本人はいますか？</h3>
                    <div class="box">
                        <p>日本人の講師も多数在籍しております。</p>
                    </div>
                </li>

                <li>
                    <h3 class="title">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h3>
                    <div class="box">
                        <p>英語に関しては可能な限りサポートいたしますので、ぜひ一度お問い合わせください。</p>
                    </div>
                </li>
            </ul>
        </section>

        <section class="newsblog">
            <div class="wrapper">

                <div class="blogarea">
                    <h3>ブログ</h3>
                    <ul>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" class="link_wrap">
                                        <div class="flex">
                                            <div class="imgarea">
                                                <div class="imginner">
                                                    <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail('thumbnail'); ?>
                                                    <?php else : ?>
                                                        <img src="<?php bloginfo('template_url'); ?>/img/feature01.jpg" width="100" height="100" alt="デフォルト画像" />
                                                    <?php endif ; ?>
                                                </div>
                                                <p class="cat">
                                                    <?php
                                                        $cat = get_the_category();
                                                        $cat = $cat[0];
                                                        echo $cat->name;
                                                    ?>
                                                </p>
                                            </div>

                                            <div class="textarea">
                                                <h4 class="news_title">
                                                <?php
                                                    if(mb_strlen($post->post_title, 'UTF-8')>20){
                                                        $title= mb_substr($post->post_title, 0, 20, 'UTF-8');
                                                        echo strip_tags($title.'……');
                                                    }else{
                                                        echo strip_tags($post->post_title);
                                                    }
                                                    ?>
                                                </h4>
                                                <p class="news_date"><?php echo get_the_date("Y.m.d"); ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                        <?php
                            endwhile;
                          wp_reset_postdata();
                        endif;
                        ?>
                    </ul>
                </div>

                <div class="newsarea">
                    <h3>お知らせ</h3>
                    <?php
                        $args = array(
                            "post_type" => "news",
                            "posts_per_page" => 3,
                            "paged" => $paged
                        );
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                    ?>
                        <ul>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="news_day"><?php echo get_the_date(); ?></div>
                                        <div class="news_title">
                                            <?php
                                                if(mb_strlen($post->post_title, 'UTF-8')>30){
                                                    $title= mb_substr($post->post_title, 0, 30, 'UTF-8');
                                                    echo strip_tags($title.'……');
                                                }else{
                                                    echo strip_tags($post->post_title);
                                                }
                                            ?>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <?php endif; ?>
                </div>
               
            </div>
      
        </section>
    </main>
    <?php get_template_part("inc/footer"); ?>
<?php get_footer(); ?>



