<?php

include_once $_SERVER['PWD'] . '/include/lib.php';

$meta = new PageMeta(
    title: 'Phoenix Group Bootcamp',
    display_title: false,
);

begin_page($meta);
?>
<div id='video-block'>
    <video autoplay muted loop>
        <source src='/video/PXG_Promo.mp4' type='video/mp4'>
        <source src='/video/PXG_Promo.webm' type='video/webm'>
    </video>

    <div id='video-overlay'>
        <h2>Arma Reborn</h2>
        <p>Join our community. Play with us. Experience outstanding teamwork.</p>

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
            <img src='/img/icons/cross.svg'>
            <p>Founded by vetarans</p>
        </div>
        <div>
            <img src='/img/icons/cross.svg'>
            <p>Over two dozen factions</p>
        </div>
        <div>
            <img src='/img/icons/cross.svg'>
            <p>PvE oriented gameplay</p>
        </div>
        <div>
            <img src='/img/icons/cross.svg'>
            <p>Multitude of roles</p>
        </div>
        <div>
            <img src='/img/icons/cross.svg'>
            <p>Powerful tools for mission makers</p>
        </div>
    </div>
</section>

<section>
    <h2 id='trailer'>Our Trailer</h2>
    <iframe class='emb-yt' width="560" height="315" src="https://www.youtube-nocookie.com/embed/u9pyxjzPg9Q" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>

<section class='narrow'>
    <h2 id='about-us'>About Us</h2>
    <p>Dear ADK, may Chiko live a long, prosperous life.</p>
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

