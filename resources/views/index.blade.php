@include('layouts.header')
@include('layouts.sidebar')

<style>
    .input {
        display: block;
        width: 100%;
    }

    @media screen and (-webkit-min-device-pixel-ratio: 0) {

        input[type=range] {
            -webkit-appearance: none;
        }

        input[type=range]::-webkit-slider-runnable-track {
            width: 300px;
            height: 5px;
            background: linear-gradient(to right, #000000 0%, #88f3ff 100%);
            border: none;
            border-radius: 3px;
        }

        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            border: none;
            height: 16px;
            width: 16px;

            background: #0e0e2f;
            margin-top: -4px;
        }


    }
</style>

<section class="home_banner_area">
    <div class="container box_1620">
        <div class="banner_inner d-flex align-items-center">
            <div class="banner_content">
                <div class="media">
                    <div class="d-flex">
                        <img src="img/personal.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="personal_text">
                            <h6>Hello Everybody, i am</h6>
                            <h3>Dulan N Bandara</h3>
                            <h4>Junior Full Stack Developer</h4>
                            <p> I have lot of experiences in web
                                backend and frontend developing with  industry level experience. I'm here to help you to build your laravel based website with best industry practices. If you are struggling on php or laravel , No worries i will  help you.</p>
                            <ul class="list basic_info">
                                <li><a href="#"><i class="lnr lnr-calendar-full"></i> 14th May, 1998</a></li>
                                <li><a href="tel:0772141220"><i class="lnr lnr-phone-handset"></i> +94 772141220</a>
                                </li>
                                <li><a href="#"><i class="lnr lnr-envelope"></i> dulan418@gmail.com </a></li>
                            </ul>
                            <ul class="list personal_social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="more_btn" style="text-align: left; ">
                                <a class="main_btn" href="https://dulan.quotesalad.com/cv/dulanbandara.pdf" style="background-image: -webkit-linear-gradient(
                0deg, #000000 0%, #88f3ff 100%);" download="https://dulan.quotesalad.com/cv/dulanbandara.pdf">Download
                                    CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Welcome Area =================-->
<section class="welcome_area p_120">
    <div class="container">
        <div class="row welcome_inner">
            <div class="col-lg-6">
                <div class="welcome_text">
                    <h4>About Myself</h4>
                    <p>I am 22 years old highly talented, motivated, and well-qualified Full-stack Developer in web
                        backend and frontend developing with over 6 months of industry level experience. Currently
                        undergraduate in NIBM order to gain an academic qualification and additional knowledge.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="wel_item">
                                <i class="lnr lnr-book"></i>
                                <h4>10+</h4>
                                <p>Total Projects</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wel_item">
                                <i class="lnr lnr-users"></i>
                                <h4>10000+</h4>
                                <p style="font-size: 15px;">Total beneficiaries</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">

                <h4 style="font-weight: bold">You are the judger of my skills &#128512. Scroll here!</h4>
                <br>
                <div class="tools_expert">
                    <div class="skill_main">
                        <div class="skill_item">
                            <h4>HTML, CSS, BOOTSTRAP <span class="counter pull-right" id="counterHTML" style="visibility: hidden"></span></h4>
                            <div class="progress_br">
                                <div class="progress">
                                    <input onchange="updateHTML(this.value);" id="slide-range" class="input"
                                           type="range" min="0"
                                           max="100"
                                           step="1" value="100" style="">
                                </div>
                            </div>
                        </div>
                        <div class="skill_item">
                            <h4>PHP, LARAVEL <span class="counter pull-right" id="counterPHP" style="visibility: hidden"></span></h4>
                            <div class="progress_br">
                                <div class="progress">
                                    <input onchange="updatePHP(this.value);" id="slide-range" class="input" type="range"
                                           min="0"
                                           max="100"
                                           step="1" value="100" style="">
                                </div>
                            </div>
                        </div>
                        <div class="skill_item">
                            <h4>JQUERY, JAVASCRIPT <span class="counter pull-right" id="counterJS" style="visibility: hidden"></span></h4>
                            <div class="progress_br">
                                <div class="progress">
                                    <input onchange="updateJS(this.value);" id="slide-range" class="input" type="range"
                                           min="0"
                                           max="100"
                                           step="1" value="100" style="">
                                </div>
                            </div>
                        </div>
                        <div class="skill_item">
                            <h4>MYSQL <span class="counter pull-right" id="counterMYSQL" style="visibility: hidden"></span></h4>
                            <div class="progress_br">
                                <div class="progress">
                                    <input onchange="updateMYSQL(this.value);" id="slide-range" class="input" type="range"
                                           min="0"
                                           max="100"
                                           step="1" value="100" style="">
                                </div>
                            </div>
                        </div>
                        <div class="skill_item">
                            <h4>WEB DEPLOYMENT , HOSTING<span class="counter pull-right" id="counterHOSTING" style="visibility: hidden"></span></h4>
                            <div class="progress_br">
                                <div class="progress">
                                    <input onchange="updateHOSTING(this.value);" id="slide-range" class="input" type="range"
                                           min="0"
                                           max="100"
                                           step="1" value="100" style="">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!--================End Welcome Area =================-->

