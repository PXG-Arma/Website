/**
 * Provides navigation showing/hiding functionality for the web site.
 */

//
// Constants
//

/**
 * Delay in ms before the main navigation is hidden upon loss of focus.
 */
var NAVIGATION_HIDE_DELAY = 1500;
/**
 * Shorter delay in ms for main navigation hiding in the case of scrolling
 * focus loss.
 */
var NAVIGATION_HIDE_SHORT_DELAY = 600;
/**
 * Navigation transition effect time in ms.
 */
var NAVIGATION_TRANSITION_TIME = 200;
/**
 * Duration in ms for scrolling animations.
 */
var VIEWPORT_SCROLL_ANIMATION_TIME = 1000;
/**
 * Duration in ms for which the header menu button is disabled on request.
 */
var HEADER_MENU_BUTTON_DISABLE_TIME = 400;

//
// Element IDs
//

var ID_HEADER_MENU_BUTTON = 'header-menu-button';
var ID_MAIN_NAV = 'main-navigation';
var ID_BUTTON_TO_TOP = 'button-to-top';

//
// Global variables
//

/**
 * `timeoutID` of the timeout function to hide the main navigation.
 * 
 * Value of -1 indicates that no timeout is presently active.
 */
var mainNavTimeoutID = -1;
/**
 * Whether header menu button can be activated by clicking it.
 */
var headerMenuButtonEnabled = true;

//
// On page load
//

/**
 * Register events when the page loads.
 */
document.addEventListener('DOMContentLoaded', function() {
    // Header menu button
    const menuButton = document.getElementById(ID_HEADER_MENU_BUTTON);
    menuButton.addEventListener('click', headerMenuButtonOnClick);
    menuButton.addEventListener('mouseover', headerMenuButtonOnMouseEnter);
    menuButton.addEventListener('mouseleave', headerMenuButtonOnMouseLeave);
    // Main navigation
    const mainNav = document.getElementById(ID_MAIN_NAV);
    mainNav.addEventListener('mouseover', mainNavigationOnMouseEnter);
    mainNav.addEventListener('mouseleave', mainNavigationOnMouseLeave);
    // Viewport
    visualViewport.addEventListener('scroll', viewportOnScroll);

    // If button to top exists, make its functionality animated
    const buttonTop = document.getElementById(ID_BUTTON_TO_TOP);
    if (undefined !== buttonTop) {
        buttonTop.removeAttribute('href');
        buttonTop.style.cursor = 'pointer';
        buttonTop.addEventListener('click', buttonToTopOnClick);
    }
});

//
// Event handlers
//

/**
 * Header menu button: on click
 *
 * Shows the navigation on click, hides it on the next click.
 */
function headerMenuButtonOnClick() {
    if (true === headerMenuButtonEnabled) {
        disableHeaderMenuButton();

        if (true === isMainNavigationShown()) {
            hideMainNavigation();
        }
        else {
            showMainNavigation();
        }
    }
}
/**
 * Header menu button: on mouse enter
 */
function headerMenuButtonOnMouseEnter(event) {
    if (true === headerMenuButtonEnabled) {
        disableHeaderMenuButton();
        clearMainNavHideTimeout();
        showMainNavigation();
    }
}
/**
 * Header menu button: on mouse leave
 */
function headerMenuButtonOnMouseLeave(event) {
    setMainNavHideTimeout();
}

/**
 * Main navigation: on mouse enter
 */
function mainNavigationOnMouseEnter(event) {
    clearMainNavHideTimeout();
    showMainNavigation();
}
/**
 * Main navigation: on mouse leave
 */
function mainNavigationOnMouseLeave(event) {
    setMainNavHideTimeout();
}

/**
 * Viewport: on scroll
 */
function viewportOnScroll(event) {
    if (true === isMainNavigationShown() &&
        false === isMainNavigationTimeoutActive())
    {
        setMainNavHideTimeout(NAVIGATION_HIDE_SHORT_DELAY);
    }
}

/**
 * Button to top: on click
 */
function buttonToTopOnClick(event) {
    $("html, body").animate({scrollTop: 0}, VIEWPORT_SCROLL_ANIMATION_TIME);
}

//
// Helper functions
//

/**
 * Shows the main navigation.
 */
function showMainNavigation() {
    const mainNav = document.getElementById(ID_MAIN_NAV);
    //mainNav.style['animation-direction'] = 'normal';
    //mainNav.style['animation-name'] = 'fade-in';
    //mainNav.style.display = 'block';
    //mainNav.style.opacity = '1';
    $(mainNav).fadeIn(NAVIGATION_TRANSITION_TIME);
}

/**
 * Hides the main navigation.
 */
function hideMainNavigation() {
    mainNavTimeoutID = -1;
    const mainNav = document.getElementById(ID_MAIN_NAV);
    $(mainNav).fadeOut(NAVIGATION_TRANSITION_TIME);
}

/**
 * Returns `true` if the main navigation is considered shown or
 * `false` otherwise.
 */
function isMainNavigationShown() {
    const mainNav = document.getElementById(ID_MAIN_NAV);
    return (true === $(mainNav).is(':visible'));
}

/**
 * Returns `true` if the timeout to hide the main navigation is active
 * or `false` otherwise.
 */
function isMainNavigationTimeoutActive() {
    return (mainNavTimeoutID >= 0);
}

/**
 * Set or resets the timeout to hide the main navigation.
 *
 * Parameter `time` is optional. If `undefined`, the default will be used.
 */
function setMainNavHideTimeout(time) {
    if (mainNavTimeoutID >= 0) {
        clearTimeout(mainNavTimeoutID);
    }

    let delay = NAVIGATION_HIDE_DELAY;
    if (undefined !== time) {
        delay = time;
    }

    mainNavTimeoutID = setTimeout(hideMainNavigation, delay);
}

/**
 * Clears the timeout to hide the main navigation.
 */
function clearMainNavHideTimeout() {
    if (mainNavTimeoutID >= 0) {
        clearTimeout(mainNavTimeoutID);
        mainNavTimeoutID = -1;
    }
}

/**
 * Temporarily disables header menu button for a time period.
 *
 * This is to prevent double event activation (hover + button click or double
 * button click).
 */
function disableHeaderMenuButton() {
    headerMenuButtonEnabled = false;
    setTimeout(
        () => { headerMenuButtonEnabled = true},
        HEADER_MENU_BUTTON_DISABLE_TIME
    );
}
