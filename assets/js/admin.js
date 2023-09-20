jQuery(document).ready(function ($) {

    jQuery('.apimo-color-picker-field').wpColorPicker();

    jQuery('.apimo_dates_filter_input').each(function () {

        var $this = jQuery(this);

        $this.daterangepicker({

        }, function (start, end, label) {

            jQuery('.apimo_input_text[data-id="apimo_dates_end"]').val(end.format('YYYY-MM-DD'));

            jQuery('.apimo_input_text[data-id="apimo_dates_start"]').val(start.format('YYYY-MM-DD')).trigger('change');

            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));

            jQuery('.apimo_dates_filter_input').html(start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));

            apimo_generate_shortcode();

        });

    })

});



jQuery(document).on('click', '#add_new_agency', function () {

    var new_div = jQuery('#apimo-api-key-information-row-clone').clone();

    new_div.attr('id', '');

    new_div.show();

    jQuery('.apimo-api-key-information-row-wrap').append(new_div)

})



jQuery(document).on('click', '.apimo-remove-data', function () {

    jQuery(this).parents('.apimo-api-key-information-row').remove()

})





jQuery(document).on('click', '.all-shortcode .row .delete', function () {

    var responce = confirm("Are You Sure?");

    if (responce) {

        var id = jQuery(this).attr('data_id');

        window.location.href = delete_urls.delete_url + id;

    }

    else {

        window.location.href = delete_urls.page_url;

    }

});



jQuery(document).on('click change', 'input[name="shortcode[num_of_post]"],input[name="shortcode[pagination_enable]"],input[name="step[step_3][view_2][desktop]"],input[name="step[step_3][view_2][mobile]"],input[name="step[step_3][view_2][tablate]"],input[name="step[step_3][view_1][desktop]"],input[name="step[step_3][view_1][mobile]"],input[name="step[step_3][view_1][tablate]"],input[name="step[step_4][filter][]"],.apimo-shortcode-generate input[name="generate-shortcode"],input[name="apimo_proprty_types"],input[name="step[step_2][template]"],input[name="apimo_shortcode_view_type"],select[name="step[step_1][font]"],select[name="step[step_1][customised_tags]"],select[name="step[step_1][repository_tags]"],[name="apimo_proprty_selection_types"],[name="apimo_shortcode_filter"],.apimo_input_select,.apimo_filter_input,[name="order-by-properties"],[name="apimo_order"],[name="apimo_tax_filter"],[name="apimo_meta_filter"],.apimo_meta_filter_input,[name="archive_filter_normal[]"],[name="archive_filter_advance[]"],#shortcode_enable_pagination,#shortcode_enable_filter,#apimo_category', function () {

    apimo_generate_shortcode();

});





jQuery(document).on('change', '[name="apimo_proprty_selection_types"]', function () {

    var checked = jQuery('[name="apimo_proprty_selection_types"]:checked');

    jQuery('.apimo-proprty-selection-types').slideUp();

    jQuery('[data-id="' + checked.attr('id') + '"]').slideDown()

})





jQuery(document).on('click', '#apimo_create_shortcode', function () {



    // jQuery('#apimo-create-shortcode-popup').bPopup();

    jQuery('#apimo-create-shortcode-popup').bPopup({

        modalClose: false,

        opacity: 0.6,

        positionStyle: 'fixed' //'fixed' or 'absolute'

    });

    jQuery('.apimo-portrait-select-box').select2({

        placeholder: jQuery('.apimo-portrait-select-box').attr('data-placeholder'),

    });

});



jQuery(document).on('click', '#apimo-close-shortcode-popup', function () {

    jQuery('#apimo-create-shortcode-popup').bPopup().close();

})

jQuery(document).on('click', '.apimo-step-title,.apimo-step-button', function () {

    var id = jQuery(this).attr('data-id');

    jQuery('.apimo-step,.apimo-step-title').removeClass('active');

    jQuery('.apimo-step[data-id="' + id + '"]').addClass('active');

    jQuery('.apimo-step-title[data-id="' + id + '"]').addClass('active');

})





