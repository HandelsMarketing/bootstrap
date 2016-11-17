jQuery(document).ready(function($) {
   $(".js-menu-trigger").on('click', function() {
       $("body").toggleClass('menu-active');
   });
});