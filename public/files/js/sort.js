function sort(type) {

    switch(type) {
        case "unselected":
            hideOrder();
            break;
        case "title":
            showOrder();
            sortByTitle();
            break;
        case "rating":
            showOrder();
            break;
        case "release":
            showOrder();
            break;
        case "budget":
            showOrder();
            break;
    }

}

function sortByTitle() {

    var cards = document.getElementsByClassName('card');

    console.log(cards[0].getElementsByClassName('card-title'));
    console.log(cards[1].getElementsByClassName('card-title'));

    // for(var i = 0; i < cards.length; i++) {

    //     var min = i;

    //     for(var j = i+1; j < cards.length; j++) {

    //         var cardTitleA = (cards[j].getElementsByClassName('card-title'))[0].textContent;
    //         var cardTitleB = (cards[min].getElementsByClassName('card-title'))[0].textContent;
            
    //         if(cardTitleA.localeCompare(cardTitleB) < 0) {

    //             var tmp = cards[i];
    //             cards[i] = cards[min];
    //             cards[min] = tmp;

    //         }
    //     }
    // }

    // var txt = "";
    // for(var i = 0; i < cards.length; i++) {
    //     txt = txt + cards[i].getElementsByClassName('card-title')[0].textContent + ",";
    // }

    // console.log(txt);

}

function hideOrder() {
    document.getElementById('order').style.display = "none";
    document.getElementById('order-label').style.display = "none";
}

function showOrder() {
    document.getElementById('order').style.display = "unset";
    document.getElementById('order-label').style.display = "unset";
}