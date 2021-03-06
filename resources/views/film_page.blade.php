<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>




    <link href="{{URL::asset('/header_style.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('/footer_style.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('/film_slider.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('/download_style.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('/comment_button_style.css')}}" rel="stylesheet"/>



    <link href="{{URL::asset('/film_page_style.css')}}" rel="stylesheet"/>


    <link href="{{URL::asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{URL::asset('/bower_components/jquery/dist/jquery.min.js')}}" ></script>
    <script type="text/javascript" src="{{URL::asset('/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>



    <script src="https://use.fontawesome.com/fe2118260b.js"></script>
    <script src="{{URL::asset('/film_page_js.js')}}" ></script>








</head>
<body>


<header>

    <div>

        <button class="but"><strong>ورود / عضویت</strong></button>


        <button class="but_1">

            <i class="fa fa-plug" aria-hidden="true"></i>

        </button>


        <form>
            <input type="text" name="search" placeholder="جستجوی فیم سریال بازیگر کارگردان و غیره">
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





<div class="container-fluid" style="color: white">

    <div class="row">

        <div class="head_div col-sm-12" style="background-color: yellowgreen; height: 100px">
            <span> دانلود فیلم</span>
            <span class="title"> {{$name->original_title}}</span>
            <span class="year">{{$name->year}}</span>
        </div>


        <div class="col-sm-9" style="background-color: brown; height: 300px;direction: ltr">


            <div >

                <span >سال ساخت :</span>
                <span class="year_time">

                    {{$name->year}}


                </span>

            </div>


            <div>

                <span>مدت زمان:</span>
                <span class="runtime">
                    {{$name->lenght}}

                </span>



            </div>

            <div>


                <span > زبان :</span>

                <span class="language"> {{$name->language}}</span>


            </div>

            <div>


                <span >محصول کشور:</span>

                <span class="country"> {{$name->country}}</span>


            </div>






            <p class="describe">{{$name->description}} </p>

            <div>


                <span>کارگردان:</span>
                <span class="director"> {{$name->director}}</span>

            </div>









        </div>

        <div class="col-sm-2" style="background-color: yellowgreen;height: 300px">
            <img src={{URL::asset($name->poster)}} class="poster" style="height: 300px;margin-top: -20px">



        </div>


        <div class="col-sm-1" style="background-color:brown;height: 300px">


        </div>


        <div class="col-sm-12"  style="background-color:brown;height: 100px"></div>




    </div>





</div>













































<br/><br/><br/>


<div class="nav_bar">

    <ul class="inline">

        <li class="list_bar download_list_button downloads">دانلود</li>

        <li class="list_bar subtitle" >زیرنویس</li>

        <li class="list_bar comments">نظرکاربران</li>

        <li class="list_bar critics">نقد و بررسی</li>

        <li class="list_bar employ">عوامل فیلم</li>

        <li class="list_bar awards">جوایز</li>

        <li class="list_bar gallery">گالری</li>

    </ul>

</div>

