$(function() {
    App.init()
}), App = {
    init: function() {
        App.lazyLoad()
    },
    lazyLoad: function() {
        if ("loading" in HTMLImageElement.prototype) {
            document.querySelectorAll('img[loading="lazy"]').forEach(function(o) {
                o.src = o.dataset.src
            })
        } else {
            const o = document.createElement("script");
            o.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js", document.body.appendChild(o)
        }
    }
};

$('.owl-carousel-product').owlCarousel({
    loop:false,
    margin:30,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1.7
        }, 
        600:{
            items:2.6
        },
        1000:{
            items: 4.15
        }
    }
})


// Disable form submissions if there are invalid fields
(function() {
'use strict';
window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
        }
        form.classList.add('was-validated');
    }, false);
    });
}, false);
})();