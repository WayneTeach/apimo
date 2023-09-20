<?php

global $UNIT_AREA;

$UNIT_AREA = array(

    '1' => __('m²', 'apimo'),

    '2' => __('sq ft', 'apimo'),

    '3' => __('kanal', 'apimo'),

    '4' => __('marla', 'apimo'),

    '5' => __('sq yd', 'apimo'),

    '6' => __('acre', 'apimo'),

    '7' => __('ha', 'apimo'),

    '8' => __('ares', 'apimo'),

    '9' => __('toises', 'apimo'),

    '10' => __('perches', 'apimo'),

    '11' => __('arpents', 'apimo'),

);



define('PROPERTY_PERIOD', array(

    '1' => __('Day', 'apimo'),

    '2' => __('Week', 'apimo'),

    '3' => __('Fortnight', 'apimo'),

    '4' => __('Month', 'apimo'),

    '5' => __('Quarterly', 'apimo'),

    '6' => __('Bimonthly', 'apimo'),

    '7' => __('Half-yearly', 'apimo'),

    '8' => __('Yearly', 'apimo'),

)
);



/**register post type**/

function apimo_create_posttype()
{

    $apimo_settings = get_option('apimo_style_archive');

    register_post_type(

    APIMO_POST_TYPE,

        array(

            'labels' => array(

                'name' => __('Properties', 'apimo'),

                'singular_name' => __('Property', 'apimo')

            ),

            'public' => true,

            'has_archive' => true,

            // 'show_in_menu' => 'apimo',

            'show_in_rest' => true,

            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),

            'rewrite' => array('slug' => $apimo_settings['single_slug']),

            'has_archive' => $apimo_settings['archive_slug'],

            'capabilities' => array(

                //'create_posts' => 'do_not_allow'

            )

            //'_builtin' =>true



        )

    );

}

add_action('init', 'apimo_create_posttype');









add_action('init', 'apimo_create_property_hierarchical_taxonomy', 1);