<div class="download_div">



    <div class="top" >

        <div class="top_right">
            <div class="top_right_top"  >
                <span  class="simple_text">ارزش دانلود</span>
                <span class="score">۸</span>
                <span class="simple_text">از ۱۰</span>

            </div>

            <div class="top_right_middle"  >
                <div class="top_right_middle_left">


                </div>

            </div>

            <div class="top_right_down" >
                <p> نتایج آرا بر اساس کارگردانی + بازیگری + فیلمنامه</p>


            </div>

        </div>

        <div class="top_middle">

            <span class="simple_text1" >۶۴</span>
            <span class="simple_text1">نفر از</span>
            <span class="simple_text1">۷۲</span>
            <span class="simple_text1">نفر تماشای این فیلم را </span>
            <span class="simple_text1">پیشنهاد کردند</span>
        </div>


        <div class="top_left">

            <p class="paragraph_left">شما هم بر اساس ارزش دانلود به فیلم رای دهید</p>

            <button class="button_left">امتیاز دهید</button>


        </div>

        <div class="line_div">

            <hr class="line">

        </div>



        <div class="select_menu">
            <button class="language select_button">
                <span class="lang_text">همه زبان ها</span>


            </button>
            <button class="release select_button">
                <span class="button_name">ریلیز</span>
                <span class="selected">همه</span>
            </button>
            <button class="type select_button">
                <span class="button_name">نوع</span>
                <span class="selected">همه</span>

            </button>
            <button class="resolution select_button">
                <span class="button_name">رزولوشن</span>
                <span class="selected">همه</span>
            </button>


            <button class="display_button display_button1">

                <i class="fa fa-bars icon_display_button" aria-hidden="true"></i>


            </button>

            <button class="display_button">
                <i class="fa fa-table icon_display_button" aria-hidden="true"></i>

            </button>

            <button class="question_batuuon" >
                <i class="fa fa-question" aria-hidden="true"></i>
                راهنما


            </button>


        </div>

        <div class="chek_select">
            <input class="radio_chek" type="radio" name="radio">
            <span class="pishnahad">پیشنهادی</span>
            <input class="radio_chek" type="radio" name="radio">
            <span>حرفه ای</span>

        </div>

        <div class="line_seprator">
            <span class="movie_quality_type">BluRay</span>
            <hr class="line_line_seprator">
        </div>
    </div>

    <div class="download_film">

        <ul class="movie_download_line_1" >
            <li class="movie_download_line_li movie_download_line_li1">

                <i class="fa fa-download text_simple" aria-hidden="true"></i>

                <span class="text_simple"> 1.4 </span>
                <span class="text_simple">GB</span>
            </li >

            <li class="movie_download_line_li movie_download_line_li2">
                <span class="text_simple">ف</span>
            </li>

            <li class="movie_download_line_li movie_download_line_li3">
                <i class="fa fa-shopping-basket text_simple" aria-hidden="true"></i>

            </li>

            <li class="movie_download_line_li movie_download_line_li4">
                <i class="fa fa-flag text_simple" aria-hidden="true"></i>

            </li>

            <li class="movie_download_line_li movie_download_line_li5">

            </li>

            <li class="movie_download_line_li movie_download_line_li6">
                <span class="text_simple">Ganool</span>

            </li>

            <li class="movie_download_line_li movie_download_line_li7">
                <span class="text_simple">زبان اصلی</span>

            </li>

            <li class="movie_download_line_li movie_download_line_li8">
                <span class="text_simple">x264</span>

            </li>

            <li class="movie_download_line_li movie_download_line_li9 ">

                <span class="text_simple p_of_v"  >1080p</span>
                <span class="text_simple q_ov_v">BluRay</span>
            </li>





        </ul>



        <ul class="movie_download_line_1" >
            <li class="movie_download_line_li movie_download_line_li1">
                <i class="fa fa-download text_simple" aria-hidden="true"></i>

                <span class="text_simple"> 951.0 </span>
                <span class="text_simple">MB</span>


            </li >

            <li class="movie_download_line_li movie_download_line_li2">
                <span class="text_simple">ف</span>
            </li>

            <li class="movie_download_line_li movie_download_line_li3">
                <i class="fa fa-shopping-basket text_simple" aria-hidden="true"></i>

            </li>

            <li class="movie_download_line_li movie_download_line_li4 movie_download_line2_li">
                <i class="fa fa-flag text_simple" aria-hidden="true"></i>

            </li>

            <li class="movie_download_line_li movie_download_line_li5 movie_download_line2_li">

            </li>

            <li class="movie_download_line_li movie_download_line_li6 movie_download_line2_li">
                <span class="text_simple">Ganool</span>

            </li>

            <li class="movie_download_line_li movie_download_line_li7 movie_download_line2_li">
                <span class="text_simple">زبان اصلی</span>

            </li>

            <li class="movie_download_line_li movie_download_line_li8 movie_download_line2_li movie_download_line2_li8">
                <span class="text_simple">x264</span>

            </li>

            <li class="movie_download_line_li movie_download_line_li9 movie_download_line2_li movie_download_line2_li9">

                <span class="text_simple p_of_v"  >720p</span>
                <span class="text_simple q_ov_v">BluRay</span>
            </li>

        </ul>


        <div class="line_seprator">
            <span class="movie_quality_type">موسیقی متن</span>
            <hr class="line_line_seprator">
        </div>




    </div>


    <div class="download_music">


        <ul class="music_download_line_1" >
            <li class="music_download_line_li music_download_line_li1">
                <i class="fa fa-download text_simple" aria-hidden="true"></i>

                <span class="text_simple"> 62.0 </span>
                <span class="text_simple">MB</span>


            </li >

            <li class="music_download_line_li music_download_line_li2">
                <i class="fa fa-play text_simple"></i>
            </li>

            <li class="music_download_line_li music_download_line_li3">
                <i class="fa fa-shopping-basket text_simple" aria-hidden="true"></i>

            </li>

            <li class="music_download_line_li music_download_line_li4">
                <i class="fa fa-flag text_simple" aria-hidden="true"></i>

            </li>

            <li class="music_download_line_li music_download_line_li5">
                <span class="text_simple">128 kbps</span>

            </li>

            <li class="music_download_line_li music_download_line_li6">
                <span class="text_simple">background image</span>

            </li>

            <li class="music_download_line_li music_download_line_li7">

                <span class="text_simple p_of_v"  >01:06:53</span>
            </li>

        </ul>















        <ul class="music_download_line_1" >
            <li class="music_download_line_li music_download_line_li1">
                <i class="fa fa-download text_simple" aria-hidden="true"></i>

                <span class="text_simple"> 155.0 </span>
                <span class="text_simple">MB</span>


            </li >

            <li class="music_download_line_li music_download_line_li2">
                <i class="fa fa-play text_simple"></i>
            </li>

            <li class="music_download_line_li music_download_line_li3">
                <i class="fa fa-shopping-basket text_simple" aria-hidden="true"></i>

            </li>

            <li class="music_download_line_li music_download_line_li4">
                <i class="fa fa-flag text_simple" aria-hidden="true"></i>

            </li>

            <li class="music_download_line_li music_download_line_li5">
                <span class="text_simple">320 kbps</span>

            </li>

            <li class="music_download_line_li music_download_line_li6">
                <span class="text_simple">background image</span>

            </li>

            <li class="music_download_line_li music_download_line_li7">

                <span class="text_simple p_of_v"  >01:06:53</span>
            </li>

        </ul>

    </div>


