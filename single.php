<?php get_header(); ?>

<?php
/* 
Template Name:priceページ
*/
?>
    <?php get_template_part("inc/header"); ?>

    <div class="panwrap">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();

            }?>

            
        </div>
    </div>

    <main class="single_main">
        <div class="wrapper">
            <div class="content">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <p class="cat">
                    <?php
                        $cat = get_the_category();
                        $cat = $cat[0];
                        echo $cat->name;
                    ?>
                </p>

                <h1 class="news_title">
                    <?php
                        echo  strip_tags($post->post_title);
                    ?>
                </h1>

                <div class="sns">
                    <?php echo do_shortcode("[addtoany]"); ?>
                    <p><?php echo get_the_date("Y.m.d"); ?></p>
                </div>

                <div class="sam">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('thumbnail'); ?>
                    <?php else : ?>
                        <img src="<?php bloginfo('template_url'); ?>/img/feature01.jpg" width="100" height="100" alt="デフォルト画像" />
                    <?php endif ; ?>
                </div>

                <div class="blog_body" id="blog_content_id">
                <?php the_content(); ?>
                </div>
              <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

                <!-- osusume -->
                <?php get_template_part("inc/blog/single/blog-osusume"); ?>

            </div>
            <div class="side">
                <section>
                    <h3>関連記事</h3>
                    <div class="blogarea">
                        <ul>
                            <?php
                                $category = get_the_category();
                                $cat = $category[0];
                                $cat_name = $cat->name;
                                $args = array(
                                    "post_type" => "post",
                                    "posts_per_page" => 3,
                                    "paged" => $paged,
                                    "category_name"=> $cat_name,
                                );
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) :
                            ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
                                                <h4 class="news_title" id="small">
                                                <?php
                                                    if(mb_strlen($post->post_title, 'UTF-8')>30){
                                                        $title= mb_substr($post->post_title, 0, 30, 'UTF-8');
                                                        echo strip_tags($title.'……');
                                                    }else{
                                                        echo strip_tags($post->post_title);
                                                    }
                                                    ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </section>

                <section class="caterap">
                    <h3>カテゴリー</h3>
                    <ul class="category-col">
                        <?php
                            $categories = get_categories();
                            foreach ($categories as $category) {
                                echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                            }
                        ?>
                    </ul>
                </section>
                
            </div>
        </div>
    </main>
   

    <?php get_template_part("inc/footer"); ?>
<?php get_footer(); ?>