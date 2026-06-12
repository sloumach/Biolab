<!-- Header Start -->
<header class="header01 isSticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navArea">
                    <div class="logo logo--large">
                        <a href="{{ route('home') }}"><img src="{{ asset('biolab_assets/images/biolab-logo.png') }}" alt="Biolab"/></a>
                    </div>
                    <nav class="mainMenu">

                    </nav>
                    <div class="accessNav">
                        <div class="phoneCall">
                            <i class="fa fa-phone"></i>
                            <span>Téléphone d'urgence 24h/24</span>
                            <h6>+216 77 273 000</h6>
                        </div>
                        <a href="{{ route('appointment') }}" class="lab_btn lightHover requestBTN"><span><i class="fa fa-calendar-plus-o"></i>Prendre rendez-vous</span></a>
                        <a href="javascript:void(0);" class="lab_btn lightHover requestBTN" data-toggle="modal" data-target="#complaintModal"><span><i class="fa fa-comment-o"></i>R&eacute;clamation</span></a>
                        <a href="javascript:void(0);" class="lab_btn lightHover requestBTN" data-toggle="modal" data-target="#certificatesModal"><span><i class="fa fa-file-pdf-o"></i>Certificats</span></a>
                        <a href="javascript:void(0);" class="menuBtn"><span><i class="fa fa-bars"></i>Menu</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

@if (session('complaint_success'))
    <div class="container" style="margin-top: 18px;">
        <div class="alert alert-success" style="margin-bottom: 0;">{{ session('complaint_success') }}</div>
    </div>
@endif

<div class="modal fade" id="complaintModal" tabindex="-1" role="dialog" aria-labelledby="complaintModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="post" action="{{ route('complaints.store') }}">
                @csrf
                <input type="hidden" name="complaint_form" value="1">
                <div class="modal-header">
                    <h5 class="modal-title" id="complaintModalTitle">R&eacute;clamation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($errors->any() && old('complaint_form'))
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif
                    <div class="form-group">
                        <label for="complaint_full_name">Nom et pr&eacute;nom</label>
                        <input id="complaint_full_name" type="text" name="full_name" value="{{ old('full_name') }}" class="form-control @error('full_name') is-invalid @enderror" required>
                    </div>
                    <div class="form-group">
                        <label for="complaint_phone">Num&eacute;ro de t&eacute;l&eacute;phone</label>
                        <input id="complaint_phone" type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" required>
                    </div>
                    <div class="form-group">
                        <label for="complaint_message">Message</label>
                        <textarea id="complaint_message" name="message" class="form-control @error('message') is-invalid @enderror" rows="4" maxlength="100" required>{{ old('message') }}</textarea>
                        <small class="form-text text-muted">100 caract&egrave;res maximum.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="certificatesModal" tabindex="-1" role="dialog" aria-labelledby="certificatesModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="certificatesModalTitle">Certificats</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="padding: 0;">
                <iframe src="{{ asset('documents/iso.pdf') }}" title="Certificats" style="width: 100%; height: 75vh; border: 0;"></iframe>
            </div>
            <div class="modal-footer">
                <a href="{{ asset('documents/iso.pdf') }}" class="btn btn-primary" target="_blank" rel="noopener">Ouvrir dans un nouvel onglet</a>
                <button type="button" class="btn btn-light" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

@if ($errors->any() && old('complaint_form'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (window.jQuery) {
                jQuery('#complaintModal').modal('show');
            }
        });
    </script>
@endif
