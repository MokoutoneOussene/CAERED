<section class="team-section">
    <!--===============spacing==============-->
    <div class="pd_top_80"></div>
    <!--===============spacing==============-->
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="title_all_box style_one  dark_color">
                    <div class="title_sections">
                        <div class="before_title"> Membres </div>
                        <h2>Equipe pluri-disciplinaire</h2>
                    </div>
                    <span>• des enseignants chercheurs expérimentés et de grande qualité reconnue aux niveaux national
                        et international</span>
                    <span>• de jeunes et dynamiques enseignants faisant aussi leurs premiers pas dans la
                        recherche</span>
                    <span>• des étudiants en Master et en Thèse doctorat unique ou Ph.D</span>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="description_box">
                    <p class="mb-2">
                        Le CAERED est constitué par un groupe multidisciplinaire de personnes compétentes,
                        expérimentées, motivées, dynamiques et résolument engagées dans leurs domaines
                        d’activités. Ces personnes aux profilx divers comprennent en leur sein :
                    </p>
                    <!--===============spacing==============-->
                    <div class="mr_bottom_20"></div>
                    <!--===============spacing==============-->
                </div>
            </div>
            <!--===============spacing==============-->
            <div class="mr_bottom_30"></div>
            <!--===============spacing==============-->
        </div>
        <div class="row">
            @foreach (App\Models\User::where('roles_id', '=', 2)->get() as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="team_box style_one">
                        <div class="team_box_outer">
                            <div class="member_image">
                                <img src="{{ asset('storage') . '/' . $item->photo }}" alt="team image" />
                            </div>
                            <div class="about_member">
                                <div class="authour_details">
                                    <span> {{ $item->profession }} </span>
                                    <h6>{{ $item->nom }} {{ $item->prenom }}</h6>
                                    <div class="button_view">
                                        <a href="#" target="_blank" rel="nofollow" class="theme-btn one"> View Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="mr_bottom_30"></div>
                    <!--===============spacing==============-->
                </div>
            @endforeach
        </div>
    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_60"></div>
    <!--===============spacing==============-->
</section>
