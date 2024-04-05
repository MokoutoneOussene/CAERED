<section class="newsteller style_one bg_dark_1">
    <!--===============spacing==============-->
    <div class="pd_top_40"></div>
    <!--===============spacing==============-->
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="content">
                    <h2>Joignez-vous à notre Newsletters</h2>
                    <p>Pour recevoir nos actualités et mises à jour directement dans votre boîte de réception.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="item_scubscribe">
                    <div class="input_group">
                        <form class="mc4wp-form" method="POST" action="{{ route('gestion_newsletters.store') }}">
                            @csrf
                            <div class="mc4wp-form-fields">
                                <input type="email" name="email" placeholder="Votre adresse email" required="">
                                <input type="submit" value="Souscrire">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_40"></div>
    <!--===============spacing==============-->
</section>
