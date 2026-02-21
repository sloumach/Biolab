<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Creative Agency Responsive HTML5 Template. Built with Bootstrap, HTML5, CSS3 and jQuery.">
        <meta name="keywords" content="HTML, CSS, JavaScript, jQuery, Animation, Bootstrap, Font Awesome, Revolution Slider, Labflox, Portfolio">
        <meta name="author" content="Themewar">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biolab - Appointment</title>

        @include('partials.styles')
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader clock text-center">
            <div class="labfloxLoader">
                <div class="loaderO">
                    <span>L</span>
                    <span>A</span>
                    <span>B</span>
                    <span>F</span>
                    <span>L</span>
                    <span>O</span>
                    <span>X</span>
                </div>
            </div>
        </div>
        <!-- Header Start -->
        <header class="header01 isSticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navArea">
                            <div class="logo logo--large">
                                {{-- <a href="index.html"> --}}<img src="biolab_assets/images/biolab-logo.png" alt="Labflox"/>{{-- </a> --}}
                            </div>
                            <nav class="mainMenu">

                            </nav>
                            <div class="accessNav">
                                <div class="phoneCall">
                                    <i class="fa fa-phone"></i>
                                    <span>24/7 Emergency Phone</span>
                                    <h6>+36 55 540 069</h6>
                                </div>
                                <a href="{{ route('appointment') }}" class="lab_btn lightHover requestBTN"><span><i class="fa fa-calendar-plus-o"></i>Request Appointment</span></a>
                                <a href="javascript:void(0);" class="menuBtn"><span><i class="fa fa-bars"></i>Menu</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Page Banner Start -->
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-6">
                        <div class="pageBannerContent">
                            <h5>Appointment</h5>
                            <h2>An order for lab work from your provider is required.</h2>
                            <div class="pageBreadCum">
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                                <span>Appointment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- Appointment Section Start -->
        <section class="appointmentSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="appointmentContent">
                            <div class="phoneCall7">
                                <i class="fa fa-phone"></i>
                                <span>For all appointments</span>
                                <h6>+36 55 540 069</h6>
                            </div>
                            <h2>Appointment Information</h2>
                            <p>
                                We specialize in food and beverage spoilage with a strong background in heat-resistant molds (HRM), Alicyclobacillus (ACB), 
                                preservative resistant and xerophilic yeast and molds test results are usually reviewed.
                            </p>
                            <ul class="listUL">
                                <li>Always let us know in advance if you need to change or cancel an appointment by calling 457-4180.</li>
                                <li>Identify and prioritize a list of what you want to talk to the physician about during your appointment.</li>
                                <li>Bring a list of current medications and supplements showing the dosage that you take. Or bring the bottles.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="appointmentForm">
                            <h2>Fill The Form</h2>
                            <form method="post" action="#" id="contact_form">
                                <input type="text" name="ap_name" placeholder="Patient Name *" class="required reqError"/>
                                <input type="email" name="ap_mail" placeholder="Your Mail *" class="required reqError"/>
                                <input type="text" name="ap_name" placeholder="Your Phone *" class="required reqError"/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select name="ap_gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="date_picker">
                                            <input type="text" name="ap_date" placeholder="dd/mm/yyyy" id="litepicker" class="required reqError"/>
                                            <label for="litepicker"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit"><span>Request Appointment</span></button>
                                <div class="alert con_message"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Appointment Section End -->

        <!-- CTA Section Start -->
        <section class="ctaSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <div class="ctaContent">
                            <h5 class="secSubTitle2 heebo">Achieving Efficiencies</h5>
                            <h2 class="secTitle">
                                Expanding Your Test Menu through Global Logistics
                            </h2>
                            <a href="appointment.html" class="lab_btn lightHover">Request Appointment</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="imgDiv">
                            <img src="biolab_assets/images/home1/2.png" alt="Labflox"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section End -->

        @include('footer')

<!-- Back To Top -->
        <a href="javascript:void(0);" id="backtotop"><i class="fa fa-angle-double-up"></i></a>
        <!-- Back To Top -->

        @include('partials.scripts')
    </body>
</html>
