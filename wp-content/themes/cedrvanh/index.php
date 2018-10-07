<!--- THE HEADER -->
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <main class="col-sm-8">
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
            
            <?php
                $query = new WP_Query(array('post_type' => 'post'));  

                if (is_page('Recepten')) {
                    $query = new WP_Query(array('post_type' => 'recipe')); 
                }
                if (is_page('Events')) {
                    $query = new WP_Query(array('post_type' => 'event')); 
                }
            ?>
            <div class="row">
                <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                    <div class="mb-4 col-sm-6">
                        <div class="card-deck">
                            <div class="card" style="min-height: 350px">
                                <?php if(has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
                                <?php endif; ?>
                                <div class="card-body">
                                    <a href="<?php the_permalink(); ?>">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                    </a>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?php 
                                            $subtitle = get_post_meta($post->ID, '_recipe_subtitle', true);
                                            echo $subtitle;
                                        ?>
                                    </h6>
                                    <p class="card-text"><?php the_field('intro'); ?></p>
                                    <p class="card-text"><small class="text-muted"><?php the_taxonomies(); ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <?php endwhile; endif; ?>
            </div>    
        </main>
        <aside class="col-sm-4">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>

<!--- THE FOOTER -->
<?php get_footer(); ?>
