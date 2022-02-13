<div class="blogarea">
    <h3>おすすめの記事</h3>
    <ul>
        <?php
            $args = array(
                "post_type" => "post",
                "posts_per_page" => 3,
                "paged" => $paged,
                "tag"=> "pickup",
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
                        <p class="news_date"><?php echo get_the_date("Y.m.d"); ?></p>
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