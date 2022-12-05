<?php

/**
 * Definitions of web site navigation entries.
 */

#
# Class
#

/**
 * Contains all the necessary data for a single navigation entry.
 */
class NavEntry {
    # Fields

    /** Title of the navigation entry. */
    public string $title;
    /** Url the entry points to. */
    public string $url;
    /**
     * Short description of the entry that can be displayed when there's
     * enough space awailable.
     */
    public string $description;

    # Methods

    /**
     * Constructs a new navigation entry using either provided info or
     * the defaults.
     */
    function __construct(
        string $title,
        string $url,
        string $description = ''
    )
    {
        $this->title = $title;
        $this->url = $url;
        $this->description = $description;
    }
}

#
# Definitions
#

function get_nav_entries(): array {
    return array(
        new NavEntry(
            title: 'Home',
            url: '/',
            description: 'All about Phoenix Group',
        ),
        new NavEntry(
            title: 'Training',
            url: '/training',
            description: 'Read our training materials',
        ),
        new NavEntry(
            title: 'Member Info',
            url: '/members',
            description: 'Useful information for members',
        ),
    );
}

// EOF

