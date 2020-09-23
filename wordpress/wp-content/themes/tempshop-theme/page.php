<?php get_header();?>

<section class="content">

    <div class="container d-flex align-items-center justify-content-center">

        <section class="row">

            <div class="col-lg-3">

                <article class="sticky-top" style="top:3rem;">
                    <?php get_sidebar();?>
                </article>

            </div>

            <div class="col-lg-9">

                <?php if(has_post_thumbnail()):?>

                <img src="<?php the_post_thumbnail_url('post-image');?>" alt="<?php the_title();?>" class="image-fluid mb-5">

                <?php endif;?>

                <h1><?php the_title();?></h1>

                <?php if(have_posts()) : while(have_posts()) : the_post();?>

                <?php the_content();?>

                <?php endwhile; else: endif;?>

            </div>

        </section>

    </div>

</section>

<?php get_footer();?>