<?php get_header(); ?>
        
                <div id="container">    
                        <div id="content">
                        
                        <h1 class="entry-title">News</h1>
                        
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                                <div id="nav-above" class="navigation">
                                        <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
                                        <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
                                </div><!-- #nav-above -->
<?php } ?>                      

<?php /* The Loop — with comments! */ ?>                        
<?php while ( have_posts() ) : the_post() ?>

<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>          
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                               
<?php /* an h2 title */ ?>                                                      
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                        
<?php /* Microformatted, translatable post meta */ ?>                                                                           
                                        <div class="entry-meta">                     		
                                                <span class="entry-date">Posted <?php the_time( get_option( 'date_format' ) ); ?> at <?php the_time ( get_option( 'time_format' ) ) ?></span>
                                        </div><!-- .entry-meta -->

<?php /* The entry content */ ?>                                        
                                        <div class="entry-content">     
<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
                                        </div><!-- .entry-content -->

<?php /* Microformatted category and tag links along with a comments link */ ?>                                 
                                        <div class="entry-utility">
                                                
                                                <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'your-theme' ), __( '1 Comment', 'your-theme' ), __( '% Comments', 'your-theme' ) ) ?></span>
                                                <?php edit_post_link( __( '- Edit -', 'your-theme' ) ) ?>
                                        </div><!-- #entry-utility -->   
                                </div><!-- #post-<?php the_ID(); ?> -->

<?php /* Close up the post div */ ?>                    
        
<?php endwhile; ?>              

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                                <div id="nav-below" class="navigation">
                                        <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
                                        <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
                                </div><!-- #nav-below -->
<?php } ?>                      
                        
                        </div><!-- #content -->         
                </div><!-- #container -->
                
<?php get_sidebar(); ?> 
<?php get_footer(); ?>