<?php /* Template Name: No Sidebar Page Layout*/ ?>

<!--- THE HEADER -->
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="jumbotron">
                <!-- als er posts zijn, loop door de posts, geef mij de huidige post -->
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <h1 class="display-4"><?php the_title(); ?></h1>
                    <p class="lead"><?php the_content(); ?></p>
                <!-- loop sluiten -->
                <?php endwhile; ?>
                <!-- sluit de if-conditional -->
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php $mycustomquery = new WP_Query(array('category_name' => 'algemeen', 'posts_per_page' => 2)); ?>

            <?php if($mycustomquery->have_posts()) : while($mycustomquery->have_posts()) : $mycustomquery->the_post(); ?>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_content(); ?></p>
                    </div>
                </div>
            <?php endwhile; else : ?>
                <h2>Geen posts</h2>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    
</div>
    
<!--- THE FOOTER -->
<?php get_footer(); ?>
