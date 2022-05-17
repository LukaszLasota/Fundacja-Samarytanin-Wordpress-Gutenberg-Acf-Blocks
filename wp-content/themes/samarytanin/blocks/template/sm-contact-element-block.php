<?php
/**
 * Header subpage block - Block Template.
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

// Load values and assing defaults.
$title = get_field('title');
$rows = get_field('duplicate');
?>
<div class="contact-page-one">
    <h3 class="contact-page-h3"><?php echo $title; ?></h3>
    <?php if( $rows ) { 
    foreach( $rows as $row ) {
        $text_one = $row['text_one'];
        $text_two = $row['text_two'];
        $image = $row['img'];
        ?>
        <div class="contact-page-text"> 
            <div class="contact-image-small">
                <?php if($image){ ?>
                    <img class="" src="<?php echo esc_url($image["url"]); ?>" alt="">
              <?php } ?>
            </div> 
            <div class="contact-paragraph">  
                 <?php if($text_one){ ?>
                    <p class=""><?php echo  $text_one; ?></p>
                 <?php }
                  if($text_two){ ?>
                    <p class=""><?php echo  $text_two; ?></p>
                 <?php } ?>
            </div> 
        </div>     

    <?php }
    }?>
</div>  

