@extends('user.layouts.master')

@section('styles')
    <style>


    </style>
@endsection

@section('content')
    <!-- REVOLUTION SLIDER
                    ================================================== -->
    <div class="rev_slider_wrapper fullscreen custom-controls">
        <div id="rev_slider_2" class="rev_slider fullscreenbanner" style="display: none;" data-version="5.4.5">
            <ul>

                <li data-transition="parallaxtoleft">

                    <img src="img/slider/slide20.jpg" alt="slide3" class="rev-slidebg">

                    <!-- start layer 1 -->
                    <div class="tp-caption tp-resizeme alt-font font-weight-700 text-extra-dark-gray" data-x="30"
                        data-y="center" data-voffset="[-100,-120,-130,-140]" data-fontsize="[58,48,36,32]"
                        data-lineheight="[60,52,40,36]" data-width="[none, none, none, 300]"
                        data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
                                    "delay":1500,
                                    "speed":1400,
                                    "frame":"0",
                                    "from":"y:150px;opacity:0;",
                                    "ease":"Power3.easeOut",
                                    "to":"o:1;"
                                    },{
                                    "delay":"wait",
                                    "speed":1000,
                                    "frame":"999",
                                    "to":"opacity:0;","ease":"Power3.easeOut"
                                }]'
                        data-splitout="none">We Think Differently
                    </div>
                    <!-- end layer 1 -->

                    <!-- layer nr. 2 -->
                    <div class="tp-caption tp-resizeme slider-text" data-x="30" data-y="center"
                        data-voffset="[-5,-10,-30,-15]" data-fontsize="[21,21,21,21]" data-lineheight="34"
                        data-width="[600, 500, 400, 300]" data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
                                    "delay":1700,
                                    "speed":1400,
                                    "frame":"0",
                                    "from":"y:150px;opacity:0;",
                                    "ease":"Power3.easeOut",
                                    "to":"o:1;"
                                    },{
                                    "delay":"wait",
                                    "speed":1000,
                                    "frame":"999",
                                    "to":"opacity:0;","ease":"Power3.easeOut"
                                }]'>
                        <p class="white-space">Trusted and professional business consultant to fulfill your dreams
                            with latest technology putting on project.</p>
                    </div>
                    <!-- end layer 2 -->

                    <!-- layer nr. 3 -->
                    <div class="tp-caption tp-resizeme" data-x="30" data-y="center" data-voffset="[90,110,90,115]"
                        data-lineheight="55" data-hoffset="0"
                        data-frames='[{
                                        "delay":1900,
                                        "speed":1400,
                                        "frame":"0",
                                        "from":"y:150px;opacity:0;",
                                        "ease":"Power3.easeOut",
                                        "to":"o:1;"
                                        },{
                                        "delay":"wait",
                                        "speed":1000,
                                        "frame":"999",
                                        "to":"opacity:0;","ease":"Power3.easeOut"
                                    }]'>
                        <a href='#' class='butn primary'><span>View Project</span></a>
                    </div>
                    <!-- layer nr. 3 -->

                </li>

                <li data-transition="parallaxtoright">

                    <img src="img/slider/slide19.jpg" alt="slide2" class="rev-slidebg">

                    <!-- start layer 1 -->
                    <div class="tp-caption tp-resizeme alt-font font-weight-700 text-extra-dark-gray text-end"
                        data-x="['right','right','right','right']" data-y="center" data-hoffset="[30,30,30,30]"
                        data-voffset="[-100,-120,-130,-140]" data-fontsize="[58,48,36,32]" data-lineheight="[60,52,40,36]"
                        data-width="[none, none, none, 300]" data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
                                    "delay":1500,
                                    "speed":1400,
                                    "frame":"0",
                                    "from":"y:150px;opacity:0;",
                                    "ease":"Power3.easeOut",
                                    "to":"o:1;"
                                    },{
                                    "delay":"wait",
                                    "speed":1000,
                                    "frame":"999",
                                    "to":"opacity:0;","ease":"Power3.easeOut"
                                }]'
                        data-splitout="none">We Build Solution </div>
                    <!-- end layer 1 -->

                    <!-- layer nr. 2 -->
                    <div class="tp-caption tp-resizeme slider-text text-end" data-x="['right','right','right','right']"
                        data-y="center" data-voffset="[-5,-10,-30,-15]" data-fontsize="[21,21,21,21]"
                        data-hoffset="[30,30,30,30]" data-lineheight="34" data-width="[600, 500, 400, 300]"
                        data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
                                    "delay":1700,
                                    "speed":1400,
                                    "frame":"0",
                                    "from":"y:150px;opacity:0;",
                                    "ease":"Power3.easeOut",
                                    "to":"o:1;"
                                    },{
                                    "delay":"wait",
                                    "speed":1000,
                                    "frame":"999",
                                    "to":"opacity:0;","ease":"Power3.easeOut"
                                }]'>
                        <p class="white-space">Trusted and professional business consultant to fulfill your dreams
                            with latest technology putting on project.</p>
                    </div>
                    <!-- end layer 2 -->

                    <!-- layer nr. 3 -->
                    <div class="tp-caption tp-resizeme text-end" data-x="['right','right','right','right']" data-y="center"
                        data-voffset="[90,110,90,115]" data-lineheight="55" data-hoffset="[30,30,30,30]"
                        data-frames='[{
                                        "delay":1900,
                                        "speed":1400,
                                        "frame":"0",
                                        "from":"y:150px;opacity:0;",
                                        "ease":"Power3.easeOut",
                                        "to":"o:1;"
                                        },{
                                        "delay":"wait",
                                        "speed":1000,
                                        "frame":"999",
                                        "to":"opacity:0;","ease":"Power3.easeOut"
                                    }]'>
                        <a href='#' class='butn primary'><span>View Project</span></a>
                    </div>
                    <!-- layer nr. 3 -->

                </li>

                <li data-transition="parallaxtoleft">

                    <img src="img/slider/slide18.jpg" alt="slide1" class="rev-slidebg">

                    <!-- start layer 1 -->
                    <div class="tp-caption tp-resizeme alt-font font-weight-700 text-extra-dark-gray" data-x="30"
                        data-y="center" data-voffset="[-100,-120,-130,-140]" data-fontsize="[58,48,36,32]"
                        data-lineheight="[60,52,40,36]" data-width="[none, none, none, 300]"
                        data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
                                    "delay":1500,
                                    "speed":1400,
                                    "frame":"0",
                                    "from":"y:150px;opacity:0;",
                                    "ease":"Power3.easeOut",
                                    "to":"o:1;"
                                    },{
                                    "delay":"wait",
                                    "speed":1000,
                                    "frame":"999",
                                    "to":"opacity:0;","ease":"Power3.easeOut"
                                }]'
                        data-splitout="none">Be Inspired By Best
                    </div>
                    <!-- end layer 1 -->

                    <!-- layer nr. 2 -->
                    <div class="tp-caption tp-resizeme slider-text" data-x="30" data-y="center"
                        data-voffset="[-5,-10,-30,-15]" data-fontsize="[21,21,21,21]" data-lineheight="34"
                        data-width="[600, 500, 400, 300]" data-whitespace="[nowrap, nowrap, nowrap, normal]"
                        data-frames='[{
                                    "delay":1700,
                                    "speed":1400,
                                    "frame":"0",
                                    "from":"y:150px;opacity:0;",
                                    "ease":"Power3.easeOut",
                                    "to":"o:1;"
                                    },{
                                    "delay":"wait",
                                    "speed":1000,
                                    "frame":"999",
                                    "to":"opacity:0;","ease":"Power3.easeOut"
                                }]'>
                        <p class="white-space">Trusted and professional business consultant to fulfill your dreams
                            with latest technology putting on project.</p>
                    </div>
                    <!-- end layer 2 -->

                    <!-- layer nr. 3 -->
                    <div class="tp-caption tp-resizeme" data-x="30" data-y="center" data-voffset="[90,110,90,115]"
                        data-lineheight="55" data-hoffset="0"
                        data-frames='[{
                                        "delay":1900,
                                        "speed":1400,
                                        "frame":"0",
                                        "from":"y:150px;opacity:0;",
                                        "ease":"Power3.easeOut",
                                        "to":"o:1;"
                                        },{
                                        "delay":"wait",
                                        "speed":1000,
                                        "frame":"999",
                                        "to":"opacity:0;","ease":"Power3.easeOut"
                                    }]'>
                        <a href='#' class='butn primary'><span>View Project</span></a>
                    </div>
                    <!-- layer nr. 3 -->

                </li>

            </ul>
        </div>
    </div>



    <!-- TIMETABLE
            ================================================== -->
    <section>
        <div class="container">
            <div class="text-center mb-1-9 mb-md-2-9">
                <h5 class="mb-3 text-primary">// Timetable</h5>
                <h2 class="mb-0 text-uppercase font-weight-800">Yoga Schedule</h2>
            </div>
            <div>
                <div>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th class="text-uppercase">Time
                                    </th>
                                    <th class="text-uppercase">Monday</th>
                                    <th class="text-uppercase">Tuesday</th>
                                    <th class="text-uppercase">Wednesday</th>
                                    <th class="text-uppercase">Thursday</th>
                                    <th class="text-uppercase">Friday</th>
                                    <th class="text-uppercase">Saturday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">09:00am</td>
                                    <td>
                                        <span class="text-primary">Body Balance</span>
                                        <div class="mt-1 display-30">9:00-10:00</div>
                                        <div class="display-31 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td>
                                        <span class="text-primary">Yoga</span>
                                        <div class="mt-1 display-30">9:00-10:00</div>
                                        <div class="display-31 text-light-gray">Marta Healy</div>
                                    </td>

                                    <td>
                                        <span class="text-primary">Bikram Yoga</span>
                                        <div class="mt-1 display-30">9:00-10:00</div>
                                        <div class="display-31 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td class="bg-light">

                                    </td>
                                    <td>
                                        <span class="text-primary">Body Balance</span>
                                        <div class="mt-1 display-30">9:00-10:00</div>
                                        <div class="display-31 text-light-gray">Kate Alley</div>
                                    </td>
                                    <td>
                                        <span class="text-primary">Zumba</span>
                                        <div class="mt-1 display-30">9:00-10:00</div>
                                        <div class="display-31 text-light-gray">James Smith</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">10:00am</td>
                                    <td>
                                        <span class="text-primary">Zumba</span>
                                        <div class="mt-1 display-30">10:00-11:00</div>
                                        <div class="display-31 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td class="bg-light">

                                    </td>
                                    <td>
                                        <span class="text-primary">Body Balance</span>
                                        <div class="mt-1 display-30">10:00-11:00</div>
                                        <div class="display-31 text-light-gray">Kate Alley</div>
                                    </td>
                                    <td>
                                        <span class="text-primary">Yoga</span>
                                        <div class="mt-1 display-30">10:00-11:00</div>
                                        <div class="display-31 text-light-gray">Marta Healy</div>
                                    </td>
                                    <td>
                                        <span class="text-primary">Bikram Yoga</span>
                                        <div class="mt-1 display-30">10:00-11:00</div>
                                        <div class="display-31 text-light-gray">James Smith</div>
                                    </td>
                                    <td class="bg-light">

                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">12:00pm</td>
                                    <td class="bg-light">

                                    </td>
                                    <td>
                                        <span class="text-primary">Bikram Yoga</span>
                                        <div class="mt-1 display-30">12:00-1:00</div>
                                        <div class="display-31 text-light-gray">Kate Alley</div>
                                    </td>
                                    <td>
                                        <span class="text-primary">Yoga</span>
                                        <div class="mt-1 display-30">12:00-1:00</div>
                                        <div class="display-31 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td>
                                        <span class="text-primary">Zumba</span>
                                        <div class="mt-1 display-30">12:00-1:00</div>
                                        <div class="display-31 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td class="bg-light">

                                    </td>
                                    <td>
                                        <span class="text-primary">Body Balance</span>
                                        <div class="mt-1 display-30">12:00-1:00</div>
                                        <div class="display-31 text-light-gray">Marta Healy</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">01:00pm</td>
                                    <td>
                                        <span class="text-primary">Bikram Yoga</span>
                                        <div class="mt-1 display-30">1:00-2:00</div>
                                        <div class="display-31 text-light-gray">James Smith</div>
                                    </td>
                                    <td>
                                        <span class="text-primary">Yoga</span>
                                        <div class="mt-1 display-30">1:00-2:00</div>
                                        <div class="display-31 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td class="bg-light">

                                    </td>
                                    <td>
                                        <span class="text-primary">Body Balance</span>
                                        <div class="mt-1 display-30">1:00-2:00</div>
                                        <div class="display-31 text-light-gray">James Smith</div>
                                    </td>
                                    <td>
                                        <span class="text-primary">Yoga</span>
                                        <div class="mt-1 display-30">1:00-2:00</div>
                                        <div class="display-31 text-light-gray">Marta Healy</div>
                                    </td>
                                    <td>
                                        <span class="text-primary">Zumba</span>
                                        <div class="mt-1 display-30">1:00-2:00</div>
                                        <div class="display-31 text-light-gray">Ivana Wong</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES
                    ================================================== -->
    <section>
        <div class="container">

            <div class="section-heading">
                <h2>What We Do</h2>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="services-grids owl-carousel owl-theme">

                        <!-- feature box item-->
                        <div class="bg-white border border-color-light-black p-4 feature-box-08">
                            <div class="p-0 mb-3 mb-md-4 alt-font">
                                <i class="text-primary ti-world display-18"></i>
                                <h3 class="h5 mb-0 mt-2 w-100">Investment<br>planning & strategy</h3>
                            </div>
                            <p class="w-95">International business consulting pers piciatis unde omnis iste natus
                                error sit voluptatem accusantium doloremque laudantium, totam rem apenventore
                                veritatis architecto.</p>
                            <div class="border-top border-color-light-black pt-3">
                                <a href="#!" class="font-weight-700">read more...</a>
                            </div>
                            <div class="show-details">
                                <img src="img/content/feature-04.jpg" alt="...">
                                <div class="feature-box-detail p-1-9">
                                    <div class="border border-color-light-white h-100 p-4">
                                        <h4 class="display-28 mb-2 w-100 text-primary font-weight-600">Investment
                                            <br /> planning & strategy
                                        </h4>
                                        <ul class="list-style-13 text-white">
                                            <li>Financial services</li>
                                            <li>Investment plan</li>
                                            <li>Blend of energy</li>
                                            <li>Business strategy</li>
                                        </ul>
                                        <a href="#!" class="font-weight-700 text-primary mt-3 d-inline-block">read
                                            more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item-->

                        <!-- feature box item-->
                        <div class="bg-white border border-color-light-black p-4 feature-box-08">
                            <div class="p-0 mb-3 mb-md-4 alt-font">
                                <i class="text-primary ti-panel display-18"></i>
                                <h3 class="h5 mb-0 mt-2 w-100">International<br> business opportunities</h3>
                            </div>
                            <p class="w-95">Consulting international business pers piciatis unde omnis iste natus
                                error sit voluptatem accusantium doloremque laudantium, totam rem apenventore
                                veritatis architecto.</p>
                            <div class="border-top border-color-light-black pt-3">
                                <a href="#!" class="font-weight-700">read more...</a>
                            </div>
                            <div class="show-details">
                                <img src="img/content/feature-05.jpg" alt="...">
                                <div class="feature-box-detail p-1-9">
                                    <div class="border border-color-light-white h-100 p-4">
                                        <h4 class="display-28 mb-2 w-100 text-primary font-weight-600">
                                            International <br /> business opportunities</h4>
                                        <ul class="list-style-13 text-white">
                                            <li>Investment plan</li>
                                            <li>Financial services</li>
                                            <li>Business strategy</li>
                                            <li>Blend of energy</li>
                                        </ul>
                                        <a href="#!" class="font-weight-700 text-primary mt-3 d-inline-block">read
                                            more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item-->

                        <!-- feature box item-->
                        <div class="bg-white border border-color-light-black p-4 feature-box-08">
                            <div class="p-0 mb-3 mb-md-4 alt-font">
                                <i class="text-primary ti-anchor display-18"></i>
                                <h3 class="h5 mb-0 mt-2 w-100">Approach<br> strategic & commercial</h3>
                            </div>
                            <p class="w-95">Business consulting international pers piciatis unde omnis iste natus
                                error sit voluptatem accusantium doloremque laudantium, totam rem apenventore
                                veritatis architecto.</p>
                            <div class="border-top border-color-light-black pt-3">
                                <a href="#!" class="font-weight-700">read more...</a>
                            </div>
                            <div class="show-details">
                                <img src="img/content/feature-06.jpg" alt="...">
                                <div class="feature-box-detail p-1-9">
                                    <div class="border border-color-light-white h-100 p-4">
                                        <h4 class="display-28 mb-2 w-100 text-primary font-weight-600">Approach
                                            <br /> strategic & commercial
                                        </h4>
                                        <ul class="list-style-13 text-white">
                                            <li>Business strategy</li>
                                            <li>Investment plan</li>
                                            <li>Financial services</li>
                                            <li>Blend of energy</li>
                                        </ul>
                                        <a href="#!" class="font-weight-700 text-primary mt-3 d-inline-block">read
                                            more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item-->

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT
                    ================================================== -->
    <section class="bg-light">
        <div class="container">

            <div class="row">

                <div class="col-lg-5 mb-1-9 mb-md-2-3 mb-lg-0">
                    <img src="img/content/contant-left01.jpg" alt="..." class="border-radius-5 box-shadow-primary">
                </div>

                <div class="col-lg-7">
                    <div class="ps-lg-6 ps-xl-7">
                        <div class="vertical-align-middle w-100">
                            <h3 class="mb-3">Our passion us to work hard and deliver outstanding results.</h3>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.</p>

                            <div class="w-85 w-md-65">
                                <ul class="list-style-5 mb-4">
                                    <li>Successful marketing</li>
                                    <li>Business strategy</li>
                                    <li>Take better decisions</li>
                                    <li>Working materials formate</li>
                                </ul>
                            </div>

                            <div class="row mt-n4">
                                <div class="col-sm-4 mt-4">
                                    <div class="counter-box-style2 bg-white text-center">
                                        <h4 class="countup d-block m-0 font-weight-600">880</h4>
                                        <div class="separator-line-horrizontal-medium-light3 bg-primary my-2 mx-auto">
                                        </div>
                                        <p class="text-uppercase font-weight-700 m-0 small text-primary letter-spacing-1">
                                            Projects</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <div class="counter-box-style2 bg-white text-center">
                                        <h4 class="countup d-block m-0 font-weight-600">678</h4>
                                        <div class="separator-line-horrizontal-medium-light3 bg-primary my-2 mx-auto">
                                        </div>
                                        <p class="text-uppercase font-weight-700 m-0 small text-primary letter-spacing-1">
                                            Clients</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <div class="counter-box-style2 bg-white text-center">
                                        <h4 class="countup d-block m-0 font-weight-600">112</h4>
                                        <div class="separator-line-horrizontal-medium-light3 bg-primary my-2 mx-auto">
                                        </div>
                                        <p class="text-uppercase font-weight-700 m-0 small text-primary letter-spacing-1">
                                            Awards</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TAB
                    ================================================== -->
    <section>
        <div class="container">
            <div class="section-heading">
                <h3>Our Working Process</h3>
            </div>
        </div>
        <div class="container-fluid px-lg-0">
            <div class="horizontaltab tab-style7">
                <ul class="resp-tabs-list hor_1">
                    <li>Discover</li>
                    <li>Planning</li>
                    <li>Marketing</li>
                    <li>Growth</li>
                </ul>
                <div class="resp-tabs-container hor_1 p-0">
                    <div>

                        <div class="container p-0 p-lg-auto">
                            <div class="row">
                                <div class="col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
                                    <div class="box-shadow-large p-3">
                                        <img src="img/content/content-04.jpg" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ps-0 ps-lg-3 ps-xl-4">
                                        <h4 class="mb-3">Integration of business</h4>
                                        <p>Duis Integration aute irure design in reprehenderit in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                            cupidatat non design proident.</p>

                                        <ul class="list-style-16 mb-0">
                                            <li>Exclusive design</li>
                                            <li>Life time supports</li>
                                            <li>Solve your problem with us</li>
                                            <li>We Provide Awesome Services</li>
                                            <li>Your business deserves best software</li>
                                        </ul>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div>

                        <div class="container p-0 p-lg-auto">
                            <div class="row">
                                <div class="col-lg-6 order-lg-1 order-2">
                                    <div class="pe-0 pe-lg-3 pe-xl-4">
                                        <h4 class="mb-3">Vision to planning</h4>
                                        <p>Build integration aute irure design in reprehenderit in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                            cupidatat design proident.</p>

                                        <ul class="list-style-16 mb-0">
                                            <li>Life time supports</li>
                                            <li>Exclusive design</li>
                                            <li>Solve your problem with us</li>
                                            <li>We Provide Awesome Services</li>
                                            <li>Your business deserves best software</li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-lg-6 order-lg-2 order-1 text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="box-shadow-large p-3">
                                        <img src="img/content/content-01.jpg" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div>

                        <div class="container p-0 p-lg-auto">
                            <div class="row">
                                <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="box-shadow-large p-3">
                                        <img src="img/content/content-02.jpg" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="ps-0 ps-lg-3 ps-xl-4">
                                        <h4 class="mb-3">Plan to marketing</h4>
                                        <p>Ready site integration aute irure design in reprehenderit in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                            occaecat cupidatat design proident.</p>

                                        <ul class="list-style-16 mb-0">
                                            <li>Creating Stunning design</li>
                                            <li>Solve your problem with us</li>
                                            <li>Grow your business</li>
                                            <li>We Provide Awesome Services</li>
                                            <li>Exclusive design</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div>

                        <div class="container p-0 p-lg-auto">
                            <div class="row">
                                <div class="col-lg-6 order-lg-1 order-2">
                                    <div class="pe-0 pe-lg-3 pe-xl-4">
                                        <h4 class="mb-3">Start to growth</h4>
                                        <p>Build integration aute irure design in reprehenderit in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                            cupidatat design proident.</p>

                                        <ul class="list-style-16 mb-0">
                                            <li>Research & Devloping</li>
                                            <li>Fully customizable</li>
                                            <li>Solve your problem faster</li>
                                            <li>There are many variations</li>
                                            <li>Your business deserves best software</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-lg-2 order-1 text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="box-shadow-large p-3">
                                        <img src="img/content/content-03.jpg" alt="..." class="w-100 w-lg-auto">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VIDEO
                    ================================================== -->
    <section class="parallax" data-overlay-dark="8" data-background="img/bg/bg1.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 order-2 order-lg-1 mt-1-9 mt-lg-0">
                    <h4 class="text-white h1 lh-base text-center text-lg-end letter-spacing-1 m-0">
                        <span class="mb-0">
                            Whether <strong class="font-weight-700">you are looking </strong> for answers, would
                            like to
                            <strong class="font-weight-700">solve</strong> a any business problem
                        </span>
                    </h4>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <div class="text-center mx-auto">
                        <div class="story-video">
                            <div class="d-inline-block vertical-align-middle z-index-1 text-start mb-1-9">
                                <a class="video video_btn" href="https://www.youtube.com/watch?v=f5BBJ4ySgpo"><i
                                        class="fas fa-play"></i>
                                </a>
                            </div>
                            <div class="vertical-align-middle">
                                <a href="#!" class="text-primary border-bottom border-color-light-white">
                                    Video Presentation </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECT
                    ================================================== -->
    <section class="project-single-two bg-light">

        <div class="container">
            <div class="section-heading">
                <h2>Our Project</h2>
            </div>
        </div>

        <div class="container-fluid p-0">

            <div class="owl-carousel owl-theme">

                <div class="project-grid-style3">
                    <div class="inner-box">
                        <div class="project-image">
                            <img src="img/projects/pro-11.jpg" alt="...">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="description">
                                        <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim
                                            veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm
                                            ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim.</div>
                                        <a href="project-detail.html" class="read-more"><span
                                                class="fa fa-angle-right"></span> Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-desc p-1-9 p-md-2-0 p-lg-2-3">
                            <div class="category mb-2 mb-md-3 mb-lg-0">Saving investments</div>
                            <h3 class="h5 font-weight-600 m-0"><a href="project-detail.html">Hands working with
                                    finances saving economy</a></h3>
                        </div>
                    </div>
                </div>

                <div class="project-grid-style3">
                    <div class="inner-box">
                        <div class="project-image">
                            <img src="img/projects/pro-10.jpg" alt="...">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="description">
                                        <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim
                                            veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm
                                            ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim.</div>
                                        <a href="project-detail.html" class="read-more"><span
                                                class="fa fa-angle-right"></span> Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-desc p-1-9 p-md-2-0 p-lg-2-3">
                            <div class="category mb-2 mb-md-3 mb-lg-0">Online consulting</div>
                            <h3 class="h5 font-weight-600 m-0"><a href="project-detail.html">Communication
                                    technology with consulting</a></h3>
                        </div>
                    </div>
                </div>

                <div class="project-grid-style3">
                    <div class="inner-box">
                        <div class="project-image">
                            <img src="img/projects/pro-9.jpg" alt="...">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="description">
                                        <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim
                                            veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm
                                            ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim.</div>
                                        <a href="project-detail.html" class="read-more"><span
                                                class="fa fa-angle-right"></span> Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="project-desc p-1-9 p-md-2-0 p-lg-2-3">
                            <div class="category mb-2 mb-md-3 mb-lg-0">Investment bank</div>
                            <h3 class="h5 font-weight-600 m-0"><a href="project-detail.html">Instead of cash
                                    investment banking money</a></h3>

                        </div>
                    </div>
                </div>

                <div class="project-grid-style3">
                    <div class="inner-box">
                        <div class="project-image">
                            <img src="img/projects/pro-12.jpg" alt="...">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <div class="description">
                                        <div class="text">Lorem ipsum dolor sit amet adipisicing elit sed eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Utna enim ad minim
                                            veniam quis nostrud exercitation ulamco laboris nisi aliquip exea comm
                                            ayodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim.</div>
                                        <a href="project-detail.html" class="read-more"><span
                                                class="fa fa-angle-right"></span> Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="project-desc p-1-9 p-md-2-0 p-lg-2-3">
                            <div class="category mb-2 mb-md-3 mb-lg-0">Finance analysis</div>
                            <h3 class="h5 font-weight-600 m-0"><a href="project-detail.html">Making presentation
                                    for finance research analysis</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING
                    ================================================== -->
    <section>
        <div class="container">
            <div class="section-heading">
                <h2>The Best Price For You</h2>
            </div>

            <!-- pricing content -->
            <div class="pricing-content">
                <div class="row mt-n1-9">

                    <!-- single item -->
                    <div class="col-lg-4 mt-1-9">
                        <div class="single-plan text-center">
                            <div class="head-plan bg-dark-gray">
                                <h4 class="h2">Classic</h4>
                            </div>
                            <div class="body-plan">
                                <div class="price-plan">
                                    <h3><sup>$</sup>49</h3>
                                    <span>Per Month</span>
                                    <i class="ti-briefcase"></i>
                                </div>
                                <div class="feat-plan">
                                    <ul class="ps-0">
                                        <li>Business Analysing</li>
                                        <li>Finance Analysing</li>
                                        <li>Custom Management</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-plan">
                                <a href="#!" class="butn medium">
                                    <span>Book Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end single item -->

                    <!-- single item -->
                    <div class="col-lg-4 mt-1-9">
                        <div class="single-plan text-center">
                            <div class="head-plan bg-primary">
                                <h4 class="h2">Popular</h4>
                            </div>
                            <div class="body-plan">
                                <div class="price-plan">
                                    <h3><sup>$</sup>39</h3>
                                    <span>Per Month</span>
                                    <i class="ti-light-bulb"></i>
                                </div>
                                <div class="feat-plan">
                                    <ul class="ps-0">
                                        <li>Business Analysing</li>
                                        <li>Finance Analysing</li>
                                        <li>Growth Tracking</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-plan">
                                <a href="#!" class="butn medium">
                                    <span>Book Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end single item -->

                    <!-- single item -->
                    <div class="col-lg-4 mt-1-9">
                        <div class="single-plan text-center">
                            <div class="head-plan bg-dark-gray">
                                <h4 class="h2">Premium</h4>
                            </div>
                            <div class="body-plan">
                                <div class="price-plan">
                                    <h3><sup>$</sup>59</h3>
                                    <span>Per Month</span>
                                    <i class="ti-layers-alt"></i>
                                </div>
                                <div class="feat-plan">
                                    <ul class="ps-0">
                                        <li>Business Analysing</li>
                                        <li>Finance Analysing</li>
                                        <li>Training & Workshop</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-plan">
                                <a href="#!" class="butn medium">
                                    <span>Book Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end single item -->

                </div>
            </div>
            <!-- end pricing content -->

        </div>
    </section>

    <!-- TESTIMONIAL
                    ================================================== -->
    <section class="bg-light">
        <div class="container">

            <div class="section-heading">
                <h2 class="font-weight-600">What Our Client Say</h2>
            </div>

            <div class="owl-carousel owl-theme testmonial-style5">
                <div class="row testmonials-style5 text-center text-lg-start">
                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <img alt="..." src="img/testmonials/t-4.jpg">
                    </div>
                    <div class="col-lg-8">
                        <div class="data">
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                et quasi architecto beatae vitae dicta.</p>
                            <h5>Stepha Kruse</h5><span>Marketing Lead</span>
                            <i class="fas fa-quote-right display-20 opacity1"></i>
                        </div>
                    </div>
                </div>
                <div class="row testmonials-style5 text-center text-lg-start">
                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <img alt="..." src="img/testmonials/t-5.jpg">
                    </div>
                    <div class="col-lg-8">
                        <div class="data">
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                et quasi architecto beatae vitae dicta.</p>
                            <h5>Dunican keithly</h5><span>Networking Lead</span>
                            <i class="fas fa-quote-right display-20 opacity1"></i>
                        </div>
                    </div>
                </div>
                <div class="row testmonials-style5 text-center text-lg-start">
                    <div class="col-lg-4 mb-3 mb-lg-0">
                        <img alt="..." src="img/testmonials/t-6.jpg">
                    </div>
                    <div class="col-lg-8">
                        <div class="data">
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                et quasi architecto beatae vitae dicta.</p>
                            <h5>Alivin Corondo</h5><span>Networking Lead</span>
                            <i class="fas fa-quote-right display-20 opacity1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG
                    ================================================== -->
    <section>
        <div class="container">

            <div class="section-heading">
                <h2>Our Blog</h2>
            </div>

            <div class="row mt-n1-9">

                <!-- blog -->
                <div class="col-md-6 col-lg-4 mt-1-9">
                    <article class="card card-style2 border-0">
                        <div class="card-img">
                            <img src="img/blog/blog-7.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-2 font-weight-600"><a href="blog-post.html">Investment planning team</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Ipsum is
                                simply...</p>
                            <div class="tag alt-font">
                                <a href="blog-list-sidebar.html">Designing | <span class="d-inline-block text-primary">02
                                        Jan 2022</span></a>
                            </div>

                        </div>
                    </article>
                </div>
                <!-- end blog -->

                <!-- blog -->
                <div class="col-md-6 col-lg-4 mt-1-9">
                    <article class="card card-style2 border-0">
                        <div class="card-img">
                            <img src="img/blog/blog-8.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-2 font-weight-600"><a href="blog-post.html">Work professional report</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Ipsum is
                                simply...</p>
                            <div class="tag alt-font">
                                <a href="blog-list-sidebar.html">Designing | <span class="d-inline-block text-primary">12
                                        May 2022</span></a>
                            </div>

                        </div>
                    </article>
                </div>
                <!-- end blog -->

                <!-- blog -->
                <div class="col-md-6 col-lg-4 mt-1-9">
                    <article class="card card-style2 border-0">
                        <div class="card-img">
                            <img src="img/blog/blog-9.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h3 class="mb-2 font-weight-600"><a href="blog-post.html">Performing at high
                                    levels</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Ipsum is
                                simply...</p>
                            <div class="tag alt-font">
                                <a href="blog-list-sidebar.html">Designing | <span class="d-inline-block text-primary">22
                                        Jun 2022</span></a>
                            </div>

                        </div>
                    </article>
                </div>
                <!-- end blog -->

            </div>
        </div>
    </section>

    <!-- CLIENTS
                    ================================================== -->
    <div class="section-clients bg-light">
        <div class="container">
            <div class="owl-carousel owl-theme clients" id="clients">
                <div class="item"><img alt="..." src="img/partners/client-01.png"></div>
                <div class="item"><img alt="..." src="img/partners/client-02.png"></div>
                <div class="item"><img alt="..." src="img/partners/client-03.png"></div>
                <div class="item"><img alt="..." src="img/partners/client-04.png"></div>
                <div class="item"><img alt="..." src="img/partners/client-05.png"></div>
                <div class="item"><img alt="..." src="img/partners/client-06.png"></div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
