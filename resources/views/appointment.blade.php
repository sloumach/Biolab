<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Demandez un rendez-vous auprès du laboratoire Biolab pour planifier vos analyses médicales.">
        <meta name="keywords" content="rendez-vous, laboratoire, analyses, diagnostic, Biolab">
        <meta name="author" content="Themewar">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biolab - Rendez-vous</title>

        @include('partials.styles')
    </head>
    <body>
        @include('partials.preloader')
        @include('partials.header')

        <!-- Page Banner Start -->
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-6">
                        <div class="pageBannerContent">
                            <h5>Rendez-vous</h5>
                            <h2>Une prescription de votre praticien est requise pour toute analyse.</h2>
                            <div class="pageBreadCum">
                                <a href="{{ route('home') }}">Accueil</a>
                                <i class="fa fa-angle-right"></i>
                                <span>Rendez-vous</span>
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
                                <span>Pour tous les rendez-vous</span>
                                <h6>+36 55 540 069</h6>
                            </div>
                            <h2>Informations sur le rendez-vous</h2>
                            <p>
                                Nous mettons à votre disposition un accompagnement rigoureux pour planifier vos analyses
                                et préparer au mieux votre passage au laboratoire.
                            </p>
                            <ul class="listUL">
                                <li>Prévenez-nous à l'avance si vous devez modifier ou annuler votre rendez-vous.</li>
                                <li>Préparez les informations importantes à transmettre au professionnel de santé.</li>
                                <li>Apportez la liste de vos traitements et compléments, avec les dosages si possible.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="appointmentForm">
                            <h2>Remplir le formulaire</h2>
                            <form method="post" action="{{ route('appointment.store') }}" id="appointment_form">
                                @csrf
                                <input type="text" name="patient_name" value="{{ old('patient_name') }}" placeholder="Nom du patient *" class="required @error('patient_name') reqError @enderror"/>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Votre e-mail *" class="required @error('email') reqError @enderror"/>
                                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Votre téléphone *" class="required @error('phone') reqError @enderror"/>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select name="gender" class="@error('gender') reqError @enderror">
                                            <option value="">Sélectionnez le genre</option>
                                            <option value="Male" @selected(old('gender') === 'Male')>Homme</option>
                                            <option value="Female" @selected(old('gender') === 'Female')>Femme</option>
                                            <option value="Other" @selected(old('gender') === 'Other')>Autre</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="date_picker">
                                            <input type="text" name="appointment_date" value="{{ old('appointment_date') }}" placeholder="aaaa-mm-jj" id="litepicker" class="required @error('appointment_date') reqError @enderror"/>
                                            <label for="litepicker"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit"><span>Envoyer la demande</span></button>
                                @if (session('success'))
                                    <div class="alert con_message alert-success" style="display: block;">{{ session('success') }}</div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert con_message alert-warning" style="display: block;">
                                        Merci de corriger les champs en surbrillance puis de renvoyer le formulaire.
                                    </div>
                                @endif
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
                            <h5 class="secSubTitle2 heebo">Gagner en efficacité</h5>
                            <h2 class="secTitle">
                                Élargissez votre offre d'analyses grâce à une logistique maîtrisée
                            </h2>
                            <a href="{{ route('appointment') }}" class="lab_btn lightHover">Prendre rendez-vous</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="imgDiv">
                            <img src="biolab_assets/images/home1/2.png" alt="Biolab"/>
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