<!--================My Tabs Area =================-->
<section class="mytabs_area p_120" style="background: linear-gradient(to right, #000000 0%, #227483 100%)">
    <div class="container">
        <div class="tabs_inner">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                       aria-controls="home" aria-selected="true">My Experiences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile" aria-selected="false">My Education</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <ul class="list">
                        <li>
                            <span></span>
                            <div class="media">
                                <div class="d-flex">
                                    <p>March 2017 to present</p>
                                </div>
                                <div class="media-body">
                                    <h4>Colorlib</h4>
                                    <p>Senior Web Developer <br/>Santa monica, Los angeles</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <ul class="list">
                        <li>
                            <span></span>
                            <div class="media">
                                <div class="d-flex">
                                    <p>March 2017 to present</p>
                                </div>
                                <div class="media-body">
                                    <h4>Colorlib</h4>
                                    <p>Senior Web Developer <br/>Santa monica, Los angeles</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="media">
                                <div class="d-flex">
                                    <p>March 2017 to present</p>
                                </div>
                                <div class="media-body">
                                    <h4>Colorlib</h4>
                                    <p>Senior Web Developer <br/>Santa monica, Los angeles</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span></span>
                            <div class="media">
                                <div class="d-flex">
                                    <p>March 2017 to present</p>
                                </div>
                                <div class="media-body">
                                    <h4>Colorlib</h4>
                                    <p>Senior Web Developer <br/>Santa monica, Los angeles</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End My Tabs Area =================-->

<!--================Feature Area =================-->
<section class="feature_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>offerings to my clients</h2>
            <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.
                You may see some for as low as $.17 each.</p>
        </div>
        <div class="feature_inner row">
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <i class="flaticon-city"></i>
                    <h4>Architecture</h4>
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in
                        price. You may see some for as low as $17 each.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <i class="flaticon-skyline"></i>
                    <h4>Interior Design</h4>
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in
                        price. You may see some for as low as $17 each.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature_item">
                    <i class="flaticon-sketch"></i>
                    <h4>Concept Design</h4>
                    <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in
                        price. You may see some for as low as $17 each.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Feature Area =================-->

