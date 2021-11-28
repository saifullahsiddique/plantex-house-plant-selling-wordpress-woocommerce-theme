<?php
    get_header();
?>

    <main class="main">
        <section class="blog section container" id="blogs">
            <div class="page_section">
                <h2 class="text-center">
                    <?php the_title(); ?>
                </h2>
                <p class="text-center">
                    Here are some selected plants from our showroom, all are in excellent.
                </p>
            </div>
            <div class="single__container">
                <?php
                    if(have_posts()) :
                        while(have_posts()) :
                            the_post(  );

                        if(has_post_thumbnail()) {
                            the_post_thumbnail( 'large', array('class'=>'blog__img') );
                        }

                ?>
                <div class="content">
                    <?php
                        the_content();
                    ?>
                </div>
                <?php
                        endwhile;
                    endif;
                ?>
            </div>
            <div class="comments">
                <?php 
                    comments_template();
                ?>
            </div>
        </section>
    </main>

<?php
    get_footer();