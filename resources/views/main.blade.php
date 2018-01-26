<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>


    <link href="header_style.css" rel="stylesheet"/>
    <link href="footer_style.css" rel="stylesheet"/>
    <link href="film_slider.css" rel="stylesheet"/>
    <link href="search_pannel_style.css" rel="stylesheet"/>

    <link href="../../public/css/fadeh.css" rel="stylesheet" type="text/css">








    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/owl.carousel/dist/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="bower_components/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="bower_components/owl.carousel/dist/assets/owl.theme.green.min.css">
    <script src="bower_components/jquery/dist/jquery.min.js" ></script>
    <script type="text/javascript" src="bower_components/owl.carousel/dist/owl.carousel.min.js"></script>





    <script src="test_js.js"></script>





</head>

<script src="https://use.fontawesome.com/fe2118260b.js"></script>

<body>


<header>

    <div>

        <button class="but"><strong>ورود / عضویت</strong></button>


        <button class="but_1">

            <i class="fa fa-plug" aria-hidden="true"></i>

        </button>


        <form>
            <input type="text" class="search1" name="search" placeholder="جستجوی فیم سریال بازیگر کارگردان و غیره">
        </form>


    </div>

    <div style="clear: both">

        <ul id="category" class="inline">
            <li>
                <button class="nav_button" style="margin-right:70px">  آخرین ها
                    <i class="fa fa-caret-down" aria-hidden="true"></i>

                </button>

            </li>
            <li>
                <button class="nav_button"> فیلم
                    <i class="fa fa-caret-down down_icon" aria-hidden="true"></i>
                </button>
            </li>
            <li>
                <button class="nav_button"> سریال
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </button>
            </li>

            <li>
                <button class="nav_button"> انیمیشن
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </button>
            </li>
            <li>
                <button class="nav_button"> مستند
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </button>
            </li>

            <li>
                <button class="nav_button"> مجموعه ها
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </button>
            </li>
            <li>
                <button class="nav_button"> انیمه</button>
            </li>
            <li>
                <button class="nav_button"> دوبله
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </button>
            </li>
            <li>
                <button class="nav_button">زیک زاک</button>
            </li>
            <li>
                <button class="nav_button">باکس آفیس</button>

            </li>
            <li>
                <button class="nav_button">آنونس</button>
            </li>
            <li>
                <button class="nav_button"> برترین ها
                    <i class="fa fa-caret-down" aria-hidden="true"></i>

                </button>
            </li>

        </ul>


    </div>

</header>







<form action="store" method="POST" class="search_pannel">


    <p class="search_title">
        دانلود فیلم سریال انیمیشن مستند دوبله با ۱۳۶۲۱ عنوان

    </p>




    <div>
        <button type="button" class=" btn-circle btn_circle1">

            <i class="fa fa-search" aria-hidden="true"></i>

        </button>



        <button type="button" class=" btn-circle">
            <i class="fa fa-search" aria-hidden="true"></i>

        </button>


        <input type="text"  name="search_word" id="search_word" class="search_box" placeholder="جستجوی فیلم سریال بازیگر کارگردان و...">

    </div>


    <div>


        <input type="submit" class="search_button" value="جستجو">
        <input type="hidden" name="_token" value="{{csrf_token()}}">






    </div>

</form>















<div class="slider" >
    <div class="carousel_container">
        <div class="slider_buttons">
            <ul class="slider_ul">
                <li class="slider_ul_li slider_ul_li1" >
                    همه
                </li>
                <li class="slider_ul_li">
                    فیلم سینمایی
                </li>
                <li class="slider_ul_li">
                    انیمیشن
                </li>
                <li class="slider_ul_li">
                    مستند
                </li>
                <li class="slider_ul_li">
                    دوبله
                </li>
            </ul>
        </div>
        <div class="container-fluid" style="direction: ltr">
            <div class="row">



                <div class="col-sm-1" style="margin-top: 70px" >


                    <img class="angle-point-to-left" src="left_icon.png" style="width: 40px; height: 60px ; ">


                </div>

                <div class="col-sm-10">

                    <div class="owl-carousel" >



                        @foreach($name as $name) :

                        <a class={{$name->original_title}} href="/movie/{{$name->id}}">
                            <div > <img src={{$name->poster}} alt="Owl Image"> </div>

                        </a>



                        @endforeach







                    </div>

                </div>

                <div class="col-sm-1" style="margin-top: 70px ; direction: ltr">

                    <img class="angle-point-to-right" src="right_icon.png"  style="width: 40px; height: 60px; border: none">


                </div>


            </div>

        </div>
    </div>
</div>







<div class="container-fluid" style="background-color: red ; height: 200px" >

    <div class="row">
        <div class="col-sm-2"></div>

        <div class=col-sm-4>
            <img src="birth_of_dragon.jpg" style="height: 200px ; width: 500px">

        </div>

        <div class="col-sm-6">

            <p class="para1"> اسطوره کنگ فو و رویای صعود به قله</p>

            <p class="para2"> از بهترین نبرد های بوروسلی</p>

            <button class="button_borosly">طرفدارای بوروسلی دانلود کنن!</button>




        </div>

    </div>


</div>































<footer class="fo">

    <div class="foot_list">
        <button id="b1" class="button_footer"> درخواست فیلم</button>
        <button class="button_footer"> اشتراک ویژه</button>
        <button class="button_footer"> باکس آفیس</button>
        <button class="button_footer"> نرم افزارهای مورد نیاز</button>
        <button class="button_footer"> پرسش های متداول</button>
        <button class="button_footer">درباره ما</button>
        <button class="button_footer"> تماس با ما</button>


    </div>

    <div class="foot_middle">


        <div class="foot_middle1">

            <p>محتوای این سایت مطابق با فرهنگ خانواده های ایرانی می باشد</p>
        </div>

        <div class="foot_middle2">


            <p>مجموعه دیتابیس فیلم امیرکبیر با هدف ایجاد یک تجربه ی مشترک آموزشی و تفریحی برای دانشجویان دانشگاه صنعتی
                امیرکبیر ایجاد شده و هیچ گونه استفاده تجاری ندارد در صورتی که از این سایت و امکانات آن لذت میبرید آن را
                به دوستان خود معرفی کنید </p>


        </div>

        <div class="foot_middle3" style="clear: both">



            <button class="icon icon1">
                <i class="fa fa-google-plus" aria-hidden="true"></i>


            </button>


            <button class="icon">
                <i class="fa fa-instagram" aria-hidden="true"></i>


            </button>



            <button class="icon">

                <i class="fa fa-telegram" aria-hidden="true"></i>



            </button>


            <button class="icon">

                <i class="fa fa-twitter" aria-hidden="true"></i>



            </button>









        </div>

        <br>
        <hr style=" background-color:skyblue ; height: 2px; border: 0">
        <p class="end_para"> تمامی حقوق این وبسایت متعلق به دیتابیس امیرکبیر می باشد</p>
    </div>


</footer>

</body>
</html>