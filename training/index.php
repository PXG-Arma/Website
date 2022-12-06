<?php

include_once $_SERVER['PWD'] . '/include/lib.php';

$meta = new PageMeta(
    title: 'Training',
    description: 'Training materials to enhance the performance of our group.',
);

begin_page($meta);
?>
<section>
    <div class='training-blocks'>
        <div>
            <a href='<?= local_url('/training/medical.php') ?>'>
                <img src='/img/icons/cross.svg'>
            </a>
            <a href='<?= local_url('/training/medical.php') ?>'>
                <h5>Medical</h5>
            </a>
            <p>How to save lives</p>
        </div>
    <div>
</section>
<?php
end_page($meta);

// EOF

