function toggleFilters() {

    var filtersContainer = document.getElementById('filters-container');

    if(filtersContainer.clientHeight == 0) {
        filtersContainer.style.height = "500px";
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
var container = document.getElementById('budget')
var budgetInputLeft = document.getElementById("budget-input-left");
var budgetInputRight = document.getElementById("budget-input-right");
var budgetThumbLeft = container.getElementsByClassName("thumb")[0];
var budgetThumbRight = container.getElementsByClassName("thumb")[1];
var budgetRange = container.getElementsByClassName("range")[0];

function setLeftValue(inputLeft, inputRight, thumbLeft, range) {

    var _this = inputLeft, 
        min = parseInt(_this.min),
        max = parseInt(_this.max);

    _this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

    var percent = ((_this.value - min) / (max - min)) *100

    thumbLeft.style.left = "calc(" + percent + "% - 5px)";
    range.style.left = percent + "%";

}
setLeftValue(budgetInputLeft, budgetInputRight, budgetThumbLeft, budgetRange);

function setRightValue(inputLeft, inputRight, thumbRight, range) {

    var _this = inputRight, 
        min = parseInt(_this.min),
        max = parseInt(_this.max);

    _this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

    var percent = ((_this.value - min) / (max - min)) *100

    thumbRight.style.right = "calc(" + (100 - percent) + "% - 5px)";
    range.style.right = (100 - percent) + "%";

}
setRightValue(budgetInputLeft, budgetInputRight, budgetThumbRight, budgetRange);

budgetInputLeft.addEventListener("input", function(){setLeftValue(budgetInputLeft, budgetInputRight, budgetThumbLeft, budgetRange)});
budgetInputRight.addEventListener("input", function(){setRightValue(budgetInputLeft, budgetInputRight, budgetThumbRight, budgetRange)});