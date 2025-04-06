<?php
/**
 * Template part for displaying acf blocks
 */

switch(get_row_layout()) {
    case "vertical_slider":
        get_template_part('template-parts/section/section-vertical-slider');
        break;
    case "four_images_slider":
        get_template_part('template-parts/section/section-four-images-slider');
        break;
    case "banner_image_background":
        get_template_part('template-parts/section/section-banner-image-background');
        break;
    case "instagram_reels":
        get_template_part('template-parts/section/section-instagram-reels');
        break;
    case "recipe_slider":
        $pre_title = get_sub_field('pre_title');
        $title = get_sub_field('title');
        $recipes = get_sub_field('recipes');
        get_template_part('template-parts/section/section-recipe-slider', null, array(
            'pre_title' => $pre_title,
            'title' => $title,
            'recipes' => $recipes,
            'background_color' => "bg-beige-3",
        ));
        break;
    case "ingredient_banner":
        get_template_part('template-parts/section/section-ingredient-banner');
        break; 
    case "fun_fact":
        get_template_part('template-parts/section/section-fun-fact');
        break; 
    case "locations_slider":
        get_template_part('template-parts/section/section-locations-slider');
        break; 
    case "hotspots":
        get_template_part('template-parts/section/section-hotspots');
        break; 
    case "horizontal_scroll":
        get_template_part('template-parts/section/section-horizontal-scroll');
        break;
    case "scroll_sections":
        // get_template_part('template-parts/section/section-scroll-sections');
        break;
    case "image_text":
        get_template_part('template-parts/section/section-image-text');
        break;
    case "image":
        get_template_part('template-parts/section/section-image');
        break;
    case "rich_text":
        get_template_part('template-parts/section/section-rich-text');
        break;
}
