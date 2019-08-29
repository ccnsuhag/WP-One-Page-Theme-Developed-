<?php 


function vc_header(){

    vc_map(array(
  
        'name' => __('Slider header'),
        'description' => 'This is Slider header',
        'base' => 'slider',
        'icon' => 'fa fa-map',
        'category' => 'Onepage',
        'params' => array(
    
            array(
                'param_name' => 'slider_head',
                'type' => 'textfield',
                'heading' => 'This is slider heading',
                'value' => 'Heading'
            ),
    
        )
      ));
  
  
      vc_map(array(
    
          'name' => __('speaker header'),
          'description' => 'This is speaker header',
          'base' => 'speaker',
          'icon' => 'fa fa-map',
          'category' => 'Onepage',
          'params' => array(
      
              array(
                  'param_name' => 'speaker_head',
                  'type' => 'textfield',
                  'heading' => 'This is speaker heading',
                  'value' => 'Heading'
              ),
      
          )
        ));
  
  
     
  
  
        vc_map(array(
    
          'name' => __('schedule header'),
          'description' => 'This is schedule header',
          'base' => 'schedule',
          'icon' => 'fa fa-map',
          'category' => 'Onepage',
          'params' => array(
      
              array(
                  'param_name' => 'schedule_head',
                  'type' => 'textfield',
                  'heading' => 'This is schedule heading',
                  'value' => 'Heading'
              ),
      
          )
        ));


      vc_map(array(
  
        'name' => __('sticker header'),
        'description' => 'This is sticker header',
        'base' => 'sticker',
        'icon' => 'fa fa-map',
        'category' => 'Onepage',
        'params' => array(
    
            array(
                'param_name' => 'sticker_head',
                'type' => 'textfield',
                'heading' => 'This is sticker heading',
                'value' => 'Heading'
            ),
    
        )
      ));
  
  
  }
  
  add_action("vc_before_init","vc_header");




?>