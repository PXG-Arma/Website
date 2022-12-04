<?php

/**
 * Collection of metadata about a web page.
 */
class PageMeta {

    # Actual data

    /** Title of the web page. */
    public string $title;

    # Boolean switches

    /** Whether page title should be automatically inserted in the body. */
    public bool $display_title;

    # Methods

    /**
     * Constructs the page metadata object with defaults or custom values.
     */
    function __construct(
        # Actual data
        string $title,
        # Boolean switches
        bool $display_title = true,
    )
    {
        # Data
        $this->title = $title;
        # Switches
        $this->display_title = $display_title;
    }
}

// EOF

