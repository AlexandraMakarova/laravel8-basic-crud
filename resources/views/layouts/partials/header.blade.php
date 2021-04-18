<header>
    <h1>Coders free</h1>
    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>
            <li>
                <a href="{{ route('cursos.index') }}"
                    class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}">Cursos</a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            </li>
            <li><a href="{{ route('contactanos.index') }}"
                    class="{{ request()->routeIs('contactanos.index') ? 'active' : '' }}">Contactanos</a></li>
        </ul>
    </nav>
</header>
