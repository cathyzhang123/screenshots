<?php 
/*==============================================
 panel for image on each page
 ===============================================*/
    function wpb_customize_register($wp_customize){
          // Create custom panel.
        $wp_customize->add_panel( 'panel_for_images', array(
            'priority'       => 500,
            'theme_supports' => '',
            'title'          => __( 'Images Panel', 'awesome' ),
            'description'    => __( 'Container for Images.', 'awesome' ),
        ) );
        //image section 0
        $wp_customize->add_section('container_image0', array(
            'title' => __('Image for Single Post','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('single_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/single/single_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'single_image', array(
            'label' => __('Image for Single Post', 'awesome'),
            'section' => 'container_image0', 
            'settings' => 'single_image',
            'priority' => 1
        )));

        //image section 0-1
        $wp_customize->add_section('container_image0_1', array(
            'title' => __('Image for Single Food','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('single_food_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/single/single_food_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'single_food_image', array(
            'label' => __('Image for Single Food', 'awesome'),
            'section' => 'container_image0_1', 
            'settings' => 'single_food_image',
            'priority' => 1
        )));

        //image section 0-2
        $wp_customize->add_section('container_image0_2', array(
            'title' => __('Image for Single Lifestyle','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('single_lifestyle_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/single/single_lifestyle_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'single_lifestyle_image', array(
            'label' => __('Image for Single Lifestyle', 'awesome'),
            'section' => 'container_image0_2', 
            'settings' => 'single_lifestyle_image',
            'priority' => 1
        )));

        //image section 0-3
        $wp_customize->add_section('container_image0_3', array(
            'title' => __('Image for Single Cooking','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('single_cooking_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/single/single_cooking_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'single_cooking_image', array(
            'label' => __('Image for Single Cooking', 'awesome'),
            'section' => 'container_image0_3', 
            'settings' => 'single_cooking_image',
            'priority' => 1
        )));

          //image section 0-4
        $wp_customize->add_section('container_image0_4', array(
            'title' => __('Image for Single Video','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('single_video_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/single/single_video_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'single_video_image', array(
            'label' => __('Image for Single Video', 'awesome'),
            'section' => 'container_image0_4', 
            'settings' => 'single_video_image',
            'priority' => 1
        )));

          //image section 0-5
        $wp_customize->add_section('container_image0_5', array(
            'title' => __('Image for Single Event','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('single_event_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/single/single_event_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'single_event_image', array(
            'label' => __('Image for Single Event', 'awesome'),
            'section' => 'container_image0_5', 
            'settings' => 'single_event_image',
            'priority' => 1
        )));

        //image section 1
        $wp_customize->add_section('container_image1', array(
            'title' => __('Image for Content','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('content_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/content/content_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'content_image', array(
            'label' => __('Image for Content', 'awesome'),
            'section' => 'container_image1', 
            'settings' => 'content_image',
            'priority' => 1
        )));

        //image section 1-1
        $wp_customize->add_section('container_image1_1', array(
            'title' => __('Image for Content Image','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('content_image_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/content/content_image_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'content_image_image', array(
            'label' => __('Image for Content Image', 'awesome'),
            'section' => 'container_image1_1', 
            'settings' => 'content_image_image',
            'priority' => 1
        )));

        //image section 1-2
        $wp_customize->add_section('container_image1_2', array(
            'title' => __('Image for Content Link','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('content_link_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/content/content_link_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'content_link_image', array(
            'label' => __('Image for Content Link', 'awesome'),
            'section' => 'container_image1_2', 
            'settings' => 'content_link_image',
            'priority' => 1
        )));

        //image section 1-3
        $wp_customize->add_section('container_image1_3', array(
            'title' => __('Image for Content Aside ','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('content_aside_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/content/content_aside_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'content_aside_image', array(
            'label' => __('Image for Content Aside', 'awesome'),
            'section' => 'container_image1_3', 
            'settings' => 'content_aside_image',
            'priority' => 1
        )));

        //image section 1-4
        $wp_customize->add_section('container_image1_4', array(
            'title' => __('Image for Content Chat','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('content_chat_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/content/content_chat_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'content_chat_image', array(
            'label' => __('Image for Content Chat', 'awesome'),
            'section' => 'container_image1_4', 
            'settings' => 'content_chat_image',
            'priority' => 1
        )));
			
			 //image section 1-5
        $wp_customize->add_section('container_image1_5', array(
            'title' => __('Image for Content Gallery','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('content_gallery_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/content/content_gallery_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'content_gallery_image', array(
            'label' => __('Image for Gallery Chat', 'awesome'),
            'section' => 'container_image1_5', 
            'settings' => 'content_gallery_image',
            'priority' => 1
        )));
			
			 //image section 1-6
        $wp_customize->add_section('container_image1_6', array(
            'title' => __('Image for Content Status','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('content_status_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/content/content_status_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'content_status_image', array(
            'label' => __('Image for Content Status', 'awesome'),
            'section' => 'container_image1_6', 
            'settings' => 'content_status_image',
            'priority' => 1
        )));
			
			 //image section 1-7
        $wp_customize->add_section('container_image1_7', array(
            'title' => __('Image for Content Quote','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('content_quote_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/content/content_quote_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'content_quote_image', array(
            'label' => __('Image for Content Quote', 'awesome'),
            'section' => 'container_image1_7', 
            'settings' => 'content_quote_image',
            'priority' => 1
        )));
			
			 //image section 1-8
        $wp_customize->add_section('container_image1_8', array(
            'title' => __('Image for Content Video','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('content_video_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/content/content_video_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'content_video_image', array(
            'label' => __('Image for Content Video', 'awesome'),
            'section' => 'container_image1_8', 
            'settings' => 'content_video_image',
            'priority' => 1
        )));

        //image section 2
        $wp_customize->add_section('container_image2', array(
            'title' => __('Image for Category','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('category_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/category/category_image.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'category_image', array(
            'label' => __('Image for Category', 'awesome'),
            'section' => 'container_image2', 
            'settings' => 'category_image',
            'priority' => 1
        )));
        //image section 2-1
        $wp_customize->add_section('container_image2_1', array(
            'title' => __('Image for Category Food','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('food_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/category/food_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'food_image', array(
            'label' => __('Image for Category Food', 'awesome'),
            'section' => 'container_image2_1', 
            'settings' => 'food_image',
            'priority' => 1
        )));
        //image section 2-2
        $wp_customize->add_section('container_image2_2', array(
            'title' => __('Image for Category Lifestyle','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('lifestyle_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/category/lifestyle_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'lifestyle_image', array(
            'label' => __('Image for Category Lifestyle', 'awesome'),
            'section' => 'container_image2_2', 
            'settings' => 'lifestyle_image',
            'priority' => 1
        )));
        //image section 2-3
        $wp_customize->add_section('container_image2_3', array(
            'title' => __('Image for Category Cooking','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('cooking_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/category/cooking_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'cooking_image', array(
            'label' => __('Image for Category Cooking', 'awesome'),
            'section' => 'container_image2_3', 
            'settings' => 'cooking_image',
            'priority' => 1
        )));

        //image section 2-4
        $wp_customize->add_section('container_image2_4', array(
            'title' => __('Image for Category Video','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('video_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/category/video_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'video_image', array(
            'label' => __('Image for Category Video', 'awesome'),
            'section' => 'container_image2_4', 
            'settings' => 'video_image',
            'priority' => 1
        )));

        //image section 2-5
        $wp_customize->add_section('container_image2_5', array(
            'title' => __('Image for Category Popular','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('popular_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/category/popular_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'popular_image', array(
            'label' => __('Image for Category Popular', 'awesome'),
            'section' => 'container_image2_5', 
            'settings' => 'popular_image',
            'priority' => 1
        )));

        //image section 2-6
        $wp_customize->add_section('container_image2_6', array(
            'title' => __('Image for Category Event','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('event_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/category/event_image.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'event_image', array(
            'label' => __('Image for Category Event', 'awesome'),
            'section' => 'container_image2_6', 
            'settings' => 'event_image',
            'priority' => 1
        )));
			
				//image section 3-0
        $wp_customize->add_section('container_image3_0', array(
            'title' => __('Image for Page','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('page_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/page/page_image.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'page_image', array(
            'label' => __('Image for Page', 'awesome'),
            'section' => 'container_image3_0', 
            'settings' => 'page_image',
            'priority' => 1
        )));

        //image section 3
        $wp_customize->add_section('container_image3', array(
            'title' => __('Image for Archive','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('archive_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/page/archive_image.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'archive_image', array(
            'label' => __('Image for Archive', 'awesome'),
            'section' => 'container_image3', 
            'settings' => 'archive_image',
            'priority' => 1
        )));

        //image section 4
        $wp_customize->add_section('container_image4', array(
            'title' => __('Image for Author','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('author_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/page/author_image.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'author_image', array(
            'label' => __('Image for Author', 'awesome'),
            'section' => 'container_image4', 
            'settings' => 'author_image',
            'priority' => 1
        )));

        //image section 5
        $wp_customize->add_section('container_image5', array(
            'title' => __('Image for Search','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('search_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/page/search_image.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'search_image', array(
            'label' => __('Image for Search', 'awesome'),
            'section' => 'container_image5', 
            'settings' => 'search_image',
            'priority' => 1
        )));

        //image section 6
        $wp_customize->add_section('container_image6', array(
            'title' => __('Image for Contact','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('contact_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/page/contact_image.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'contact_image', array(
            'label' => __('Image for Contact', 'awesome'),
            'section' => 'container_image6', 
            'settings' => 'contact_image',
            'priority' => 1
        )));
			
				//image section 6-1
        $wp_customize->add_section('container_image6_1', array(
            'title' => __('Image for Contact Form','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('contact_form_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/page/contact_form_image.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'contact_form_image', array(
            'label' => __('Image for Contact Form', 'awesome'),
            'section' => 'container_image6_1', 
            'settings' => 'contact_form_image',
            'priority' => 1
        )));
			
			//image section 7
        $wp_customize->add_section('container_image7', array(
            'title' => __('Image for Error','awesome'),
            'description' => sprintf(__('Options for Image', 'awesome')),
            'panel'    => 'panel_for_images',  
            'priority' => 130
        ));
        $wp_customize->add_setting('error_image', array(
            'default' => get_bloginfo('template_directory').'/images/customizer/page/error_image.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'error_image', array(
            'label' => __('Image for Error', 'awesome'),
            'section' => 'container_image7', 
            'settings' => 'error_image',
            'priority' => 1
        )));


    };
add_action('customize_register', 'wpb_customize_register');
/*==============================================
ADD CAROUSEL BOX 3
================================================*/
// add carousel boxes
add_action( 'customize_register', 'awesome_carousel_customizer' );
function awesome_carousel_customizer( $wp_customize ) {
    // Create custom panel. CUSTOM PANEL IS LIKE A FOLDER
    // FOLDER NAME IS Carousel
    $wp_customize->add_panel( 'carousel', array(
        'priority'       => 500,
        'theme_supports' => '',
        'title'          => __( 'Carousel', 'awesome' ),
        'description'    => __( 'Set editable text for certain content.', 'awesome' ),
    ) );  
    /*==============================================
    ADD CAROUSEL 1
    ================================================*/	
    // Add section carousel 1.  like subfolder inside Carousel, belongs to panel "Carousel"
    $wp_customize->add_section( 'carousel1' , array(
        'title'    => __('Carousel 1','awesome'),
        'panel'    => 'carousel',  
        'priority' => 130
    ) ); 
    //add carousel section 1
    $wp_customize->add_setting('image1', array(
            'default' => get_bloginfo('template_directory').'/images/default.jpg',
            'type' => 'theme_mod'
        ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image1', array(
            'label' => __('Image - use photo size 1920 x 1080 (landscape). ', 'awesome'),
            'section' => 'carousel1', 
            'settings' => 'image1',
            'priority' => 1
        )));
	 // Add header setting
    $wp_customize->add_setting( 'header1', array(
         'default'           => __( 'first line', 'awesome' ),
         'type' => 'theme_mod'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'header1',
            array(
                'label'    => __( 'First Line', 'awesome' ),
                'section'  => 'carousel1',
                'settings' => 'header1',
                'priority' => 1,
                'type'     => 'text'
            )
        )
    );
	// Add header setting 2
    $wp_customize->add_setting( 'header1_2', array(
         'default'           => __( 'second line', 'awesome' ),
         'type' => 'theme_mod'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'header1_2',
            array(
                'label'    => __( 'Second Line', 'awesome' ),
                'section'  => 'carousel1',
                'settings' => 'header1_2',
                'priority' => 1,
                'type'     => 'text'
            )
        )
    );
    // Add subtext setting
    $wp_customize->add_setting( 'subtext1', array(
         'default'           => __( 'subtext 1', 'awesome' ),
         'type'              => 'theme_mod'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'subtext1',
            array(
                'label'    => __( 'Subtext 1', 'awesome' ),
                'section'  => 'carousel1',
                'settings' => 'subtext1',
                'priority' => 1, 
                'type'     => 'textarea'
            )
        )
    );
    /*==============================================
    ADD CAROUSEL 2
    ================================================*/
    // Add section carousel 2.
    $wp_customize->add_section( 'carousel2' , array(
        'title'    => __('Carousel 2','awesome'),
        'panel'    => 'carousel',  
        'priority' => 130
    ) );        
    //add carousel section 2
    $wp_customize->add_setting('image2', array(
            'default' => get_bloginfo('template_directory').'/images/default.jpg',
            'type' => 'theme_mod'
        ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image2', array(
            'label' => __('Image - use photo size 1920 x 1080 (landscape). ', 'awesome'),
            'section' => 'carousel2', 
            'settings' => 'image2',
            'priority' => 1
        )));  
	// Add header setting
    $wp_customize->add_setting( 'header2', array(
         'default'           => __( 'first line', 'awesome' ),
         'type' => 'theme_mod'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'header2',
            array(
                'label'    => __( 'First Line', 'awesome' ),
                'section'  => 'carousel2',
                'settings' => 'header2',
                'priority' => 1,
                'type'     => 'text'
            )
        )
    );
	// Add header setting 2
    $wp_customize->add_setting( 'header2_2', array(
         'default'           => __( 'second line', 'awesome' ),
         'type' => 'theme_mod'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'header2_2',
            array(
                'label'    => __( 'Second Line', 'awesome' ),
                'section'  => 'carousel2',
                'settings' => 'header2_2',
                'priority' => 1,
                'type'     => 'text'
            )
        )
    );
    // Add subtext setting
    $wp_customize->add_setting( 'subtext2', array(
         'default'           => __( 'subtext 2', 'awesome' ),
         'type'              => 'theme_mod'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'subtext2',
            array(
                'label'    => __( 'Subtext 2', 'awesome' ),
                'section'  => 'carousel2',
                'settings' => 'subtext2',
                'priority' => 1, 
                'type'     => 'textarea'
            )
        )
    );   
    /*==============================================
    ADD CAROUSEL 3
    ================================================*/
    // Add section carousel 3.
    $wp_customize->add_section( 'carousel3' , array(
        'title'    => __('Carousel 3','awesome'),
        'panel'    => 'carousel',  
        'priority' => 130
    ) );
    //add carousel section 3, setting and control
    $wp_customize->add_setting('image3', array(
            'default' => get_bloginfo('template_directory').'/images/default.jpg',
            'type' => 'theme_mod'
        ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'image3', array(
            'label' => __('Image - use photo size 1920 x 1080 (landscape). ', 'awesome'),
            'section' => 'carousel3', 
            'settings' => 'image3',
            'priority' => 1
    )));  
		// Add header setting
    $wp_customize->add_setting( 'header3', array(
         'default'           => __( 'first line', 'awesome' ),
         'type' => 'theme_mod'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'header3',
            array(
                'label'    => __( 'First Line', 'awesome' ),
                'section'  => 'carousel3',
                'settings' => 'header3',
                'priority' => 1,
                'type'     => 'text'
            )
        )
    );
	// Add header setting 2
    $wp_customize->add_setting( 'header3_2', array(
         'default'           => __( 'second line', 'awesome' ),
         'type' => 'theme_mod'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'header3_2',
            array(
                'label'    => __( 'Second Line', 'awesome' ),
                'section'  => 'carousel3',
                'settings' => 'header3_2',
                'priority' => 1,
                'type'     => 'text'
            )
        )
    );
    // Add subtext setting
    $wp_customize->add_setting( 'subtext3', array(
         'default'           => __( 'subtext 3', 'awesome' ),
         'type'              => 'theme_mod'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'subtext3',
            array(
                'label'    => __( 'Subtext 3', 'awesome' ),
                'section'  => 'carousel3',
                'settings' => 'subtext3',
                'priority' => 1, 
                'type'     => 'textarea'
            )
        )
    );   
}
?>