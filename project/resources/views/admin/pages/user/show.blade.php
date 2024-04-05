@extends('admin.layouts.mainlayout')

@section('maincontent')
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('storage') . '/' . $find->photo }}" alt="Profile" class="rounded-circle">
                        <h2>{{ $find->nom }} {{ $find->prenom }}</h2>
                        <h3>{{ $find->Role->libelle }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Profil</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-edit">Publications</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-settings">Projets</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password">Blogs</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">A propos</h5>
                                <p class="small fst-italic">Sunt est soluta temporibus
                                    accusantium neque nam maiores cumque temporibus. Tempora
                                    libero non est unde veniam est qui dolor. Ut sunt iure
                                    rerum quae quisquam autem eveniet perspiciatis odit. Fuga
                                    sequi sed ea saepe at unde.</p>

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Activation</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->active }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nom complet</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->nom }} {{ $find->prenom }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Role</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->Role->label }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Telephone</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->telephone }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->email }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Institution</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->institution }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Profession</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->profession }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Dernier diplome</div>
                                    <div class="col-lg-9 col-md-8">{{ $find->diplome }}</div>
                                </div>
                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                <!-- Profile Edit Form -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (App\Models\Publication::where('users_id', '=', Auth::user()->id)->get() as $pub)
                                            <tr>
                                                <td>{{ $pub->id }}</td>
                                                <td>{{ $pub->titre }}</td>
                                                <td>{{ $pub->date_publication }}</td>
                                                <td>{{ $pub->Type->libelle }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>

                            <div class="tab-pane fade pt-3" id="profile-settings">
                                <!-- Settings Form -->
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">Titre du projet</th>
                                            <th scope="col">Date debut</th>
                                            <th scope="col">Date fin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (App\Models\Projet::where('users_id', '=', Auth::user()->id)->get() as $prog)
                                            <tr>
                                                <td>{{ $prog->id }}</td>
                                                <td>{{ $prog->titre }}</td>
                                                <td>{{ $prog->date_debut }}</td>
                                                <td>{{ $prog->date_fin }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">Titre du post</th>
                                            <th scope="col">Contenu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (App\Models\Post::where('users_id', '=', Auth::user()->id)->get() as $prog)
                                            <tr>
                                                <td>{{ $prog->id }}</td>
                                                <td>{{ $prog->titre }}</td>
                                                <td>{{ $prog->date_debut }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
