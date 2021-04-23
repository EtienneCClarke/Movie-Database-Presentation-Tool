function sort(type) {

    switch(type) {
        case "unselected":
            hideOrder();
            removeSort();
            break;
        case "card-title":
            showOrder();
            sortBy(type);
            break;
        case "card-rating":
            showOrder();
            sortBy(type)
            break;
        case "card-date":
            showOrder();
            sortBy(type);
            break;
        case "card-budget":
            showOrder();
            sortBy(type);
            break;
        case "card-revenue":
            showOrder();
            sortBy(type);
            break;
    }

}

function sortBy(type) {

    var cardElements = document.getElementsByClassName('card');

    var cards = [];
    for(var i = 0; i < cardElements.length; i++) {
        cards[i] = cardElements[i];
    }

    if(type == 'null') {
        type = document.getElementById('sort').value.toString();
    }

    var sortedCards = bubbleSort(cards, type);

    if(document.getElementById('order').value.toString() == 'desc') {
        sortedCards.reverse();
    }

    orderCardsInDom(sortedCards);

}

function removeSort() {

    var cardElements = document.getElementsByClassName('card');

    var cards = [];
    for(var i = 0; i < cardElements.length; i++) {
        cards[i] = cardElements[i];
    }

    for(var i = 0; i < cards.length; i++) {
        cards[i].style.order = 'unset';
    }

}

function hideOrder() {
    document.getElementById('order').style.display = "none";
    document.getElementById('order-label').style.display = "none";
}

function showOrder() {
    document.getElementById('order').style.display = "unset";
    document.getElementById('order-label').style.display = "unset";
}

function orderCardsInDom(cards) {

    for(var i = 0; i < cards.length; i++) {
        cards[i].style.order = i.toString();
    }

}

function filterGenre(genreID) {

    var cardElements = document.getElementsByClassName('card');

    var cards = [];
    for(var i = 0; i < cardElements.length; i++) {
        cards[i] = cardElements[i];
    }

    if(document.getElementById('reset').style.display == "unset") {
        filterCards();
        // Only filter visible ones after filter
        for(var i = 0; i < cards.length; i++) {
            if(cards[i].style.display = "none") {
                cards[i] = "";
            }
        }
    }

    cards = cards.filter(function() { return true })

    for(var i = 0; i < cards.length; i++) {
        
        var genres = cards[i].getElementsByClassName('genreID');

        if(genreID != 'unselected') {
            if(genres[0].value == genreID || genres[1].value == genreID) {
                cards[i].style.display = "";
            } else {
                cards[i].style.display = "none";
            }
        } else {
            cards[i].style.display = "";
        }
    }

}

function bubbleSort(array, className) {

    for(var i = 0; i < array.length; i++) {

        var min = i;

        for(var j = i+1; j < array.length; j++) {

            var A = (array[j].getElementsByClassName(className))[0].textContent;
            var B = (array[min].getElementsByClassName(className))[0].textContent;

            if(document.getElementById('sort').value.toString() == 'card-budget' || document.getElementById('sort').value.toString() == 'card-revenue') {
                A = parseFloat(A);
                B = parseFloat(B);
            }

            if(A < B) {

                min = j;

            }
        }

        if(min != i) {
            var tmp = array[i];
            array[i] = array[min];
            array[min] = tmp;
        }

    }

    return array;
}

var applyBtn = document.getElementById('apply');
var resetBtn = document.getElementById('reset');

applyBtn.addEventListener("click", filterCards);

resetBtn.addEventListener("click", function(){
    location.reload();
});

function filterCards() {
    
    //Get all values
    var budgets = document.getElementById('budget').getElementsByClassName('thumb-value');
    var revenues = document.getElementById('revenue').getElementsByClassName('thumb-value');
    var releases = document.getElementById('release').getElementsByClassName('thumb-value');
    var runtimes = document.getElementById('runtime').getElementsByClassName('thumb-value');

    //Get all cards
    var cardElements = document.getElementsByClassName('card');
    var cards = [];

    // Loop through all cards
    for(var i = 0; i < cardElements.length; i++) {
        cards[i] = cardElements[i];
    }

    cards = cards.filter(function() { return true })

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

    if(document.getElementById('sort').value != "unselected") {
        sortBy(document.getElementById('sort').value);
    }

}

searchtag = document.getElementsByClassName('searchtag')[0];
searchtag.addEventListener("click", function() {
    window.location.href = "browse";
});