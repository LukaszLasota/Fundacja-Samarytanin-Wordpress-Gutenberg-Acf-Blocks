<?php
/**
 * The template for displaying Search Results pages.
 */
 
get_header(); ?>
 
        <section id="primary" class="content-area search-result">
            <div id="content" class="site-content" role="main">
 
            <?php if ( have_posts() ) : ?>
 
                <header class="page-header">
                    <h1 class="page-title">
						<?php esc_html_e( 'Wyniki wyszukiwania dla: ', 'samarytanin' ); echo get_search_query(); ?>
					</h1>
                </header>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'template-parts/content', 'search' ); ?>
 
                <?php endwhile; ?>
 
            <?php else : ?>
				<div class="no-site-content">
					<p><?php esc_html_e( 'Brak wyników, spróbuj wyszukac inne hasło', 'samarytanin' ); ?></p>
				</div>
 
            <?php endif; ?>
 
            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->
 
<?php get_footer(); ?>