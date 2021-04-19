var applyBtn = document.getElementById('apply');
var resetBtn = document.getElementById('reset');

applyBtn.addEventListener("click", function() {
    
    //Get all values
    var budgets = document.getElementById('budget').getElementsByClassName('thumb-value');
    var revenues = document.getElementById('revenue').getElementsByClassName('thumb-value');
    var releases = document.getElementById('release').getElementsByClassName('thumb-value');
    var runtimes = document.getElementById('runtime').getElementsByClassName('thumb-value');

    //Get all cards
    var cardElements = document.getElementsByClassName('card');

    var cards = [];
    for(var i = 0; i < cardElements.length; i++) {
        cards[i] = cardElements[i];
    }

    //Loop through each card and check card falls within specification.
    for(var i = 0; i < cards.length; i++) {

        // Check movie card is within budget filter
        var movieBudget = parseInt(cards[i].getElementsByClassName('card-budget')[0].textContent);
        var budgetLower = parseInt(budgets[0].textContent)*1000000;
        var budgetUpper = parseInt(budgets[1].textContent)*1000000;

        // Check movie card is within revenue filter
        var movieRevenue = parseInt(cards[i].getElementsByClassName('card-revenue')[0].textContent);
        var revenueLower = parseInt(revenues[0].textContent)*1000000;
        var revenueUpper = parseInt(revenues[1].textContent)*1000000;

        // Check movie card is within release year filter
        var movieRelease = parseInt(cards[i].getElementsByClassName('card-date')[0].textContent);
        var releaseLower = parseInt(releases[0].textContent);
        var releaseUpper = parseInt(releases[1].textContent);

        // Check movie card is within runtime filter
        var movieRuntime = parseInt(cards[i].getElementsByClassName('card-runtime')[0].textContent);
        var runtimeLower = parseInt(runtimes[0].textContent);
        var runtimeUpper = parseInt(runtimes[1].textContent);

        if(movieBudget >= budgetLower & movieBudget <= budgetUpper & 
            movieRevenue >= revenueLower & movieRevenue <= revenueUpper &
            movieRelease >= releaseLower & movieRelease <= releaseUpper & 
            movieRuntime >= runtimeLower & movieRuntime <= runtimeUpper) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }

        resetBtn.style.display = "unset";

    }

});

resetBtn.addEventListener("click", function(){

    location.reload();

});