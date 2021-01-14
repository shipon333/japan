<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Codestar Framework <small>by Codestar</small>',
  'menu_icon'           => 'dashicons-images-alt',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();



// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'header_footer',
  'title'       => 'Header & Footer',

  // begin: fields
  'fields'      => array(

     array(
        'id'    => 'logo_up',
        'type'  => 'image',
        'title' => 'Header Logo',
      ),
      array(
        'id'    => 'logo_footer',
        'type'  => 'image',
        'title' => 'Footer Logo',
      ),            
      array(
        'id'      => 'cmp_name',
        'type'    => 'text',
        'title'   => 'Company Name',
      ),
      array(
        'id'      => 'cmpsub_name',
        'type'    => 'text',
        'title'   => 'Company Sub Name',
      ),
      array(
        'id'      => 'cmp_number',
        'type'    => 'text',
        'title'   => 'Number',
      ),
      array(
        'id'      => 'cmpsub_number',
        'type'    => 'text',
        'title'   => 'Number Sub Title',
      ),
      array(
        'id'      => 'copy_right',
        'type'    => 'textarea',
        'title'   => 'Copy Right',
      ),


  ), 
);
$options[]      = array(
  'name'        => 'working_procedure',
  'title'       => 'Working Procedure',
  // begin: fields
  'fields'      => array(

     array(
        'id'    => 'work_link_one',
        'type'  => 'text',
        'title' => 'Working Procedure Link',
      ),
        
  ), 
);
$options[]      = array(
  'name'        => 'settings',
  'title'       => 'Settings',
  // begin: fields
  'fields'      => array(

     array(
        'id'    => 'one_category',
        'type'  => 'text',
        'title' => 'First Category Name ',
      ), 
      array(
        'id'    => 'two_category',
        'type'  => 'text',
        'title' => 'Second Category Name',
      ), 
      array(
        'id'    => 'three_category',
        'type'  => 'text',
        'title' => 'Three Category Name',
      ), 
      array(
        'id'    => 'four_category',
        'type'  => 'text',
        'title' => 'Four Category Name',
      ),         
  ), 
);

$options[]      = array(
  'name'        => 'social_icon',
  'title'       => 'Social Icon',

  // begin: fields
  'fields'      => array(

     array(
        'id'    => 'line_link',
        'type'  => 'text',
        'title' => 'Line ',
      ),          
      array(
        'id'    => 'facebook_link',
        'type'  => 'text',
        'title' => 'Facebook ',
      ),          
      array(
        'id'    => 'envalope_link',
        'type'  => 'text',
        'title' => 'Envalope ',
      ),          
      array(
        'id'    => 'instagram_link',
        'type'  => 'text',
        'title' => 'Instagram ',
      ),          
      array(
        'id'    => 'twitter_link',
        'type'  => 'text',
        'title' => 'Twitter ',
      ),          
      array(
        'id'    => 'youtube_link',
        'type'  => 'text',
        'title' => 'Youtube ',
      ),          
      
      

  ), 
);

$options[]      = array(
  'name'        => 'three_category',
  'title'       => 'Three Category Post',

  // begin: fields
  'fields'      => array(

     array(
        'id'    => 'categori_one_title',
        'type'  => 'text',
        'title' => 'Category One Title ',
      ), 
      array(
        'id'    => 'categori_one_link',
        'type'  => 'text',
        'title' => 'Category One Link ',
      ),  
      array(
        'id'    => 'categori_one_image',
        'type'  => 'image',
        'title' => 'Category One Image ',
      ),  


      array(
        'id'    => 'categori_two_title',
        'type'  => 'text',
        'title' => 'Category Two Title ',
      ), 
      array(
        'id'    => 'categori_two_link',
        'type'  => 'text',
        'title' => 'Category Two Link ',
      ),  
      array(
        'id'    => 'categori_two_image',
        'type'  => 'image',
        'title' => 'Category Two Image ',
      ),    


      array(
        'id'    => 'categori_three_title',
        'type'  => 'text',
        'title' => 'Category Three Title ',
      ), 
      array(
        'id'    => 'categori_three_link',
        'type'  => 'text',
        'title' => 'Category Three Link ',
      ),  
      array(
        'id'    => 'categori_three_image',
        'type'  => 'image',
        'title' => 'Category Three Image ',
      ),      
             
      
      

  ), 
);