jQuery(document).on('click', '#image_gallery', function (e) {

    var str = '';

    var $this = jQuery(this)

    e.preventDefault();

    var image = wp.media({

        title: 'Upload Image',

        // mutiple: true if you want to upload multiple files at once

        multiple: true

    }).open().on('select', function (e) {

        var uploaded_image = image.state().get('selection');

        uploaded_image.map(function (attachment) {

            attachment = attachment.toJSON();

            str += "<div class='apimo_gallery_image'><div class='apimo-remove-image'>X</div><img src=" + attachment.url + "><input type='hidden' name='apimo_gallery_images[]' value=" + attachment.url + "></div>"

        });



        jQuery('.apimo-all-selected-images').append(str);

    });



});

jQuery(document).on('click', '.apimo-remove-image', function () {

    jQuery(this).parent().remove();

});



jQuery(document).on('change', '.apimo-portrait_radio', function () {

    var value = jQuery('[name="apimo_proprty_types"]:checked').val();

    jQuery('.property-selection').hide();

    if (value == 'all') {

        jQuery('.apimo-portrait-select-box').slideUp();

        jQuery('.apimo-carosal').slideUp();

        jQuery('#apimo-view-1').trigger('click');

        jQuery('.apimo_filter_desc[data-id="visible"]').hide();

        jQuery('.apimo_filter_desc[data-id="hide"]').show();

        jQuery('#select_specific_property').slideUp();

        jQuery('.property-selection[data-id="all"]').show();

    }

    else {

        jQuery('.apimo-portrait-select-box').slideDown();

        jQuery('.apimo-carosal').slideDown();

        jQuery('#select_specific_property').slideDown();

        jQuery('.property-selection[data-id="specific"]').show();

    }

    jQuery('input[name="step[step_3][view]"]').trigger('change')

});





jQuery(document).on('change', 'input[name="apimo_shortcode_view_type"]', function () {

    var view = jQuery('input[name="apimo_shortcode_view_type"]:checked').val();

    if (view == 'carousel') {

        jQuery('.apimo-with-filters').slideUp();

        jQuery('.apimo-without-filters').slideDown();

    }

    else {

        jQuery('.apimo-without-filters').slideUp();

        jQuery('.apimo-with-filters').slideDown();

    }

});



jQuery(document).on('click', '.apimo-input_button[name="check_api_key"]', function () {

    var api_key = []; //jQuery('.apimo-input_text[name="inserisci_api_key[]"]').val();

    var company_id = [];//jQuery('.apimo-input_text[name="apimo_company_id"]').val();

    jQuery('.apimo-input_text[name="inserisci_api_key[]"]').each(function () {

        api_key.push(jQuery(this).val())

    })

    jQuery('.apimo-input_text[name="apimo_company_id[]"]').each(function () {

        company_id.push(jQuery(this).val())

    })

    var data = {

        'action': 'apimo_check_api_key',

        'api_key': api_key,

        'company_id': company_id,

    }



    jQuery.post(admin_urls.ajax, data, function (response) {



        jQuery('.apimo-api-key-information-row-wrap .apimo-api-key-information-row').each(function (index) {



            var is_valid = response[index].is_valid;

            if (is_valid) {

                jQuery(this).find('.apimo-valid').show();
                

                jQuery(this).find('.apimo-invalid').hide();

            } else {

                jQuery(this).find('.apimo-valid').hide();

                jQuery(this).find('.apimo-invalid').show();
                jQuery(this).find('.apimo-invalid').html(response[index].message);

            }

        })



        jQuery('.apimo_api_responce').html(response);

    });

});



jQuery(document).on('click', 'input[name="apimo_template_type"]', function () {

    if (jQuery(this).hasClass('apimo-checked')) {

        jQuery(this).removeClass('apimo-checked');

        jQuery(this).prop('checked', false);

    }

    else {

        jQuery('input[name="apimo_template_type"]').removeClass('apimo-checked');

        jQuery(this).addClass('apimo-checked');

    }

});



