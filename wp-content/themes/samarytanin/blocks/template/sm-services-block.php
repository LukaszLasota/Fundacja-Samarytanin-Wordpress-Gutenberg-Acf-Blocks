<?php
/**
 * Services Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'about-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about';
if( !empty($block['className'])){
    $className .= ' ' . $block['className'];
}

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Load values and assing defaults.
$title = get_field('title');
$text = get_field('text');
$text_two = get_field('text_two');
$text_three = get_field('text_three');
$image = get_field('image');
$image_mobile = get_field('image_mobile');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
?>

<article id="two">
    <section class="services">
        <img 
        class="services-img" 
        src="<?php echo esc_url($image["url"]); ?>" 
        alt="<?php echo esc_html_e($image["alt"]); ?>"
        loading="lazy"
        >
        <div class="service-center">
            <div class="service-text">
                <h2 class="main-h2"><?php echo esc_html_e($title); ?></h2>
                <div class="service-paragraph-box">
                    <p class="service-paragraph"><?php echo esc_html_e($text); ?></p>
                    <p class="service-paragraph"><?php echo esc_html_e($text_two); ?></p>
                    <p class="service-paragraph"><?php echo esc_html_e($text_three); ?></p>
                </div>
                <a class="more" 
                href="<?php echo esc_url(home_url( '/' ) . $button_link);  ?>">
                <?php echo esc_html_e($button_text); ?>
                </a>
            </div>
        </div>
    </section>

    <section class="mobile-main-service">
        <img 
        src="<?php echo esc_url($image["url"]); ?>" 
        alt="<?php echo esc_html_e($image["alt"]); ?>"
        loading="lazy"
        >
            <div class="mobile-text">
                <h2 class="main-h2"><?php echo esc_html_e($title); ?></h2>
                    <div class="mobile-paragraph">
                        <p ><?php echo esc_html_e($text); ?></p>
                        <p><?php echo esc_html_e($text_two); ?></p>
                        <p><?php echo esc_html_e($text_three); ?></p>
                    </div>
                    <a class="more" 
                    href="<?php echo esc_url(home_url( '/' ) . $button_link);  ?>">
                    <?php echo esc_html_e($button_text); ?>
                    </a>
            </div>
            <div class="mobile-bg"></div>
    </section>
</article>






