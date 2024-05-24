<aside class="bg-dark navbar-dark text-white pt-3">
    <nav>
        <ul>
            <li>
                <a href="{{ route('admin.home') }}">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.projects.index') }}">
                    <i class="fa-regular fa-folder-closed"></i>
                    <span>Lista Progetti</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.projects.create') }}">
                    <i class="fa-regular fa-square-plus"></i>
                    <span>Nuovo Progetto</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.technologies.index') }}">
                    <i class="fa-solid fa-tags"></i>
                    <span>Gestione Tecnologie</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.types.index') }}">
                    <i class="fa-solid fa-tags"></i>
                    <span>Gestione Tipi</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
