@if (Request::route()->getName() !== 'login' && Request::route()->getName() !== 'register' && Request::route()->getName() !== 'logout')

<div class="waves-animation">
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255, 110, 84, 0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,110,84,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,110,84,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(255,110,84)" />
    </g>
</svg>

</div>
        <!--Waves-->

    <!-- Footer -->
    <footer class="page-footer font-small">

        <div class="top">
            <div class="container">

                <!-- Grid row-->
                <div class="grid-row row py-4 d-flex align-items-center mx-xl-2 px-xl-2">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="text-uppercase mb-0">Connettiti con noi sui social</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a class="fb-ic mr-4">
                            <i class="fab fa-facebook-f"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic mr-4">
                            <i class="fab fa-twitter white-text"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic mr-4">
                            <i class="fab fa-google-plus-g white-text"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic mr-4">
                            <i class="fab fa-linkedin-in white-text"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div class="links container text-center text-md-left mt-5 text-sm-center">

            <!-- Grid row -->
            <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Scopri Deliveboo</h6>
                    <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Lavora con noi</a>
                    </p>
                    <p>
                        <a href="#!">Negozi partner</a>
                    </p>
                    <p>
                        <a href="#!">Corrieri</a>
                    </p>
                    <p>
                        <a href="#!">Deliveboo Business</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Link di interesse</h6>
                    <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Chi siamo</a>
                    </p>
                    <p>
                        <a href="#!">FAQ</a>
                    </p>
                    <p>
                        <a href="#!">Blog</a>
                    </p>
                    <p>
                        <a href="#!">Diventa nostro partner</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Aiuto</h6>
                    <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Termini & Condizioni</a>
                    </p>
                    <p>
                        <a href="#!">Informativa sulla privacy</a>
                    </p>
                    <p>
                        <a href="#!">Cookies</a>
                    </p>
                    <p>
                        <a href="#!">Altro</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                    <p class="contact-details">
                        <i class="fas fa-home mr-3 py-1"></i>
                        <span>via Cavour, 4, Roma, 00118</span>
                    </p>

                    <p>
                        <i class="fas fa-envelope mr-3 py-1"></i> info@deliveboo.it
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3 py-1"></i> + 01 234 567 88
                    </p>
                    <p>
                        <i class="fas fa-print mr-3 py-1"></i> + 01 234 567 89
                    </p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="text-center">
            Realizzato da
        </div>
        <div class="names text-center">
            <ul>
                <li><a href="">Gianpaolo Garbarino</a></li>
                <li><a href="">Fabio Petrone</a></li>
                <li><a href="">Diego Scano</a></li>
                <li><a href="">Antonio Fiorentino</a></li>
                <li><a href="">Giosué Santoro</a></li>
            </ul>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
@endif
