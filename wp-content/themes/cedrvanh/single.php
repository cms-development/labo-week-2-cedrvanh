<!--- THE HEADER -->
<?php get_header(); ?>

<div class="container">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-4 mt-4">
                <?php 
                    $image = get_field('images');
                    $url = $image['url'];
                ?>
                <img class="img-fluid" src="<?php echo $image['sizes']['large']?>"/>
            </div>
            <div class="col-8 mt-4">
                <h1><?php the_title(); ?></h1>
                <h4>
                    <?php 
                        $subtitle = get_post_meta($post->ID, '_recipe_subtitle', true);
                        echo $subtitle;
                    ?>
                </h4>
                <p><?php the_field('intro') ?></p>
                <br>
                <h2>Recept</h2>
                <p><?php the_content(); ?></p>
                <div class="row mt-4">
                    <div class="col-6">
                        <h3>Ingrediënten</h3>
                        <p>
                            <?php 
                                $ingredients = get_post_meta($post->ID, '_recipe_ingredients', true);
                                echo $ingredients;
                            ?>
                        </p>
                    </div>
                    <div class="col-6">
                        <h3>Info</h3>
                        <ul>
                            <li>Alcohol: <?php the_field('alcohol'); ?></li>
                            <li><?php the_taxonomies(); ?></li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
        <div class="row">
            <div class="col-12">                
                
            </div>
        </div>
        
    <!-- loop sluiten -->
    <?php endwhile; ?>
    <!-- sluit de if-conditional -->
    <?php endif; ?>
</div>

<!--- THE FOOTER -->
<?php get_footer(); ?>
