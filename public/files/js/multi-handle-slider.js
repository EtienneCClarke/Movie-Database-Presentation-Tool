function toggleFilters() {

    var filtersContainer = document.getElementById('filters-container');

    if(filtersContainer.clientHeight == 0) {
        filtersContainer.style.height = "400px";
        filtersContainer.style.borderTop = "5px solid #1F232B";

        // Update text
        var text = document.getElementById('toggle-text');
        text.textContent = "click to close...";

        // Rotate svg
        var svg = document.getElementById('filter-svg');
        svg.style.transform = "rotate(180deg)";

    } else {
        filtersContainer.style.height = "0px";
        filtersContainer.style.borderTop = "0px solid #1F232B";

        // Update text
        var text = document.getElementById('toggle-text');
        text.textContent = "click to expand...";

        // Rotate svg
        var svg = document.getElementById('filter-svg');
        svg.style.transform = "rotate(0deg)";
    }

}

/// Multi-Thumb Slider Budget///
var budgetContainer = document.getElementById('budget')
var budgetInputLeft = document.getElementById("budget-input-left");
var budgetInputRight = document.getElementById("budget-input-right");
var budgetThumbLeft = budgetContainer.getElementsByClassName("thumb")[0];
var budgetThumbRight = budgetContainer.getElementsByClassName("thumb")[1];
var budgetRange = budgetContainer.getElementsByClassName("range")[0];

var releaseContainer = document.getElementById('release')
var releaseInputLeft = document.getElementById("release-input-left");
var releaseInputRight = document.getElementById("release-input-right");
var releaseThumbLeft = releaseContainer.getElementsByClassName("thumb")[0];
var releaseThumbRight = releaseContainer.getElementsByClassName("thumb")[1];
var releaseRange = releaseContainer.getElementsByClassName("range")[0];

var revenueContainer = document.getElementById('revenue')
var revenueInputLeft = document.getElementById("revenue-input-left");
var revenueInputRight = document.getElementById("revenue-input-right");
var revenueThumbLeft = revenueContainer.getElementsByClassName("thumb")[0];
var revenueThumbRight = revenueContainer.getElementsByClassName("thumb")[1];
var revenueRange = revenueContainer.getElementsByClassName("range")[0];

var runtimeContainer = document.getElementById('runtime')
var runtimeInputLeft = document.getElementById("runtime-input-left");
var runtimeInputRight = document.getElementById("runtime-input-right");
var runtimeThumbLeft = runtimeContainer.getElementsByClassName("thumb")[0];
var runtimeThumbRight = runtimeContainer.getElementsByClassName("thumb")[1];
var runtimeRange = runtimeContainer.getElementsByClassName("range")[0];

function setLeftValue(inputLeft, inputRight, thumbLeft, range) {

    var _this = inputLeft, 
        min = parseInt(_this.min),
        max = parseInt(_this.max);

    _this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

    var percent = ((_this.value - min) / (max - min)) *100

    thumbLeft.style.left = "calc(" + percent + "% - 5px)";
    range.style.left = percent + "%";

    thumbLeft.getElementsByClassName('thumb-value')[0].textContent = (inputLeft.value).toString();

}
setLeftValue(budgetInputLeft, budgetInputRight, budgetThumbLeft, budgetRange);
setLeftValue(releaseInputLeft, releaseInputRight, releaseThumbLeft, releaseRange);
setLeftValue(revenueInputLeft, revenueInputRight, revenueThumbLeft, revenueRange);
setLeftValue(runtimeInputLeft, runtimeInputRight, runtimeThumbLeft, runtimeRange);

function setRightValue(inputLeft, inputRight, thumbRight, range) {

    var _this = inputRight, 
        min = parseInt(_this.min),
        max = parseInt(_this.max);

    _this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

    var percent = ((_this.value - min) / (max - min)) *100

    thumbRight.style.right = "calc(" + (100 - percent) + "% - 5px)";
    range.style.right = (100 - percent) + "%";

    thumbRight.getElementsByClassName('thumb-value')[0].textContent = (inputRight.value).toString();

}
setRightValue(budgetInputLeft, budgetInputRight, budgetThumbRight, budgetRange);
setRightValue(releaseInputLeft, releaseInputRight, releaseThumbRight, releaseRange);
setRightValue(revenueInputLeft, revenueInputRight, revenueThumbRight, revenueRange);
setRightValue(runtimeInputLeft, runtimeInputRight, runtimeThumbRight, runtimeRange);

budgetInputLeft.addEventListener("input", function(){setLeftValue(budgetInputLeft, budgetInputRight, budgetThumbLeft, budgetRange)});
budgetInputRight.addEventListener("input", function(){setRightValue(budgetInputLeft, budgetInputRight, budgetThumbRight, budgetRange)});
releaseInputLeft.addEventListener("input", function(){setLeftValue(releaseInputLeft, releaseInputRight, releaseThumbLeft, releaseRange)});
releaseInputRight.addEventListener("input", function(){setRightValue(releaseInputLeft, releaseInputRight, releaseThumbRight, releaseRange)});
revenueInputLeft.addEventListener("input", function(){setLeftValue(revenueInputLeft, revenueInputRight, revenueThumbLeft, revenueRange)});
revenueInputRight.addEventListener("input", function(){setRightValue(revenueInputLeft, revenueInputRight, revenueThumbRight, revenueRange)});
runtimeInputLeft.addEventListener("input", function(){setLeftValue(runtimeInputLeft, runtimeInputRight, runtimeThumbLeft, runtimeRange)});
runtimeInputRight.addEventListener("input", function(){setRightValue(runtimeInputLeft, runtimeInputRight, runtimeThumbRight, runtimeRange)});