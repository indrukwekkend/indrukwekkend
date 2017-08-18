<?php while (have_posts()) : the_post(); ?>
    <div class="row case-intro">
        <div class="container p-5">
            <div class="row">
                <div class="col text-center">
                    <div class="cases-title">
                        <?php the_title(); ?>	
            		</div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="case-description">
            			<?php the_content(); ?>
        			</div>
                </div>
            </div>
        </div>
    </div>
    <?php // Content ?>
    <?php if( have_rows('content') ): ?>
        <div class="row case-content">
            <div class="container">
                <?php while( have_rows('content') ): the_row(); ?>
                	   <?php if( get_row_layout() == 'team_quote_left' ): ?>		
                	       <div class="row case-row">
                            <div class="col-lg-6">
                                <div class="case-quote p-4">
                                    <div class="quote-content">		
                	                       <?php the_sub_field('content')?>		
                	                   </div>
                                    <div class="quote-autograph">
                                            <?php if( $post_object = get_sub_field('author') ): ?>
                                            <?php $post = $post_object; ?>
                                            <?php setup_postdata($post); ?>
                                            <?php if( $autograph = get_field('autograph') ): ?>
                                                <img class="mt-3" width="120" src="<?php echo get_stylesheet_directory_uri()."/dist/images/autographs/".$autograph; ?>" />
                                            <?php endif; ?>
                                            <?php wp_reset_postdata(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif( get_row_layout() == 'client_quote_left' ): ?>
                        <div class="row case-row">
                            <div class="col-lg-6">
                                <div class="case-quote p-4">
                                    <div class="quote-content">
                                        <?php the_sub_field('content')?>
                                    </div>
                                    <div class="quote-autograph">
                                        <img src="<?php the_sub_field('author')?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                	   <?php elseif( get_row_layout() == 'image_left' ): ?>
                        <div class="row justify-content-center case-row">
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="case-title">
                                            <span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span> <span class="line"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mt-5">
                                        <div class="case-image-left text-center">
                                            <img class="img-fluid" src="<?php the_sub_field('image'); ?>" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="case-content-left ">
                                            <?php the_sub_field('content'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif(get_row_layout() == 'image_right' ): ?>		
                        <div class="row justify-content-center case-row">
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-lg-6"></div>
                                    <div class="col-lg-6 text-right">
                                        <div class="case-title">
                                            <span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span> <span class="line"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mt-5 mt-lg-0">
                                        <div class="case-content-right">    					
                                            <?php the_sub_field('content'); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-5">
                                        <div class="case-image-right text-center">
                                            <img class="img-fluid" src="<?php the_sub_field('image'); ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif(get_row_layout() == 'image_fullwidth' ): ?>   		
                	       <div class="row justify-content-center case-row">
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="case-title">
                                            <span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span> <span class="line"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 mt-5"></div>
                                    <div class="col-lg-6">
                                        <div class="case-content-left">
                                            <?php the_sub_field('content'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="case-image-fullwidth pt-5">
                                            <img class="img-fluid" src="<?php the_sub_field('image'); ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>            
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endwhile; ?>