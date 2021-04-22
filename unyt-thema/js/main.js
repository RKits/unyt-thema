
jQuery(document).ready(function($) {
    //slider text hoeveelheid beperken
    if($('.slider-text').text().length > 0){
        $('.slider-text').each(function (f) {
        var newstr = $(this).text().substring(0,250);
        $(this).text(newstr + ' [...]');
        });
    }
    
    //slick slider toevoegen
    ( function( $ ) {
          class SlickCarousel {
            constructor() {
              this.initiateCarousel();
            }
    //slick slider properties
             initiateCarousel() {
                $('.one-time').slick({
                    dots: false,
                    infinite: true,
                    slidesToShow: 1,
                    adaptiveHeight: true,
                      autoplay: true,
                      autoplaySpeed: 3000,
                    arrows: false
                });
              }
        }
      new SlickCarousel();
    } )( jQuery );
    
});
    
    //hamburger menu class toevoegen
    function Hamburger(x) {
          x.classList.toggle("change");
        document.getElementById("site-navigation").classList.toggle('open');
    }