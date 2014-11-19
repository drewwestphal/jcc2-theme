<?php get_header(); ?>
        
                <div id="container">    
                        <div id="content">
                        <h1 class="entry-title">News</h1>
<?php the_post(); ?>

                                <div id="nav-above" class="navigation">
                                        <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
                                        <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
                                </div><!-- #nav-above -->

                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <h2 class="entry-title"><?php the_title(); ?></h2>
                                        
                                        <div class="entry-meta">                     		
                                                 <span class="entry-date">Posted <?php the_time( get_option( 'date_format' ) ); ?> at <?php the_time ( get_option( 'time_format' ) ) ?></span>
                                        </div><!-- .entry-meta -->
                                        
                                        <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
                                        </div><!-- .entry-content -->
                                        
                                        <div class="entry-utility">

<?php edit_post_link( __( '- Edit -', 'your-theme' ) ) ?>
                                        </div><!-- .entry-utility -->                                                                                                   
                                </div><!-- #post-<?php the_ID(); ?> -->                 
                                
                                <div id="nav-below" class="navigation">
                                        <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
                                        <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
                                </div><!-- #nav-below -->                                       

<?php comments_template('', true); ?>                   
                        
                        </div><!-- #content -->         
                </div><!-- #container -->
                
<?php get_sidebar(); ?> 
<?php get_footer(); ?>