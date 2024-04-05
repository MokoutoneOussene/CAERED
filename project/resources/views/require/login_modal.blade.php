<div class="modal_popup one">
    <div class="modal-popup-inner">
        <div class="close-modal"><i class="fa fa-times"></i></div>
        <div class="modal_box">
            <div class="row">
                <div class="col-lg-5 col-md-12 form_inner">
                    <h3 class="text-center text-success m-3">Authentification</h3>
                    <div class="form_content">
                        <form class="contact-form" method="post" action="{{ route('login') }}">
                            @csrf
                            <p><label> Email<br />
                                    <input type="email" name="email" size="40" placeholder="Entrer votre email" /> <br />
                                    <i class="fa fa-envelope"></i><br />
                                </label>
                            </p>
                            <p><label> Password<br />
                                    <input type="password" name="password" value="" size="40" placeholder="Entrer votre mot de passe" />
                                    <br />
                                    <i class="fa fa-envelope"></i><br />
                                </label>
                            </p>
                            <p><input type="submit" value="Login" /></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 about_company_inner">
                    <div class="abt_content">
                        <div class="logo text-center mb-4">
                            <img src="{{ asset('assets/img/logo_caered.png') }}" alt="img"
                                class="company_logo_modal w-25">
                        </div>
                        <div class="text">
                            <h4>Le Centre Africain d’Etudes et de Recherche en Economie du Développement</h4>
                            <p>
                                est une association à but non lucratif, non confessionnel, apolitique,
                                non syndical et sans discrimination aucune.
                            </p>
                        </div>
                        <div class="post_contet_modal">
                            <div class="">
                                <a href="{{route('form_member')}}">
                                    <button class="btn btn-success">Devenez membre du CAERED</button>
                                </a>
                                <a href="{{route('form_student')}}">
                                    <button class="btn btn-success">Créer un compte etudiant</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