$options[]      = array(
  'name'        => 'add',
  'title'       => 'Add',

  // begin: fields
  'fields'      => array(

     array(
        'id'    => 'add_one',
        'type'  => 'image',
        'title' => 'Add One',
      ), 
     array(
        'id'    => 'add_two',
        'type'  => 'image',
        'title' => 'Add Two',
      ), 
          
  ), 
);

$options[]      = array(
  'name'        => 'about_us',
  'title'       => 'About Us',

  // begin: fields
  'fields'      => array(

     array(
        'id'    => 'about_title',
        'type'  => 'text',
        'title' => 'About Title',
      ), 
     array(
        'id'    => 'about_content',
        'type'  => 'textarea',
        'title' => 'About Content',
      ), 
          
  ), 
);



$options[]      = array(
  'name'        => 'offers',
  'title'       => 'Offer',
  // begin: fields
  'fields'      => array(

     array(
        'id'        => 'offer_group',
        'type'      => 'group',
        'title'     => 'Offer',
        'button_title'=> 'Add New',
        'fields'    => array(
          array(
            'id'    => 'offer_title',
            'type'  => 'text',
            'title' => 'Offer Title',
          ),
          array(
            'id'    => 'offer_content',
            'type'  => 'textarea',
            'title' => 'Offer Description',
          ),
        ),
      ),

          
  ), 
);
$options[]      = array(
  'name'        => 'working_area',
  'title'       => 'Working Area',

  // begin: fields
  'fields'      => array(

     array(
        'id'        => 'work_group',
        'type'      => 'group',
        'title'     => 'Working Area',
        'button_title'=> 'Add New',
        'fields'    => array(
          array(
            'id'    => 'Work_location',
            'type'  => 'text',
            'title' => 'Work Location',
          ),
          array(
            'id'    => 'work_desc',
            'type'  => 'textarea',
            'title' => 'Work Description',
          ),
        ),
      ),

          
  ), 
);

$options[]      = array(
  'name'        => 'faq',
  'title'       => 'FAQ Page',
  // begin: fields
  'fields'      => array(

     array(
        'id'        => 'faq_group',
        'type'      => 'group',
        'title'     => 'FAQ',
        'button_title'=> 'Add New',
        'fields'    => array(
          array(
            'id'    => 'faq_title',
            'type'  => 'text',
            'title' => 'FAQ Title',
          ),
          array(
            'id'    => 'faq_content',
            'type'  => 'textarea',
            'title' => 'FAQ Description',
          ),
        ),
      ),

          
  ), 
);

$options[]      = array(
  'name'        => 'office_info',
  'title'       => 'Office Protfolio',

  // begin: fields
  'fields'      => array(
    array(
            'id'    => 'office_mail',
            'type'  => 'text',
            'title' => 'Office Mail',
          ),
    array(
            'id'    => 'office_location',
            'type'  => 'text',
            'title' => 'Office Location',
          ),
    array(
            'id'    => 'office_title',
            'type'  => 'text',
            'title' => 'Office Title',
          ),
     array(
        'id'        => 'office_group',
        'type'      => 'group',
        'title'     => 'Office Info',
        'button_title'=> 'Add New',
        'fields'    => array(
          array(
            'id'    => 'name_title',
            'type'  => 'text',
            'title' => 'Name Title',
          ),
          array(
            'id'    => 'name_content',
            'type'  => 'textarea',
            'title' => 'Name Content',
          ),
        ),
      ),
          
  ), 
);

// ------------------------------
// a option section with tabs   -
// ------------------------------

// ------------------------------
// license                      -
// ------------------------------
$options[]   = array(
  'name'     => 'license_section',
  'title'    => 'License',
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => '100% GPL License, Yes it is free!'
    ),
    array(
      'type'    => 'content',
      'content' => 'Codestar Framework is <strong>free</strong> to use both personal and commercial. If you used commercial, <strong>please credit</strong>. Read more about <a href="http://www.gnu.org/licenses/gpl-2.0.txt" target="_blank">GNU License</a>',
    ),

  )
);

CSFramework::instance( $settings, $options );
