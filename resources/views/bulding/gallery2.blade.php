@extends('bulding/layout')

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
        <section id="banner-contact">
            <div class="banner-text-contact">
                <p>
                نمای برج
                </p>
            </div>
        </section>
        <div class="main-gallery">
            <div class="gallery">
                <a href="{{url('/')}}/img/1.FACE/1.jpg">
                    <img src="{{url('/')}}/img/1.FACE/1.jpg" alt="">
                </a>
                <a href="{{url('/')}}/img/1.FACE/2a.jpg">
                    <img src="{{url('/')}}/img/1.FACE/2a.jpg" alt="">
                </a>
                <a href="{{url('/')}}/img/1.FACE/3a.jpg">
                    <img src="{{url('/')}}/img/1.FACE/3a.jpg" alt="">
                </a>
                <a href="{{url('/')}}/img/1.FACE/4a.jpg">
                    <img src="{{url('/')}}/img/1.FACE/4a.jpg" alt="">
                </a>
                <a href="{{url('/')}}/img/1.FACE/5.jpg">
                    <img src="{{url('/')}}/img/1.FACE/5.jpg" alt="">
                </a>


            </div>
            <!-- <div class="product">
                 <div class="pro-img">
                    <img src="{{url('/')}}/img/6th.jpg" alt="">
                    <span class="leyer"><a href="#"><div class="fas fa-magnifying-glass"></div></a></span>
                 </div>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                     Laboriosam recusandae ratione nobis, hic veniam voluptatibus 
                     dolor facere repellat libero ut iste repellendus
                     quo commodi fuga eveniet quod voluptate assumenda harum.

                </p>
            </div> -->
        </div>
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

    