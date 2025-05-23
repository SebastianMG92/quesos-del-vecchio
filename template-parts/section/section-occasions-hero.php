<?php
/**
 * Section Occasions Hero
 * 
 * @param array $args['products'] WP_Query object containing products
 * @param string $args['description'] Description of the occasion
 */

// Get the passed products query
$products = isset($args['products']) ? $args['products'] : null;
$description = $args['description'];
?>

<link href="<?php echo get_template_directory_uri(); ?>/dist/section-occasions-hero.css?v=<?php echo _S_VERSION; ?>" rel="stylesheet" type="text/css" media="all">

<section class="relative bg-beige-3 occasions-hero" data-section="OccasionsHero" data-header-light> 
    <div class="occasions-hero__container">
        <div class="occasions-hero__content">
            <div class="absolute container z-20 top-[9.5625rem] inset-x-0 lg:top-[12.8125rem] pointer-events-none">
                <div class="max-w-80 grid gap-2 lg:max-w-[22.9375rem] lg:gap-4 occasions-hero__description">
                    <h1 class="text-white text-5xl font-medium tracking-tight lg:text-[3.5rem] occasions-hero__description-title">
                        <?php the_title(); ?>
                    </h1>
                
                    <p class="text-white font-medium max-w-64 tracking-tight lg:font-normal lg:text-2xl lg:max-w-none occasions-hero__description-text">
                        <?php echo $description; ?>
                    </p>
                </div>
            </div>
        
            <?php if ($products && !empty($products)) : ?>
                <div class="occasions-hero__images">
                    <?php foreach ($products as $product) : 
                        $images = get_field('desktop_image', $product->ID);
                    ?>
                        <div class="bg-cover bg-center occasions-hero__image" style="background-image: url(<?php echo $images["sizes"]["2048x2048"]; ?>);">
                        </div>
                    <?php endforeach; ?>
                </div>
        
                <div class="absolute container z-10 top-24 bottom-0 lg:bottom-0 inset-x-0 grid grid-rows-[1fr_auto] gap-12 lg:grid-rows-none lg:grid-cols-2 lg:items-end lg:top-12">
                    <ul class="grid gap-4 max-h-12 lg:max-h-60 lg:max-w-fit relative self-end overflow-hidden lg:overflow-visible occasions-hero__menu">
                        <?php foreach ($products as $product) : 
                            $shortname = get_field('shortname', $product->ID);
                        ?>
                            <li class="relative occasions-hero__menu-item lg:max-w-fit">
                                <a class="text-white font-gazpacho font-medium leading-none flex justify-between items-center tracking-tight lg:max-w-fit lg:cursor-none" href="<?php the_permalink($product->ID); ?>" data-custom-cursor-area data-custom-cursor-label="Conoce más" data-custom-cursor-type="CTA">
                                    <div class="occasions-hero__menu-item-text">
                                        <?php echo $shortname; ?>
                                    </div>    
        
                                    <div class="bg-beige-3 rounded-full p-2 text-blue w-10 h-10 flex items-center justify-center occasions-hero__menu-item-button lg:hidden">
                                        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
        
                    <div class="self-end pb-6 lg:pb-12" data-animation-scale>
                        <a href="#" class="text-white uppercase bg-blue block text-center rounded-full py-[0.875rem] px-3 text-sm flex items-center justify-center gap-2 tracking-tight lg:text-base lg:max-w-fit lg:ml-auto lg:px-7 lg:py-5 lg:gap-3">
                            <?php the_title(); ?> en nuestras tiendas
        
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.5 22.0001H2.5" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M20.5 22V11" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M4.5 22V11" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M17.0278 1.99988H7.97214C6.76932 1.99988 6.16791 1.99988 5.68461 2.29858C5.2013 2.59727 4.93234 3.13519 4.39443 4.21102L2.99081 7.75917C2.66652 8.57893 2.38279 9.54513 2.92867 10.2374C3.29489 10.7018 3.86257 10.9999 4.49991 10.9999C5.60448 10.9999 6.49991 10.1044 6.49991 8.99988C6.49991 10.1044 7.39534 10.9999 8.49991 10.9999C9.60448 10.9999 10.4999 10.1044 10.4999 8.99988C10.4999 10.1044 11.3953 10.9999 12.4999 10.9999C13.6045 10.9999 14.4999 10.1044 14.4999 8.99988C14.4999 10.1044 15.3953 10.9999 16.4999 10.9999C17.6045 10.9999 18.4999 10.1044 18.4999 8.99988C18.4999 10.1044 19.3953 10.9999 20.4999 10.9999C21.1373 10.9999 21.705 10.7018 22.0712 10.2373C22.6171 9.54513 22.3334 8.57893 22.0091 7.75917L20.6055 4.21102C20.0676 3.13519 19.7986 2.59727 19.3153 2.29858C18.832 1.99988 18.2306 1.99988 17.0278 1.99988Z" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                                <path d="M10 21.5V18.5C10 17.5654 10 17.0981 10.201 16.75C10.3326 16.522 10.522 16.3326 10.75 16.201C11.0981 16 11.5654 16 12.5 16C13.4346 16 13.9019 16 14.25 16.201C14.478 16.3326 14.6674 16.522 14.799 16.75C15 17.0981 15 17.5654 15 18.5V21.5" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if ($products && !empty($products)) : ?>
        <?php $index = 0; ?>
        <?php foreach ($products as $product) : 
            $images = get_field('desktop_image', $product->ID);
        ?>
            <div class="block pointer-events-none occasions-hero__trigger occasions-hero__trigger-block" data-index="<?php echo $index; ?>">
            </div>
            <?php $index++; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <div class="block pointer-events-none occasions-hero__trigger-block">
    </div>
</section>
