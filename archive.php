<?php get_header(); ?>

<?php
/* 
Template Name:priceページ
*/
?>
    <?php get_template_part("inc/header"); ?>

    <?php get_template_part("inc/blog/mainvisual"); ?>

    <div class="panwrap">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
    </div>
   

    <main class="main-blog newsblog" id="blog">
        <div class="wrapper">
            <div class="blogarea">
                <h3>
                    <?php if( is_category() ) : ?>
                        <?php echo single_cat_title('',false) . '一覧'; ?>
                            <?php elseif( is_tag() ): ?>
                            <?php echo single_tag_title('',false) . '一覧';?>
                            <?php elseif( is_day() ): ?>
                        <?php echo get_the_date('Y年m月d日') . '一覧';?>
                            <?php elseif( is_month() ): ?>
                        <?php echo get_the_date('Y年m月') . '一覧';?>
                            <?php elseif( is_year() ): ?>
                        <?php echo get_the_date('Y年') . '一覧';?>
                            <?php else:  echo "新着一覧" ?>
                    <?php endif; ?>
                </h3>
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
                                            <p class="news_date"><?php echo get_the_date("Y.m.d"); ?></p>
                                            <h4 class="news_title">
                                            <?php
                                                if(mb_strlen($post->post_title, 'UTF-8')>30){
                                                    $title= mb_substr($post->post_title, 0, 30, 'UTF-8');
                                                    echo strip_tags($title.'……');
                                                }else{
                                                    echo  strip_tags($post->post_title);
                                                }
                                                ?>
                                            </h4>
                                            <p class="news_desc">
                                            <?php
                                                if(mb_strlen($post->post_content, 'UTF-8')>80){
                                                    $title= mb_substr($post->post_content, 0, 80, 'UTF-8');
                                                    echo strip_tags($title.'……');
                                                }else{
                                                    echo strip_tags($post->post_content);
                                                }
                                                ?>
                                            </p>
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
        </div>

        <div class="pagenat">
            <?php the_posts_pagination(
                array(
                    'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
                    'prev_next'     => false, // 「前へ」「次へ」のリンクを表示する場合はtrue
                    'prev_text'     => __( '前へ'), // 「前へ」リンクのテキスト
                    'next_text'     => __( '次へ'), // 「次へ」リンクのテキスト
                    'type'          => 'list', // 戻り値の指定 (plain/list)
                )
            ); ?>
        </div>

    </main>

    <?php get_template_part("inc/footer"); ?>
<?php get_footer(); ?>

