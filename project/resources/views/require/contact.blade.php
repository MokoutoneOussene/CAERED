<!---contact-us--->
<div class="container">
    <h2 class="text-center mb-3">Contactez-nous</h2>
    <div class="row">
        <div class="col-lg-5 col-md-12 form_inner">
            <div class="form_content">
                <form class="contact-form" method="post" action="">
                    <p>
                        <label> Votre nom<br />
                            <input type="text" name="name" value="" size="60"
                                placeholder="Entrer votre nom" />
                            <br />
                        </label>
                    </p>
                    <p><label> Votre email<br />
                            <input type="email" name="email" value="" size="60"
                                placeholder="Entrer votre Email" />
                            <br />
                        </label>
                    </p>
                    <p>
                        <label> Objet <br />
                            <input type="text" name="subject" value="" size="60"
                                placeholder="Entrer l'objet" />
                            <br />
                        </label>
                    </p>
                    <p>
                        <label> Votre message<br />
                            <textarea name="message" cols="60" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                placeholder="Entrer votre Message"></textarea>
                            <br />
                        </label>
                    </p>
                    <p><input type="submit" value="Envoyer" /></p>
                </form>
            </div>
        </div>
        <div class="col-lg-7 col-md-12 about_company_inner">
            <div class="abt_content">
                <div class="logo text-center mb-4">
                    <img src="{{ asset('assets/img/logo_caered.png') }}" alt="img" class="company_logo_modal w-25">
                </div>
                <div class="text">
                    <h2>Le Centre Africain d’Etudes et de Recherche en Economie du Développement</h2>
                    <p>
                        est une association à but non lucratif, non confessionnel, apolitique,
                        non syndical et sans discrimination aucune.
                    </p>
                    <a href="#">Voir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>
