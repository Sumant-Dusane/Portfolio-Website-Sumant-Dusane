$(document).ready(function(){
    $(window).scroll(function(){
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }
        else{
            $('.navbar').removeClass("sticky");
        }
        
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }
        else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // Slide Up 
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop:0});
    });

    // toggle menu navbar
    $('.menu-btn').click(function(){
        $('.navbar .nav-items').toggleClass('active')
        $('.menu-btn i').toggleClass('active')
    });

    // Typing
    var typed = new Typed(".typing",{
        strings: ["Python", "Student", "Coder", "Web-Developer", "Photo-Editor", "Graphics", "Video-Editor", "Foodie", "Indian"],
        typeSpeed: 80,
        backSpeed: 40,
        loop: true,
    });

    var typed = new Typed(".typing-2",{
        strings: ["Code", "Cook", "Play Games", "Research", "Adventure", "Watch Movies", "Learn New Things"],
        typeSpeed: 100,
        backSpeed: 50,
        loop: true,
    });

    // owl carousel script
    $('.carousel').owlCarousel({
        margin: 20,
        loop: false,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });



});