<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Gestion Publication</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('gestion_publication.create') }}">
                        <i class="bi bi-circle"></i><span>Ajouter Publication</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('gestion_publication.index') }}">
                        <i class="bi bi-circle"></i><span>Liste Publication</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Gestion Projet</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('gestion_projets.create') }}">
                        <i class="bi bi-circle"></i><span>Ajouter Projet</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('gestion_projets.index') }}">
                        <i class="bi bi-circle"></i><span>Liste Projet</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        @if (Auth::user()->roles_id == 1)
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Utilisateurs</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('gestion_users.create') }}">
                            <i class="bi bi-circle"></i><span>Ajouter utilisateur</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gestion_users.index') }}">
                            <i class="bi bi-circle"></i><span>Liste utilisateurs</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->
        @endif

        <li class="nav-heading">Pages</li>
        @if (Auth::user()->roles_id == 1)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('gestion_newsletters.index') }}">
                    <i class="bi bi-person"></i>
                    <span>Newsletters</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('gestion_partenaires.index') }}">
                    <i class="bi bi-question-circle"></i>
                    <span>Partenaire</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->
        @endif
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('gestion_blog.index') }}">
                <i class="bi bi-card-list"></i>
                <span>Blog</span>
            </a>
        </li><!-- End Register Page Nav -->

    </ul>

</aside>
