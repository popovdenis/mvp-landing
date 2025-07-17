<!DOCTYPE html>
<html lang="zxx">

@include('includes.head')

<body>

<!--begin header -->
@include('includes.header')
<!--end header -->

<!--begin home section -->
@include('includes.sections.home')
<!--end home section -->

<!--begin partners-section-->
@include('includes.sections.partners')
<!--end partners-section-->

<!--begin section-grey -->
@include('includes.sections.about')
<!--end section-grey -->

<!--begin section-white -->
<section class="section-white">
    <!--begin container-->
    <div class="container">
        <!--begin row-->
        <div class="row align-items-center">
            <!--begin col-md-6-->
            <div class="col-md-6 wow slideInLeft" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: slideInLeft;">
                <div class="margin-right-15">
                    <img src="http://placehold.it/555x425" class="width-100 image-shadow bottom-margins-images" alt="pic">
                </div>
            </div>
            <!--end col-sm-6-->
            <!--begin col-md-6-->
            <div class="col-md-6">

                <h3>Discover how we can help you to grow your business fast.</h3>

                <p>Velis demo enim ipsam voluptatem quia voluptas sit aspernatur netsum lorem fugit, seditum netis velas matrix net nesciunt.</p>

                <ul class="benefits">
                    <li><i class="fas fa-check"></i> Quias netus magni netsum eos qui ratione sequi.</li>
                    <li><i class="fas fa-check"></i> Venis ratione sequi netus enim quia tempor magni.</li>
                    <li><i class="fas fa-check"></i> Enim ipsam netus voluptatem quia voluptas.</li>
                </ul>

                <a href="#" class="btn-red small scrool">Discover More</a>

            </div>
            <!--end col-md-6-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end section-white-->

<!--begin section-grey -->
<section class="section-grey">
    <!--begin container-->
    <div class="container">
        <!--begin row-->
        <div class="row align-items-center">
            <!--begin col-md-6-->
            <div class="col-md-6">
                <div class="nav flex-column nav-pills margin-right-25" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <!--begin features-second -->
                        <div class="features-second">
                            <div class="dropcaps-circle blue">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4 class="margin-bottom-5">Customize your workflow.</h4>
                            <p>Manage any process and be ready to address any challenge with total ease.</p>
                        </div>
                        <!--end features-second-->
                    </a>

                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <!--begin features-second-->
                        <div class="features-second">
                            <div class="dropcaps-circle red">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <h4 class="margin-bottom-5">Easy onboarding, fast adoption.</h4>
                            <p>With Square getting your team on board is as simple as sending an email.</p>
                        </div>
                        <!--end features-second-->
                    </a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <!--begin features-second-->
                        <div class="features-second">
                            <div class="dropcaps-circle green">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h4 class="margin-bottom-5">Improve subscriber retention.</h4>
                            <p>Analyze customers by region, discounts and more and put a plan in place.</p>
                        </div>
                        <!--end features-second-->
                    </a>
                </div>
            </div>
            <!--end col-md-6-->
            <!--begin col-md-6 -->
            <div class="col-md-6">
                <div class="tab-content margin-left-20" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <img src="http://placehold.it/555x425" class="width-100 image-shadow top-margins-images" alt="pic">
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <img src="http://placehold.it/555x425" class="width-100 image-shadow top-margins-images" alt="pic">
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <img src="http://placehold.it/555x425" class="width-100 image-shadow top-margins-images" alt="pic">
                    </div>
                </div>
            </div>
            <!--end col-md-6 -->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

</section>
<!--end section-grey-->

<!--begin section-bg-1 -->
<section class="section-bg-1">

    <div class="section-bg-overlay"></div>

    <!--begin container-->
    <div class="container">

        <!--begin row-->
        <div class="row">

            <!--begin col md 7 -->
            <div class="col-md-7 mx-auto margin-bottom-20 text-center">

                <h2 class="white-text">Fun Facts About Our Agency</h2>

            </div>
            <!--end col md 7-->

        </div>
        <!--end row-->

        <!--begin row-->
        <div class="row">

            <!--begin fun-facts-box -->
            <div class="col-md-2 offset-md-2 fun-facts-box text-center">

                <i class="far fa-gem"></i>

                <p class="fun-facts-title"><span class="facts-numbers">1050+</span><br>Projects Completed</p>

            </div>
            <!--end fun-facts-box -->

            <!--begin fun-facts-box -->
            <div class="col-md-2 fun-facts-box text-center">

                <i class="far fa-heart"></i>

                <p class="fun-facts-title"><span class="facts-numbers">217k</span><br>Happy Clients</p>

            </div>
            <!--end fun-facts-box -->

            <!--begin fun-facts-box -->
            <div class="col-md-2 fun-facts-box text-center">

                <i class="fas fa-award"></i>

                <p class="fun-facts-title"><span class="facts-numbers">1210</span><br>Design Awards</p>

            </div>
            <!--end fun-facts-box -->

            <!--begin fun-facts-box -->
            <div class="col-md-2 fun-facts-box text-center">

                <i class="fas fa-anchor"></i>

                <p class="fun-facts-title"><span class="facts-numbers">2137</span><br>Line Of Codes</p>

            </div>
            <!--end fun-facts-box -->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end section-bg-1 -->

