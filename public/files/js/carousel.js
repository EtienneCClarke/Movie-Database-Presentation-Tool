jQuery(document).ready(function(){
    $('.carousel').slick({
      variableWidth: true,
      initialSlide: 4,
      respondTo: $(carousels),
      focusOnSelect: true,
      draggable: true,
      touchMove: true,
      arrows: false,
      infinite: true,
      swipeToSlide: true,
      variableWidth: true,
    });
 });