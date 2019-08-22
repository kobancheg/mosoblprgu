<?php
/* */
?>

<div class="orbit show-for-medium" role="region" aria-label="Favorite Space Pictures" data-orbit
     data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
    <div class="orbit-wrapper">
        <div class="orbit-controls">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
        </div>
        <ul class="orbit-container">
            <?php
            foreach ($images as $image) {
                $src = wp_get_attachment_url($image->ID); // ссылка на изображение
                $alt = get_post_meta($image->ID, '_wp_attachment_image_alt', true); // атрибут alt
                $title = $image->post_title; // заголовок изображения
                $caption = $image->post_excerpt; // подпись к изображению
                $description = $image->post_content; // описание изображения
                ?>
                <li class="orbit-slide">
                    <figure class="orbit-figure">
                        <img class="orbit-image" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>"/>
                       <!-- <figcaption class="orbit-caption">
                            <p><?php /*echo $title; */?></p>
                            <p><?php /*echo $caption; */?></p>
                            <p><?php /*echo $description; */?></p>
                        </figcaption>-->
                    </figure>
                </li>
            <?php } ?>
        </ul>
    </div>
    <nav class="orbit-bullets">
        <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span
                    class="show-for-sr">Current Slide</span></button>
        <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
        <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
        <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
    </nav>
</div>