<!--begin testimonials section -->
<section class="section-grey" id="testimonials">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row align-items-center">

            <!--begin col-md-5 -->
            <div class="col-md-5 col-sm-12">

                <h2>What People Are Saying.</h2>

                <p>Quis autem velis ets reprehender net etid quiste nets voluptate. Utise wisi enim minim veniam, quis etsad aspernatis netsum stationes nets.</p>

                <!--begin row-->
                <div class="row">

                    <!--begin col-md-4-->
                    <div class="col-md-4 col-sm-6">

                        <!--begin testim-platform-->
                        <div class="testim-platform first">

                            <p>TrustPilot</p>

                            <div class="testim-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                            </div>

                        </div>
                        <!--end testim-platform-->

                    </div>
                    <!--end col-sm-4-->

                    <!--begin col-md-4-->
                    <div class="col-md-4 col-sm-6">

                        <!--begin testim-platform-->
                        <div class="testim-platform">

                            <p>Feefo</p>

                            <div class="testim-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="far fa-star" aria-hidden="true"></i>
                            </div>

                        </div>
                        <!--end testim-platform-->

                    </div>
                    <!--end col-sm-4-->

                </div>
                <!--end row-->

            </div>
            <!--end col-md-5 -->

            <!--begin col-md-1 -->
            <div class="col-md-1"></div>
            <!--end col-md-1 -->

            <!--begin col-md-6-->
            <div class="col-md-6">

                <!--begin accordion -->
                <div class="accordion" id="accordionFAQ">

                    <!--begin card -->
                    <div class="card">

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                            <div class="card-body">
                                Nemo enim ipsam voluptatem quia voluptas situm ets aspernatis netsum loris fugit, sed quia magni dolores eos quis ratione sequi etum nets vesciunt neque.
                            </div>
                        </div>

                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">
                                    <p class="testim-name">Alexandra Smith / <span>Manager - SmartCoders</span></p>
                                </button>
                            </h5>
                        </div>

                    </div>
                    <!--end card -->

                    <!--begin card -->
                    <div class="card">

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                            <div class="card-body">
                                Nemo enim ipsam voluptatem quia voluptas situm ets aspernatis netsum loris fugit, sed quia magni dolores eos quis ratione sequi etum nets vesciunt neque.
                            </div>
                        </div>

                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">
                                    <p class="testim-name">John Doe / <span>CEO - Epic Design</span></p>
                                </button>
                            </h5>
                        </div>

                    </div>
                    <!--end card -->

                    <!--begin card -->
                    <div class="card">

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                            <div class="card-body">
                                Nemo enim ipsam voluptatem quia voluptas situm ets aspernatis netsum loris fugit, sed quia magni dolores eos quis ratione sequi etum nets vesciunt neque.
                            </div>
                        </div>

                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="http://placehold.it/200x200" alt="testimonials" class="testim-img">
                                    <p class="testim-name">Christina Pages / <span>Designer - New Fashion</span></p>
                                </button>
                            </h5>
                        </div>

                    </div>
                    <!--end card -->

                </div>
                <!--end accordion -->

            </div>
            <!--end col-md-6-->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end testimonials section -->

