<?php

/*
Declare fields for restaurant content type
*/

add_action( 'custom_metadata_manager_init_metadata', function() {
  
  $post_types = array( 'restaurant' );
  
  $rest_form = new Custom_Metadata_Form( 'rest-form', $post_types );
  
  $rest_form->set_form_item( array(
    'name' => 'nt_cpt_restaurant_location_info', 
    'item_type' => 'metabox',
    'fields' => array(
      'label' => 'Restaurant Location Info', 
      )
  ) );
  
  $rest_form->print_form();
});