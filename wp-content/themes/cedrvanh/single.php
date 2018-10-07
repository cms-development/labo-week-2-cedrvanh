<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Blog-detail</h1>
            <!-- als er posts zijn, loop door de posts, geef mij de huidige post -->
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <h3><?php the_meta(); ?></h3>
                <h4><?php the_taxonomies(); ?></h4>
                <p><?php the_content(); ?></p>
            <!-- loop sluiten -->
            <?php endwhile; ?>
            <!-- sluit de if-conditional -->
            <?php endif; ?>
        </div>
    </div>
</div>