    <footer class="footer-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 d-flex flex-column address-wrap">
                    <img src="{{ asset('assets/img/logo/dalikiainc-fav.png') }}" alt="Dalkia Inc. Logo" title="Dalkia Inc. Logo" style="max-width: 284px; max-height: 60px; width: 30px; padding-bottom: 20px;">
                    <p class="text-white" style="padding-right: 40px;">
                        {{ $company_information->brief_description }}
                    </p>
                    <div class="single-footer-widget mt-10">
                        <h6>FOLLOW US</h6>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="single-footer-widget">
                        <h6>NAVIGATION</h6>
                        <ul>
                            <li><a href="{{ route('website.index') }}">Home</a></li>
                            <li><a href="{{ route('website.about') }}">About Us</a></li>
                            <li><a href="{{ route('website.projects') }}">Projects</a></li>
                            <li><a href="{{ route('website.certifications-and-awards') }}">Certifications and Awards</a></li>
                            <li><a href="{{ route('website.careers') }}">Careers</a></li>
                            <li><a href="{{ route('website.contacts') }}">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 social-widget">
                    <div class="d-flex flex-column address-wrap">
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-home"></span>
                            </div>
                            <div class="contact-details">
                                <p>
                                    {{ $company_information->address }}
                                </p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <div class="contact-details">
                                <p>
                                    {{ $company_information->contact_number }}
                                </p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <div class="contact-details">
                                <p>
                                    {{ $company_information->email_address }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer">
        <p class="footer-text text-center" style="margin: 0;
            padding: 2px 0 0 0;
            background: #000;
            color: white;">
            Copyright &copy;
            2024 All rights reserved.
        </p>
    </div>

    <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/hexagons.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/timeline.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>