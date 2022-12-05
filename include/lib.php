<?php

include_once $_SERVER['PWD'] . '/include/constants.php';
include_once $_SERVER['PWD'] . '/include/navigation.php';
include_once $_SERVER['PWD'] . '/include/PageMeta.php';

#
# Utility functions
#

/**
 * Returns `true` if PHP is running from command line interface.
 *
 * Otherwise it probably runs on a server.
 */
function php_running_from_cli(): bool {
    return php_sapi_name() === 'cli';
}

/**
 * Returns URL pointing to a local resource.
 *
 * If running from CLI, URLs ending with `.php` are reformatted to end
 * with `.html` instead.
 */
function local_url(string $url) : string {
    if (php_running_from_cli()) {
        if (str_ends_with($url, '.php')) {
            $trimmed = rtrim($url, '.php');

            # Add a forward '/' only if it's not already present
            if (!str_starts_with($trimmed, '/'))
                $trimmed = '/' . $trimmed;

            return "$trimmed.html";
        }
    }

    return $url;
}

#
# Helper functions
#

/**
 * Inserts the page header.
 */
function insert_header(PageMeta $meta) {
?>
<header id='top'>
    <div id='header-background'>
        <div id='header-wrap'>
            <div id='header-content'>
                <div id='header-left'>
                    <div class='logo-box'>
                        <a href='/'><img id='pxg-logo' title='Phoenix Group' alt='Phoenix Group logo' src='/img/pxg/logo.png'></a>
                    </div>
                </div>
                <div id='header-center'>
                </div>
                <div id='header-right'>
                    <div id='header-menu-button'>
                        <img alt='Menu' title='Menu' src='/img/icons/menu.svg'>
                    </div>
                </div>
            </div>
        </div>
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
    <div id='footer-background'>
        <div id='footer-content'>
            <div id='footer-icons'>
                <div id='footer-icons-left'>
                    <a href='<?= PXG_DISCORD_LINK ?>'>
                        <img alt='Discord' title='Discord' src='/img/icons/discord.png'>
                    </a>
                    <a href='<?= PXG_YT_LINK ?>'>
                        <img alt='YouTube' title='YouTube' src='/img/icons/youtube.png'>
                    </a>
                    <a id='button-to-top' href='#top'>
                        <img alt='To Top' title='To Top' src='/img/icons/top.svg'>
                    </a>
                </div>
                <div id='footer-icons-right'>
                    <a href='/'>
                        <img alt='Phoenix Group' title='Phoenix Group' src='/img/pxg/logo.png'>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
}

/**
 * Inserts the main navigation.
 */
function insert_navigation(PageMeta $meta) {
?>
<nav id='main-navigation'>
    <div id='main-nav-background'>
        <div id='main-nav-content'>
<?php foreach (get_nav_entries() as $entry): ?>
            <div class='nav-entry'>
                <a href='<?= local_url($entry->url) ?>'>
                <div class='nav-text'>
                    <h5><?= $entry->title ?></h5>
<?php if (!empty($entry->description)): ?>
                    <p><?= $entry->description ?></p>
<?php endif ?>
                </div>
                </a>
                <div class='nav-decoration'></div>
            </div>
<?php endforeach ?>
        </div>
    </div>
</nav>
<?php
}

/**
 * Inserts the notice that shows when JavaScript is not enabled.
 */
function insert_noscript() {
?>
<noscript>This web site requires JavaScript to function properly.</noscript>
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
        <link href='/css/style.css' rel='stylesheet'>
        <link rel='icon' type='image/x-icon' href='/img/pxg/favicon.png'>
        <script src='/js/main.js'></script>
        <script src='/js/jquery.min.js'></script>
    </head>

    <body>
<?php
    echo "\n";
    insert_noscript();
    echo "\n";
    insert_header($meta);
    echo "\n";
    insert_navigation($meta);

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