jQuery(document).on('click', '.run_menual_scheduler[name="run_scheduler"]', function () {



    var data = {

        'action': 'apimo_run_menual_scheduler',

    }



    jQuery.post(admin_urls.ajax, data, function (response) {

        jQuery('.apimo-api-result').html(response);

    });

});



jQuery(document).on('click', '.apimo-shortcode input[name="copy_shortcode"]', function () {

    navigator.clipboard.writeText(jQuery('.apimo-shortcode input[name="shortcode"]').val());

});



jQuery(document).on('change', '[name="apimo_shortcode_filter"],[name="apimo_order"],[name="apimo_tax_filter"],[name="apimo_meta_filter"]', function () {

    jQuery('[name="apimo_shortcode_filter"],[name="apimo_order"],[name="apimo_tax_filter"],[name="apimo_meta_filter"]').each(function () {

        var id = jQuery(this).attr('id')

        if (jQuery(this).is(':checked')) {

            jQuery('.apimo-filter-product-shortcode-filter-data-wrap[data-id="' + id + '"]').slideDown()

        } else {

            jQuery('.apimo-filter-product-shortcode-filter-data-wrap[data-id="' + id + '"]').slideUp()

        }

    })

})



jQuery(document).ready(function () {

    jQuery('.apimo_select2,.apimo_input_select').select2();

    apimo_generate_shortcode();

});



