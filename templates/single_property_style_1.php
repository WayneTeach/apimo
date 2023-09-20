<?php
global $apimo_dir, $apimo_url;
$metas = get_post_meta(get_the_ID());
$thumbnail = get_the_post_thumbnail_url(get_the_ID());

$city_term = wp_get_post_terms(get_the_ID(), 'city');
// echo '<pre>';
// print_r($city_term);
// echo '</pre>';


// $city_term = wp_get_post_terms(get_the_ID(), 'city');
//print_r($city_term);
// if (count($city_term) > 1) {
//     if ($city_term[0]->parent == 0) {
//         $city = $city_term[0]->name . ' - ' . $city_term[1]->name;
//     } else {
//         $city = $city_term[1]->name . ' - ' . $city_term[0]->name;
//     }
// } else {
// $city_term = wp_get_post_terms(get_the_ID(), 'city');
$city = $city_term[0]->name;

$zip_code = get_term_meta($city_term[0]->term_id, 'zip_code', true);

$city = $city . ' - ' . $zip_code;
// }
$type = wp_get_post_terms(get_the_ID(), 'apimo_type')[0]->name;
$subtype = wp_get_post_terms(get_the_ID(), 'apimo_subtype')[0]->name;
$flor = wp_get_post_terms(get_the_ID(), 'apimo_floor')[0]->name;
$condition = wp_get_post_terms(get_the_ID(), 'apimo_property_condition')[0]->name;
$construction_years = get_post_meta(get_the_ID(), 'apimo_construction_year', true);
$apimo_archive_settings = get_option('apimo_style_archive');
$external_areas = wp_get_post_terms(get_the_ID(), 'apimo_areas');

foreach ($external_areas as $key => $external_areas_val) {
    if (!in_array($external_areas_val->term_id, array(49, 50, 51))) {
        unset($external_areas[$key]);
    }
}


$heating_type = !empty(wp_get_post_terms(get_the_ID(), 'apimo_heating_type'))?wp_get_post_terms(get_the_ID(), 'apimo_heating_type')[0]->name:'';
$heating_access = !empty(wp_get_post_terms(get_the_ID(), 'apimo_heating_access'))?wp_get_post_terms(get_the_ID(), 'apimo_heating_access')[0]->name:'';;
$heating_device = !empty(wp_get_post_terms(get_the_ID(), 'apimo_heating_device'))?wp_get_post_terms(get_the_ID(), 'apimo_heating_device')[0]->name:'';;
$water_hot_device = !empty(wp_get_post_terms(get_the_ID(), 'apimo_water_hot_device'))?wp_get_post_terms(get_the_ID(), 'apimo_water_hot_device')[0]->name:'';;
$water_hot_access = !empty(wp_get_post_terms(get_the_ID(), 'apimo_water_hot_access'))?wp_get_post_terms(get_the_ID(), 'apimo_water_hot_access')[0]->name:'';;
$water_waste = !empty(wp_get_post_terms(get_the_ID(), 'apimo_water_waste'))?wp_get_post_terms(get_the_ID(), 'apimo_water_waste')[0]->name:'';;
$apimo_category = !empty(wp_get_post_terms(get_the_ID(), 'apimo_category'))?wp_get_post_terms(get_the_ID(), 'apimo_category')[0]->name:'';;
$availability = !empty(wp_get_post_terms(get_the_ID(), 'apimo_availability'))?wp_get_post_terms(get_the_ID(), 'apimo_availability')[0]->name:'';;
$property_standing =  !empty(wp_get_post_terms(get_the_ID(), 'apimo_property_standing'))?wp_get_post_terms(get_the_ID(), 'apimo_property_standing')[0]->name:'';

$grid_desktop = 'column-desktop-' . $apimo_archive_settings['view_1']['desktop'];
$grid_tablet = 'column-tablet-' . $apimo_archive_settings['view_1']['teblate'];
$grid_mobile = 'column-mobile-' . $apimo_archive_settings['view_1']['mobile'];

global $UNIT_AREA;
// echo '<pre>';
// print_r($metas['apimo_regulations']);
// echo '<pre>';

?>
<div>
    <?php
    // echo '<pre>';
    // print_r(maybe_unserialize($metas['apimo_regulations'][0]));
    // echo '<pre>';
    ?>
