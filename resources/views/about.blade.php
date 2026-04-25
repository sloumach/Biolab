<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Creative Agency Responsive HTML5 Template. Built with Bootstrap, HTML5, CSS3 and jQuery.">
        <meta name="keywords" content="HTML, CSS, JavaScript, jQuery, Animation, Bootstrap, Font Awesome, Revolution Slider, Labflox, Portfolio">
        <meta name="author" content="Themewar">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biolab - À propos</title>

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
                                    <span>Téléphone d'urgence 24h/24</span>
                                    <h6>+36 55 540 069</h6>
                                </div>
                                <a href="{{ route('appointment') }}" class="lab_btn lightHover requestBTN"><span><i class="fa fa-calendar-plus-o"></i>Prendre rendez-vous</span></a>
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
                    <div class="col-md-9 col-lg-7 col-xl-6">
                        <div class="pageBannerContent">
                            <h5>À propos</h5>
                            <h2>Une référence en recherche scientifique et en médecine</h2>
                            <div class="pageBreadCum">
                                <a href="{{ route('home') }}">Accueil</a>
                                <i class="fa fa-angle-right"></i>
                                <span>À propos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->

        <!-- About Page Start -->
        <section class="aboutusSection2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="aboutContent2">
                            <h5 class="secSubTitle">À propos</h5>
                            <h2 class="secTitle">
                                Nous proposons une recherche de laboratoire de qualité
                            </h2>
                            <p>
                                Nous sommes spécialisés dans l'analyse des altérations alimentaires et des boissons,
                                avec une expertise reconnue dans les moisissures thermorésistantes, les levures et les moisissures résistantes.
                            </p>
                            <div class="row">
                                <div class="col-md-7 col-lg-8">
                                    <ul class="listUL">
                                        <li>Une large gamme d'analyses spécialisées</li>
                                        <li>Un accompagnement pour le diagnostic et le suivi</li>
                                        <li>D'autres offres de santé complémentaires</li>
                                    </ul>
                                    <div class="abcAuthor clearfix">
                                        <div class="abcIMG">
                                            <img src="biolab_assets/images/author/6.jpg" alt="Labflox">
                                        </div>
                                        <img class="signatureImage" src="biolab_assets/images/signature_2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-4">
                                    <div class="expCounter2">
                                        <span class="counters" data-count="5" data-suffix="" data-format="leadingzero">05</span>
                                        <span>
                                            Années d'expérience
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="imgDiv2 text-right">
                            <img src="biolab_assets/images/home2/1.png" alt="Labflox">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Page End -->

        <!-- Fact Section Start -->
        <section class="factSection4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="factContainer">
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <div class="fact01 text-center">
                                        <i class="laf-GA9M8J01"></i>
                                        <h2 class="heebo counters" data-count="32000" data-suffix="+" data-format="separator">32,000+</h2>
                                        <h6 class="heebo">Services de pathologie</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="fact01 text-center">
                                        <i class="laf-lHEkBa01"></i>
                                        <h2 class="heebo counters" data-count="25" data-suffix=" M" data-format="plain">25 M</h2>
                                        <h6 class="heebo">Tests réalisés chaque année</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="fact01 text-center">
                                        <i class="laf-VoAPSp01"></i>
                                        <h2 class="heebo counters" data-count="25" data-suffix="+" data-format="plain">90+</h2>
                                        <h6 class="heebo">Pathologistes spécialisés</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="fact01 text-center">
                                        <i class="laf-DqlwU301"></i>
                                        <h2 class="heebo counters" data-count="4.5" data-suffix=" M" data-format="decimal">4.5 M</h2>
                                        <h6 class="heebo">Patients dans le monde</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fact Section End -->

        <!-- Skill Section Start -->
        <section class="aboutSkillSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tw-stretch-element-inside-column imgDiv3 text-left">
                            <img src="biolab_assets/images/about/1.jpg" alt="Labflox"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="aboutSkillContent">
                            <h5 class="secSubTitle"><span>Notre différence</span></h5>
                            <h2 class="secTitle">
                                Nous proposons une recherche de laboratoire de qualité
                            </h2>
                            <p>
                                Nous réunissons expertise, méthodes fiables et accompagnement sur mesure
                                pour produire des résultats clairs, utiles et exploitables.
                            </p>
                            <div class="singleProgress">
                                <span>Recherche</span>
                                <div class="spParent" data-parcent="70">
                                    <div class="spInner"><span></span></div>
                                </div>
                            </div>
                            <div class="singleProgress">
                                <span>Pathologie</span>
                                <div class="spParent" data-parcent="90">
                                    <div class="spInner"><span></span></div>
                                </div>
                            </div>
                            <div class="singleProgress noMarginBottom">
                                <span>Analyses</span>
                                <div class="spParent" data-parcent="60">
                                    <div class="spInner"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skill Section Start -->

        <!-- Team Section Start -->
        <section class="teamSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5 class="secSubTitle2">Nos experts</h5>
                        <h2 class="secTitle">Rencontrez nos spécialistes</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="singleTeam">
                            <img src="biolab_assets/images/team/1.jpg" alt="Harny Mirinda"/>
                            <div class="stContent">
                                <h3><a href="#">Harny Mirinda</a></h3>
                                <p>Responsable du laboratoire</p>
                            </div>
                            <div class="stShare">
                                <a href="javascript:void(0);"><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="stAllSoc">
                                <a href="#" class="stSoc fac"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" class="stSoc twi"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="stSoc lin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="stSoc dri"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="singleTeam">
                            <img src="biolab_assets/images/team/2.jpg" alt="Harny Mirinda"/>
                            <div class="stContent">
                                <h3><a href="#">Alia Henry</a></h3>
                                <p>Scientifique</p>
                            </div>
                            <div class="stShare">
                                <a href="javascript:void(0);"><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="stAllSoc">
                                <a href="#" class="stSoc fac"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" class="stSoc twi"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="stSoc lin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="stSoc dri"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="singleTeam">
                            <img src="biolab_assets/images/team/3.jpg" alt="Harny Mirinda"/>
                            <div class="stContent">
                                <h3><a href="#">Mac Harnold</a></h3>
                                <p>Pathologiste</p>
                            </div>
                            <div class="stShare">
                                <a href="javascript:void(0);"><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="stAllSoc">
                                <a href="#" class="stSoc fac"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" class="stSoc twi"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="stSoc lin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="stSoc dri"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="singleTeam">
                            <img src="biolab_assets/images/team/4.jpg" alt="Harny Mirinda"/>
                            <div class="stContent">
                                <h3><a href="#">Harny Mirinda</a></h3>
                                <p>Médecin</p>
                            </div>
                            <div class="stShare">
                                <a href="javascript:void(0);"><i class="fa fa-share-alt"></i></a>
                            </div>
                            <div class="stAllSoc">
                                <a href="#" class="stSoc fac"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" class="stSoc twi"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="stSoc lin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="stSoc dri"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section Start -->
        @include('footer')

        <!-- Back To Top -->
        <a href="javascript:void(0);" id="backtotop"><i class="fa fa-angle-double-up"></i></a>
        <!-- Back To Top -->

        @include('partials.scripts')
    </body>
</html>
