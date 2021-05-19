$('main  .product-related .owl-carousel').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    dots: false,
    navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 5
        }
    }

});

$(function() {
    // Display or hidden button back to top
    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $(".back-to-top").fadeIn();
        } else {
            $(".back-to-top").fadeOut();
        }
    });
    // Khi click vào button back to top, sẽ cuộn lên đầu trang web trong vòng 0.8s
    $(".back-to-top").click(function() {
        $("html").animate({ scrollTop: 0 }, 800);
    });
    // Hiển thị cart dialog
    $('.btn-cart-detail').click(function() {
        $('#modal-cart-detail').modal('show');
    });
    $(window).scroll(function() {
        if ($(this).scrollTop() >= $("#slide-show").offset().top) {
            $(" .menu").addClass('trikhang-fixed-menu');
        } else {
            $(" .home .menu").removeClass('trikhang-fixed-menu');
        }
    });

});


AOS.init({
    duration: 1200,
});