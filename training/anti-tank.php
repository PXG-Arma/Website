<?php

include_once $_SERVER['PWD'] . '/include/lib.php';

$meta = new PageMeta(
    title: 'Anti-tank',
    description: 'How to properly use anti-tank weapons and make that armoured vehicle go boom.',
);

begin_page($meta);
?>
<section class='less-wide'>
    <h2>Ammunition</h2>

    <div class='icons-horizontal wide'>
        <div>
            <h5>HE</h5>
            <img src='/img/icons/HE.svg'>
            <p>High Explosive, large AoE, effective against infantry and builtings.</p>
        </div>
        <div>
            <h5>HEDP</h5>
            <img src='/img/icons/HEDP.svg'>
            <p>High Explosive Dual Purpose, effective against both infanty and soft targets.</p>
        </div>
        <div>
            <h5>HEAT</h5>
            <img src='/img/icons/HEAT.svg'>
            <p>High Explosive Anti Tank, tandem-warhead, effective agains armour.</p>
        </div>
        <div>
            <h5>FRAG</h5>
            <img src='/img/icons/FRAG.svg'>
            <p>Fragmentation, only effective against infantry.</p>
        </div>
        <div>
            <h5>TB</h5>
            <img src='/img/icons/TB.svg'>
            <p>Thermobaric, effective against infantry and bunkers.</p>
        </div>
    </div>


    <h3>RPG-7V2</h3>

    <table class='dictionary'>
        <tr>
            <td>PG-7V</td>
            <td>HEAT, Range 500m, 260mm RHA.</td>
        </tr>
        <tr>
            <td>PG-7VL</td>
            <td>HEAT, Range 300m, 500mm RHA.</td>
        </tr>
        <tr>
            <td>PG-7VR</td>
            <td>HEAT, Range 200m, 600-750mm RHA.</td>
        </tr>
        <tr>
            <td>OG-7V</td>
            <td>FRAG, Range 340m.</td>
        </tr>
        <tr>
            <td>TBG-7V</td>
            <td>TB, Range 200m.</td>
        </tr>
    </table>


    <h3>M3 MAAWS</h3>

    <table class='dictionary'>
        <tr>
            <td>FFV441</td>
            <td>HE, Range 1000m.</td>
        </tr>
        <tr>
            <td>FFV502</td>
            <td>HEDP, Range 1000m, 150mm RHA.</td>
        </tr>
        <tr>
            <td>FFV751</td>
            <td>HEAT, Range 700m, 500mm RHA.</td>
        </tr>
    </table>


    <h3>Mk 153 SMAW</h3>

    <table class='dictionary'>
        <tr>
            <td>Mk.3</td>
            <td>HEDP, Range 250m.</td>
        </tr>
        <tr>
            <td>Mk.6</td>
            <td>HEAT, Range 500m, 600mm RHA.</td>
        </tr>
    </table>


    <div class='banner-container'>
        <div class='clr-red'>
            Utilizing different warheads is key! Inquire with Logistics for additional ammunition types.
        </div>
    </div>
</section>

<section>
    <h2>Ranging</h2>

    <div class='icon-text-rows big-icons'>
        <div>
            <img src='/img/figures/Rangefinder_NATO.svg'>
            <div class='text'>
                <h5>Vehicle Width</h5>
                <p>Position a target within a frame to gauge distance and fire, no need to zero.<br>Common on NATO scopes.</p>
            </div>
        </div>
        <div>
            <img src='/img/figures/Rangefinder_RU.svg'>
            <div class='text'>
                <h5>Vehicle Height</h5>
                <p>Position a target between the ground line and the curvature to gague distance, use the targeting grid to aim.<br>Common of Russian scopes.</p>
            </div>
        </div>
    </div>
</section>

<section class='narrow'>
    <h2>Aiming</h2>

    <figure class='limited-height'>
        <img src='/img/figures/PZF3_Scope.svg'>
        <figcaption>Panzerfaust 3 / RGW&nbsp;90 scope.</figcaption>
    </figure>

    <figure class='limited-height'>
        <img src='/img/figures/RPG7_Scope.svg'>
        <figcaption>RPG-7V2 scope.</figcaption>
    </figure>

    <div class='banner-container'>
        <div class='clr-red'>
            Always clear your backblast! Ensure there are no friendlies on your 6:00 before firing.
        </div>
    </div>
</section>
<?php
end_page($meta);

// EOF

