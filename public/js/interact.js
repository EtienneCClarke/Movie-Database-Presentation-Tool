
// Initialise Variables
var explore = document.getElementById('explore');
var popular = document.getElementById('popular');
var hero_filler_svg = document.getElementById('hero-filler-svgs');

// When explore is clicked scroll popular section into view
explore.onclick = function() {
    hero_filler_svg.scrollIntoView({behavior: 'smooth'});
}