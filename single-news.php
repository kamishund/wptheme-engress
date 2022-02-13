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

    <main class="single_news_main">
        <div class="wrapper">
            <div class="content">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1 class="news_title">
                    <?php
                        echo  strip_tags($post->post_title);
                    ?>
                </h1>

                <p class="news_date"><?php echo get_the_date("Y.m.d"); ?></p>


                <div class="news_body">
                <?php the_content(); ?>
                </div>
              <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
    </main>
   

    <?php get_template_part("inc/footer"); ?>
<?php get_footer(); ?>