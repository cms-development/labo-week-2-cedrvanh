<!--- THE HEADER -->
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <main class="col-12">
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

            <?php $query = new WP_Query(array('post_type' => 'recipe')); ?>
            <div class="row">
                <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-sm-6">
                        <div class="card-deck">
                            <div class="card">
                                <?php if(has_post_thumbnail()) : ?>
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <?php endwhile; endif; ?>
            </div>    
                    



        </main>
    </div>
</div>

<!--- THE FOOTER -->
<?php get_footer(); ?>
