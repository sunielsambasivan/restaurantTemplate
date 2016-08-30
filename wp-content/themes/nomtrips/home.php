<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Homepage Template
 * Template Name: home
 *
 * @file           home.php
 * @package        NomTrips 
 * @author         Suniel Sambasivan
 * @copyright      2015 - 2016 Suniel Sambasivan
 */

get_header(); ?>

<div id="content">
  <section id="banner" class="banner picturefill-background">
    <div class="banner--inner">
      <?php 
      //nt_debug($id); 
        if ( has_post_thumbnail()) :
          get_template_part(NT_COMPONENTS_PATH . 'layout/banner');
        endif; 
      ?>
    
      <div class="form-search--cities">
      <?php
        get_template_part(NT_COMPONENTS_PATH . 'forms/search', '-cities');
      ?>
      </div>
    </div>
  </section>
        
  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    <div class="row">
      <div class="columns small-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <section class="content--post">
          
          <?php the_content(); ?>
          <div class="row">
            <?php
          
            /* get cities */
            $city_array = array( 'new-york', 'los-angeles', 'san-diego', 'miami', 'las-vegas' ); //set order
            $image_size = 'thumb-card';
          
              /* show cities */
            foreach( $city_array as $city ) {
              switch( $city ) {
                
                case 'new-york': 
                $current = City::get_city_by_slug( $city );
                $image_size = 'thumb-card';
                ?>
                  <article class="columns small-12 medium-6">
                    <?php
                      include( locate_template( NT_COMPONENTS_PATH .'cards/card--city.php') );
                    ?>  
                  </article>
                  <?php 
                break;
                
                case 'los-angeles': 
                $current = City::get_city_by_slug( $city );
                $image_size = 'thumb-card';
                ?>
                  <article class="columns small-12 medium-6">
                    <?php
                      include( locate_template( NT_COMPONENTS_PATH .'cards/card--city.php') );
                    ?>  
                  </article>
                  <?php 
                break;
                
                case 'san-diego': 
                $current = City::get_city_by_slug( $city );
                $image_size = 'thumb-card';
                ?>
                  <article class="columns small-12 medium-4">
                    <?php
                      include( locate_template( NT_COMPONENTS_PATH .'cards/card--city.php') );
                    ?>  
                  </article>
                  <?php 
                break;
                
                case 'miami': 
                $current = City::get_city_by_slug( $city );
                //$image_size = 'thumb-card-vert';
                ?>
                  <article class="columns small-12 medium-4">
                    <?php
                      include( locate_template( NT_COMPONENTS_PATH .'cards/card--city.php') );
                    ?>  
                  </article>
                  <?php 
                break;
                
                case 'las-vegas': 
                $current = City::get_city_by_slug( $city );
                $image_size = 'thumb-card';
                ?>
                  <article class="columns small-12 medium-4">
                    <?php
                      include( locate_template( NT_COMPONENTS_PATH .'cards/card--city.php') );
                    ?>  
                  </article>
                  <?php 
                break;
                
              }
            }

            ?>
          </div>
        
        </section><!-- end of .post-entry -->
      </div><!-- end of #post-<?php the_ID(); ?> -->
    </div>
      
      <?php comments_template( '', true ); 
      
    endwhile; 

  else : 

    echo 'no content'; 

  endif; ?>  
      
</div><!-- end of #content -->

<?php get_footer(); ?>
