<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Laboratoire Biolab spécialisé dans les services de diagnostic, la recherche et les analyses médicales.">
        <meta name="keywords" content="laboratoire, analyses, diagnostic, recherche, Biolab">
        <meta name="author" content="Themewar">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biolab - À propos</title>

        @include('partials.styles')
    </head>
    <body>
        @include('partials.preloader')

        @include('partials.header')

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
                                Biolab Kairouan est un laboratoire d'analyse médicales certifié ISO 9001
                            </h2>
                            <p>
                                Fondé en 2019 par Dr Brahim Lahmar, pharmacien biologiste, ancien interne des hôpitaux.
Notre équipe qualifiée et expérimentée est toujours à la disposition de nos patients et nos partenaires pour vous assurer
une prise en charge optimale et un meilleur service.
                            </p>
                            <div class="row">
                                <div class="col-md-7 col-lg-8">
                                    <ul class="listUL">
                                        <li>Chaque prélèvement est réalisé avec rigueur et précision pour garantir la qualité de vos résultats</li>
                                        <li>Parce qu'un résultat fiable commence par un prélèvement réalisé avec soin</li>
                                        <li>Une attention particulière est portée à chaque prélèvement pour garantir la qualité et la sécurité</li>
                                    </ul>
                                    {{-- <div class="abcAuthor clearfix">
                                        <div class="abcIMG">
                                            <img src="biolab_assets/images/author/6.jpg" alt="Biolab">
                                        </div>
                                        <img class="signatureImage" src="biolab_assets/images/signature_2.png" alt="">
                                    </div> --}}
                                </div>
                                <div class="col-md-5 col-lg-4">
                                    <div class="expCounter2">
                                        <span class="counters" data-count="7" data-suffix="" data-format="leadingzero">7</span>
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
                            <img src="biolab_assets/images/about/33.jpg" alt="Biolab">
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
                                        <h2 class="heebo counters" data-count="1000" data-suffix="+" data-format="separator">1000+</h2>
                                        <h6 class="heebo">Partenaires scientifiques</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <div class="fact01 text-center">
                                        <i class="laf-lHEkBa01"></i>
                                        <h2 class="heebo counters" data-count="500" data-suffix=" K" data-format="plain">500 K</h2>
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
                                        <h2 class="heebo counters" data-count="20" data-suffix=" K" data-format="plain">20 K</h2>
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
                            <img src="biolab_assets/images/home2/1.1.webp" alt="Biolab"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="aboutSkillContent">
                            <h5 class="secSubTitle"><span>Notre différence</span></h5>
                            <h2 class="secTitle">
                                Nous proposons des analyses de laboratoire fiables et des services de diagnostic de qualité supérieure
                            </h2>
                            <p>
                                Nous réunissons expertise, méthodes fiables et accompagnement sur mesure
                                pour produire des résultats clairs, utiles et exploitables.
                            </p>
                            {{-- <div class="singleProgress">
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Skill Section Start -->

        <!-- Team Section Start -->
        {{-- <section class="teamSection">
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
        </section> --}}
        <!-- Team Section Start -->
        @include('footer')

        <!-- Back To Top -->
        <a href="javascript:void(0);" id="backtotop"><i class="fa fa-angle-double-up"></i></a>
        <!-- Back To Top -->

        @include('partials.scripts')
    </body>
</html>