function apimo_create_property_hierarchical_taxonomy()
{



    $show_in_ui = true;

    register_taxonomy('apimo_areas', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Areas', 'apimo'),

            'singular_name' => __('Areas', 'apimo'),

            'search_items' => __('Search Areas', 'apimo'),

            'all_items' => __('All Areas', 'apimo'),

            'parent_item' => __('Parent Areas', 'apimo'),

            'parent_item_colon' => __('Parent Areas:', 'apimo'),

            'edit_item' => __('Edit Areas', 'apimo'),

            'update_item' => __('Update Areas', 'apimo'),

            'add_new_item' => __('Add New Areas', 'apimo'),

            'new_item_name' => __('New Areas Name', 'apimo'),

            'menu_name' => __('Areas', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => true,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_property_standing', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Standing', 'apimo'),

            'singular_name' => __('Standing', 'apimo'),

            'search_items' => __('Search Standing', 'apimo'),

            'all_items' => __('All Standing', 'apimo'),

            'parent_item' => __('Parent Standing', 'apimo'),

            'parent_item_colon' => __('Parent Standing:', 'apimo'),

            'edit_item' => __('Edit Standing', 'apimo'),

            'update_item' => __('Update Standing', 'apimo'),

            'add_new_item' => __('Add New Standing', 'apimo'),

            'new_item_name' => __('New Standing Name', 'apimo'),

            'menu_name' => __('Standing', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => true,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_property_condition', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Condition', 'apimo'),

            'singular_name' => __('Condition', 'apimo'),

            'search_items' => __('Search Condition', 'apimo'),

            'all_items' => __('All Condition', 'apimo'),

            'parent_item' => __('Parent Condition', 'apimo'),

            'parent_item_colon' => __('Parent Condition:', 'apimo'),

            'edit_item' => __('Edit Condition', 'apimo'),

            'update_item' => __('Update Condition', 'apimo'),

            'add_new_item' => __('Add New Condition', 'apimo'),

            'new_item_name' => __('New Condition Name', 'apimo'),

            'menu_name' => __('Condition', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_water_hot_device', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Water Hot Device', 'apimo'),

            'singular_name' => __('Water Hot Device', 'apimo'),

            'search_items' => __('Search Water Hot Device', 'apimo'),

            'all_items' => __('All Water Hot Device', 'apimo'),

            'parent_item' => __('Parent Water Hot Device', 'apimo'),

            'parent_item_colon' => __('Parent Water Hot Device:', 'apimo'),

            'edit_item' => __('Edit Water Hot Device', 'apimo'),

            'update_item' => __('Update Water Hot Device', 'apimo'),

            'add_new_item' => __('Add New Water Hot Device', 'apimo'),

            'new_item_name' => __('New Water Hot Device Name', 'apimo'),

            'menu_name' => __('Water Hot Device', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_water_hot_access', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Water Hot Access', 'apimo'),

            'singular_name' => __('Water Hot Access', 'apimo'),

            'search_items' => __('Search Water Hot Access', 'apimo'),

            'all_items' => __('All Water Hot Access', 'apimo'),

            'parent_item' => __('Parent Water Hot Access', 'apimo'),

            'parent_item_colon' => __('Parent Water Hot Access:', 'apimo'),

            'edit_item' => __('Edit Water Hot Access', 'apimo'),

            'update_item' => __('Update Water Hot Access', 'apimo'),

            'add_new_item' => __('Add New Water Hot Access', 'apimo'),

            'new_item_name' => __('New Water Hot Access Name', 'apimo'),

            'menu_name' => __('Water Hot Access', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_water_waste', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Water Waste', 'apimo'),

            'singular_name' => __('Water Waste', 'apimo'),

            'search_items' => __('Search Water Waste', 'apimo'),

            'all_items' => __('All Water Waste', 'apimo'),

            'parent_item' => __('Parent Water Waste', 'apimo'),

            'parent_item_colon' => __('Parent Water Waste:', 'apimo'),

            'edit_item' => __('Edit Water Waste', 'apimo'),

            'update_item' => __('Update Water Waste', 'apimo'),

            'add_new_item' => __('Add New Water Waste', 'apimo'),

            'new_item_name' => __('New Water Waste Name', 'apimo'),

            'menu_name' => __('Water Waste', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_heating_type', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Heating Type', 'apimo'),

            'singular_name' => __('Heating Type', 'apimo'),

            'search_items' => __('Search Heating Type', 'apimo'),

            'all_items' => __('All Heating Type', 'apimo'),

            'parent_item' => __('Parent Heating Type', 'apimo'),

            'parent_item_colon' => __('Parent Heating Type:', 'apimo'),

            'edit_item' => __('Edit Heating Type', 'apimo'),

            'update_item' => __('Update Heating Type', 'apimo'),

            'add_new_item' => __('Add New Heating Type', 'apimo'),

            'new_item_name' => __('New Heating Type Name', 'apimo'),

            'menu_name' => __('Heating Type', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_heating_access', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Heating Access', 'apimo'),

            'singular_name' => __('Heating Access', 'apimo'),

            'search_items' => __('Search Heating Access', 'apimo'),

            'all_items' => __('All Heating Access', 'apimo'),

            'parent_item' => __('Parent Heating Access', 'apimo'),

            'parent_item_colon' => __('Parent Heating Access:', 'apimo'),

            'edit_item' => __('Edit Heating Access', 'apimo'),

            'update_item' => __('Update Heating Access', 'apimo'),

            'add_new_item' => __('Add New Heating Access', 'apimo'),

            'new_item_name' => __('New Heating Access Name', 'apimo'),

            'menu_name' => __('Heating Access', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_heating_device', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Heating Device', 'apimo'),

            'singular_name' => __('Heating Device', 'apimo'),

            'search_items' => __('Search Heating Device', 'apimo'),

            'all_items' => __('All Heating Device', 'apimo'),

            'parent_item' => __('Parent Heating Device', 'apimo'),

            'parent_item_colon' => __('Parent Heating Device:', 'apimo'),

            'edit_item' => __('Edit Heating Device', 'apimo'),

            'update_item' => __('Update Heating Device', 'apimo'),

            'add_new_item' => __('Add New Heating Device', 'apimo'),

            'new_item_name' => __('New Heating Device Name', 'apimo'),

            'menu_name' => __('Heating Devices', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_floor', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Floor', 'apimo'),

            'singular_name' => __('Floor', 'apimo'),

            'search_items' => __('Search Floor', 'apimo'),

            'all_items' => __('All Floors', 'apimo'),

            'parent_item' => __('Parent Floor', 'apimo'),

            'parent_item_colon' => __('Parent Floor:', 'apimo'),

            'edit_item' => __('Edit Floor', 'apimo'),

            'update_item' => __('Update Floor', 'apimo'),

            'add_new_item' => __('Add New Floor', 'apimo'),

            'new_item_name' => __('New Floor Name', 'apimo'),

            'menu_name' => __('Floors', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );

    register_taxonomy('apimo_property_building', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Building Type', 'apimo'),

            'singular_name' => __('Building Type', 'apimo'),

            'search_items' => __('Search Building Type', 'apimo'),

            'all_items' => __('All Building Type', 'apimo'),

            'parent_item' => __('Parent Building Type', 'apimo'),

            'parent_item_colon' => __('Parent Building Type:', 'apimo'),

            'edit_item' => __('Edit Building Type', 'apimo'),

            'update_item' => __('Update Building Type', 'apimo'),

            'add_new_item' => __('Add New Building Type', 'apimo'),

            'new_item_name' => __('New Building Type Name', 'apimo'),

            'menu_name' => __('Building Type', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_construction', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Construction', 'apimo'),

            'singular_name' => __('Construction', 'apimo'),

            'search_items' => __('Search Construction', 'apimo'),

            'all_items' => __('All Construction', 'apimo'),

            'parent_item' => __('Parent Construction', 'apimo'),

            'parent_item_colon' => __('Parent Construction:', 'apimo'),

            'edit_item' => __('Edit Construction', 'apimo'),

            'update_item' => __('Update Construction', 'apimo'),

            'add_new_item' => __('Add New Construction', 'apimo'),

            'new_item_name' => __('New Construction Name', 'apimo'),

            'menu_name' => __('Construction', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );





    register_taxonomy('apimo_subtype', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Subtype', 'apimo'),

            'singular_name' => __('Subtype', 'apimo'),

            'search_items' => __('Search Subtype', 'apimo'),

            'all_items' => __('All Subtype', 'apimo'),

            'parent_item' => __('Parent Subtype', 'apimo'),

            'parent_item_colon' => __('Parent Subtype:', 'apimo'),

            'edit_item' => __('Edit Subtype', 'apimo'),

            'update_item' => __('Update Subtype', 'apimo'),

            'add_new_item' => __('Add New Subtype', 'apimo'),

            'new_item_name' => __('New Subtype Name', 'apimo'),

            'menu_name' => __('Subtype', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );

    register_taxonomy('apimo_type', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Type', 'apimo'),

            'singular_name' => __('Type', 'apimo'),

            'search_items' => __('Search Type', 'apimo'),

            'all_items' => __('All Type', 'apimo'),

            'parent_item' => __('Parent Type', 'apimo'),

            'parent_item_colon' => __('Parent Type:', 'apimo'),

            'edit_item' => __('Edit Type', 'apimo'),

            'update_item' => __('Update Type', 'apimo'),

            'add_new_item' => __('Add New Type', 'apimo'),

            'new_item_name' => __('New Type Name', 'apimo'),

            'menu_name' => __('Type', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_availability', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Availability', 'apimo'),

            'singular_name' => __('Availability', 'apimo'),

            'search_items' => __('Search Availability', 'apimo'),

            'all_items' => __('All Availability', 'apimo'),

            'parent_item' => __('Parent Availability', 'apimo'),

            'parent_item_colon' => __('Parent Availability:', 'apimo'),

            'edit_item' => __('Edit Availability', 'apimo'),

            'update_item' => __('Update Availability', 'apimo'),

            'add_new_item' => __('Add New Availability', 'apimo'),

            'new_item_name' => __('New Availability Name', 'apimo'),

            'menu_name' => __('Availability', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_orientation', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Orientation', 'apimo'),

            'singular_name' => __('Orientation', 'apimo'),

            'search_items' => __('Search Orientation', 'apimo'),

            'all_items' => __('All Orientation', 'apimo'),

            'parent_item' => __('Parent Orientation', 'apimo'),

            'parent_item_colon' => __('Parent Orientation:', 'apimo'),

            'edit_item' => __('Edit Orientation', 'apimo'),

            'update_item' => __('Update Orientation', 'apimo'),

            'add_new_item' => __('Add New Orientation', 'apimo'),

            'new_item_name' => __('New Orientation Name', 'apimo'),

            'menu_name' => __('Orientation', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_service', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Service', 'apimo'),

            'singular_name' => __('Service', 'apimo'),

            'search_items' => __('Search Service', 'apimo'),

            'all_items' => __('All Service', 'apimo'),

            'parent_item' => __('Parent Service', 'apimo'),

            'parent_item_colon' => __('Parent Service:', 'apimo'),

            'edit_item' => __('Edit Service', 'apimo'),

            'update_item' => __('Update Service', 'apimo'),

            'add_new_item' => __('Add New Service', 'apimo'),

            'new_item_name' => __('New Service Name', 'apimo'),

            'menu_name' => __('Service', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_category', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Category', 'apimo'),

            'singular_name' => __('Category', 'apimo'),

            'search_items' => __('Search Category', 'apimo'),

            'all_items' => __('All Category', 'apimo'),

            'parent_item' => __('Parent Category', 'apimo'),

            'parent_item_colon' => __('Parent Category:', 'apimo'),

            'edit_item' => __('Edit Category', 'apimo'),

            'update_item' => __('Update Category', 'apimo'),

            'add_new_item' => __('Add New Category', 'apimo'),

            'new_item_name' => __('New Category Name', 'apimo'),

            'menu_name' => __('Category', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('apimo_sub_category', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Sub Category', 'apimo'),

            'singular_name' => __('Sub Category', 'apimo'),

            'search_items' => __('Search Sub Category', 'apimo'),

            'all_items' => __('All Sub Category', 'apimo'),

            'parent_item' => __('Parent Sub Category', 'apimo'),

            'parent_item_colon' => __('Parent Sub Category:', 'apimo'),

            'edit_item' => __('Edit Sub Category', 'apimo'),

            'update_item' => __('Update Sub Category', 'apimo'),

            'add_new_item' => __('Add New Sub Category', 'apimo'),

            'new_item_name' => __('New Sub Category Name', 'apimo'),

            'menu_name' => __('Sub Category', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('country', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Country', 'apimo'),

            'singular_name' => __('Country', 'apimo'),

            'search_items' => __('Search Country', 'apimo'),

            'all_items' => __('All Country', 'apimo'),

            'parent_item' => __('Parent Country', 'apimo'),

            'parent_item_colon' => __('Parent Country:', 'apimo'),

            'edit_item' => __('Edit Country', 'apimo'),

            'update_item' => __('Update Country', 'apimo'),

            'add_new_item' => __('Add New Country', 'apimo'),

            'new_item_name' => __('New Country Name', 'apimo'),

            'menu_name' => __('Country', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('region', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Region', 'apimo'),

            'singular_name' => __('Region', 'apimo'),

            'search_items' => __('Search Regions', 'apimo'),

            'all_items' => __('All Regions', 'apimo'),

            'parent_item' => __('Parent Region', 'apimo'),

            'parent_item_colon' => __('Parent Region:', 'apimo'),

            'edit_item' => __('Edit Region', 'apimo'),

            'update_item' => __('Update Region', 'apimo'),

            'add_new_item' => __('Add New Region', 'apimo'),

            'new_item_name' => __('New Region Name', 'apimo'),

            'menu_name' => __('Regions', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('city', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('City', 'apimo'),

            'singular_name' => __('City', 'apimo'),

            'search_items' => __('Search City', 'apimo'),

            'all_items' => __('All City', 'apimo'),

            'parent_item' => __('Parent City', 'apimo'),

            'parent_item_colon' => __('Parent City:', 'apimo'),

            'edit_item' => __('Edit City', 'apimo'),

            'update_item' => __('Update City', 'apimo'),

            'add_new_item' => __('Add New City', 'apimo'),

            'new_item_name' => __('New City Name', 'apimo'),

            'menu_name' => __('City', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );



    register_taxonomy('district', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('District', 'apimo'),

            'singular_name' => __('District', 'apimo'),

            'search_items' => __('Search District', 'apimo'),

            'all_items' => __('All District', 'apimo'),

            'parent_item' => __('Parent District', 'apimo'),

            'parent_item_colon' => __('Parent District:', 'apimo'),

            'edit_item' => __('Edit District', 'apimo'),

            'update_item' => __('Update District', 'apimo'),

            'add_new_item' => __('Add New District', 'apimo'),

            'new_item_name' => __('New District Name', 'apimo'),

            'menu_name' => __('District', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );

    register_taxonomy('repository_tags', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Repository Tags', 'apimo'),

            'singular_name' => __('Repository Tag', 'apimo'),

            'search_items' => __('Search Repository Tag', 'apimo'),

            'all_items' => __('All Repository Tag', 'apimo'),

            'parent_item' => __('Parent Repository Tag', 'apimo'),

            'parent_item_colon' => __('Parent Repository Tag:', 'apimo'),

            'edit_item' => __('Edit Repository Tag', 'apimo'),

            'update_item' => __('Update Repository Tag', 'apimo'),

            'add_new_item' => __('Add New Repository Tag', 'apimo'),

            'new_item_name' => __('New Repository Tag Name', 'apimo'),

            'menu_name' => __('Repository Tag', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );

    register_taxonomy('customised_tags', array('property'), array(

        'hierarchical' => true,

        'labels' => array(

            'name' => __('Customised Tags', 'apimo'),

            'singular_name' => __('Customised Tag', 'apimo'),

            'search_items' => __('Search Customised Tag', 'apimo'),

            'all_items' => __('All Customised Tag', 'apimo'),

            'parent_item' => __('Parent Customised Tag', 'apimo'),

            'parent_item_colon' => __('Parent Customised Tag:', 'apimo'),

            'edit_item' => __('Edit Customised Tag', 'apimo'),

            'update_item' => __('Update Customised Tag', 'apimo'),

            'add_new_item' => __('Add New Customised Tag', 'apimo'),

            'new_item_name' => __('New Customised Tag Name', 'apimo'),

            'menu_name' => __('Customised Tag', 'apimo'),

        ),

        'show_ui' => $show_in_ui,

        'show_in_rest' => $show_in_ui,

        'show_admin_column' => false,

        'query_var' => true,

    )
    );

}



add_filter('template_include', 'apimo_override_single_template', 10, 1);

function apimo_override_single_template($single_template)
{

    global $post;

    global $apimo_dir, $apimo_url;

    if (is_object($post) && $post->post_type == APIMO_POST_TYPE && is_single()) {

        $file = $apimo_dir . '/templates/single-property.php';

        return $file;

    } elseif (is_object($post) && $post->post_type == APIMO_POST_TYPE && is_archive()) {



        $file = $apimo_dir . '/templates/archive-property.php';

        return $file;

    } else {

        return $single_template;

    }

}



add_filter('manage_property_posts_columns', 'apimo_set_custom_edit_property_columns');

function apimo_set_custom_edit_property_columns($columns)
{



    unset($columns['author']);

    unset($columns['comments']);

    unset($columns['date']);

    $columns['price'] = __('Price', 'apimo');

    $columns['area'] = __('Area', 'apimo');

    $columns['number_of_rooms'] = __('Number of Rooms', 'apimo');

    $columns['bathroom'] = __('Bathroom', 'apimo');

    $columns['region'] = __('Region', 'apimo');

    $columns['city'] = __('City', 'apimo');



    return $columns;

}



// Add the data to the custom columns for the book post type:

add_action('manage_property_posts_custom_column', 'custom_book_column', 10, 2);

// function custom_book_column($column, $post_id)

// {

//     switch ($column) {



//         case 'price':

//             echo apimo_currency_format(get_post_meta($post_id, 'apimo_price', true));

//             break;

//         case 'city':

//             echo  wp_get_post_terms($post_id, 'city')[0]->name;;

//             break;

//         case 'area':

//             global $UNIT_AREA;

//             echo get_post_meta($post_id, 'apimo_area_display_filter', true) . ' ' . $UNIT_AREA[get_post_meta($post_id, 'apimo_area_unit', true)];

//             break;

//         case 'number_of_rooms':

//             echo get_post_meta($post_id, 'apimo_rooms', true);

//             break;

//         case 'bathroom':

//             echo get_post_meta($post_id, 'apimo_bathrooms', true);

//             break;

//         case 'region':

//             echo  wp_get_post_terms($post_id, 'region')[0]->name;;

//             break;

//     }

// }
function custom_book_column($column, $post_id)
{
    switch ($column) {
        case 'price':
            echo esc_html(apimo_currency_format(get_post_meta($post_id, 'apimo_price', true)));
            break;
        case 'city':
            echo esc_html(wp_get_post_terms($post_id, 'city')[0]->name);
            break;
        case 'area':
            global $UNIT_AREA;
            echo esc_html(get_post_meta($post_id, 'apimo_area_display_filter', true)) . ' ' . esc_html($UNIT_AREA[get_post_meta($post_id, 'apimo_area_unit', true)]);
            break;
        case 'number_of_rooms':
            echo esc_html(get_post_meta($post_id, 'apimo_rooms', true));
            break;
        case 'bathroom':
            echo esc_html(get_post_meta($post_id, 'apimo_bathrooms', true));
            break;
        case 'region':
            echo esc_html(wp_get_post_terms($post_id, 'region')[0]->name);
            break;
    }
}





function apimo_add_category()
{

    $categorys = array(

        '1' => __('Sale', 'apimo'),

        '2' => __('Rental', 'apimo'),

        '3' => __('Seasonal rental', 'apimo'),

        '4' => __('Development', 'apimo'),

        '5' => __('Life annuity', 'apimo'),

        '6' => __('Auction', 'apimo')

    );





    foreach ($categorys as $key => $value) {

        $category = wp_insert_term(__($value, 'apimo'), 'apimo_category');

        if (!is_wp_error($category)) {

            update_term_meta($category['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_subcategory()
{

    $subcategorys = array(

        '1' => __('Unit sale', 'apimo'),

        '2' => __('Bulk sale', 'apimo'),

        '21' => __('Unfurnished', 'apimo'),

        '22' => __('Furnished', 'apimo'),

        '23' => __('Roommate', 'apimo'),

        '24' => __('Student', 'apimo'),

        '25' => __('Half furnished', 'apimo'),

        '26' => __('Coworking', 'apimo'),

        '31' => __('Holidays', 'apimo'),

        '32' => __('Event', 'apimo'),

        '41' => __('New construction', 'apimo'),

        '42' => __('Development', 'apimo'),

        '51' => __('Life annuity', 'apimo'),

        '52' => __('Life annuity occupied', 'apimo'),

        '53' => __('Bare Ownership', 'apimo'),

        '54' => __('Forward sale', 'apimo'),

        '55' => __('Life annuity semi-occupied', 'apimo'),

        '56' => __('Forward sale available', 'apimo'),

        '57' => __('Forward sale semi-occupied', 'apimo'),

        '58' => __('Forward sale occupied', 'apimo'),

        '59' => __('Life annuity without income', 'apimo'),

    );



    foreach ($subcategorys as $key => $value) {

        $subcategory = wp_insert_term(__($value, 'apimo'), 'apimo_sub_category');

        if (!is_wp_error($subcategory)) {

            update_term_meta($subcategory['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_orientation()
{

    $orientations = array(

        '1' => __('East', 'apimo'),

        '2' => __('North', 'apimo'),

        '3' => __('West', 'apimo'),

        '4' => __('South', 'apimo'),

        '5' => __('North-east', 'apimo'),

        '6' => __('South-east', 'apimo'),

        '7' => __('South-west', 'apimo'),

        '8' => __('North-west', 'apimo'),

    );

    foreach ($orientations as $key => $value) {

        $orientation = wp_insert_term(__($value, 'apimo'), 'apimo_orientation');

        if (!is_wp_error($orientation)) {

            update_term_meta($orientation['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_service()
{

    $service = array(

        "1" => __("Internet", "apimo"),

        "2" => __("Fireplace", "apimo"),

        "3" => __("Disabled access", "apimo"),

        "4" => __("Air-conditioning", "apimo"),

        "5" => __("Alarm system", "apimo"),

        "6" => __("Lift", "apimo"),

        "7" => __("Caretaker", "apimo"),

        "8" => __("Double glazing", "apimo"),

        "9" => __("Intercom", "apimo"),

        "10" => __("TV distribution", "apimo"),

        "11" => __("Swimming pool", "apimo"),

        "12" => __("Security door", "apimo"),

        "13" => __("Tennis court", "apimo"),

        "14" => __("Irrigation sprinkler", "apimo"),

        "15" => __("Barbecue", "apimo"),

        "16" => __("Electric gate", "apimo"),

        "17" => __("Crawl space", "apimo"),

        "18" => __("Car port", "apimo"),

        "19" => __("Caretaker house", "apimo"),

        "20" => __("Sliding windows", "apimo"),

        "21" => __("Central vacuum system", "apimo"),

        "22" => __("Electric shutters", "apimo"),

        "23" => __("Window shade", "apimo"),

        "24" => __("Electric awnings", "apimo"),

        "25" => __("Washing machine", "apimo"),

        "26" => __("Jacuzzi", "apimo"),

        "27" => __("Sauna", "apimo"),

        "28" => __("Whirlpool tub", "apimo"),

        "29" => __("Well", "apimo"),

        "30" => __("Spring", "apimo"),

        "31" => __("Engine generator", "apimo"),

        "32" => __("Dishwasher", "apimo"),

        "33" => __("Hob", "apimo"),

        "34" => __("Safe", "apimo"),

        "35" => __("Helipad", "apimo"),

        "36" => __("Videophone", "apimo"),

        "37" => __("Video security", "apimo"),

        "38" => __("Stove", "apimo"),

        "39" => __("Iron", "apimo"),

        "40" => __("Hair dryer", "apimo"),

        "41" => __("Television", "apimo"),

        "42" => __("DVD Player", "apimo"),

        "43" => __("CD Player", "apimo"),

        "44" => __("Outdoor lighting", "apimo"),

        "45" => __("Spa", "apimo"),

        "46" => __("Home automation", "apimo"),

        "47" => __("Furnished", "apimo"),

        "48" => __("Linens", "apimo"),

        "49" => __("Tableware", "apimo"),

        "50" => __("Clothes dryer", "apimo"),

        "51" => __("Phone", "apimo"),

        "52" => __("Refrigerator", "apimo"),

        "53" => __("Oven", "apimo"),

        "54" => __("Reception 24/7", "apimo"),

        "55" => __("Coffeemaker", "apimo"),

        "56" => __("Microwave oven", "apimo"),

        "57" => __("Shabbat elevator", "apimo"),

        "58" => __("Sukkah", "apimo"),

        "59" => __("Synagogue", "apimo"),

        "60" => __("Digicode", "apimo"),

        "61" => __("Common laundry", "apimo"),

        "62" => __("Pets allowed", "apimo"),

        "63" => __("Metal shutters", "apimo"),

        "64" => __("Wiring closet", "apimo"),

        "65" => __("Computer network", "apimo"),

        "66" => __("Dropped ceiling", "apimo"),

        "67" => __("Fire hose cabinets", "apimo"),

        "68" => __("Fire sprinkler system", "apimo"),

        "69" => __("Wharf", "apimo"),

        "70" => __("Connected thermostat", "apimo"),

        "71" => __("Bowling green", "apimo"),

        "72" => __("Water softener", "apimo"),

        "73" => __("Triple glazing", "apimo"),

        "74" => __("Well drilling", "apimo"),

        "75" => __("Optical fiber", "apimo"),

        "76" => __("Non-flooding", "apimo"),

        "77" => __("Backup water system", "apimo"),

        "78" => __("Water filtration system", "apimo"),

        "79" => __("Air filtration system", "apimo"),

        "80" => __("Fire alarm system", "apimo"),

        "81" => __("Commercial services", "apimo"),

        "82" => __("Playground", "apimo"),

        "83" => __("Golf", "apimo"),

        "84" => __("Flyboard", "apimo"),

        "85" => __("Amphibious car", "apimo"),

        "86" => __("Beach games", "apimo"),

        "87" => __("Bikes", "apimo"),

        "88" => __("Canoe", "apimo"),

        "89" => __("Diving", "apimo"),

        "90" => __("Fishing", "apimo"),

        "91" => __("Floating pool", "apimo"),

        "92" => __("Hoverboard", "apimo"),

        "93" => __("Hovercraft", "apimo"),

        "94" => __("Inflatables", "apimo"),

        "95" => __("Water slide", "apimo"),

        "96" => __("Waterpark", "apimo"),

        "97" => __("Jet ski", "apimo"),

        "98" => __("Kite surf", "apimo"),

        "99" => __("Paddle", "apimo"),

        "100" => __("Scooter", "apimo"),

        "101" => __("Seabob", "apimo"),

        "102" => __("Segway", "apimo"),

        "103" => __("Wakeboard", "apimo"),

        "104" => __("Simple flow ventilation", "apimo"),

        "105" => __("Double flow ventilation", "apimo"),

        "106" => __("Business center", "apimo"),

        "107" => __("Foodservice", "apimo"),

        "108" => __("Condominium garden", "apimo"),

        "109" => __("Stabilizers", "apimo"),

        "110" => __("Hydraulic Platform", "apimo"),

        "111" => __("Freezer", "apimo"),

        "112" => __("Concierge", "apimo"),

        "113" => __("Pantry", "apimo"),

        "114" => __("Fitness", "apimo"),

        "115" => __("Electric car terminal", "apimo"),

        "116" => __("Solar panels", "apimo"),

        "117" => __("Overhead crane", "apimo"),

        "118" => __("Tow-away zone", "apimo"),

        "119" => __("Extraction air duct", "apimo"),

        "120" => __("Access control", "apimo"),

        "121" => __("Berth", "apimo"),

        "122" => __("Listed historic building", "apimo"),

        "123" => __("Flyscreens", "apimo"),

        "124" => __("Security service", "apimo"),

        "125" => __("Condominium pool", "apimo"),

        "126" => __("Civil defense bunker", "apimo"),

        "127" => __("Single glazing", "apimo"),

        "128" => __("Single glazing plastic", "apimo"),

        "129" => __("Single glazing metal", "apimo"),

        "130" => __("Double glazing plastic", "apimo"),

        "131" => __("Double glazing metal", "apimo"),

        "132" => __("Triple glazing plastic", "apimo"),

        "133" => __("Triple glazing metal")

    );



    foreach ($service as $key => $value) {

        $servic = wp_insert_term($value, 'apimo_service');

        if (!is_wp_error($servic)) {

            update_term_meta($servic['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_availability()
{

    $all_availability = array(

        '1' => __('Free', 'apimo'),

        '2' => __('Rented', 'apimo'),

        '3' => __('Occupied', 'apimo'),

        '4' => __('To be agreed', 'apimo'),

    );



    foreach ($all_availability as $key => $value) {

        $availability = wp_insert_term($value, 'apimo_availability');

        if (!is_wp_error($availability)) {

            update_term_meta($availability['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_type()
{

    $types = array(

        '1' => __('Apartment', 'apimo'),

        '2' => __('House', 'apimo'),

        '3' => __('Land', 'apimo'),

        '4' => __('Business', 'apimo'),

        '5' => __('Garage/Parking', 'apimo'),

        '6' => __('Building', 'apimo'),

        '7' => __('Office', 'apimo'),

        '8' => __('Boat', 'apimo'),

        '9' => __('Warehouse', 'apimo'),

        '10' => __('Cellar / Box', 'apimo'),

    );



    foreach ($types as $key => $value) {

        $type = wp_insert_term(__($value, 'apimo'), 'apimo_type');

        if (!is_wp_error($type)) {

            update_term_meta($type['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_subtype()
{

    $subtypes = array(

        "1" => __("Triplex", 'apimo'),

        "2" => __("Building land", 'apimo'),

        "3" => __("Not constructible land", 'apimo'),

        "4" => __("Penthouse", 'apimo'),

        "5" => __("Apartment", 'apimo'),

        "6" => __("Studio", 'apimo'),

        "7" => __("Castle", 'apimo'),

        "8" => __("Business", 'apimo'),

        "9" => __("Duplex", 'apimo'),

        "10" => __("Manor house", 'apimo'),

        "11" => __("Farm", 'apimo'),

        "12" => __("Loft", 'apimo'),

        "13" => __("Village house", 'apimo'),

        "14" => __("Villa", 'apimo'),

        "15" => __("Apartment villa", 'apimo'),

        "16" => __("Barn", 'apimo'),

        "17" => __("Ruin", 'apimo'),

        "18" => __("House", 'apimo'),

        "19" => __("Property", 'apimo'),

        "20" => __("Housing estate", 'apimo'),

        "21" => __("Mill", 'apimo'),

        "22" => __("Carpark", 'apimo'),

        "23" => __("Farmhouse", 'apimo'),

        "24" => __("Building", 'apimo'),

        "25" => __("Townhouse", 'apimo'),

        "26" => __("Mobile home", 'apimo'),

        "27" => __("Cottage", 'apimo'),

        "28" => __("Bedroom", 'apimo'),

        "29" => __("Hangar", 'apimo'),

        "30" => __("Mas", 'apimo'),

        "31" => __("Local", 'apimo'),

        "32" => __("Chalet", 'apimo'),

        "33" => __("Premises", 'apimo'),

        "34" => __("Business assets", 'apimo'),

        "35" => __("Right to the lease", 'apimo'),

        "36" => __("Office", 'apimo'),

        "37" => __("Mansion", 'apimo'),

        "38" => __("Management", 'apimo'),

        "39" => __("Agricultural exploitation", 'apimo'),

        "40" => __("Cellar", 'apimo'),

        "41" => __("Warehouse", 'apimo'),

        "42" => __("Woodshed", 'apimo'),

        "43" => __("Parking", 'apimo'),

        "44" => __("Hotel", 'apimo'),

        "45" => __("Stud farm", 'apimo'),

        "46" => __("Plot of land", 'apimo'),

        "47" => __("Bastide", 'apimo'),

        "48" => __("Bastidon", 'apimo'),

        "49" => __("Company", 'apimo'),

        "50" => __("Vineyard property", 'apimo'),

        "51" => __("Motor Yacht", 'apimo'),

        "52" => __("Narrow boat", 'apimo'),

        "53" => __("Sailing Yacht", 'apimo'),

        "54" => __("Catamaran", 'apimo'),

        "55" => __("Equestrian estate", 'apimo'),

        "56" => __("Bed and breakfast", 'apimo'),

        "57" => __("Gîte", 'apimo'),

        "58" => __("Riad", 'apimo'),

        "59" => __("Box", 'apimo'),

        "60" => __("Attic", 'apimo'),

        "61" => __("Arcade", 'apimo'),

        "62" => __("Retail shop", 'apimo'),

        "63" => __("Workshop", 'apimo'),

        "64" => __("Shophouse", 'apimo'),

        "65" => __("Borey", 'apimo'),

        "66" => __("Condo", 'apimo'),

        "67" => __("Factory", 'apimo'),

        "68" => __("Serviced apartment", 'apimo'),

        "69" => __("Twin Villa", 'apimo'),

        "70" => __("Flat House", 'apimo'),

        "71" => __("Semi-detached house", 'apimo'),

        "72" => __("Bungalow", 'apimo'),

        "73" => __("Beach house", 'apimo'),

        "74" => __("Berth", 'apimo'),

        "75" => __("Ger district", 'apimo'),

        "76" => __("Summer house", 'apimo'),

        "77" => __("Private island", 'apimo'),

        "78" => __("Residential land", 'apimo'),

        "79" => __("Commercial land", 'apimo'),

        "80" => __("Subdivision", 'apimo'),

        "81" => __("Game reserve", 'apimo'),

        "82" => __("Motorboat", 'apimo'),

        "83" => __("Detached house", 'apimo'),

        "84" => __("Ranch", 'apimo'),

        "85" => __("Lake", 'apimo'),

        "86" => __("Waterside mansion", 'apimo'),

        "87" => __("Craft Workshop", 'apimo'),

        "88" => __("Pavilion", 'apimo'),

        "89" => __("Root cellar", 'apimo'),

        "90" => __("Attic", 'apimo'),

        "103" => __("Agricultural land", 'apimo'),



    );



    foreach ($subtypes as $key => $value) {

        $subtype = wp_insert_term($value, 'apimo_subtype');

        if (!is_wp_error($subtype)) {

            update_term_meta($subtype['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_construction()
{

    $constructions = array(

        '1' => __('Timber', 'apimo'),

        '2' => __('Engineered wood', 'apimo'),

        '3' => __('Stone', 'apimo'),

        '4' => __('Brick', 'apimo'),

        '5' => __('Concrete', 'apimo'),

        '6' => __('Reinforced concrete', 'apimo'),

        '7' => __('Wood frame', 'apimo'),

        '8' => __('Steel frame', 'apimo'),

        '9' => __('Reinforced concrete frame', 'apimo'),

        '10' => __('Shear wall', 'apimo'),

        '11' => __('Concrete block', 'apimo'),

        '12' => __('Dimension stone', 'apimo'),

        '13' => __('Monolith brick', 'apimo'),

        '14' => __('Panel', 'apimo'),

        '15' => __('Wood frame', 'apimo'),

        '16' => __('Metal frame', 'apimo'),

        '17' => __('Mudbrick', 'apimo'),

        '18' => __('Cinder block', 'apimo'),

        '19' => __('Aerated concrete', 'apimo'),

    );



    foreach ($constructions as $key => $value) {

        $construction = wp_insert_term(__($value, 'apimo'), 'apimo_construction');

        if (!is_wp_error($construction)) {

            update_term_meta($construction['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_property_building()
{

    $buildings = array(

        '1' => __('Building', 'apimo'),

        '2' => __('Residence', 'apimo'),

        '3' => __('Housing scheme', 'apimo'),

        '4' => __('Hamlet', 'apimo'),

        '5' => __('Domain', 'apimo'),

        '6' => __('Property', 'apimo'),

        '7' => __('Street', 'apimo'),

        '8' => __('Hotel', 'apimo'),

    );



    foreach ($buildings as $key => $value) {

        $building = wp_insert_term(__($value, 'apimo'), 'apimo_property_building');

        if (!is_wp_error($building)) {

            update_term_meta($building['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_property_floor()
{

    $floors = array(

        '1' => __("Ground floor", 'apimo'),

        '2' => __("Top floor", 'apimo'),

        '3' => __("1st", 'apimo'),

        '4' => __("2nd", 'apimo'),

        '5' => __("3rd", 'apimo'),

        '6' => __("4th", 'apimo'),

        '7' => __("5th", 'apimo'),

        '8' => __("6th", 'apimo'),

        '9' => __("7th", 'apimo'),

        '10' => __("8th", 'apimo'),

        '11' => __("9th", 'apimo'),

        '12' => __("10th", 'apimo'),

        '13' => __("11th", 'apimo'),

        '14' => __("12th", 'apimo'),

        '15' => __("13th", 'apimo'),

        '16' => __("14th", 'apimo'),

        '17' => __("15th", 'apimo'),

        '18' => __("16th", 'apimo'),

        '19' => __("17th", 'apimo'),

        '20' => __("18th", 'apimo'),

        '21' => __("19th", 'apimo'),

        '22' => __("20th", 'apimo'),

        '23' => __("Garden level", 'apimo'),

        '24' => __("Split-level", 'apimo'),

        '25' => __("-1", 'apimo'),

        '26' => __("-2", 'apimo'),

        '27' => __("-3", 'apimo'),

        '28' => __("-4", 'apimo'),

        '29' => __("Basement", 'apimo'),

        '30' => __("Single-storey", 'apimo'),

        '31' => __("21st", 'apimo'),

        '32' => __("22nd", 'apimo'),

        '33' => __("23rd", 'apimo'),

        '34' => __("24th", 'apimo'),

        '35' => __("25th", 'apimo'),

        '36' => __("26th", 'apimo'),

        '37' => __("27th", 'apimo'),

        '38' => __("28th", 'apimo'),

        '39' => __("29th", 'apimo'),

        '40' => __("30th", 'apimo'),

        '41' => __("31st", 'apimo'),

        '42' => __("32nd", 'apimo'),

        '43' => __("33rd", 'apimo'),

        '44' => __("34th", 'apimo'),

        '45' => __("35th", 'apimo'),

        '46' => __("36th", 'apimo'),

        '47' => __("37th", 'apimo'),

        '48' => __("38th", 'apimo'),

        '49' => __("39th", 'apimo'),

        '50' => __("40th", 'apimo'),

        '51' => __("-5", 'apimo'),

        '52' => __("-6", 'apimo'),

        '53' => __("-7", 'apimo'),

        '54' => __("-8", 'apimo'),

        '55' => __("-9", 'apimo'),

        '56' => __("-10", 'apimo'),

        '57' => __("41st", 'apimo'),

        '58' => __("42nd", 'apimo'),

        '59' => __("43rd", 'apimo'),

        '60' => __("44th", 'apimo'),

        '61' => __("45th", 'apimo'),

        '62' => __("46th", 'apimo'),

        '63' => __("47th", 'apimo'),

        '64' => __("48th", 'apimo'),

        '65' => __("49th", 'apimo'),

        '66' => __("50th", 'apimo'),

        '67' => __("51st", 'apimo'),

        '68' => __("52nd", 'apimo'),

        '69' => __("53rd", 'apimo'),

        '70' => __("54th", 'apimo'),

        '71' => __("55th", 'apimo'),

        '72' => __("56th", 'apimo'),

        '73' => __("57th", 'apimo'),

        '74' => __("58th", 'apimo'),

        '75' => __("59th", 'apimo'),

        '76' => __("60th", 'apimo'),

        '77' => __("Raised", 'apimo'),

        '78' => __("61st", 'apimo'),

        '79' => __("62nd", 'apimo'),

        '80' => __("63rd", 'apimo'),

        '81' => __("64th", 'apimo'),

        '82' => __("65th", 'apimo'),

        '83' => __("66th", 'apimo'),

        '84' => __("67th", 'apimo'),

        '85' => __("68th", 'apimo'),

        '86' => __("69th", 'apimo'),

        '87' => __("70th", 'apimo'),

        '88' => __("71st", 'apimo'),

        '89' => __("72nd", 'apimo'),

        '90' => __("73rd", 'apimo'),

        '91' => __("74th", 'apimo'),

        '92' => __("75th", 'apimo'),

        '93' => __("76th", 'apimo'),

        '94' => __("77th", 'apimo'),

        '95' => __("78th", 'apimo'),

        '96' => __("79th", 'apimo'),

        '97' => __("80th", 'apimo'),

        '98' => __("81st", 'apimo'),

        '99' => __("82nd", 'apimo'),

        '100' => __("83rd", 'apimo'),

        '101' => __("84th", 'apimo'),

        '102' => __("85th", 'apimo'),

        '103' => __("86th", 'apimo'),

        '104' => __("87th", 'apimo'),

        '105' => __("88th", 'apimo'),

        '106' => __("89th", 'apimo'),

        '107' => __("90th", 'apimo'),

        '108' => __("91st", 'apimo'),

        '109' => __("92nd", 'apimo'),

        '110' => __("93rd", 'apimo'),

        '111' => __("94th", 'apimo'),

        '112' => __("95th", 'apimo'),

        '113' => __("96th", 'apimo'),

        '114' => __("97th", 'apimo'),

        '115' => __("98th", 'apimo'),

        '116' => __("99th", 'apimo'),

        '117' => __("100th", 'apimo'),

    );



    foreach ($floors as $key => $value) {

        $floor = wp_insert_term(__($value, 'apimo'), 'apimo_floor');

        if (!is_wp_error($floor)) {

            update_term_meta($floor['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_heating_device()
{

    $all_heating_device = array(

        '1' => __('Convector', 'apimo'),

        '2' => __('Underfloor', 'apimo'),

        '3' => __('Radiator', 'apimo'),

        '4' => __('Stove', 'apimo'),

        '5' => __('Air-conditioning', 'apimo'),

        '6' => __('Central', 'apimo'),

        '7' => __('Without', 'apimo'),

        '8' => __('Fireplace', 'apimo')

    );



    foreach ($all_heating_device as $key => $value) {

        $heating_device = wp_insert_term($value, 'apimo_heating_device');

        if (!is_wp_error($heating_device)) {

            update_term_meta($heating_device['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_heating_access()
{

    $all_heating_access = array(

        '1' => __("Individual", "apimo"),

        '2' => __("Common", "apimo"),

        '3' => __("Mixed", "apimo"),

        '4' => __("District heating", "apimo"),

    );



    foreach ($all_heating_access as $key => $value) {

        $heating_access = wp_insert_term($value, 'apimo_heating_access');

        if (!is_wp_error($heating_access)) {

            update_term_meta($heating_access['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_heating_type()
{

    $heating_types = array(

        '1' => __('Gas', 'apimo'),

        '2' => __('Fuel oil', 'apimo'),

        '3' => __('Electric', 'apimo'),

        '4' => __('Wood', 'apimo'),

        '5' => __('Solar', 'apimo'),

        '6' => __('Charcoal', 'apimo'),

        '7' => __('Heat pump', 'apimo'),

        '8' => __('Geothermal', 'apimo'),

        '9' => __('Wood pellet', 'apimo'),

        '10' => __('Hot water', 'apimo'),

        '11' => __('Aerothermy', 'apimo')

    );



    foreach ($heating_types as $key => $value) {

        $heating_type = wp_insert_term($value, 'apimo_heating_type');

        if (!is_wp_error($heating_type)) {

            update_term_meta($heating_type['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_water_hot_device()
{

    $water_hot_devices = array(

        '1' => __('Solar', 'apimo'),

        '2' => __('Hot water tank', 'apimo'),

        '3' => __('Boiler', 'apimo'),

        '4' => __('Heat pump', 'apimo'),

    );



    foreach ($water_hot_devices as $key => $value) {

        $water_hot_device = wp_insert_term(__($value, 'apimo'), 'apimo_water_hot_device');

        if (!is_wp_error($water_hot_device)) {

            update_term_meta($water_hot_device['term_id'], 'apimo_term_id', $key);

        }

    }

}

function apimo_add_water_hot_access()
{

    $all_water_hot_access = array(

        '1' => __('Individual', 'apimo'),

        '2' => __('Collective', 'apimo'),

    );



    foreach ($all_water_hot_access as $key => $value) {

        $water_hot_access = wp_insert_term(__($value, 'apimo'), 'apimo_water_hot_access');

        if (!is_wp_error($water_hot_access)) {

            update_term_meta($water_hot_access['term_id'], 'apimo_term_id', $key);

        }

    }

}

function apimo_add_water_waste()
{

    $all_water_waste = array(

        '1' => __('Septic tank', 'apimo'),

        '2' => __('Main drainage', 'apimo'),

        '3' => __('Treatment plant', 'apimo'),

        '4' => __('Grey-water pit', 'apimo'),

        '5' => __('Micro sewage treatment', 'apimo'),

    );



    foreach ($all_water_waste as $key => $value) {

        $water_waste = wp_insert_term(__($value, 'apimo'), 'apimo_water_waste');

        if (!is_wp_error($water_waste)) {

            update_term_meta($water_waste['term_id'], 'apimo_term_id', $key);

        }

    }

}



function apimo_add_condition()
{

    $conditions = array(

        '1' => __('Requires updating', 'apimo'),

        '3' => __('Good condition', 'apimo'),

        '5' => __('Requires renovation', 'apimo'),

        '6' => __('Excellent condition', 'apimo'),

        '8' => __('New', 'apimo'),

    );



    foreach ($conditions as $key => $value) {

        $condition = wp_insert_term(__($value, 'apimo'), 'apimo_property_condition');

        if (!is_wp_error($condition)) {

            update_term_meta($condition['term_id'], 'apimo_term_id', $key);

        }

    }

}

function apimo_add_standing()
{

    $all_standing = array(

        '1' => __('High standard', 'apimo'),

        '2' => __('Luxury', 'apimo'),

        '3' => __('High luxury', 'apimo'),

        '4' => __('Housing estate', 'apimo'),

        '5' => __('Regular', 'apimo'),

    );



    foreach ($all_standing as $key => $value) {

        $standing = wp_insert_term(__($value, 'apimo'), 'apimo_property_standing');

        if (!is_wp_error($standing)) {

            update_term_meta($standing['term_id'], 'apimo_term_id', $key);

        }

    }

}





function apimo_add_areas()
{

    $all_areas = array(

        "1" => __("Bedroom", 'apimo'),

        "2" => __("Living-room", 'apimo'),

        "3" => __("Kitchen", 'apimo'),

        "4" => __("Garage", 'apimo'),

        "5" => __("Parking", 'apimo'),

        "6" => __("Cellar", 'apimo'),

        "7" => __("Garden shelter", 'apimo'),

        "8" => __("Bathroom", 'apimo'),

        "9" => __("Laundry room", 'apimo'),

        "10" => __("Study", 'apimo'),

        "11" => __("Hallway", 'apimo'),

        "12" => __("Corridor", 'apimo'),

        "13" => __("Shower room", 'apimo'),

        "14" => __("Walk-in closet", 'apimo'),

        "15" => __("Entrance", 'apimo'),

        "16" => __("Lavatory", 'apimo'),

        "17" => __("Veranda", 'apimo'),

        "18" => __("Terrace", 'apimo'),

        "19" => __("Solarium", 'apimo'),

        "20" => __("Living room/dining area", 'apimo'),

        "21" => __("Play room", 'apimo'),

        "22" => __("Dining room", 'apimo'),

        "23" => __("Pool house", 'apimo'),

        "24" => __("Cupboard", 'apimo'),

        "25" => __("Not used", 'apimo'),

        "26" => __("Loggia", 'apimo'),

        "27" => __("Attic", 'apimo'),

        "28" => __("Other", 'apimo'),

        "29" => __("Mezzanine", 'apimo'),

        "30" => __("Root cellar", 'apimo'),

        "31" => __("Maintenance room", 'apimo'),

        "32" => __("Workshop", 'apimo'),

        "33" => __("Studio", 'apimo'),

        "34" => __("Loft", 'apimo'),

        "35" => __("Library", 'apimo'),

        "36" => __("Closet", 'apimo'),

        "37" => __("Courtyard", 'apimo'),

        "38" => __("Landing", 'apimo'),

        "39" => __("Linen room", 'apimo'),

        "40" => __("Basement", 'apimo'),

        "41" => __("Bathroom / Lavatory", 'apimo'),

        "42" => __("Shower room / Lavatory", 'apimo'),

        "43" => __("Balcony", 'apimo'),

        "44" => __("Exercise room", 'apimo'),

        "45" => __("Discothèque", 'apimo'),

        "46" => __("Home cinema", 'apimo'),

        "47" => __("Reception room", 'apimo'),

        "48" => __("Storage room", 'apimo'),

        "49" => __("Garden", 'apimo'),

        "50" => __("Park", 'apimo'),

        "51" => __("Land", 'apimo'),

        "52" => __("Patio", 'apimo'),

        "53" => __("Master bedroom", 'apimo'),

        "54" => __("Suite", 'apimo'),

        "55" => __("Shed", 'apimo'),

        "56" => __("Apartment", 'apimo'),

        "57" => __("Cabin", 'apimo'),

        "58" => __("Barn", 'apimo'),

        "59" => __("Outbuilding", 'apimo'),

        "60" => __("Bike storage room", 'apimo'),

        "61" => __("Ski storage room", 'apimo'),

        "62" => __("Garbage room", 'apimo'),

        "63" => __("Hammam", 'apimo'),

        "64" => __("Indoor swimming pool", 'apimo'),

        "65" => __("Prayer room", 'apimo'),

        "66" => __("Sauna", 'apimo'),

        "67" => __("Watchtower", 'apimo'),

        "68" => __("Room", 'apimo'),

        "69" => __("Meeting room", 'apimo'),

        "70" => __("Maid's room", 'apimo'),

        "71" => __("Maid's studio", 'apimo'),

        "72" => __("Double reception room", 'apimo'),

        "73" => __("Triple reception room", 'apimo'),

        "74" => __("Indoor parking", 'apimo'),

        "75" => __("Outdoor parking", 'apimo'),

        "76" => __("Stockroom", 'apimo'),

        "77" => __("Shop", 'apimo'),

        "78" => __("Cafeteria", 'apimo'),

        "79" => __("Unit", 'apimo'),

        "80" => __("Warehouse", 'apimo'),

        "81" => __("Accommodation", 'apimo'),

        "82" => __("Arcade", 'apimo'),

        "83" => __("House", 'apimo'),

        "84" => __("Stair", 'apimo'),

        "85" => __("Box", 'apimo'),

        "86" => __("Carnotzet", 'apimo'),

        "87" => __("Panic room", 'apimo'),

        "88" => __("Open space", 'apimo'),

        "89" => __("Hall", 'apimo'),

        "90" => __("Living room/kitchen", 'apimo'),

        "91" => __("Summer kitchen", 'apimo'),

        "92" => __("Spa", 'apimo'),

        "93" => __("Gallery", 'apimo'),

        "94" => __("Boathouse", 'apimo'),

        "95" => __("Eat-in kitchen", 'apimo'),

        "96" => __("Equipped kitchen", 'apimo'),

        "97" => __("Semi equipped kitchen", 'apimo'),

        "98" => __("Corner kitchen", 'apimo'),

        "99" => __("Kitchenette", 'apimo'),

        "100" => __("Open kitchen", 'apimo'),

        "101" => __("Plot", 'apimo'),

        "102" => __("Porch", 'apimo'),

        "103" => __("Living/dining/kitchen area", 'apimo'),

        "104" => __("Children's room", 'apimo'),

        "105" => __("Locker", 'apimo'),

        "106" => __("Lobby", 'apimo'),

        "107" => __("Accessible toilet", 'apimo'),

        "108" => __("Craft workshop", 'apimo'),

        "109" => __("Wine cellar", 'apimo'),

    );



    foreach ($all_areas as $key => $value) {

        $areas = wp_insert_term(__($value, 'apimo'), 'apimo_areas');

        if (!is_wp_error($areas)) {

            update_term_meta($areas['term_id'], 'apimo_term_id', $key);

        }

    }

}





function apimo_add_repository_tags()
{

    $all_areas = array(

        "1" => __("Selezione / Preferito", 'apimo'),

        "2" => __("Prima casa", 'apimo'),

        "3" => __("Seconda casa", 'apimo'),

        "4" => __("Casa studenti", 'apimo'),

        "5" => __("Residenza turistico/alberghiera", 'apimo'),

        "6" => __("Residenza seniors", 'apimo'),

        "7" => __("Legge Duflot", 'apimo'),

        "8" => __("Legge Censi-Bouvard", 'apimo'),

        "9" => __("Spese notarili ridotte", 'apimo'),

        "10" => __("Residenza per anziani", 'apimo'),

        "11" => __("Legge 1291", 'apimo'),

        "12" => __("Legge 887", 'apimo'),

        "13" => __("Uso misto", 'apimo'),

        "14" => __("Investimento locativo", 'apimo'),

        "15" => __("Legge 1235", 'apimo'),

        "16" => __("Legge Pinel", 'apimo'),

        "17" => __("Rivendita", 'apimo'),

        "23" => __("Prima occupazione", 'apimo'),

        "24" => __("Professione liberale", 'apimo'),

        "25" => __("Villeggiatura", 'apimo'),

        "26" => __("3,57% IVA incl. dal prezzo di acquisto", 'apimo'),

        "27" => __("7,14% IVA incl. dal prezzo di acquisto", 'apimo'),

        "28" => __("3,48% IVA incl. dal prezzo di acquisto", 'apimo'),

        "29" => __("6,96% IVA incl. dal prezzo di acquisto", 'apimo'),

    );

    foreach ($all_areas as $key => $value) {

        $areas = wp_insert_term(__($value, 'apimo'), 'repository_tags');

        if (!is_wp_error($areas)) {

            update_term_meta($areas['term_id'], 'apimo_term_id', $key);

        }

    }

}