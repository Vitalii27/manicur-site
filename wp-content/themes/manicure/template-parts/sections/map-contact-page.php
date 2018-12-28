<section class="section contacts contacts-page" id="contacts">
<!--    <div class="container-fluid">-->
        <div class="contacts_content">
            <div id="map" class="contacts_map map"></div>

        </div>
<!--    </div>-->
</section>
<script>
    var mapConfig = {
        maps: [{
            id: "map",
            markers: [{
                center: [<?php the_field('contacts-coord') ?>]
            }],
            mapCenter: [<?php the_field('contacts-coord') ?>],
            icon: '<?php the_field('contacts-mark') ?>',
            zoom: <?php the_field('contacts-scale') ?>,

        }]

    }
</script>