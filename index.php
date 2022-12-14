<?php

include_once $_SERVER['PWD'] . '/include/lib.php';

$meta = new PageMeta(
    display_title: false,
    description: 'A multinational group with members from all over the world looking to experience Arma Reborn',
);

begin_page($meta);
?>
<div id='video-block'>
    <video autoplay muted loop poster playsinline>
        <source src='/video/PXG_Promo.mp4' type='video/mp4'>
    </video>

    <div id='video-overlay'>
        <h2>Arma Reborn</h2>
        <p>Join our community.<span class='on-wide'> </span><br class='on-narrow'>Experience outstanding teamwork.</p>

        <div class='button-container'>
            <a href='<?= PXG_DISCORD_LINK ?>'>
                <button>Join us on Discord</button>
            </a>
            <a href='#features'>
                <button id='button-read-more' class='light'>Read more</button>
            </a>
        </div>
    </div>
</div>

<section>
    <h2 id='features'>Features</h2>

    <div class='feature-blocks'>
        <div>
            <img src='/img/icons/rank-star.svg'>
            <p>Founded by Arma veterans with over a decade of experience.</p>
        </div>
        <div>
            <img src='/img/icons/globe-frame.svg'>
            <p>Over two dozen varied and authentic playable factions from around the globe.</p>
        </div>
        <div>
            <img src='/img/icons/banner-star.svg'>
            <p>PvE oriented gameplay, Wednesday and Sundays at 19:00&nbsp;GMT.</p>
        </div>
        <div>
            <img src='/img/icons/soldier-helmet.svg'>
            <p>Specialized roles from Logistics, TACP, Recon, Armour Crew to CAS Pilots.</p>
        </div>
        <div>
            <img src='/img/icons/arma-zeus.svg'>
            <p>Powerful tools and systems for making missions quick, simple and fun.</p>
        </div>
    </div>
</section>

<section>
    <h2 id='trailer'>Our Trailer</h2>
    <iframe class='emb-yt' width="560" height="315" src="https://www.youtube-nocookie.com/embed/u9pyxjzPg9Q" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>

<section class='narrow'>
    <h2 id='about-us'>About Us</h2>

    <p>Phoenix Group was founded in 2022 by Arma enthusiasts with over a decade of experience playing with some of the largest and best units on the internet, we believe respecting other people's time and effort is of the upmost importance.</p>

    <p>We are a multinational group with over 60 members from all over the world of varying age groups and skill level, always on the lookout for newcomers to join and experience Arma Reborn.</p>
</section>

<section>
    <h2 id='support-us'>Support Us</h2>

    <div class='button-container'>
        <a href='<?= PXG_SERVER_DONATION_LINK ?>'>
            <button>Donate Server Funds</button>
        </a>
        <a href='<?= PXG_MERCH_LINK ?>'>
            <button>Our Merch</button>
        </a>
    </div>
</section>
<?php
end_page($meta);

// EOF

