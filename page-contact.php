<?php get_header(); ?>

<?php
/* 
Template Name:contact
*/
?>
    <?php get_template_part("inc/header"); ?>
    <div class="blog_mainvisual" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/cta.png');">
        <h1>
            お問い合わせ
        </h1>
    </div>

    <div class="panwrap">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();

            }?>

            
        </div>
    </div>

    <main class="contact_main">
        <div class="wrapper">
            <div class="content">
            <h2>弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</h2>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


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