function sort(type) {

    switch(type) {
        case "unselected":
            hideOrder();
            break;
        case "title":
            showOrder();
            sortBy('card-title');
            break;
        case "rating":
            showOrder();
            sortBy('card-rating')
            break;
        case "release":
            showOrder();
            sortBy('card-date');
            break;
        case "budget":
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

    var sortedCards = bubbleSort(cards, type);

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

function orderCardsInDom(array) {

    for(var i = 0; i < array.length; i++) {
        array[i].style.order = i.toString();
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