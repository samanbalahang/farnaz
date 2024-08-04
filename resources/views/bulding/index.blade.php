@extends('bulding/layout')

@section('index')
<body>
    <header>

        <nav class="nav1">
            <ul>
                <li><span class="border-a"></span><a href="{{route('bulding.index')}}">home</a></li>
                <li><span class="border-a"></span><a href="{{route('gallery.index')}}">gallery</a></li>
                <li><span class="border-a"></span><a href="{{route('contactus.index')}}">contact us</a></li>
            </ul>
            <ul>
                <li><img src="{{url('/')}}/img/logo/logopic.jpg" alt="logo"></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="banner">
            <div class="banner-text">
                <h1>
                   Matin Tower
                </h1>
                <p>
                     your dream house
                </p>
            </div>
        </section>
        <!-- FEATURES -->
        <section id="features">
            <div class="title-text">
                <p>
                    اطلاعات پروژه
                </p>
            <h1>
                        اطلاعاتی کلی پروژه
            </h1>
            </div>
            <div class="featurebox">
                <div class="features">
                    <h2>
                        موقعیت پروژه
                    </h2>
                    <div class="features-icon">
                        <i class="fas fa-shield"></i>
                    </div>
                    <div class="features-text">
                        <p>
                     مازندران -محمود اباد-شهرک ژوئن
                        </p>
                    </div>
                    <h2>
                      مشخصات پروژه
                    </h2>
                    <div class="features-icon">
                        <i class="fas fa-chek-square-o"></i>
                    </div>
                    <div class="features-text">
                        <p>
                      تعداد طبقات:18 طبقه  <br><br>
                      پنج طبقه مشاعات <br><br>
                       طبقه مسکونی : 13 طبقه<br><br>
                        واحد مسکونی : 30 واحد  
                        </p>
                    </div>
                    <h2>
                        امکانات پروژه
                    </h2>
                    <div class="features-icon">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div class="features-text">
                        <p>
                        لابی مجلل به ارتفاع 6 متر, تعداد پارکینگ چهل و شش واحد , <br> استخر , حمام ترکی , سونا خشک و سونا بخار , کافه و رستوران ,<br>
                         سالن بیلیارد , سالن سینما و بازی های یارانه ای , ایر هاکی ,<br>
                          مدیریت  , سرایداری , نگهبانی 24 ساعته , کارواش ,<br>
                           سونای خشک و جکوزی اختصاصی در هر واحد ,<br>
                            تراس های قابل مبله برای تمامی واحد ها
                        </p>
                    </div>
                </div>
                <div class="features-img">
                    <a href="{{route('gallery2.index')}}" id="flayer">
                        <img src="{{url('/')}}/img/1.FACE/3a.jpg" alt="">
                        <span class="f-layer">
                            <div class="fas fa-arrow-up"></div>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- service -->
        <section id="services">
            <div class="title-text">
                <p>تصاویر پروژه</p>
                <h1>به برج رویایی خوش امدید</h1>
            </div>
            <div class="servis-box">
                <div class="singelsrv">
                    <img src="{{url('/')}}/img/2.LOBBY/11.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="srvdsc">
                        <h3>
                            مشاعات
                        </h3>

                        <p>
                            لابی مجلل به ارتفاع 6 متر 
                        </p>
                        <a href="{{route('gallery3.index')}}" class="a-btn">مشاهده بیشتر</a>
                    </div>
                </div>
                <div class="singelsrv">
                    <img src="{{url('/')}}/img/4.GYM/c1.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="srvdsc">
                        <h3>
                            باشگاه ورزشی
                        </h3>

                        <p>
                            با امکانات کامل و طراحی مدرن
                        </p>
                        <a href="{{route('gallery5.index')}}" class="a-btn">مشاهده بیشتر</a>
                    </div>
                </div>
                <div class="singelsrv">
                    <img src="{{url('/')}}/img/3.CAFEGAMEcenter/3.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="srvdsc">
                        <h3>
                           مشخصات واحد ها
                        </h3>

                        <p>
                        واحد های در ابعاد 200 متر و 100 
                        </p>
                        <a href="{{route('gallery6.index')}}" class="a-btn">مشاهده بیشتر</a>
                    </div>

                </div>
                <div class="singelsrv">
                    <img src="{{url('/')}}/img/6.PENTHOUS/1.MAINHALL/15.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="srvdsc">
                        <h3>
                            پنت هاوس
                        </h3>

                        <p>
                            دیزاینی رویایی
                        </p>
                        <a href="{{route('gallery4.index')}}" class="a-btn">مشاهده بیشتر</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- info -->
        <section class="test">
            <div class="title-text">
                <p> متین برج </p>
                <h1> COMPANY </h1>
            </div>
            <div class="test-container">
                <div class="text-row">
                    <div class="user">
                        <img src="images/8th.jpg" alt="">
                        <div class="userinfo">
                            <h4>
                               شهرام عین اللهی<i class="fa-brands fa-twitter"></i>
                            </h4>
                            <small class="sml">@shahram eynollahi
                            </small>
                        </div>
                    </div>
                </div>
                <div class="text-row">
                    <div class="user">
                        <img src="images/5th.jpg" alt="">
                        <div class="userinfo">
                            <h4>
                                مبین عین اللهی <i class="fa-brands fa-twitter"></i>
                            </h4>
                            <small class="sml">@mobin_eynollahi</small>
                        </div>
                    </div>
                </div>
                <div class="text-row">
                    <div class="user">
                        <img src="images/mp.jpg" alt="">
                        <div class="userinfo">
                            <h4>
                               متین عین اللهی <i class="fa-brands fa-twitter"></i>
                            </h4>
                            <small class="sml">@matin_eynollahi</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="title-text">
            <p>درباره ما</p>
        </div>
        <div class="footer-row">
            <div class="footer-left">
                <p class="f-bold">
               شرکت متین برج اریا 
                <p>
                <p>
                   شرکتی مطرح در طراحی و ساخت سازه
                </p>
                <p>
                  یکی از با قدمت ترین شرکت های ایران 
                </p>
                <p>
                  با حضور برترین مهندسین ساخت و بهره وری
                </p>
                <div class="icons">
                    <!-- <a href=""><i class="fa-brands fa-telegram"></i> <small class="sml">@mobin_eynollahi</small></a> -->
                    <!-- <a href=""><i class="fa-brands fa-youtube"></i></i></a> -->
                    <!-- <a href=""><i class="fa-brands fa-twitter"></i></i></a> -->
                </div>
            </div>
            <div class="footer-right">
                <p class="f-bold">
                  ارتباط با ما
                </p>
                <p>
                مازندران -محمود اباد-شهرک ژوئن  <i class="fa-solid fa-location-dot"></i>
                </p>
                <!-- <p>
                    azimie golestan street <i class="fa-solid fa-location-dot"></i>
                </p> -->
                <p>
                 @matineynollahi@gmail.com  <i class="fa-solid fa-envelope"></i>
                </p>
                <p>
                    <a href="#">
                    09369011300<i class="fas fa-phone"></i>
                    </a>
                </p>
                <p>
                    <a href="#">
                    09123791200<i class="fas fa-phone"></i>
                    </a>
                </p>
                <p>
                    <a href="#">
                    09012573737<i class="fas fa-phone"></i>
                    </a>
                </p>
            </div>
        </div>
    </footer>
@endsection