</div>





<div class="comment_div">




    <div class="col-sm-1">




    </div>


    <div class="container-fluid" >





        <form action="store" method="POST" enctype="multipart/form-data" >


            <input type="hidden" name="_token" value="{{csrf_token()}}">



              <input type="hidden" name="movie_id"  value="{{$name->id}}">








            <div class="col-sm-5" style="height: 300px">


                <div class="comment_box">


                    <input type="text" class="comment_text" name="comment" id="comment">




                    <div class="chek_comment" style="float: right">

                        <input type="radio" class="comment_chek" value="Bike">
                        نظری ندارم

                        <input type="radio" class="comment_chek" value="Bike">
                        پیشنهاد می کنم

                        <input type="radio" class="comment_chek" value="Bike">
                        پیشنهاد نمی کنم




                    </div>




                </div>

                <input class="submit_comment" type="submit" value="ثبت دیدگاه" name="submit1" id="submit1">








            </div>



        </form>




        <div class="col-sm-2" style=" height: 300px">


            <img  class="comment_picture" src="{{URL::asset('/profile_pic.jpg')}}" alt="Avatar" style="width:200px">





        </div>



        <div class="col-sm-2" style="height: 300px ">


            <input type="range" class="range_bar" min="0" max="10" step="1">

            <input type="range"   class="range_bar" min="0" max="10" step="1">



            <input type="range"  class="range_bar" min="0" max="10" step="1">






        </div>



        <div class="col-sm-2" style="height: 300px">


            <p class="range_bar_label"> کارگردانی</p>

            <p class="range_bar_label">  بازیگری</p>

            <p class="range_bar_label"> فیلمنامه </p>









        </div>


    </div>






    <div class="top" >

        <div class="top_right">
            <div class="top_right_top"  >
                <span  class="simple_text">ارزش دانلود</span>
                <span class="score">۸</span>
                <span class="simple_text">از ۱۰</span>

            </div>

            <div class="top_right_middle"  >
                <div class="top_right_middle_left">


                </div>

            </div>

            <div class="top_right_down" >
                <p> نتایج آرا بر اساس کارگردانی + بازیگری + فیلمنامه</p>


            </div>

        </div>

        <div class="top_middle">

            <span class="simple_text1" >۶۴</span>
            <span class="simple_text1">نفر از</span>
            <span class="simple_text1">۷۲</span>
            <span class="simple_text1">نفر تماشای این فیلم را </span>
            <span class="simple_text1">پیشنهاد کردند</span>
        </div>


        <div class="top_left">

            <p class="paragraph_left">شما هم بر اساس ارزش دانلود به فیلم رای دهید</p>

            <button class="button_left">امتیاز دهید</button>


        </div>




    </div>




    <div class="container-fluid" style=" direction: rtl ; clear: both">

        <div class="col-sm-1" style=" height: 300px"></div>


        <div class="col-sm-10 comment_read">

            <div class="container-fluid">


                <div class="col-sm-5" style="height: 300px">

                    <div class="text_comment">


                        <div class="rows">


                            <div>
                                <div class="col-sm-6"> دیدن این فیلم را پیشنهاد میکنم</div>

                                <div class="col-sm-6">dflm</div>



                            </div>



                            <div >




                                <p class="comment_base_text"> سلام من از این فیلم راضی بودم به شما هم پیشنهاد میکنم آن را ببیند</p>



                            </div>






                        </div>












                    </div>




                </div>













                <div class="col-sm-3" style="height: 300px">

                    <img  class="comment_picture" src="{{URL::asset('/profile_pic.jpg')}}" alt="Avatar" style="width:200px">



                </div>













                <div class="col-sm-3" style="height: 300px">



                    <div class="comment_read_nav">


                        <div class="comment_read_nav_director"></div>

                    </div>





                    <div class="comment_read_nav">

                        <div class="comment_read_nav_artist"></div>

                    </div>





                    <div class="comment_read_nav">

                        <div class="comment_read_nav_filmname"></div>

                    </div>




                </div>








                <div class="col-sm-1" style="height: 300px;">



                    <p class="comment_read_label"> کارگردانی</p>

                    <p class="comment_read_label">بازیگری </p>

                    <p class="comment_read_label">فیلمنامه </p>
                </div>






            </div>





        </div>


        <div class="col-sm-1" style="  height: 300px" >




        </div>
    </div>











    @foreach($comment as $comment)







        <div class="container-fluid" style=" direction: rtl ; clear: both">

            <div class="col-sm-1" style=" height: 300px"></div>


            <div class="col-sm-10 comment_read">

                <div class="container-fluid">


                    <div class="col-sm-5" style="height: 300px">

                        <div class="text_comment">


                            <div class="rows">


                                <div>
                                    <div class="col-sm-6"> دیدن این فیلم را پیشنهاد میکنم</div>

                                    <div class="col-sm-6">dflm</div>



                                </div>



                                <div >




                                    <p class="comment_base_text"> {{$comment->comment}}</p>



                                </div>






                            </div>












                        </div>




                    </div>













                    <div class="col-sm-3" style="height: 300px">

                        <img  class="comment_picture" src="{{URL::asset('/profile_pic.jpg')}}" alt="Avatar" style="width:200px">




                    </div>













                    <div class="col-sm-3" style="height: 300px">

                        <div class="comment_read_nav">

                            <div class="comment_read_nav_director"></div>

                        </div>





                        <div class="comment_read_nav">

                            <div class="comment_read_nav_artist"></div>

                        </div>





                        <div class="comment_read_nav">

                            <div class="comment_read_nav_filmname"></div>

                        </div>




                    </div>



                    <div class="col-sm-1" style="height: 300px;">

                        <p class="comment_read_label"> کارگردانی</p>

                        <p class="comment_read_label">بازیگری </p>

                        <p class="comment_read_label">فیلمنامه </p>
                    </div>






                </div>





            </div>


            <div class="col-sm-1" style="  height: 300px" >




            </div>





        </div>

    @endforeach










</div>






















<footer class="fo" style="clear: both">

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