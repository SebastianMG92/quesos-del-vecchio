<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package quesos-del-vecchio
 */
$recipe_slider = get_field('recipe_slider');
$date = date_i18n('j \D\E F', strtotime(get_the_date()));
$year = date_i18n('Y', strtotime(get_the_date()));
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
        get_template_part('template-parts/section/section-article-hero', null, array(
            'article_thumbnail' => get_the_post_thumbnail_url(get_the_ID(), 'full'), 
            'article_title' => get_the_title(),
			'article_created_at' => $date,
			'article_year' => $year,
        )); 
    ?>

    <?php if ( have_rows("layout") ) : ?>
        <?php while ( have_rows("layout") ) : the_row(); ?>

            <?php get_template_part( 'template-parts/content', 'acf'); ?>		

        <?php endwhile; // End of the loop. ?>
    <?php endif; ?>

	<section class="pt-32 pb-[4.3125rem]">
		<div class="container">	
			<div class="flex justify-between items-center pt-4 border-t border-blue/20 lg:pt-6">
                <div>
                    <p class="uppercase text-sm tracking-tight text-blue font-semibold flex items-center gap-3 lg:text-lg lg:font-medium">
						<?php echo $date; ?>

						<svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.12074 9.34375C8.92419 9.22917 8.45352 8.89062 7.70871 8.32812C6.97426 7.76562 6.11049 7.10417 5.11742 6.34375C3.95884 5.85417 2.95542 5.42708 2.10717 5.0625C1.25892 4.69792 0.731355 4.45833 0.524466 4.34375C0.265853 4.19792 0.100342 4 0.0279301 3.75C-0.0341368 3.48958 0.00724115 3.23958 0.152064 3C0.286542 2.76042 0.477915 2.60938 0.726183 2.54688C0.974451 2.47396 1.22789 2.51042 1.4865 2.65625C1.69339 2.77083 2.16407 3.10938 2.89853 3.67188C3.64333 4.22396 4.51744 4.88542 5.52085 5.65625C6.66909 6.14583 7.66734 6.57292 8.51558 6.9375C9.36383 7.30208 9.88623 7.54167 10.0828 7.65625C10.3207 7.79167 10.4759 7.98958 10.5483 8.25C10.631 8.51042 10.6 8.76042 10.4552 9C10.3207 9.23958 10.1242 9.39062 9.86554 9.45312C9.60693 9.51562 9.35866 9.47917 9.12074 9.34375ZM1.4865 9.34375C1.24858 9.47917 1.00031 9.51562 0.7417 9.45312C0.483088 9.39062 0.286542 9.23958 0.152064 9C0.00724115 8.76042 -0.0289646 8.51042 0.0434469 8.25C0.126203 7.98958 0.286542 7.79167 0.524466 7.65625C0.731355 7.54167 1.25892 7.30208 2.10717 6.9375C2.95542 6.57292 3.95884 6.14583 5.11742 5.65625C6.11049 4.88542 6.97426 4.22396 7.70871 3.67188C8.45352 3.10938 8.92419 2.77083 9.12074 2.65625C9.37935 2.51042 9.63279 2.47396 9.88106 2.54688C10.1293 2.60938 10.3207 2.76042 10.4552 3C10.6 3.23958 10.6362 3.48958 10.5638 3.75C10.5017 4 10.3414 4.19792 10.0828 4.34375C9.88623 4.45833 9.36383 4.69792 8.51558 5.0625C7.66734 5.42708 6.66909 5.85417 5.52085 6.34375C4.51744 7.10417 3.64333 7.76562 2.89853 8.32812C2.16407 8.89062 1.69339 9.22917 1.4865 9.34375ZM5.30362 12C5.02432 12 4.79157 11.9062 4.60537 11.7188C4.42951 11.5208 4.34158 11.2812 4.34158 11C4.34158 10.7604 4.39331 10.1823 4.49675 9.26562C4.61054 8.34896 4.74502 7.26042 4.90019 6C4.74502 4.73958 4.61054 3.65104 4.49675 2.73438C4.39331 1.80729 4.34158 1.22917 4.34158 1C4.34158 0.697917 4.42951 0.458333 4.60537 0.28125C4.79157 0.09375 5.02432 0 5.30362 0C5.58292 0 5.8105 0.09375 5.98636 0.28125C6.17256 0.458333 6.26566 0.697917 6.26566 1C6.26566 1.22917 6.20876 1.80729 6.09497 2.73438C5.99153 3.65104 5.86222 4.73958 5.70706 6C5.86222 7.26042 5.99153 8.34896 6.09497 9.26562C6.20876 10.1823 6.26566 10.7604 6.26566 11C6.26566 11.2812 6.17256 11.5208 5.98636 11.7188C5.8105 11.9062 5.58292 12 5.30362 12Z" fill="#4CA4BD"/>
						</svg>

						<?php echo $year; ?>
					</p>
                </div>

                <div>
                    <button type="button" class="flex items-center gap-3 text-blue share-button" aria-label="Compartir">
                        <span class="hidden text-lg font-medium tracking-tight lg:block">
                            COMPARTIR ARTÍCULO
                        </span>
                        <svg class="share-button--share" width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.5025 14.1909C14.0015 14.1907 13.5062 14.2964 13.0489 14.5011C12.5917 14.7058 12.1829 15.0049 11.8494 15.3787L7.26499 12.4321C7.46283 11.9818 7.56499 11.4953 7.56499 11.0034C7.56499 10.5115 7.46283 10.025 7.26499 9.57462L11.8494 6.62806C12.4475 7.2952 13.275 7.71248 14.167 7.79672C15.059 7.88097 15.95 7.626 16.6624 7.08264C17.3748 6.53927 17.8563 5.74741 18.011 4.86487C18.1656 3.98233 17.982 3.07393 17.4968 2.32071C17.0116 1.56749 16.2604 1.02476 15.3928 0.800699C14.5253 0.576636 13.6052 0.68769 12.8159 1.11173C12.0267 1.53577 11.4261 2.24165 11.1341 3.08869C10.842 3.93573 10.8798 4.86173 11.24 5.68212L6.65561 8.62869C6.17465 8.09083 5.54171 7.7117 4.84055 7.54146C4.13939 7.37121 3.40307 7.41789 2.72902 7.67531C2.05497 7.93273 1.47497 8.38875 1.06578 8.98304C0.656592 9.57732 0.4375 10.2818 0.4375 11.0034C0.4375 11.7249 0.656592 12.4294 1.06578 13.0237C1.47497 13.618 2.05497 14.074 2.72902 14.3314C3.40307 14.5889 4.13939 14.6355 4.84055 14.4653C5.54171 14.295 6.17465 13.9159 6.65561 13.3781L11.24 16.3246C10.9322 17.0276 10.8597 17.8111 11.0331 18.5586C11.2066 19.3061 11.6167 19.9776 12.2026 20.4732C12.7885 20.9688 13.5187 21.262 14.2846 21.3091C15.0505 21.3563 15.8112 21.1549 16.4534 20.7348C17.0956 20.3148 17.585 19.6987 17.8488 18.9781C18.1126 18.2575 18.1367 17.471 17.9174 16.7356C17.6982 16.0002 17.2474 15.3553 16.6321 14.8968C16.0168 14.4382 15.2698 14.1907 14.5025 14.1909ZM14.5025 1.81587C14.9846 1.81587 15.4558 1.95883 15.8567 2.22667C16.2575 2.4945 16.57 2.87519 16.7544 3.32058C16.9389 3.76598 16.9872 4.25608 16.8931 4.72891C16.7991 5.20174 16.5669 5.63606 16.2261 5.97695C15.8852 6.31784 15.4508 6.54999 14.978 6.64404C14.5052 6.73809 14.0151 6.68982 13.5697 6.50533C13.1243 6.32084 12.7436 6.00842 12.4758 5.60758C12.2079 5.20673 12.065 4.73547 12.065 4.25337C12.065 3.60691 12.3218 2.98692 12.7789 2.5298C13.236 2.07268 13.856 1.81587 14.5025 1.81587ZM4.00249 13.4409C3.52039 13.4409 3.04913 13.2979 2.64828 13.0301C2.24744 12.7622 1.93502 12.3816 1.75053 11.9362C1.56604 11.4908 1.51777 11.0007 1.61182 10.5278C1.70587 10.055 1.93802 9.62069 2.27891 9.2798C2.6198 8.93891 3.05412 8.70676 3.52695 8.61271C3.99978 8.51866 4.48988 8.56693 4.93528 8.75142C5.38067 8.93591 5.76136 9.24833 6.02919 9.64917C6.29703 10.05 6.43998 10.5213 6.43998 11.0034C6.43998 11.6498 6.18318 12.2698 5.72606 12.7269C5.26894 13.1841 4.64895 13.4409 4.00249 13.4409ZM14.5025 20.1909C14.0204 20.1909 13.5491 20.0479 13.1483 19.7801C12.7474 19.5122 12.435 19.1316 12.2505 18.6862C12.066 18.2408 12.0178 17.7507 12.1118 17.2778C12.2059 16.805 12.438 16.3707 12.7789 16.0298C13.1198 15.6889 13.5541 15.4568 14.027 15.3627C14.4998 15.2687 14.9899 15.3169 15.4353 15.5014C15.8807 15.6859 16.2614 15.9983 16.5292 16.3992C16.797 16.8 16.94 17.2713 16.94 17.7534C16.94 18.0735 16.8769 18.3904 16.7544 18.6862C16.6319 18.9819 16.4524 19.2506 16.2261 19.4769C15.9997 19.7033 15.731 19.8828 15.4353 20.0053C15.1395 20.1278 14.8226 20.1909 14.5025 20.1909Z" fill="currentColor"/>
                        </svg>
                        <svg class="share-button--check" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg>

                    </button>
                </div>
            </div>
		</div>
	</section>

	<?php if ( $recipe_slider["show_slider"] == true ) : ?>
		<?php get_template_part('template-parts/section/section-recipe-slider', null, array(
			'pre_title' => $recipe_slider["pre_title"],
			'title' => $recipe_slider["title"],
			'recipes' => $recipe_slider["recipes"],
			'background_color' => "bg-beige-2",
		)); ?>
	<?php endif; ?>
	

</article><!-- #post-<?php the_ID(); ?> -->
