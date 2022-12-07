<?php

include_once $_SERVER['PWD'] . '/include/lib.php';

$meta = new PageMeta(
    title: 'Training',
    description: 'Training materials to enhance the performance of our group.',
);

begin_page($meta);
?>
<section>
    <div class='video-tiles'>
        <div class='video-tile'>
            <video autoplay muted loop poster playsinline>
                <source src='/video/PXG_Promo.mp4' type='video/mp4'>
            </video>

            <a href='<?= local_url('/training/medical.php') ?>'>
                <div class='video-overlay'>
                    <img src='/img/icons/medical.svg'>
                    <h5>Medical</h5>
                    <p>How to save lives.</p>
                </div>
            </a>
        </div>

        <div class='video-tile'>
            <video autoplay muted loop poster playsinline>
                <source src='/video/Air_Force_vs_Navy_Landing_DCS.mp4' type='video/mp4'>
            </video>

            <a href='<?= local_url('/training/scopes.php') ?>'>
                <div class='video-overlay'>
                    <img src='/img/icons/launcher.svg'>
                    <h5>AT Scopes</h5>
                    <p>Aim for the boom.</p>
                </div>
            </a>
        </div>

        <div class='video-tile'>
            <video autoplay muted loop poster playsinline>
                <source src='/video/Air_Force_vs_Navy_Landing_DCS.mp4' type='video/mp4'>
            </video>

            <a href='<?= local_url('/training/convoys.php') ?>'>
                <div class='video-overlay'>
                    <img src='/img/icons/car.svg'>
                    <h5>Convoys</h5>
                    <p>Together. Organized.</p>
                </div>
            </a>
        </div>
    </div>
</section>
<?php
end_page($meta);

// EOF

