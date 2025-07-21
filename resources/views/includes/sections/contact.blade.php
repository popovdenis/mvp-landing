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
                        <form id="contact-form" class="row contact-form contact" method="POST" action="https://upgreener.com/contact">
                            @csrf
                            <!--begin col-md-6-->
                            <div class="col-md-6">
                                <input class="contact-input" required="" name="contact_organisation" placeholder="Organisation Name*" type="text">
                                <input class="contact-input" required="" name="contact_country" placeholder="Country*" type="text">
                            </div>
                            <!--end col-md-6-->

                            <!--begin col-md-6-->
                            <div class="col-md-6">
                                <input class="contact-input" required="" name="contact_website" placeholder="Website*" type="text">
                                <input class="contact-input" required="" name="contact_email" placeholder="Email*" type="email">
                            </div>
                            <!--end col-md-6-->

                            <!--begin col-md-6-->
                            <div class="col-md-6">
                                <input class="contact-input" required="" name="contact_firstname" placeholder="Your Firstname*" type="text">
                                <input class="contact-input" required="" name="contact_role" placeholder="Your Role*" type="text">
                            </div>
                            <!--end col-md-6-->

                            <!--begin col-md-6-->
                            <div class="col-md-6">
                                <input class="contact-input" required="" name="contact_lastname" placeholder="Your Lastname*" type="text">
                                <input class="contact-input" required="" name="contact_number_students" placeholder="Number of Active Students*" type="text">
                            </div>
                            <!--end col-md-6-->

                            <!--begin col-md-12-->
                            <div class="col-md-12">
                                <textarea class="contact-input" rows="2" cols="20" name="contact_message" placeholder="Why are you interested?"></textarea>
                                <input class="contact-input"  name="contact_subscribe" type="checkbox">
                            </div>
                            <!--end col-md-12-->
                            <input value="Get In Touch" class="contact-submit" type="submit">
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
