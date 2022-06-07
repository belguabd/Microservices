
$(".owl-carousel").owlCarousel({ 
    autoplay: true,
    autoplayhoverpause:true,
    autoplaytimeout:50,
    items:4,
    nav:true,
    loop:true,
    responsive:{

        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
            
        }
    }

})
var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
var collapseList = collapseElementList.map(function (collapseEl) {
  return new bootstrap.Collapse(collapseEl)
})