<!--begin section-white -->
<section class="section-white" id="portfolio">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12 -->
            <div class="col-md-12 text-center margin-bottom-30">

                <h2 class="section-title">Our Portfolio</h2>

                <p class="section-subtitle">Dicover the latest projects accomplished for my clients.</p>

            </div>
            <!--end col-md-12 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

    <!--begin container -->
    <div class="container">

        <!--begin row-->
        <div class="row wow fadeIn" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeIn;">

            <!--begin col-md-4 -->
            <div class="col-md-4 col-sm-12 p-0 m-0">

                <figure class="gallery-insta">
                    <!--begin popup-gallery-->
                    <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                        <a class="popup2" href="http://placehold.it/555x460">
                            <img src="http://placehold.it/555x460" class="width-100" alt="pic">
                            <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                        </a>
                    </div>
                    <!--end popup-gallery-->
                </figure>

                <figure class="gallery-insta">
                    <!--begin popup-gallery-->
                    <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                        <a class="popup2" href="http://placehold.it/555x460">
                            <img src="http://placehold.it/555x460" class="width-100" alt="pic">
                            <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                        </a>
                    </div>
                    <!--end popup-gallery-->
                </figure>

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12 p-0 m-0">

                <figure class="gallery-insta">
                    <!--begin popup-gallery-->
                    <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                        <a class="popup2" href="http://placehold.it/623x1050">
                            <img src="http://placehold.it/623x1050" class="width-100" alt="pic">
                            <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                        </a>
                    </div>
                    <!--end popup-gallery-->
                </figure>

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12 p-0 m-0">

                <figure class="gallery-insta">
                    <!--begin popup-gallery-->
                    <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                        <a class="popup2" href="http://placehold.it/555x460">
                            <img src="http://placehold.it/555x460" class="width-100" alt="pic">
                            <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                        </a>
                    </div>
                    <!--end popup-gallery-->
                </figure>

                <figure class="gallery-insta">
                    <!--begin popup-gallery-->
                    <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                        <a class="popup2" href="http://placehold.it/555x460">
                            <img src="http://placehold.it/555x460" class="width-100" alt="pic">
                            <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                        </a>
                    </div>
                    <!--end popup-gallery-->
                </figure>

            </div>
            <!--end col-md-4 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end section-white -->

<!--begin team section -->
<section class="section-grey" id="team">

    <!--begin container-->
    <div class="container">

        <!--begin row-->
        <div class="row">

            <!--begin col-md-12 -->
            <div class="col-md-12 text-center">

                <h2 class="section-title">Meet Our Team</h2>

                <p class="section-subtitle">Discover more about our high performing team.</p>

            </div>
            <!--end col-md-12 -->

            <!--begin team-item -->
            <div class="col-sm-12 col-md-4 margin-top-30">

                <img src="http://placehold.it/555x555" class="team-img width-100" alt="pic">

                <div class="team-item">

                    <h3>CHRISTINA HAWKINS</h3>

                    <div class="team-info"><p>Head of SEO</p></div>

                    <p>Johnathan is our  co-founder and has developed search strategies for a variety of clients for over 5 years.</p>

                </div>

            </div>
            <!--end team-item -->

            <!--begin team-item -->
            <div class="col-sm-12 col-md-4 margin-top-30">

                <img src="http://placehold.it/555x555" class="team-img width-100" alt="pic">

                <div class="team-item">

                    <h3>ANDRES JOHANSON</h3>

                    <div class="team-info geen"><p>Marketing Manager</p></div>

                    <p>Andres fell in love with marketing at the school and looks forward to being part of the industry for years.</p>

                </div>

            </div>
            <!--end team-item -->

            <!--begin team-item -->
            <div class="col-sm-12 col-md-4 margin-top-30">

                <img src="http://placehold.it/555x555" class="team-img width-100" alt="pic">

                <div class="team-item">

                    <h3>ALEXANDRA SMITHS</h3>

                    <div class="team-info green"><p>SEO Specialist</p></div>

                    <p>Graduating with a degree in Spanish, English and French, she has always loved writing.</p>

                </div>

            </div>
            <!--end team-item -->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end team section-->

<!--begin section-bg-2 -->
<section class="section-bg-2">

    <div class="section-bg-overlay"></div>

    <!--begin container-->
    <div class="container">

        <!--begin row-->
        <div class="row">

            <!--begin col md 7 -->
            <div class="col-md-7 mx-auto text-center">

                <h2 class="white-text">Award-Winning Agency</h2>

                <p class="white-text">Utise wisi enim minim veniam, quis et stationes ullamcorper nets suscipit ets lobotis nisle consequat nihis etim aspernatur netsum.</p>

                <a href="#" class="btn-white small scrool">Discover More</a>

                <a href="#" class="btn-white-border small scrool">Get In Touch</a>

            </div>
            <!--end col md 7-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end section-bg-2 -->

