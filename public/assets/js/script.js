// Script pour Isotope et Masonry
$('.grid').isotope({
    getSortData: { nombre: '.nombre parseInt'},
    sortBy : 'nombre',
    sortAscending: true
   });
   $('button:first').on('click', () => {
       $('.grid').isotope({
         getSortData: { nombre: '.nombre parseInt'},
         sortBy : 'nombre',
         sortAscending: true
       });
   });
   $('button:last').on('click', () => {
       $('.grid').isotope({
         getSortData: { nombre: '.nombre parseInt'},
         sortBy : 'nombre',
         sortAscending: false
       });
   });



//    $('.gridAll').masonry({
// 	itemSelector: '.grid-item',
// 	columnWidth: '.grid-sizer',
// 	percentPosition: true,
// 	gutter: 10,
// 	horizontalOrder : true,
// });
