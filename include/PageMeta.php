<?php

/**
 * Collection of metadata about a web page.
 */
class PageMeta {

    # Actual data

    /** Title of the web page. */
    public string $title;
    /** Description of the page for the metadata in HTML head. */
    public string $description;

    # Boolean switches

    /** Whether page title should be automatically inserted in the body. */
    public bool $display_title;

    # Methods

    /**
     * Constructs the page metadata object with defaults or custom values.
     */
    function __construct(
        # Actual data
        string $title = '',
        string $description = '',
        # Boolean switches
        bool $display_title = true,
    )
    {
        # Data
        $this->title = $title;
        $this->description = $description;
        # Switches
        $this->display_title = $display_title;
    }
}

// EOF