<!--begin features section -->
<section class="section-white" id="features">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12-->
            <div class="col-md-12 text-center padding-bottom-10">

                <h2 class="section-title">Amazing Features</h2>

                <p class="section-subtitle">Quis autem velis ets reprehender net etid quiste voluptate.</p>

            </div>
            <!--end col-md-12 -->

        </div>
        <!--end row -->

        <!--begin row -->
        <div class="row">

            <!--begin col-md-4-->
            <div class="col-md-4">

                <div class="feature-box light-green wow fadeIn" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                    <i class="fas fa-tools"></i>

                    <div class="feature-box-text">

                        <h4>Support 24/7</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                    </div>

                </div>

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4-->
            <div class="col-md-4">

                <div class="feature-box light-blue wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                    <i class="fas fa-users"></i>

                    <div class="feature-box-text">

                        <h4>User Friendly</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                    </div>

                </div>

            </div>
            <!--end col-md-4 -->

            <!--begin col-md 4-->
            <div class="col-md-4">

                <div class="feature-box orange wow fadeIn" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                    <i class="far fa-bell"></i>

                    <div class="feature-box-text">

                        <h4>Notifications</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>


                    </div>

                </div>

            </div>
            <!--end col-md-4 -->

        </div>
        <!--end row -->

        <!--begin row -->
        <div class="row">

            <!--begin col-md-4-->
            <div class="col-md-4">

                <div class="feature-box dark-blue wow fadeIn" data-wow-delay="1s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                    <i class="fas fa-gift"></i>

                    <div class="feature-box-text">

                        <h4>Accesibility</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                    </div>

                </div>

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4-->
            <div class="col-md-4">

                <div class="feature-box light-red wow fadeIn" data-wow-delay="1.25s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">

                    <i class="fas fa-piggy-bank"></i>

                    <div class="feature-box-text">

                        <h4>Cost Control</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                    </div>

                </div>

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4-->
            <div class="col-md-4">

                <div class="feature-box dark-green wow fadeIn" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">


                    <i class="far fa-comments"></i>


                    <div class="feature-box-text">

                        <h4>Chat With Friends</h4>

                        <p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat nihis.</p>

                    </div>

                </div>

            </div>
            <!--end col-md-4 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end features section -->

<!--begin pricing section -->
<section class="section-grey" id="pricing">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row align-items-center">

            <!--begin col-md-4 -->
            <div class="col-md-4 col-sm-12">

                <h3>Great pricing plans tailored to your needs.</h3>

                <p>Quis autem velis ets reprehender net etid quiste voluptate. Utise wisi enim minim veniam, quis et stationes nets.</p>

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4-->
            <div class="col-md-4 col-sm-6 wow bounceIn" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: bounceIn;">

                <div class="price-box-white">

                    <ul class="pricing-list">

                        <li class="price-title">MONTHLY</li>

                        <li class="price-value">$19</li>

                        <li class="price-subtitle">Per Month</li>

                        <li class="price-tag"><a href="#">GET STARTED</a></li>

                        <li class="price-text">First two weeks free.</li>

                        <li class="price-text">Amazing freatures.</li>

                    </ul>

                </div>

            </div>
            <!--end col-md-4 -->

            <!--begin col-md-4 -->
            <div class="col-md-4 col-sm-6 wow bounceIn" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: bounceIn;">

                <div class="price-box-grey">

                    <ul class="pricing-list">

                        <li class="price-title">ANNUALY</li>

                        <li class="price-value">$29</li>

                        <li class="price-subtitle">Per Year</li>

                        <li class="price-tag"><a href="#">GET STARTED</a></li>

                        <li class="price-text">First two weeks free.</li>

                        <li class="price-text">Save 45% with this plan</li>

                        <li class="price-text">Amazing freatures.</li>

                    </ul>

                </div>

            </div>
            <!--end col-md-4 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end pricing section -->

