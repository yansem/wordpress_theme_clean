<?php
get_header();
?>

    <div id="fh5co-portfolio">

        <?php if ( have_posts() ) : $i=1; while ( have_posts() ) : the_post(); ?>
            <?php if(has_post_thumbnail()){
                $img_url = get_the_post_thumbnail_url();
            }else{
                $img_url = 'http://picsum.photos/1280/864';
            } ?>
            <!-- post -->
            <div class="fh5co-portfolio-item <?php if($i % 2 == 0) echo 'fh5co-img-right'; ?>">
                <div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php echo $img_url; ?>"></div>
                <div class="fh5co-portfolio-description">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(''); ?></p>
                    <p><a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read more', 'clean'); ?></a></p>
                </div>
            </div>
            <?php $i++; endwhile; ?>
            <!-- post navigation -->
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>

    </div>

<?php
get_footer();
