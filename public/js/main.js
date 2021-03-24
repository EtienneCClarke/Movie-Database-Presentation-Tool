jQuery(document).ready(function(){
   $('.carousel').slick({
     slidesToShow: 1,
     respondTo: $(work),
     variableWidth: true,
     focusOnSelect: true,
     draggable: true,
     useTransform: true,
     touchMove: true,
     accessibility: true,
     arrows: false,
     initialSlide: 1,
     infinite: false,
     centerMode: true,
   });
});