<!--begin faq section -->
<section class="section-white" id="faq">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12-->
            <div class="col-md-12 text-center padding-bottom-10">

                <h2 class="section-title">Frequently Asked Questions</h2>

                <p class="section-subtitle">Quis autem velis ets reprehender net etid quiste voluptate.</p>

            </div>
            <!--end col-md-12 -->

        </div>
        <!--end row -->

        <!--begin row -->
        <div class="row">

            <!--begin col-md-6-->
            <div class="col-md-6">

                <div class="faq-box">

                    <h5>Velit ut tortizi pretium viverra suspendisse?</h5>

                    <p>Utise wisi enim minim veniam, quis et stationes ullamcorper nets suscipit ets lobotis nisle consequat nihis etim. Quis autem velis ets reprehender net etid quiste voluptate velite esse sedis.</p>

                </div>

                <div class="faq-box">

                    <h5>Maecenas volutpat blandit etiam?</h5>

                    <p>Utise wisi enim minim veniam, quis et stationes ullamcorper nets suscipit ets lobotis nisle consequat nihis etim. Quis autem velis ets reprehender net etid quiste voluptate velite esse sedis.</p>

                </div>

            </div>
            <!--end col-md-6 -->

            <!--begin col-md-6-->
            <div class="col-md-6">

                <div class="faq-box">

                    <h5>Nibh sit amet aliquam commodo?</h5>

                    <p>Utise wisi enim minim veniam, quis et stationes ullamcorper nets suscipit ets lobotis nisle consequat nihis etim. Quis autem velis ets reprehender net etid quiste voluptate velite esse sedis.</p>

                </div>

                <div class="faq-box">

                    <h5>Elementum curabitur vitae?</h5>

                    <p>Utise wisi enim minim veniam, quis et stationes ullamcorper nets suscipit ets lobotis nisle consequat nihis etim. Quis autem velis ets reprehender net etid quiste voluptate velite esse sedis.</p>

                </div>

            </div>

            <!--end col-md-6 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</section>
<!--end faq section -->

<!--begin section-bg-2 -->
<section class="section-bg-2" id="contact">

    <div class="section-bg-overlay"></div>

    <!--begin container-->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-12-->
            <div class="col-md-12 text-center padding-bottom-10">

                <h2 class="section-title white-text">Contact Us</h2>

                <p class="section-subtitle white">Have any queries? Get in touch today.</p>

            </div>
            <!--end col-md-12 -->

        </div>
        <!--end row -->

        <!--begin row-->
        <div class="row justify-content-md-center">

            <!--begin col-md-8-->
            <div class="col-md-8 text-center margin-top-10">

                <!--begin contact-form-wrapper-->
                <div class="contact-form-wrapper wow bounceIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                    <!--begin form-->
                    <div>

                        <!--begin success message -->
                        <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                        <!--end success message -->

                        <!--begin contact form -->
                        <form id="contact-form" class="row contact-form contact" action="php/contact.php" method="post">

                            <!--begin col-md-6-->
                            <div class="col-md-6">

                                <input class="contact-input" required="" name="contact_names" placeholder="Your Name*" type="text">

                                <input class="contact-input" required="" name="contact_phone" placeholder="Phone Number*" type="text">

                            </div>
                            <!--end col-md-6-->

                            <!--begin col-md-6-->
                            <div class="col-md-6">

                                <input class="contact-input" required="" name="contact_email" placeholder="Email Adress*" type="email">

                                <select class="contact-input" required="" name="contact_ticket">

                                    <option value="">Choose Option</option>

                                    <option value="Individual">Individual</option>

                                    <option value="Corporate">Corporate</option>

                                </select>

                            </div>
                            <!--end col-md-6-->

                            <!--begin col-md-12-->
                            <div class="col-md-12">

                                <textarea class="contact-input" rows="2" cols="20" name="contact_message" placeholder="Your Message..."></textarea>

                                <input value="Get In Touch" class="contact-submit" type="submit">

                            </div>
                            <!--end col-md-12-->

                        </form>
                        <!--end contact form -->

                    </div>
                    <!--end form-->

                </div>
                <!--end contact-form-wrapper-->

            </div>
            <!--end col-md-8-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</section>
<!--end section-bg-2 -->

<!--begin footer -->
<div class="footer">

    <!--begin container -->
    <div class="container">

        <!--begin row -->
        <div class="row">

            <!--begin col-md-5 -->
            <div class="col-md-5">

                <p>© 2020 <span class="template-name">LaunchPage</span>. Designed by <a href="https://themeforest.net/user/epic-themes/portfolio?ref=Epic-Themes" target="_blank">Epic-Themes</a></p>

            </div>
            <!--end col-md-5 -->

            <!--begin col-md-2 -->
            <div class="col-md-2"></div>
            <!--end col-md-2 -->

            <!--begin col-md-5 -->
            <div class="col-md-5">

                <!--begin footer_social -->
                <ul class="footer_social">

                    <li>Follw us:</li>

                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>

                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>

                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                    <li><a href="#"><i class="fab fa-skype"></i></a></li>

                    <li><a href="#"><i class="fab fa-dribble"></i></a></li>

                </ul>
                <!--end footer_social -->

            </div>
            <!--end col-md-5 -->

        </div>
        <!--end row -->

    </div>
    <!--end container -->

</div>
<!--end footer -->

<!-- Load JS here for greater good =============================-->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollTo-min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.nav.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
