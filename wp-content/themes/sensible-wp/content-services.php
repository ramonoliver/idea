<?php
/**
 * The template part for displaying home services
 *
 * @package sensible-wp
 */
?>
<style>
    .hidden{
        display:none;
    }

    .service_description{
        max-width: 80%;
        text-align: center;
        margin: 0 auto;
    }

</style>
			<div class="home-services">
            	
				<?php if ( get_theme_mod( 'services_text' ) ) : ?>
                
        			<div class="grid grid-pad">
                    
            			<div class="col-1-1">
							<h6 class="wow animated fadeIn"><?php echo wp_kses_post(get_theme_mod( 'services_text' )); ?></h6>
							<span class="subtitle wow animated fadeIn"><?php echo wp_kses_post(get_theme_mod( 'services_subtext' )); ?></span>
                        </div>
                        
            		</div><!-- grid -->
                    
				<?php endif; ?>
                
                <?php $services_columns_number = esc_html( get_theme_mod( 'sensiblewp_services_columns_number', '3' )); ?>  
                
        		<div class="grid grid-pad no-top">
                    
					<div class="col-1-<?php echo esc_html( $services_columns_number ); ?> wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-1">
                        
                        <?php if( get_theme_mod( 'active_service_1' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_1' ) ) : ?>
                				<i class="fa <?php echo esc_html( get_theme_mod( 'service_icon_1' )); ?>" target="<?php echo esc_html( get_theme_mod( 'service_icon_1' )); ?>"></i>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_1' ) ) : ?>
              					<h5><?php echo wp_kses_post( get_theme_mod( 'service_title_1' )); ?></h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_1' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'service_text_1' )); ?></p>
                            <?php endif; ?>
                            
                        <?php endif; ?>  
                             
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 

					<div class="col-1-<?php echo esc_html( $services_columns_number ); ?> wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-2">
                        
                        <?php if( get_theme_mod( 'active_service_2' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_2' ) ) : ?>
                				<i class="fa <?php echo esc_html( get_theme_mod( 'service_icon_2' )); ?>" target="<?php echo esc_html( get_theme_mod( 'service_icon_2' )); ?>"></i>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_2' ) ) : ?>
              					<h5><?php echo wp_kses_post( get_theme_mod( 'service_title_2' )); ?></h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_2' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'service_text_2' )); ?></p>
                            <?php endif; ?> 
                            
                        <?php endif; ?> 
                             
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 

					<div class="col-1-<?php echo esc_html( $services_columns_number ); ?> wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-3">
                        
                         <?php if( get_theme_mod( 'active_service_3' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_3' ) ) : ?>
                				<i class="fa <?php echo esc_html( get_theme_mod( 'service_icon_3' )); ?>" target="<?php echo esc_html( get_theme_mod( 'service_icon_3' )); ?>"></i>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_3' ) ) : ?>
              					<h5><?php echo wp_kses_post( get_theme_mod( 'service_title_3' )); ?></h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_3' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'service_text_3' )); ?></p> 
                            <?php endif; ?> 
                            
                        <?php endif; ?> 
                             
  						</div><!-- service --> 
					</div><!-- col-1-3 -->  

					<div class="col-1-<?php echo esc_html( $services_columns_number ); ?> wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-4">
                        
                        <?php if( get_theme_mod( 'active_service_4' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_4' ) ) : ?>
                				<i class="fa <?php echo esc_html( get_theme_mod( 'service_icon_4' )); ?>" target="<?php echo esc_html( get_theme_mod( 'service_icon_4' )); ?>"></i>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_4' ) ) : ?>
              					<h5><?php echo wp_kses_post( get_theme_mod( 'service_title_4' )); ?></h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_4' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'service_text_4' )); ?></p>
                            <?php endif; ?>
                            
                        <?php endif; ?>  
                             
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 
                    
                    <div class="col-1-<?php echo esc_html( $services_columns_number ); ?> wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-5">
                        
                        <?php if( get_theme_mod( 'active_service_5' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_5' ) ) : ?>
                				<i class="fa <?php echo esc_html( get_theme_mod( 'service_icon_5' )); ?>" target="<?php echo esc_html( get_theme_mod( 'service_icon_5' )); ?>"></i>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_5' ) ) : ?>
              					<h5><?php echo wp_kses_post( get_theme_mod( 'service_title_5' )); ?></h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_5' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'service_text_5' )); ?></p>
                            <?php endif; ?> 
                            
                        <?php endif; ?> 
                             
  						</div><!-- service --> 
					</div><!-- col-1-3 --> 
     
                    <div class="col-1-<?php echo esc_html( $services_columns_number ); ?> wow animated fadeIn" data-wow-delay="0.25s"> 
    					<div class="service sbox-6">
                        
                         <?php if( get_theme_mod( 'active_service_6' ) == '') : ?>
                        
                        	<?php if ( get_theme_mod( 'service_icon_6' ) ) : ?>
                				<i class="fa <?php echo esc_html( get_theme_mod( 'service_icon_6' )); ?>" target="<?php echo esc_html( get_theme_mod( 'service_icon_6' )); ?>"></i>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_title_6' ) ) : ?>
              					<h5><?php echo wp_kses_post( get_theme_mod( 'service_title_6' )); ?></h5>
                            <?php endif; ?> 
                            
                            <?php if ( get_theme_mod( 'service_text_6' ) ) : ?>
              					<p class="member-description"><?php echo wp_kses_post( get_theme_mod( 'service_text_6' )); ?></p> 
                            <?php endif; ?> 
                            
                        <?php endif; ?> 
                             
  						</div><!-- service --> 
					</div><!-- col-1-3 -->    
  
        		</div><!-- grid -->
                
                <?php if ( get_theme_mod( 'service_button_text' ) ) : ?>
                    
                    	<?php if ( get_theme_mod( 'service_button_url' ) ) : ?>
                    		<a href="<?php echo esc_url( get_page_link( get_theme_mod('service_button_url'))) ?>" class="featured-link"> 
						<?php endif; ?>git
                            
                          	<button class="wow animated fadeIn" data-wow-delay="0.25s">
							
              					<?php echo wp_kses_post( get_theme_mod( 'service_button_text' )); ?> 
                            
                            </button></a>
                        
				<?php endif; ?>


                <?php if( get_theme_mod( 'active_service_1' ) == '') : ?>

                    <?php if ( get_theme_mod( 'service_description_1' ) ) : ?>
                        <div class="hidden service_description" target="<?php echo esc_html( get_theme_mod( 'service_icon_1' )); ?>">
                            <?php echo wp_kses_post( get_theme_mod( 'service_description_1' )); ?>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>

                <?php if( get_theme_mod( 'active_service_2' ) == '') : ?>

                    <?php if ( get_theme_mod( 'service_description_2' ) ) : ?>
                        <div class="hidden service_description" target="<?php echo esc_html( get_theme_mod( 'service_icon_2' )); ?>">
                            <?php echo wp_kses_post( get_theme_mod( 'service_description_2' )); ?>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>

                <?php if( get_theme_mod( 'active_service_3' ) == '') : ?>

                    <?php if ( get_theme_mod( 'service_description_3' ) ) : ?>
                        <div class="hidden service_description" target="<?php echo esc_html( get_theme_mod( 'service_icon_3' )); ?>">
                            <?php echo wp_kses_post( get_theme_mod( 'service_description_3' )); ?>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>

                <?php if( get_theme_mod( 'active_service_4' ) == '') : ?>

                    <?php if ( get_theme_mod( 'service_description_4' ) ) : ?>
                        <div class="hidden service_description" target="<?php echo esc_html( get_theme_mod( 'service_icon_4' )); ?>">
                            <?php echo wp_kses_post( get_theme_mod( 'service_description_4' )); ?>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>

                <?php if( get_theme_mod( 'active_service_5' ) == '') : ?>

                    <?php if ( get_theme_mod( 'service_description_5' ) ) : ?>
                        <div class="hidden service_description" target="<?php echo esc_html( get_theme_mod( 'service_icon_5' )); ?>">
                            <?php echo wp_kses_post( get_theme_mod( 'service_description_5' )); ?>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>

                <?php if( get_theme_mod( 'active_service_6' ) == '') : ?>

                    <?php if ( get_theme_mod( 'service_description_6' ) ) : ?>
                        <div class="hidden service_description" target="<?php echo esc_html( get_theme_mod( 'service_icon_6' )); ?>">
                            <?php echo wp_kses_post( get_theme_mod( 'service_description_6' )); ?>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>



            </div><!-- home-services -->