function apimo_generate_shortcode() {

    var type = jQuery('input[name="apimo_proprty_types"]:checked').val();

    var repository_tags = jQuery('input[name="repository_tags"]').val();

    var customised_tags = jQuery('input[name="customised_tags"]').val();

    var layout = jQuery('input[name="step[step_2][template]"]:checked').val();

    var view = jQuery('input[name="apimo_shortcode_view_type"]:checked').val();

    var proprty_selection_types = jQuery('[name="apimo_proprty_selection_types"]:checked').val();



    var filters = []

    jQuery('input[name="step[step_4][filter][]"]:checked').each(function () {

        filters.push(jQuery(this).val());

    });



    var str = "[apimo";



    if (type == undefined) {

    }

    else {

        if (type == 'selected') {

            str += ' type="featured_home"';

            str += ' proprty_selection_types="' + proprty_selection_types + '"';

            var products = [];

            if (proprty_selection_types == 'property') {

                jQuery('select[name="step[step_1][font]"]').each(function () {

                    products.push(jQuery(this).val());

                });

                if (jQuery('select[name="step[step_1][font]"]').val().length > 0) {

                    str += ' properties="' + jQuery('select[name="step[step_1][font]"]').val().join() + '"';

                }

            }

            if (proprty_selection_types == 'tags') {

                if (jQuery('select[name="step[step_1][repository_tags]"]').val().length > 0) {

                    str += ' repository_tags="' + jQuery('select[name="step[step_1][repository_tags]"]').val().join() + '"';

                }

                if (jQuery('select[name="step[step_1][customised_tags]"]').val().length > 0) {

                    str += ' customised_tags="' + jQuery('select[name="step[step_1][customised_tags]"]').val().join() + '"';

                }

            }

            if (proprty_selection_types == 'filter') {

                jQuery('[name="apimo_shortcode_filter"]').each(function () {





                    if (jQuery(this).is(':checked')) {

                        var value = jQuery(this).attr('value')

                        if (value == 'area') {

                            var country = jQuery('.apimo_input_select[data-id="apimo_country"]').val();

                            var region = jQuery('.apimo_input_select[data-id="apimo_region"]').val();

                            var district = jQuery('.apimo_input_select[data-id="apimo_district"]').val();

                            var city = jQuery('.apimo_input_select[data-id="apimo_city"]').val();

                            if (country != '') {

                                str += ' country="' + country + '"';

                            }

                            if (region != '') {

                                str += ' region="' + region + '"';

                            }

                            if (district != '') {

                                str += ' district="' + district + '"';

                            }

                            if (city != '') {

                                str += ' city="' + city + '"';

                            }

                        }

                        if (value == 'price') {

                            var price_range_min = jQuery('.apimo_filter_input[data-id="price_range_min"]').val();

                            var price_range_max = jQuery('.apimo_filter_input[data-id="price_range_max"]').val();

                            if (price_range_min != '') {

                                str += ' price_range_min="' + price_range_min + '"';

                            }

                            if (price_range_max != '') {

                                str += ' price_range_max="' + price_range_max + '"';

                            }

                        }

                        if (value == 'area_size') {

                            var property_areas_min = jQuery('.apimo_filter_input[data-id="property_areas_min"]').val();

                            var property_areas_max = jQuery('.apimo_filter_input[data-id="property_areas_max"]').val();

                            if (property_areas_min != '') {

                                str += ' property_areas_min="' + property_areas_min + '"';

                            }

                            if (property_areas_max != '') {

                                str += ' property_areas_max="' + property_areas_max + '"';

                            }

                        }

                        if (value == 'rooms') {

                            var number_of_rooms = jQuery('.apimo_filter_input[data-id="number_of_rooms"]').val();

                            var number_of_bedrooms = jQuery('.apimo_filter_input[data-id="number_of_bedrooms"]').val();

                            if (number_of_rooms != '') {

                                str += ' number_of_rooms="' + number_of_rooms + '"';

                            }

                            if (number_of_bedrooms != '') {

                                str += ' number_of_bedrooms="' + number_of_bedrooms + '"';

                            }

                        }

                        if (value == 'dates') {

                            var start_date = jQuery('.apimo_input_text[data-id="apimo_dates_start"]').val();

                            var end_date = jQuery('.apimo_input_text[data-id="apimo_dates_end"]').val();

                            var date_filter_type = jQuery('.apimo_filter_input[name="apimo_date_filter_type"]:checked').val();

                            if (start_date != '') {

                                str += ' start_date="' + start_date + '"';

                            }

                            if (end_date != '') {

                                str += ' end_date="' + end_date + '"';

                            }

                            if (date_filter_type != '') {

                                str += ' date_filter_type="' + date_filter_type + '"';

                            }

                        }

                        if (value == 'advacne_search') {



                            var advance_area = [];

                            jQuery('.apimo_input_checkbox[name="apimo_advance[areas][]"]:checked').each(function () {

                                advance_area.push(jQuery(this).val());

                            })

                            var advance_service = [];

                            jQuery('.apimo_input_checkbox[name="apimo_advance[service][]"]:checked').each(function () {

                                advance_service.push(jQuery(this).val());

                            })

                            if (advance_area != '') {

                                str += ' advance_area="' + advance_area + '"';

                            }

                            if (advance_service != '') {

                                str += ' advance_service="' + advance_service + '"';

                            }

                        }
                        if (value == 'category') {
                            var category_filter = jQuery('.apimo_input_select[data-id="apimo_category"]').val();

                            if (category_filter != '') {

                                str += ' category_filter="' + category_filter + '"';

                            }
                        }

                        if (value == 'subtype') {
                            var subtype_filter = jQuery('.apimo_input_select[data-id="apimo_subtype"]').val();

                            if (subtype_filter != '') {

                                str += ' subtype_filter="' + subtype_filter + '"';

                            }
                        }


                    }

                })



                jQuery('[name="apimo_tax_filter"]').each(function () {

                    if (jQuery(this).is(':checked')) {

                        var value = jQuery(this).attr('value')

                        var selected_value = jQuery('.apimo_filter_input[data-id="' + value + '"]').val();

                        str += ' tax_' + value + '="' + selected_value.join(',') + '"';

                    }

                })



                jQuery('[name="apimo_meta_filter"]').each(function () {

                    if (jQuery(this).is(':checked')) {

                        var type = jQuery(this).attr('data-type');

                        var value = jQuery(this).attr('value')

                        var selected_value = jQuery('.apimo_meta_filter_input').attr('data-type');

                        if (value == 'apimo_price_hide') {

                            str += ' meta_' + value + '="1"';

                        }

                        if (type == "number") {

                            var selected_value = jQuery('.apimo_meta_filter_input[data-id="' + value + '"]').val();

                            if (selected_value != '') {

                                str += ' meta_' + value + '="' + selected_value + '"';

                            }

                        } else if (type == "multiselectyear") {

                            var selected_value = jQuery('.apimo_meta_filter_input[data-id="' + value + '"]').val();

                            if (selected_value != '') {

                                str += ' meta_' + value + '="' + selected_value.join(',') + '"';

                            }

                        } else if (type == "range") {

                            var min = jQuery('.apimo_meta_filter_input[data-id="' + value + '"][data-type="min"]').val();

                            var max = jQuery('.apimo_meta_filter_input[data-id="' + value + '"][data-type="max"]').val();



                            if (min != '' && max != '') {

                                str += ' meta_' + value + '="' + min + '-' + max + '"';

                            }

                        }

                    }

                })







                var order_by = jQuery('[name="order-by-properties"]:checked').val();

                if (order_by != '') {

                    str += ' order_by="' + order_by + '"';

                }

            }



        }

        else {

            str += ' type="all"';

        }

        if (jQuery('#shortcode_enable_pagination').is(':checked')) {

            str += ' no_of_post="' + jQuery('#filter_page_size').val() + '"';

        }

        if (jQuery('#shortcode_enable_filter').is(':checked')) {

            let checked_advance_filter = [];

            jQuery('[name="archive_filter_advance[]"]:checked').each(function () {

                checked_advance_filter.push(jQuery(this).val())

            })

            if (checked_advance_filter.length > 0) {

                str += ' advance_filter="' + checked_advance_filter.join(',') + '"';

            }





            let archive_filter_normal = [];

            jQuery('[name="archive_filter_normal[]"]:checked').each(function () {

                archive_filter_normal.push(jQuery(this).val())

            })

            if (archive_filter_normal.length > 0) {

                str += ' normal_filter="' + archive_filter_normal.join(',') + '"';

            }

        }

    }



    if (layout == undefined) {

    }

    else {

        if (layout == 'template_1') {

            str += ' grid="horizontal"';

        }

        else {

            str += ' grid="vertical"';

        }

    }

    var selected_view = '';

    if (type != undefined) {

        if (type == 'selected') {

            if (view == 'grid') {

                selected_view += 'view_1';

            }

            else {

                selected_view += 'view_2';

            }

            var desktop = jQuery('input[name="step[step_3][' + selected_view + '][desktop]"]').val();

            var mobile = jQuery('input[name="step[step_3][' + selected_view + '][mobile]"]').val();

            var tablate = jQuery('input[name="step[step_3][' + selected_view + '][tablate]"]').val();

        }

        else {

            var desktop = jQuery('input[name="step[step_3][view_1][desktop]"]').val();

            var mobile = jQuery('input[name="step[step_3][view_1][mobile]"]').val();

            var tablate = jQuery('input[name="step[step_3][view_1][tablate]"]').val();

        }







        if (view == 'grid') {

            str += ' view="normal"';

        }

        else {

            str += ' view="carousel"';

        }



        if (desktop != '' && desktop != undefined) {

            str += ' desktop=' + desktop;

        }

        if (mobile != '' && mobile != undefined) {

            str += ' mobile=' + mobile;

        }

        if (tablate != '' && tablate != undefined) {

            str += ' tablet=' + tablate;

        }

    }



    if (filters.length > 0) {

        str += ' filters="' + filters.join() + '"';

    }



    if (jQuery('input[name="shortcode[pagination_enable]"]:checked').val() != undefined) {

        str += ' pagination_enable=true no_of_post="' + jQuery('input[name="shortcode[num_of_post]"]').val() + '"';

    }

    str += "]";

    console.log(str);

    jQuery('.apimo-shortcode input[name="shortcode"]').val(str);

}



jQuery(document).on('change', '#shortcode_enable_pagination,#shortcode_enable_filter', function () {

    var id = jQuery(this).attr('id');

    if (jQuery(this).is(":checked")) {

        jQuery('[data-id="' + id + '"]').slideDown()

    } else {

        jQuery('[data-id="' + id + '"]').slideUp()

    }

})