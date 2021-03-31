//-------------------------------------//
// Pure javascript file which controls //
// front end dynamic page interaction  //
//-------------------------------------//


// Initialise Variables
var explore = document.getElementById('explore');
var exploreSVG = explore.getElementsByTagName('svg');
var scrollTarget = document.getElementById('carousels');

// When explore is clicked scroll popular section into view
explore.onclick = function() {

    // Scroll to explore
    scrollTarget.scrollIntoView({behavior: 'smooth'});

    // Stop explore button floating
    // exploreSVG[0].style.animationIterationCount = "1";

}