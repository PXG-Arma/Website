<?php

include_once $_SERVER['PWD'] . '/include/lib.php';

$meta = new PageMeta(
    title: 'Anti-Tank Scopes',
    description: 'How to properly use scopes on anti-tank weapons and make that armoured vehicle go boom.',
);

begin_page($meta);
?>
<section>
    <h2>Ranging</h2>

    <div class='icons-horizontal wide big-icons'>
        <div>
            <h5>Vehicle Width</h5>
            <img src='/img/icons/range_us.svg'>
            <p>Variable width boxes in the center.</p>
            <p>Width at set distance.</p>
            <p>Aim with the range marker.</p>
            <p>Typically on NATO scopes.</p>
        </div>
        <div>
            <h5>Vehicle Height</h5>
            <img src='/img/icons/range_ru.svg'>
            <p>Graph markings to one side.</p>
            <p>Height at a set distance.</p>
            <p>Ajust zeroing or use grid to aim.</p>
            <p>Typically on Russian scopes.</p>
        </div>
    </div>
</section>

<section class='narrow'>
    <h2>Aiming</h2>

    <figure class='limited-height'>
        <img src='/img/figures/RPG7_Scope.svg'>
        <figcaption>RPG-7 scope.</figcaption>
    </figure>

    <figure class='limited-height size-400'>
        <img src='/img/figures/RGW90.svg'>
        <figcaption>RGW 90 scope.</figcaption>
    </figure>
</section>
<?php
end_page($meta);

// EOF

