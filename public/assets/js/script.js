// Script pour Masonry
$('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 160
  });
  
   $('.grid').masonry({
	itemSelector: '.grid-item',
	columnWidth: '.grid-sizer',
	percentPosition: true,
	gutter: 10,
	horizontalOrder : true,
});