<!--================Home Gallery Area =================-->
<section class="home_gallery_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Our Latest Featured Projects</h2>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="isotope_fillter">
            <ul class="gallery_filter list">
                <li class="active" data-filter="*"><a href="#">All</a></li>
                <li data-filter=".brand"><a href="#">Vector</a></li>
                <li data-filter=".manipul"><a href="#">Raster</a></li>
                <li data-filter=".creative"><a href="#">UI/UX</a></li>
                <li data-filter=".design"><a href="#">Printing</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="gallery_f_inner row imageGallery1">
            <div class="col-lg-4 col-md-4 col-sm-6 brand manipul design print">
                <div class="h_gallery_item">
                    <div class="g_img_item">
                        <img class="img-fluid" src="img/gallery/project-1.jpg" alt="">
                        <a class="light" href="img/gallery/project-1.jpg"><img src="img/gallery/icon.png" alt=""></a>
                    </div>
                    <div class="g_item_text">
                        <h4>3D Helmet Design</h4>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 brand manipul creative">
                <div class="h_gallery_item">
                    <div class="g_img_item">
                        <img class="img-fluid" src="img/gallery/project-2.jpg" alt="">
                        <a class="light" href="img/gallery/project-2.jpg"><img src="img/gallery/icon.png" alt=""></a>
                    </div>
                    <div class="g_item_text">
                        <h4>2D Vinyl Design</h4>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 manipul creative design print">
                <div class="h_gallery_item">
                    <div class="g_img_item">
                        <img class="img-fluid" src="img/gallery/project-3.jpg" alt="">
                        <a class="light" href="img/gallery/project-3.jpg"><img src="img/gallery/icon.png" alt=""></a>
                    </div>
                    <div class="g_item_text">
                        <h4>Creative Poster Design</h4>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 brand creative print">
                <div class="h_gallery_item">
                    <div class="g_img_item">
                        <img class="img-fluid" src="img/gallery/project-4.jpg" alt="">
                        <a class="light" href="img/gallery/project-4.jpg"><img src="img/gallery/icon.png" alt=""></a>
                    </div>
                    <div class="g_item_text">
                        <h4>Embosed Logo Design</h4>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 brand manipul design">
                <div class="h_gallery_item">
                    <div class="g_img_item">
                        <img class="img-fluid" src="img/gallery/project-5.jpg" alt="">
                        <a class="light" href="img/gallery/project-5.jpg"><img src="img/gallery/icon.png" alt=""></a>
                    </div>
                    <div class="g_item_text">
                        <h4>3D Disposable Bottle</h4>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 brand creative">
                <div class="h_gallery_item">
                    <div class="g_img_item">
                        <img class="img-fluid" src="img/gallery/project-6.jpg" alt="">
                        <a class="light" href="img/gallery/project-6.jpg"><img src="img/gallery/icon.png" alt=""></a>
                    </div>
                    <div class="g_item_text">
                        <h4>3D Logo Design</h4>
                        <p>Client Project</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="more_btn">
            <a class="main_btn" href="#">Load More Items</a>
        </div>
    </div>
</section>
<!--================End Home Gallery Area =================-->

<!--================Testimonials Area =================-->
<section class="testimonials_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Testimonials</h2>
            <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price.
                You may see some for as low as $.17 each.</p>
        </div>
        <div class="testi_inner">
            <div class="testi_slider owl-carousel">
                <div class="item">
                    <div class="testi_item">
                        <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If
                            you think about it, you travel across her face</p>
                        <h4>Fanny Spencer</h4>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If
                            you think about it, you travel across her face</p>
                        <h4>Fanny Spencer</h4>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <p>As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If
                            you think about it, you travel across her face</p>
                        <h4>Fanny Spencer</h4>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function updateHTML(val) {
        console.log(val)
        document.getElementById("counterHTML").style.visibility = "visible";
        document.getElementById("counterHTML").innerHTML = +val+"%";
    }

    function updatePHP(val) {
        console.log(val)
        document.getElementById("counterPHP").style.visibility = "visible";
        document.getElementById("counterPHP").innerHTML = +val+"%";
    }

    function updateJS(val) {
        console.log(val)
        document.getElementById("counterJS").style.visibility = "visible";
        document.getElementById("counterJS").innerHTML = +val+"%";
    }

    function updateMYSQL(val) {
        console.log(val)
        document.getElementById("counterMYSQL").style.visibility = "visible";
        document.getElementById("counterMYSQL").innerHTML = +val+"%";
    }

    function updateHOSTING(val) {
        console.log(val)
        document.getElementById("counterHOSTING").style.visibility = "visible";
        document.getElementById("counterHOSTING").innerHTML = +val+"%";
    }

</script>

@include('layouts.footer')
