<?php

include_once $_SERVER['PWD'] . '/include/lib.php';

$meta = new PageMeta(
    title: 'Convoys',
    description: 'How to properly move as a convoy. Mind the speed, distance and directions.',
);

begin_page($meta);
?>
<section>
    <figure>
        <img src='/img/figures/ducks.png'>
        <figcaption>A duck convoy in staggered formation.</figcaption>
    </figure>
</section>
<?php
end_page($meta);

// EOF

