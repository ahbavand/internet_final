


$(document).ready(function(){
    let owl = $(".owl-carousel");
    owl.owlCarousel({

        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        items : 6,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        rtl: true
    });
    let ab = document.getElementsByClassName("angle-point-to-right")[0];
    let abc = document.getElementsByClassName("angle-point-to-left")[0];
    ab.onclick = function (e) {
        console.log("mamad 1");
        owl.trigger('prev.owl.carousel');
    };
    abc.onclick = function (e) {
        console.log("mamad 1");
        owl.trigger('next.owl.carousel');
    };





    document.getElementsByClassName("link0")[0].onmouseover=function() {mouseOver0()};

    function mouseOver0() {
        name="Titanic"



    }



    document.getElementsByClassName("link1")[0].onmouseover=function() {mouseOver1()};

    function mouseOver1() {
        name="Inception"
    }


    document.getElementsByClassName("link2")[0].onmouseover=function() {mouseOver2()};

    function mouseOver2() {
        name="Avengers"
    }


    document.getElementsByClassName("link3")[0].onmouseover=function() {mouseOver3()};

    function mouseOver3() {
        name="Departed"
    }


    document.getElementsByClassName("link4")[0].onmouseover=function() {mouseOver4()};

    function mouseOver4() {
        name="Thor"
    }


    document.getElementsByClassName("link5")[0].onmouseover=function() {mouseOver5()};

    function mouseOver5() {
        name="spy"
    }


    document.getElementsByClassName("link6")[0].onmouseover=function() {mouseOver6()};

    function mouseOver6() {
        name="interview"
    }


    document.getElementsByClassName("link7")[0].onmouseover=function() {mouseOver7()};

    function mouseOver7() {
        name="minions"
    }







});



