</div>
<div class="apimo-wrapper">
    <div class="apimo-wrapper__inner">
        <section class="Product-detail-page apimo-content-wrapper">
            <div class="Pro-detail-wrapper">
                <div class="Pro-detail-wrapper-row">
                    <div class="Pro-detail-wrapper-col-image">

                        <div class="apimo-property-slider">
                            <div class="apimo-propery-images apimo-display">
                                <div class="apimo-image">
                                    <img src="<?php echo esc_url($thumbnail); ?>" class="single-apimo-img" alt="">
                                </div>
                                <?php
                                $apimo_gallery_images = maybe_unserialize($metas['apimo_gallery_images'][0]);
                                if(isset($apimo_gallery_images) && is_array($apimo_gallery_images)){
                                    foreach ($apimo_gallery_images as $gallery_image ){
                                        ?>
                                        <div class="apimo-image">
                                             <img src="<?php echo esc_url($gallery_image); ?>" class="single-apimo-img" alt="">
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="apimo-carousel-arrow">
                                <ul>
                                    <li class="apimo-arrow apimo-carousel-prev">
                                        <span class="icon">
                                            <svg id="Livello_1" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.79 45.01">
                                                <path d="M-64.65,10.36a1.27,1.27,0,0,0-.9-.38,1.23,1.23,0,0,0-.9.38L-87.66,31.57a1.26,1.26,0,0,0,0,1.79h0l21.21,21.22a1.28,1.28,0,0,0,1.8.06,1.27,1.27,0,0,0,.06-1.8l-.06-.06L-85,32.47l20.31-20.31a1.28,1.28,0,0,0,0-1.8Z" transform="translate(88.04 -9.98)" />
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="apimo-arrow apimo-carousel-next">
                                        <span class="icon">
                                            <svg id="Livello_1" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.79 45.01">
                                                <path d="M-87.63,54.61a1.27,1.27,0,0,0,.9.38,1.23,1.23,0,0,0,.9-.38L-64.62,33.4a1.26,1.26,0,0,0,0-1.79h0L-85.83,10.38a1.28,1.28,0,0,0-1.8-.06,1.27,1.27,0,0,0-.06,1.8l.06.06L-67.32,32.5-87.63,52.81a1.28,1.28,0,0,0,0,1.8Z" transform="translate(88.04 -9.98)" />
                                            </svg>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="apimo-thumbs-dots">
                            <div class="apimo-propery-images apimo-navbar" style="display:none;">
                                <div class="apimo-image">
                                    <img src="<?php echo esc_url($thumbnail); ?>" class="single-navbar-apimo-img" alt="">
                                </div>
                                <?php
                                $apimo_gallery_images = unserialize($metas['apimo_gallery_images'][0]);
                                if(isset($apimo_gallery_images) and is_array($apimo_gallery_images)){
                                    foreach (unserialize($metas['apimo_gallery_images'][0]) as $gallery_image) {
                                        ?>
                                            <div class="apimo-image">
                                                <img src="<?php echo esc_url($gallery_image); ?>" class="single-apimo-img" alt="">
                                            </div>
                                        <?php
                                    }
                                }
                                 ?>
                            </div>
                        </div>
                    </div>
                    <div class="Pro-detail-wrapper-col-info">
                        <div class="Pro-detail-info">
                            <div class="Flex-col space-between">
                                <?php /* <span class="Pro-d-cat"><?php if($subtype){ echo $subtype; } ?></span> */ ?>

                            </div>
                            <div class="Pro-title">
                                <h3><?php echo get_the_title(); ?></h3>
                            </div>
                            <div class="Pro-address">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.783" height="15.979" viewBox="0 0 12.783 15.979">
                                    <g id="noun_Location_94613" transform="translate(356 -253.3)">
                                        <path id="Path_11" data-name="Path 11" d="M-349.608,253.3A6.388,6.388,0,0,0-356,259.692c0,6.392,6.392,9.588,6.392,9.588s6.392-3.018,6.392-9.588A6.388,6.388,0,0,0-349.608,253.3Zm0,9.588a3.205,3.205,0,0,1-3.2-3.2,3.205,3.205,0,0,1,3.2-3.2,3.205,3.205,0,0,1,3.2,3.2A3.205,3.205,0,0,1-349.608,262.888Z" transform="translate(0 0)" fill="#6a6a6a" />
                                    </g>
                                </svg>
                                <?php if ($metas['apimo_publish_address'][0]) : ?>
                                    <span class="value">
                                        <?php if ($city) {
                                            echo esc_html($city);
                                        } ?>
                                        <?php if ($metas['apimo_address'][0]) {
                                            echo ' - ' . esc_html($metas['apimo_address'][0]);
                                        } ?>
                                    </span>
                                <?php else : ?>
                                    <span class="value">
                                        <!-- Show only city -->
                                        <?php if ($city) {
                                            echo esc_html($city);
                                        } ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="apimo-reference-properties-id">
                                <?php
                                echo esc_html($metas['apimo_id'][0]);
                                ?>
                            </div>
                            <?php if ($metas['apimo_price_hide'][0]) : ?>
                                <span class="Pro-d-price"><?php _e('Private negotiation','apimo'); ?></span>
                            <?php else : ?>
                                <span class="Pro-d-price"><?php if ($metas['apimo_price'][0]) {
                                                                echo esc_html(apimo_currency_format($metas['apimo_price'][0]));
                                                            } else {
                                                                echo esc_html(apimo_currency_format(0));
                                                            } ?></span>
                            <?php endif; ?>
                            <div class="Pro-info">
                                <h5 class="Pro-info-title"><?php _e('Property specifications', 'apimo'); ?></h5>
                                <ul class="Pro-points">
                                    <li class="Pro-meta">
                                        <svg id="noun_floor_plan_3338563" data-name="noun_floor plan_3338563" xmlns="http://www.w3.org/2000/svg" width="24.511" height="24.511" viewBox="0 0 24.511 24.511">
                                            <path id="Path_12" data-name="Path 12" d="M32.06,15.821H34.2a.306.306,0,0,0,.306-.306V10.306A.306.306,0,0,0,34.2,10h-23.9a.306.306,0,0,0-.306.306V34.2a.306.306,0,0,0,.306.306H34.2a.306.306,0,0,0,.306-.306V19.5a.613.613,0,1,0-1.226,0v2.451H29.3a.613.613,0,0,0,0,1.226H32.06v8.579h-6.1V26.295a.613.613,0,1,0-1.226,0v5.459H13.064V23.175h2.145v2.757a.613.613,0,0,0,1.226,0V23.175h9.8a.613.613,0,0,0,0-1.226h-.306V21.03a.613.613,0,0,0-1.226,0v.919H13.064V12.757H24.706v4.9a.613.613,0,0,0,1.226,0v-.306h3.677a.613.613,0,1,0,0-1.226H25.932v-3.37h5.821v2.757A.306.306,0,0,0,32.06,15.821Z" transform="translate(-10 -10)" fill="#6a6a6a" />
                                        </svg>
                                        <span class="value"><?php if ($metas['apimo_rooms'][0]) {
                                                                echo esc_html($metas['apimo_rooms'][0]);
                                                            } else {
                                                                echo 0;
                                                            } ?> <?php _e('Rooms', 'apimo'); ?></span>
                                    </li>
                                    <li class="Pro-meta">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.608" height="24.511" viewBox="0 0 21.608 24.511">
                                            <g id="noun_Bath_4032349" transform="translate(0)">
                                                <path id="Path_1" data-name="Path 1" d="M25.026,13.963H4.755V3.213A2.252,2.252,0,0,1,7,.961a1.5,1.5,0,0,1,1.08.44l.475.479A2.535,2.535,0,0,0,8.37,5.155l.2.26a.383.383,0,0,0,.295.146.341.341,0,0,0,.222-.077L12.633,2.8a.383.383,0,0,0,.046-.529l-.2-.257A2.524,2.524,0,0,0,9.328,1.3L8.753.724A2.455,2.455,0,0,0,7,0,3.217,3.217,0,0,0,3.79,3.213V17.46a5.45,5.45,0,0,0,5.059,5.431h0v1.237a.383.383,0,1,0,.766,0V22.906h9.957v1.222a.383.383,0,1,0,.766,0V22.891h0A5.45,5.45,0,0,0,25.4,17.46V14.335A.383.383,0,0,0,25.026,13.963Z" transform="translate(-3.79 0)" fill="#6a6a6a" />
                                                <path id="Path_2" data-name="Path 2" d="M20.061,17.1a.479.479,0,0,0,.207-.306.463.463,0,0,0-.073-.36l-.421-.632a.483.483,0,0,0-.666-.134.471.471,0,0,0-.2.306.479.479,0,0,0,.069.36l.421.632a.486.486,0,0,0,.4.214A.46.46,0,0,0,20.061,17.1Z" transform="translate(-13.109 -9.62)" fill="#6a6a6a" />
                                                <path id="Path_3" data-name="Path 3" d="M21.026,23.82a.486.486,0,0,0,.437.272.484.484,0,0,0,.452-.318.49.49,0,0,0-.019-.383l-.326-.686a.483.483,0,0,0-.437-.276.484.484,0,0,0-.452.318.49.49,0,0,0,.019.383Z" transform="translate(-14.194 -13.84)" fill="#6a6a6a" />
                                                <path id="Path_4" data-name="Path 4" d="M23.484,30.893a.479.479,0,0,0,.448.3.484.484,0,0,0,.44-.291.456.456,0,0,0,0-.383l-.28-.709a.479.479,0,0,0-.448-.3.467.467,0,0,0-.176.034.46.46,0,0,0-.264.257.471.471,0,0,0,0,.383Z" transform="translate(-15.744 -18.208)" fill="#6a6a6a" />
                                                <path id="Path_5" data-name="Path 5" d="M23.418,14.347a.479.479,0,0,0,.23-.061.493.493,0,0,0,.188-.67l-.383-.666a.475.475,0,0,0-.651-.188.493.493,0,0,0-.188.67L23,14.1a.479.479,0,0,0,.421.249Z" transform="translate(-15.364 -7.836)" fill="#6a6a6a" />
                                                <path id="Path_6" data-name="Path 6" d="M27,21a.5.5,0,0,0,.234-.057.479.479,0,0,0,.188-.655l-.383-.666a.479.479,0,0,0-.421-.249.505.505,0,0,0-.234.061.479.479,0,0,0-.188.655l.383.666A.475.475,0,0,0,27,21Z" transform="translate(-17.574 -11.952)" fill="#6a6a6a" />
                                                <path id="Path_7" data-name="Path 7" d="M29.787,26.263a.494.494,0,0,0,.042.383l.383.663a.483.483,0,1,0,.843-.463l-.383-.666a.486.486,0,0,0-.421-.249.494.494,0,0,0-.234.061.479.479,0,0,0-.23.272Z" transform="translate(-19.817 -15.999)" fill="#6a6a6a" />
                                                <path id="Path_8" data-name="Path 8" d="M26.722,11.051l.383.666a.494.494,0,0,0,.421.245.463.463,0,0,0,.234-.061.483.483,0,0,0,.184-.655L27.56,10.6a.479.479,0,0,0-.421-.249.506.506,0,0,0-.234.061.483.483,0,0,0-.184.64Z" transform="translate(-17.905 -6.386)" fill="#6a6a6a" />
                                                <path id="Path_9" data-name="Path 9" d="M31.692,17.357a.479.479,0,0,0,.349.149.49.49,0,0,0,.329-.126.471.471,0,0,0,.153-.337.479.479,0,0,0-.13-.345l-.521-.555a.49.49,0,0,0-.352-.153.483.483,0,0,0-.349.812Z" transform="translate(-20.604 -9.866)" fill="#6a6a6a" />
                                                <path id="Path_10" data-name="Path 10" d="M36.475,23.107a.49.49,0,0,0,.682.023.483.483,0,0,0,.023-.682l-.521-.555a.49.49,0,0,0-.352-.153.481.481,0,0,0-.349.812Z" transform="translate(-23.557 -13.414)" fill="#6a6a6a" />
                                            </g>
                                        </svg>
                                        <span><?php if ($metas['apimo_bathrooms'][0]) {
                                                    echo esc_html($metas['apimo_bathrooms'][0]);
                                                } else {
                                                    echo (0);
                                                } ?> <?php _e('Bath', 'apimo'); ?></span>
                                    </li>
                                    <li class="Pro-meta">
                                        <svg id="noun_measure_4212089" xmlns="http://www.w3.org/2000/svg" width="24.83" height="24.588" viewBox="0 0 24.83 24.588">
                                            <path id="Path_13" data-name="Path 13" d="M29.579,26.363l-2.125-2.125a.9.9,0,0,0-1.269,1.269l.607.607H8.964V8.536l.607.607a.951.951,0,0,0,.635.276.838.838,0,0,0,.635-.276.883.883,0,0,0,0-1.269L8.716,5.748a.971.971,0,0,0-1.3,0L5.294,7.873A.9.9,0,0,0,6.563,9.143l.607-.607v19.4H26.792l-.607.607a.883.883,0,0,0,0,1.269.951.951,0,0,0,.635.276.838.838,0,0,0,.635-.276l2.125-2.125a1.018,1.018,0,0,0,.276-.662A.856.856,0,0,0,29.579,26.363Z" transform="translate(-5.025 -5.5)" fill="#6a6a6a" />
                                            <path id="Path_14" data-name="Path 14" d="M30.811,34.253H42.87a.919.919,0,0,0,.911-.911V21.311a.919.919,0,0,0-.911-.911H30.811a.919.919,0,0,0-.911.911V33.37A.914.914,0,0,0,30.811,34.253Z" transform="translate(-23.035 -16.288)" fill="#6a6a6a" />
                                        </svg>
                                        <span class="value"><?php if ($metas['apimo_area_display_filter'][0]) {
                                                                echo esc_html($metas['apimo_area_display_filter'][0]);
                                                            } else {
                                                                echo 0;
                                                            } ?> <?php if ($metas['apimo_area_unit'][0]) {
                                                                        echo esc_html($UNIT_AREA[$metas['apimo_area_unit'][0]]);
                                                                    } ?></span>
                                    </li>
                                    <?php if ($flor) : ?>
                                        <li class="Pro-meta">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24.596" height="19.032" viewBox="0 0 24.596 19.032">
                                                <g id="noun_Stairs_1137999" transform="translate(-5.8 -15.8)">
                                                    <g id="Group_1" data-name="Group 1" transform="translate(5.8 15.8)">
                                                        <path id="Path_15" data-name="Path 15" d="M29.84,968.162a.557.557,0,0,1,.556.557v17.919a.556.556,0,0,1-.556.556H6.447c-.454,0-.645-.185-.647-.646v-4.365a.556.556,0,0,1,.556-.557h5.32V977.76a.556.556,0,0,1,.557-.556h5.309v-3.8a.557.557,0,0,1,.557-.557h5.309v-4.129a.557.557,0,0,1,.556-.556H29.84Z" transform="translate(-5.8 -968.162)" fill="#6a6a6a" fill-rule="evenodd" />
                                                    </g>
                                                </g>
                                            </svg>
                                            <span class="value"><?php echo esc_html($flor); ?></span>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <?php if (!empty($external_areas)) : ?>
                                <div class="Pro-external-area">
                                    <h5 class="Pro-info-title"><?php _e('External areas', 'apimo'); ?></h5>
                                    <ul class="Pro-points">
                                        <?php
                                        foreach ($external_areas as $area) {
                                            $id = get_term_meta($area->term_id, 'apimo_term_id', true);
                                            if ($id == 49) {
                                        ?>
                                                <li class="Pro-meta">
                                                    <svg id="Livello_1" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                                        <path d="M31.07,29.66a7.43,7.43,0,0,0,2.56.46,7.5,7.5,0,0,0,6-12A7.5,7.5,0,0,0,34.19,5.46a7.78,7.78,0,0,0-1.73.2,7.49,7.49,0,0,0-14.55.09,7.43,7.43,0,0,0-2.06-.29,7.49,7.49,0,0,0-5.1,13A7.48,7.48,0,0,0,17,30.12a7.65,7.65,0,0,0,2.24-.34A7.47,7.47,0,0,0,24,32.56V49a1,1,0,1,0,2,0V32.58a7.57,7.57,0,0,0,5.06-2.92Zm-10.66-1.6a1,1,0,0,0-.83-.46.92.92,0,0,0-.4.08,5.41,5.41,0,0,1-2.21.46A5.51,5.51,0,0,1,12.86,19a1,1,0,0,0,.24-.77,1,1,0,0,0-.41-.7A5.52,5.52,0,0,1,18.27,8a1,1,0,0,0,1.43-.83A5.51,5.51,0,0,1,30.7,7a1,1,0,0,0,.47.77,1,1,0,0,0,.89.06A5.54,5.54,0,0,1,39.72,13a5.51,5.51,0,0,1-2.08,4.31,1,1,0,0,0-.37.71,1,1,0,0,0,.29.76,5.52,5.52,0,0,1-6.41,8.81,1,1,0,0,0-1.3.38A5.55,5.55,0,0,1,26,30.58V20.45a1,1,0,1,0-2,0v10.1a5.52,5.52,0,0,1-3.62-2.49Z" />
                                                        <path d="M21.85,46H18.11v-7h3.6a1,1,0,1,0,0-2h-3.6V35.44a1,1,0,1,0-2,0V37H10.2V35.44a1,1,0,1,0-2,0V37H2.3V35.44a1,1,0,1,0-2,0v2a.89.89,0,0,0,0,1.1v7.89a.89.89,0,0,0,0,1.1V49a1,1,0,1,0,2,0V47.93H8.23V49a1,1,0,0,0,2,0V47.93h5.92V49a1,1,0,1,0,2,0V47.93h3.74a1,1,0,1,0,0-2ZM2.3,46v-7H8.23v7Zm7.9,0v-7h5.93v7Z" />
                                                        <path d="M49.72,46.25V38.64A1,1,0,0,0,50,38a1,1,0,0,0-.28-.68V35.44a1,1,0,1,0-2,0V37H41.82V35.44a1,1,0,0,0-2,0V37H33.91V35.44a1,1,0,1,0-2,0V37H28.43a1,1,0,0,0,0,2h3.51v7H28.29a1,1,0,1,0,0,2h3.65V49a1,1,0,1,0,2,0V47.93h5.93V49a1,1,0,1,0,2,0V47.93h5.92V49a1,1,0,1,0,2,0V47.62a1,1,0,0,0,.28-.68,1,1,0,0,0-.28-.69ZM33.91,46v-7h5.93v7Zm7.91,0v-7h5.92v7Z" />
                                                    </svg>
                                                    <span class="value"><?php echo _e('Garden', 'apimo'); ?></span>
                                                </li>
                                            <?php
                                            }
                                            if ($id == 50) {
                                            ?>
                                                <li class="Pro-meta">
                                                    <svg id="Livello_1" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.8 49.67">
                                                        <path d="M7.14,36.24a9.93,9.93,0,0,0,5.11,1.31l4.58-.12,6.39-.2c.12,2.89.33,5.77.62,8.66h0A119.21,119.21,0,0,0,9,47c-.16,0-.29.42-.29.91s.13.9.29.92H9a118.07,118.07,0,0,0,31.31,0c.17,0,.3-.44.3-.94s-.13-.91-.3-.94h0a118.08,118.08,0,0,0-14.06-1q.44-4.4.62-8.81a.34.34,0,0,1,.17,0h.18l8.38.27,2.09,0a10.54,10.54,0,0,0,2.38-.21,9.77,9.77,0,0,0,4.31-2.13,10,10,0,0,0,3.46-8.81,10.19,10.19,0,0,0-4.26-7,10.29,10.29,0,0,0-8.9-12.57,10.4,10.4,0,0,0-19.29,0A10.33,10.33,0,0,0,6.44,19.25a10.2,10.2,0,0,0-4.34,8,10.06,10.06,0,0,0,1.28,5.2,9.94,9.94,0,0,0,3.76,3.8ZM5.4,27.35a6.8,6.8,0,0,1,3.95-5.69,1.8,1.8,0,0,0,.89-.93,1.74,1.74,0,0,0,0-1.29v0a6.61,6.61,0,0,1,6.51-8.88A1.83,1.83,0,0,0,18,10.16a1.87,1.87,0,0,0,.72-1.06v0A6.55,6.55,0,0,1,31.39,9v.05a1.78,1.78,0,0,0,.7,1,1.83,1.83,0,0,0,1.22.35A6.56,6.56,0,0,1,39,13.13a6.63,6.63,0,0,1,.9,6.26v.05a1.76,1.76,0,0,0,0,1.24,1.66,1.66,0,0,0,.86.89,6.92,6.92,0,0,1,4,5.21,7.12,7.12,0,0,1-5.32,7.95,8,8,0,0,1-1.82.24L35.43,35,27,35.29h-.09c.08-2.47.07-4.94,0-7.41h0a18,18,0,0,0,9.11-5.71,2.36,2.36,0,0,0-.37-.88,2.45,2.45,0,0,0-.57-.75,18.08,18.08,0,0,0-8.26,4c-.16-3.81-.44-7.6-.88-11.4,0-.19-.45-.33-.94-.33s-.92.14-.95.33v.05q-.78,6.73-1,13.47h0A17.7,17.7,0,0,0,15,22.7a2.25,2.25,0,0,0-.56.72,2.1,2.1,0,0,0-.38.85,17.65,17.65,0,0,0,9.05,5.78c0,1.71,0,3.41.05,5.11L16.7,35l-4.54-.12h0a7.22,7.22,0,0,1-3.58-1.15A7,7,0,0,1,6.12,31a6.9,6.9,0,0,1-.72-3.6Z" transform="translate(-2.1 -0.17)" />
                                                    </svg>
                                                    <span class="value"><?php echo _e('Park', 'apimo'); ?></span>
                                                </li>
                                            <?php
                                            }
                                            if ($id == 51) {
                                            ?>
                                                <li class="Pro-meta">
                                                    <svg id="Livello_1" data-name="Livello 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.8 49.67">
                                                        <path d="M7.14,36.24a9.93,9.93,0,0,0,5.11,1.31l4.58-.12,6.39-.2c.12,2.89.33,5.77.62,8.66h0A119.21,119.21,0,0,0,9,47c-.16,0-.29.42-.29.91s.13.9.29.92H9a118.07,118.07,0,0,0,31.31,0c.17,0,.3-.44.3-.94s-.13-.91-.3-.94h0a118.08,118.08,0,0,0-14.06-1q.44-4.4.62-8.81a.34.34,0,0,1,.17,0h.18l8.38.27,2.09,0a10.54,10.54,0,0,0,2.38-.21,9.77,9.77,0,0,0,4.31-2.13,10,10,0,0,0,3.46-8.81,10.19,10.19,0,0,0-4.26-7,10.29,10.29,0,0,0-8.9-12.57,10.4,10.4,0,0,0-19.29,0A10.33,10.33,0,0,0,6.44,19.25a10.2,10.2,0,0,0-4.34,8,10.06,10.06,0,0,0,1.28,5.2,9.94,9.94,0,0,0,3.76,3.8ZM5.4,27.35a6.8,6.8,0,0,1,3.95-5.69,1.8,1.8,0,0,0,.89-.93,1.74,1.74,0,0,0,0-1.29v0a6.61,6.61,0,0,1,6.51-8.88A1.83,1.83,0,0,0,18,10.16a1.87,1.87,0,0,0,.72-1.06v0A6.55,6.55,0,0,1,31.39,9v.05a1.78,1.78,0,0,0,.7,1,1.83,1.83,0,0,0,1.22.35A6.56,6.56,0,0,1,39,13.13a6.63,6.63,0,0,1,.9,6.26v.05a1.76,1.76,0,0,0,0,1.24,1.66,1.66,0,0,0,.86.89,6.92,6.92,0,0,1,4,5.21,7.12,7.12,0,0,1-5.32,7.95,8,8,0,0,1-1.82.24L35.43,35,27,35.29h-.09c.08-2.47.07-4.94,0-7.41h0a18,18,0,0,0,9.11-5.71,2.36,2.36,0,0,0-.37-.88,2.45,2.45,0,0,0-.57-.75,18.08,18.08,0,0,0-8.26,4c-.16-3.81-.44-7.6-.88-11.4,0-.19-.45-.33-.94-.33s-.92.14-.95.33v.05q-.78,6.73-1,13.47h0A17.7,17.7,0,0,0,15,22.7a2.25,2.25,0,0,0-.56.72,2.1,2.1,0,0,0-.38.85,17.65,17.65,0,0,0,9.05,5.78c0,1.71,0,3.41.05,5.11L16.7,35l-4.54-.12h0a7.22,7.22,0,0,1-3.58-1.15A7,7,0,0,1,6.12,31a6.9,6.9,0,0,1-.72-3.6Z" transform="translate(-2.1 -0.17)" />
                                                    </svg>
                                                    <span class="value"><?php echo _e('Land', 'apimo'); ?></span>
                                                </li>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="apimo-other-info-properties">
            <div class="Pro-info">
                <?php
                $currentLanguage = get_bloginfo('language');
                $lang = explode('-',$currentLanguage)[0];
                $is_content = false;

                if(isset($metas['apimo_content'][0]) && !empty($metas['apimo_content'][0]) && (is_array($metas['apimo_content'][0]) || is_object($metas['apimo_content'][0]))){
                    foreach (unserialize($metas['apimo_content'][0]) as $language) {
                        if ($language->language == $lang) {
                            $is_content = true;
                            if($language->subtitle!='' || !empty($language->subtitle)){
                                echo '<h2 class="Pro-info-subtitle">' . nl2br($language->subtitle) . '</h2>';
                            }
                        }
                    }
                }
                 ?>
                <?php


                
                // if (sizeof(maybe_unserialize($metas['apimo_content'][0])) > 0 && $is_content): ?>
                        <!-- <h5 class="Pro-info-title"><?php //_e('Description', 'apimo'); ?></h5> -->
                 <?php 
                // endif;

                ?>
                <?php
                    if(!empty($metas) &&  isset($metas['apimo_content']) && is_array($metas['apimo_content']) && isset($metas['apimo_content'][0])) {
                        $unserialized_data = maybe_unserialize($metas['apimo_content'][0]);
                        if ($unserialized_data !== false && sizeof($unserialized_data) > 0 && $is_content): ?>
                        <h5 class="Pro-info-title"><?php _e('Description', 'apimo'); ?></h5>
                        <?php 
                        endif;
                    }
                ?>
                <?php
                // foreach (unserialize($metas['apimo_content'][0]) as $language) {
                //     if ($language->language == $lang) {
                //         echo '<p>' . nl2br(($language->comment_full!=null || !empty($language->comment_full) )?$language->comment_full:$language->comment) . '</p>';
                //     }
                // } 

                $unserialized_data = maybe_unserialize($metas['apimo_content'][0]);

                if (is_array($unserialized_data)) {
                    foreach ($unserialized_data as $language) {
                        if ($language->language == $lang) {
                            echo '<p>' . nl2br(($language->comment_full!=null || !empty($language->comment_full) )?$language->comment_full:$language->comment) . '</p>';
                        }
                    } 
                } 

                ?>
            </div>
            <div class="Pro-info Pro-general-information">
                <h5 class="Pro-info-title"><?php _e('Details', 'apimo'); ?></h5>
                <div class="details-table">

                    <?php if ($apimo_category) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Category','apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($apimo_category); ?></dd>
                        </dl>
                    <?php endif; ?>
                    <?php if ($subtype && $type) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Type','apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($type); ?> / <?php echo esc_html($subtype); ?></dd>
                        </dl>
                    <?php endif; ?>
                    <?php if ($construction_years) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Construction year','apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($construction_years); ?></dd>
                        </dl>
                    <?php endif; ?>

                    <?php if ($condition) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Conditions','apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($condition); ?></dd>
                        </dl>
                    <?php endif; ?>


                    <?php if ($availability) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Availability','apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($availability); ?></dd>
                        </dl>
                    <?php endif; ?>


                    <?php if ($property_standing) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Property standing','apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($property_standing); ?></dd>
                        </dl>
                    <?php endif; ?>

                    <dl class="row">
                        <dt class="term"><?php _e('Areas'); ?>:</dt>
                        <dd class="description">
                        <?php if ($metas['apimo_area_display_filter'][0]) {
                                                                echo esc_html($metas['apimo_area_display_filter'][0]);
                                                            } else {
                                                                echo 0;
                                                            } ?> <?php if ($metas['apimo_area_unit'][0]) {
                                                                        echo esc_html($UNIT_AREA[$metas['apimo_area_unit'][0]]);
                                                                    } ?>
                        </dd>
                    </dl>

                    <?php if ($flor) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Flor','apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($flor); ?></dd>
                        </dl>
                    <?php endif; ?>


                    <dl class="row">
                        <dt class="term"><?php _e('Price'); ?>:</dt>
                        <dd class="description">
                            <?php if ($metas['apimo_price_hide'][0]) : ?>
                                <?php _e('Trattativa riservata'); ?>
                            <?php else : ?>
                                <?php if ($metas['apimo_price'][0]) {
                                    echo esc_html(apimo_currency_format($metas['apimo_price'][0]));
                                } else {
                                    echo esc_html(apimo_currency_format(0));
                                } ?>
                            <?php endif; ?>
                    </dl>
                    <?php if ($metas['apimo_rooms'][0]) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Rooms','apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($metas['apimo_rooms'][0]); ?></dd>
                        </dl>
                    <?php endif; ?>

                    <?php if ($metas['apimo_bathrooms'][0]) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Bath','apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($metas['apimo_bathrooms'][0]); ?></dd>
                        </dl>
                    <?php endif; ?>


                    <?php 
                        $unserialized_data = maybe_unserialize($metas['apimo_regulations'][0]);
                        if (is_array($unserialized_data)) {
                            foreach ($unserialized_data as $regulations) {
                                if ($regulations->type == 13) : ?>
                                    <dl class="row">
                                        <dt class="term"><?php _e('APE', 'apimo'); ?>:</dt>
                                        <dd class="description"><?php echo esc_html($regulations->value); ?></dd>
                                    </dl>
                                <?php endif; ?>
                            <?php } 
                        }
                    ?>

                    <?php if ($heating_type) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Heating type', 'apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($heating_type); ?></dd>
                        </dl>
                    <?php endif; ?>

                    <?php if ($heating_access) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Heating access', 'apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($heating_access); ?></dd>
                        </dl>
                    <?php endif; ?>

                    <?php if ($heating_device) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Heating device', 'apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($heating_device); ?></dd>
                        </dl>
                    <?php endif; ?>

                    <?php if ($water_hot_device) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Water hot device', 'apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($water_hot_device); ?></dd>
                        </dl>
                    <?php endif; ?>

                    <?php if ($water_hot_access) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Water hot access', 'apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($water_hot_access); ?></dd>
                        </dl>
                    <?php endif; ?>

                    <?php if ($water_waste) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Water waste', 'apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($water_waste); ?></dd>
                        </dl>
                    <?php endif; ?>


                    <?php if ($subtype) : ?>
                        <dl class="row">
                            <dt class="term"><?php _e('Type', 'apimo'); ?>:</dt>
                            <dd class="description"><?php echo esc_html($subtype); ?></dd>
                        </dl>
                    <?php endif; ?>
                </div>

            </div>
            <?php
            // foreach (maybe_unserialize($metas['apimo_regulations'][0]) as $regulations) {
            //     if ($regulations->type == 13) {
            //         $regulation_type = $regulations->value;
            //     }
            // }

            $unserialized_data = maybe_unserialize($metas['apimo_regulations'][0]);
            if (is_array($unserialized_data)) {
                foreach ($unserialized_data as $regulations) {
                    if ($regulations->type == 13) {
                        $regulation_type = $regulations->value;
                    }
                } 
            }
            ?>
            <div class="Pro-info">
                <h5 class="Pro-info-title"><?php _e('Prestazione energetica', 'apimo'); ?></h5>
                <div class="detail-section__content">
                    <div class="energy-class">
                        <div class="apimo-row">
                            <div class="apimo-col-12 apimo-col-lg-4">
                                <div class="energy-class__chart">
                                    <div class="energy-class__division"><span class="energy-class__letter <?php if($regulation_type=='A4'){ echo 'is-active'; } ?>">
                                            A4
                                        </span> <span class="energy-class__bar energy-class__bar--nA4"></span>
                                    </div>
                                    <div class="energy-class__division"><span class="energy-class__letter <?php if($regulation_type=='A3'){ echo 'is-active'; } ?>">
                                            A3
                                        </span> <span class="energy-class__bar energy-class__bar--nA3"></span>
                                    </div>
                                    <div class="energy-class__division"><span class="energy-class__letter <?php if($regulation_type=='A2'){ echo 'is-active'; } ?>">
                                            A2
                                        </span> <span class="energy-class__bar energy-class__bar--nA2"></span>
                                    </div>
                                    <div class="energy-class__division"><span class="energy-class__letter <?php if($regulation_type=='A1'){ echo 'is-active'; } ?>">
                                            A1
                                        </span> <span class="energy-class__bar energy-class__bar--nA1"></span>
                                    </div>
                                    <div class="energy-class__division"><span class="energy-class__letter <?php if($regulation_type=='B'){ echo 'is-active'; } ?>">
                                            B
                                        </span> <span class="energy-class__bar energy-class__bar--nB"></span>
                                    </div>
                                    <div class="energy-class__division"><span class="energy-class__letter <?php if($regulation_type=='C'){ echo 'is-active'; } ?>">
                                            C
                                        </span> <span class="energy-class__bar energy-class__bar--nC"></span>
                                    </div>
                                    <div class="energy-class__division"><span class="energy-class__letter <?php if($regulation_type=='D'){ echo 'is-active'; } ?>">
                                            D
                                        </span> <span class="energy-class__bar energy-class__bar--nD"></span>
                                    </div>
                                    <div class="energy-class__division"><span class="energy-class__letter <?php if($regulation_type=='E'){ echo 'is-active'; } ?>">
                                            E
                                        </span> <span class="energy-class__bar energy-class__bar--nE"></span>
                                    </div>
                                    <div class="energy-class__division"><span class="energy-class__letter <?php if($regulation_type=='F'){ echo 'is-active'; } ?>">
                                            F
                                        </span> <span class="energy-class__bar energy-class__bar--nF"></span>
                                    </div>
                                    <div class="energy-class__division"><span class="energy-class__letter <?php if($regulation_type=='G'){ echo 'is-active'; } ?>">
                                            G
                                        </span> <span class="energy-class__bar energy-class__bar--nG"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="apimo-col-12 apimo-col-lg-4">
                                <div class="energy-box-color">
                                    <div class="energy-class__title"><h3><?php _e('Classe energetica');?></h3></div>
                                    <div class="energy-class__big">
                                    <!--G-->
                                    <?php
                                    // echo '<pre>';
                                    // print_r(maybe_unserialize($metas['apimo_regulations'][0]));
                                    // echo '</pre>';

                                    if(is_array(maybe_unserialize($metas['apimo_regulations'][0]))){
                                        foreach (maybe_unserialize($metas['apimo_regulations'][0]) as $regulations) {
                                            if ($regulations->type == 13) {

                                                echo '<span class="color-' . esc_attr($regulations->value) . '">' . esc_attr($regulations->value) . '</span>' ;
                                            } 
                                         } ?>
                                    }
                                    
                                    </div>
                                    <div class="energy-box-info">
                                        <p class="info"><span>EP</span>gl, nren</p>

                                        <?php
                                        $type_12 = false;
                                        foreach (maybe_unserialize($metas['apimo_regulations'][0]) as $regulations) {
                                        if ($regulations->type == 12) {
                                            $type_12 = true;
                                            ?>
                                            <p class="value">
                                            <?php
                                            echo esc_html($regulations->value);
                                            ?>
                                            </p>
                                            <p class="unit"><?php _e('kWh/m2 year','apimo');?></p>
                                            <?php
                                        }
                                        ?>
                                    <?php }
                                        if(!$type_12){
                                            _e('Dato non disponibile','apimo');
                                        }

                                    ?>

                                    </div>

                                </div>
                            </div>
                            <div class="apimo-col-12 apimo-col-lg-4">
                                                       <?php
                                                        //echo '<pre>';
                                                         //   print_r(maybe_unserialize($metas['apimo_regulations'][0]));
                                                        // echo '</pre>';
                                                    ?>
                                <div class="energy-house">
                                    <div class="energy-house-title">
                                        <h3><?php _e('Energy performance','apimo');?></h3>
                                    </div>
                                    <div class="energy-house-details">
                                        <div class="apimo-row">
                                            <div class="apimo-col-6 apimo-col-lg-6">
                                                <div class="season-detail">
                                                    <div class="title">
                                                        <?php _e('Winter', 'apimo');?>
                                                    </div>
                                                    <div class="image">
                                                        <img src="<?php echo esc_url($apimo_url . '/assets/images/Inverno@4x.png'); ?>">
                                                    </div>
                                                    <div class="season-value">

                                                        <div class="item 1">
                                                            <?php
                                                            $in_113_1 = false;
                                                            if (sizeof(maybe_unserialize($metas['apimo_regulations'][0])) > 0) {

                                                                foreach (maybe_unserialize($metas['apimo_regulations'][0]) as $regulations) {
                                                                    if ($regulations->type == 113 ) :
                                                                        if( $regulations->value == 1): $in_113_1 = true; ?>
                                                                            <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-1-selected@2x.png'); ?>">
                                                                        <?php else: $in_113_1 = true; ?>
                                                                            <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-1@2x.png'); ?>">
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php }

                                                                ?>
                                                            <?php } if(!$in_113_1) { ?>
                                                                <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-1@2x.png'); ?>">
                                                            <?php } ?>
                                                        </div>
                                                        <div class="item 2">
                                                            <?php
                                                            $in_113_2 = false;
                                                            if (sizeof(maybe_unserialize($metas['apimo_regulations'][0])) > 0) {
                                                                foreach (maybe_unserialize($metas['apimo_regulations'][0]) as $regulations) {
                                                                    if ($regulations->type == 113 ):
                                                                        if($regulations->value == 2) : $in_113_2 = true;?>
                                                                            <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-2-Selected@2x.png'); ?>">
                                                                        <?php else: $in_113_2 = true; ?>
                                                                            <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-2@2x.png'); ?>">
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php } ?>
                                                            <?php }  if(!$in_113_2) { ?>
                                                                <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-2@2x.png'); ?>">
                                                            <?php } ?>
                                                        </div>
                                                        <div class="item 3">
                                                            <?php
                                                            $in_113_3 = false;
                                                            if (sizeof(maybe_unserialize($metas['apimo_regulations'][0])) > 0) {
                                                                foreach (maybe_unserialize($metas['apimo_regulations'][0]) as $regulations) {
                                                                    if ($regulations->type == 113):
                                                                        if( $regulations->value == 3) : $in_113_3 = true; ?>
                                                                            <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-3-Selected@2x.png'); ?>">
                                                                        <?php else: $in_113_3 = true; ?>
                                                                            <img src="<?php echo esc_url($apimo_url . '/assets/images/smile-3@2x.png'); ?>">
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php } ?>
                                                            <?php }  if(!$in_113_3) { ?>
                                                                <img src="<?php echo esc_url($apimo_url . '/assets/images/smile-3@2x.png'); ?>">
                                                            <?php } ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apimo-col-6 apimo-col-lg-6">
                                                <div class="season-detail">
                                                    <div class="title">
                                                        <?php _e('Summer','apimo');?>
                                                    </div>
                                                    <div class="image">
                                                        <img src="<?php echo esc_url($apimo_url . '/assets/images/Estate@4x.png'); ?>">
                                                    </div>
                                                    <div class="season-value">
                                                        <div class="item">
                                                            <?php
                                                             $in_112_1 = false;
                                                            foreach (maybe_unserialize($metas['apimo_regulations'][0]) as $regulations) {
                                                                if ($regulations->type == 112):
                                                                if( $regulations->value == 1) :  $in_112_1 = true; ?>
                                                                    <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-1-selected@2x.png'); ?>">
                                                                <?php else: $in_112_1 = true; ?>
                                                                    <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-1@2x.png'); ?>">
                                                                <?php endif;endif; ?>
                                                            <?php }  if(!$in_112_1) { ?>
                                                                <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-1@2x.png'); ?>">
                                                            <?php } ?>

                                                        </div>
                                                        <div class="item">
                                                            <?php  $in_112_2 = false;
                                                            foreach (maybe_unserialize($metas['apimo_regulations'][0]) as $regulations) {
                                                                if ($regulations->type == 112):
                                                                if($regulations->value == 2) : $in_112_2 = true; ?>
                                                                    <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-2-Selected@2x.png'); ?>">
                                                                <?php else: $in_112_2 = true; ?>
                                                                    <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-2@2x.png'); ?>">
                                                                <?php endif;endif; ?>
                                                            <?php }  if(!$in_112_1) { ?>
                                                                <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-2@2x.png'); ?>">
                                                            <?php } ?>
                                                        </div>
                                                        <div class="item">
                                                            <?php $in_112_3= false;
                                                            foreach (maybe_unserialize($metas['apimo_regulations'][0]) as $regulations) {
                                                                if ($regulations->type == 112):

                                                                if( $regulations->value == 3) : $in_112_3 = true; ?>
                                                                    <img src="<?php echo esc_url($apimo_url . '/assets/images/Smile-3-Selected@2x.png'); ?>">
                                                                <?php else: $in_112_3 = true; ?>
                                                                    <img src="<?php echo esc_url($apimo_url . '/assets/images/smile-3@2x.png'); ?>">
                                                                <?php endif;endif; ?>
                                                            <?php }  if(!$in_112_3) { ?>
                                                                <img src="<?php echo esc_url($apimo_url . '/assets/images/smile-3@2x.png'); ?>">
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $data_of_area_service = (wp_get_object_terms(get_the_ID(), array('apimo_service', 'apimo_areas')));
            $final_array = array_map(function ($term) {
                return $term->term_id;
            }, $data_of_area_service);
            ?>
            <?php
            $terms_of_area_service = get_terms(array('taxonomy' => array('apimo_service', 'apimo_areas'), 'hide_empty' => false));
            ?>

            <div class="Pro-info">
                <h5 class="Pro-info-title"><?php _e('Services', 'apimo'); ?></h5>
                <ul class="Pro-ex-points">
                    <?php foreach ($terms_of_area_service as $term_data) :
                    ?>

                        <?php if (in_array($term_data->term_id, $final_array)) : ?>
                            <li class="Pro-meta">
                                <svg class="include" xmlns="http://www.w3.org/2000/svg" width="12.069" height="8.799" viewBox="0 0 12.069 8.799">
                                    <g id="noun_Check_1862488" transform="translate(-14.079 -69.483)">
                                        <g id="Group_7" data-name="Group 7" transform="translate(14.079 69.483)">
                                            <path id="Path_30" data-name="Path 30" d="M43.607,69.823c1.042-1.042,2.672.544,1.585,1.585L38.67,77.977a1.18,1.18,0,0,1-1.585,0L33.823,74.67a1.121,1.121,0,0,1,1.585-1.585L37.9,75.576Z" transform="translate(-33.483 -69.483)" fill="#6a6a6a" />
                                        </g>
                                    </g>
                                </svg>
                                <span><?php echo esc_html($term_data->name); ?></span>
                            </li>
                        <?php else : ?>
                            <?php if (get_option('apimo_show_unavailable_service') == 1) : ?><li>
                                    <svg class="not-include" id="noun_X_2147847" xmlns="http://www.w3.org/2000/svg" width="10.478" height="10.478" viewBox="0 0 10.478 10.478">
                                        <path id="Path_31" data-name="Path 31" d="M10.139,11.551,6.605,8.019,3.072,11.551a1,1,0,0,1-1.412,0h0a1,1,0,0,1,0-1.412L5.192,6.605,1.66,3.072a1,1,0,0,1,0-1.412h0a1,1,0,0,1,1.412,0L6.605,5.192,10.139,1.66a1,1,0,0,1,1.412,0h0a1,1,0,0,1,0,1.412L8.019,6.605l3.532,3.533a1,1,0,0,1,0,1.412h0a1,1,0,0,1-1.412,0Z" transform="translate(-1.366 -1.366)" fill="#6a6a6a"></path>
                                    </svg>
                                    <span><?php echo esc_html($term_data->name); ?></span>

                                </li>
                            <?php endif; ?>
                        <?php endif; ?>

                    <?php
                    endforeach;
                    ?>

                </ul>
            </div>

        </div>
        <?php
                if($city_term[0]->parent==0){
                    $city = $city_term[0]->name ;
                } else {
                    $city = $city_term[1]->name;
                }
                $args = array(
                    'post_type' => 'property',
                    'post__not_in' => array(get_the_ID()),
                    'posts_per_page' => ($apimo_archive_settings['view_1']['desktop'])*2,
                     'tax_query' => array(
                          'relation' => 'AND',
                        array(
                            'taxonomy' => 'apimo_category',
                            'field'    => 'name',
                            'terms'    => $apimo_category,
                        ),
                        array(
                            'taxonomy' => 'apimo_subtype',
                            'field'    => 'name',
                            'terms'    => $subtype,
                        ),
                        array(
                            'taxonomy' => 'city',
                            'field'    => 'name',
                            'terms'    => $city ,
                        ),
                    ),
                    'meta_query'      => array(
                   		array(
                 			'key'	   => 'apimo_price',
                 			'value'    =>  array(($metas['apimo_price'][0] - ($metas['apimo_price'][0] *0.2)) , ($metas['apimo_price'][0] + ($metas['apimo_price'][0] *0.2))),
                 			'type'     => 'numeric',
                 			'compare'  => 'between'
                              )
            		)
                );

                  $loop = new WP_Query($args);
                // echo '<pre>';
                // print_r($loop);
          if ($loop->have_posts()) {
        ?>
        <section class="Product-wrapper Grid-wrapper <?php if ($apimo_archive_settings['template'] == 'landscape') {
                                            echo 'landscape-type ';
                                        } ?> Related-pro-wrapper">
            <h2><?php _e('Other properties you might like', 'apimo'); ?></h2>
            <div class="apimo-row">

            <?php



                    while ($loop->have_posts()) {
                        $loop->the_post();
                        global $post; ?>
                        <div class="<?php
                                    echo esc_attr($grid_desktop) . ' ' . esc_attr($grid_tablet) . ' ' . esc_attr($grid_mobile);
                                    ?>">
                            <?php
                            include 'template_archive_block.php';
                            ?>
                        </div>
                <?php
                    }
                    wp_reset_query();

                ?>
            </div>
        </section>
        <?php }}
        ?>
    </div>
</div>
