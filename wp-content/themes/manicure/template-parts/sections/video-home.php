<?php if (get_field('video-home-link')): ?>
    <section class="section video-home" style="background-image: url(<?php the_field('video-home-bg') ?>)">
        <div class="container-fluid">
            <div class="about-school_video">
                <iframe width="560" height="315" src="<?php the_field('video-home-link') ?>" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </section>
<?php endif; ?>