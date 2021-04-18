function sort(type) {

    switch(type) {
        case "unselected":
            location.reload();
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

function bubbleSort(array, className) {

    for(var i = 0; i < array.length; i++) {

        var min = i;

        for(var j = i+1; j < array.length; j++) {

            var A = (array[j].getElementsByClassName(className))[0].textContent;
            var B = (array[min].getElementsByClassName(className))[0].textContent;

            if(A.localeCompare(B) < 0) {

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