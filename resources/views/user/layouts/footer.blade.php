<!-- =======================Footer START -->
<footer class="pt-5">
    <div class="container">
        <!-- Row START -->
        <div class="row g-4">

            <!-- Widget 1 START -->
            <div class="col-lg-3">
                <!-- logo -->
                <a class="me-0" href="index.html">
                    <img class="light-mode-item h-40px" src="assets/images/logo.svg" alt="logo">
                    <img class="dark-mode-item h-40px" src="assets/images/logo-light.svg" alt="logo">
                </a>
                <p class="my-3">{{ config('sitevars.about') }}</p>
                <!-- Social media icon -->
                <ul class="list-inline mb-0 mt-3">
                    <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-facebook"
                            href="{{ config('sitevars.fblink') }}"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-instagram"
                            href="{{ config('sitevars.instalink') }}"><i class="fab fa-fw fa-instagram"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-twitter"
                            href="{{ config('sitevars.xlink') }}"><i class="fab fa-fw fa-twitter"></i></a> </li>
                    <li class="list-inline-item"> <a class="btn btn-white btn-sm shadow px-2 text-linkedin"
                            href="{{ config('sitevars.linkedinlink') }}"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Widget 1 END -->

            <!-- Widget 2 START -->
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Link block -->
                    <div class="col-6">
                        <h5 class="mb-2 mb-md-4">Quick Links</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/page/about-us">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>

                        </ul>
                    </div>

                    <!-- Link block -->
                    <div class="col-6">
                        <h5 class="mb-2 mb-md-4">Know More</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">Play Quiz</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Read Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Courses</a></li>

                        </ul>
                    </div>


                </div>
            </div>
            <!-- Widget 2 END -->

            <!-- Widget 3 START -->
            <div class="col-lg-3">
                <h5 class="mb-2 mb-md-4">Contact</h5>
                <!-- Time -->
                <p class="mb-2">
                    Contact:<span class="h6 fw-light ms-2">{{ config('sitevars.phone') }}</span>

                </p>

                <p class="mb-0">Email:<span class="h6 fw-light ms-2">{{ config('sitevars.email') }}</span></p>


            </div>
            <!-- Widget 3 END -->
        </div><!-- Row END -->

        <!-- Divider -->
        <hr class="mt-4 mb-0">

        <!-- Bottom footer -->
        <div class="py-3">
            <div class="container px-0">
                <div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
                    <!-- copyright text -->
                    <div class="text-body text-primary-hover"> Copyrights ©{{ date('Y') }} DATAWHYS. Powered by <a
                            href="https://www.linkedin.com/in/mspreddy2021/" target="_blank"
                            class="text-body">Sandeep</a></div>
                    <!-- copyright links-->
                    <div class="justify-content-center mt-3 mt-lg-0">
                        <ul class="nav list-inline justify-content-center mb-0">

                            <li class="list-inline-item"><a class="nav-link" href="/page/terms-and-conditions">Terms &
                                    Conditions</a></li>
                            <li class="list-inline-item"><a class="nav-link pe-0" href="/page/privacy-policy">Privacy
                                    policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =======================Footer END -->
