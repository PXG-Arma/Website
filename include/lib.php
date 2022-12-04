<?php

include_once $_SERVER['PWD'] . '/include/constants.php';
include_once $_SERVER['PWD'] . '/include/PageMeta.php';

#
# Helper functions
#

/**
 * Inserts the page header.
 */
function insert_header(PageMeta $meta) {
?>
<header>
    <div id='header-wrap'>
        <div class='logo-box'>
            <a href='/'><img id='pxg-logo' title='Phoenix Group' alt='Phoenix Group logo' src='/img/pxg/logo.png'></a>
        </div>
        <div class='title'>
            <h1>Bootcamp</h1>
        </div>
        <!-- For centering the title -->
        <div class='logo-box'></div>
    </div>
</header>
<?php
}


/**
 * Inserts the page footer.
 */
function insert_footer(PageMeta $meta) {
?>
<footer>
    <p>Training materials made available by <a href='https://discord.gg/3heMP2jtyw'>Phoenix Group</a>.</p>
</footer>
<?php
}

#
# General use functions
#

/**
 * Begins the web page.
 *
 * Opens the html tag, inserts the HTML head, and opens the body tag.
 */
function begin_page(PageMeta $meta) {
?>
<!DOCTYPE html>

<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <title><?= SITE_TITLE ?></title>
        <link href='css/style.css' rel='stylesheet'>
        <link rel='icon' type='image/x-icon' href='/img/pxg/favicon.png'>
    </head>

    <body>
<?php

    echo "\n";
    insert_header($meta);

    if (true === $meta->display_title) {
        echo "\n" . "<h1 id='title'>$meta->title</h1>" . "\n";
    }

    echo "\n";
}

/**
 * Ends the web page.
 *
 * Inserts the footer, and closes the body and html tags.
 */
function end_page(PageMeta $meta) {
    echo "\n";
    insert_footer($meta);
    echo "\n";
?>
    </body>
</html>
<?php
}

// EOF

