
$(document).ready(function () {





    document.getElementsByClassName("downloads")[0].onmouseover=function() {mouseOver1()};


    function mouseOver1() {


        $(document.getElementsByClassName("download_div")[0]).show()
        $(document.getElementsByClassName("comment_div")[0]).hide()



    }




    document.getElementsByClassName("subtitle")[0].onmouseover=function() {mouseOver2()};

    function mouseOver2() {


        document.getElementsByClassName("all_divs")[0].innerHTML="this is subttile"

    }






    document.getElementsByClassName("subtitle")[0].onmouseover=function() {mouseOver3()};

    function mouseOver3() {


        document.getElementsByClassName("all_divs")[0].innerHTML="this is subttile"

    }





    document.getElementsByClassName("comments")[0].onmouseover=function() {mouseOver4()};

    function mouseOver4() {


        $(document.getElementsByClassName("download_div")[0]).hide()
        $(document.getElementsByClassName("comment_div")[0]).show()

    }





    document.getElementsByClassName("critics")[0].onmouseover=function() {mouseOver5()};

    function mouseOver5() {


        document.getElementsByClassName("all_divs")[0].innerHTML="this is critics"

    }






    document.getElementsByClassName("employ")[0].onmouseover=function() {mouseOver6()};

    function mouseOver6() {


        document.getElementsByClassName("all_divs")[0].innerHTML="this is stars"

    }





    document.getElementsByClassName("awards")[0].onmouseover=function() {mouseOver7()};

    function mouseOver7() {


        document.getElementsByClassName("all_divs")[0].innerHTML="this is awards"

    }






    document.getElementsByClassName("gallery")[0].onmouseover=function() {mouseOver8()};

    function mouseOver8() {


        document.getElementsByClassName("all_divs")[0].innerHTML="this is gallery"

    }
























});