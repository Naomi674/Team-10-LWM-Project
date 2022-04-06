<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="https://s24.q4cdn.com/466475068/files/images/logos/Full-color.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <div class="field navbar-divider">
                <div class="control">
                    <input class="input" type="text" placeholder="Search">
                </div>
            </div>
            <a class="navbar-item {{ Request::route()->getName() === 'welcome.index' ? "is-active" : "" }}" href="/">
                Home
            </a>

            <a class="navbar-item {{ Request::route()->getName() === 'knowledge.index' ? "is-active" : "" }}" href="{{ route('knowledge.index') }}">
                Knowledge
            </a>

            <a class="navbar-item {{ Request::route()->getName() === 'foo.index' ? "is-active" : "" }}">
                Foo
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link {{ Request::route()->getName() === 'hr.index' || 'it.index' || 'facilities.index' || 'financial.index' ? "is-active" : "" }}">
                    Catalog
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item {{ Request::route()->getName() === 'hr.index' ? "is-active" : "" }}">
                        HR
                    </a>
                    <a class="navbar-item {{ Request::route()->getName() === 'it.index' ? "is-active" : "" }}">
                        IT
                    </a>
                    <a class="navbar-item {{ Request::route()->getName() === 'facilities.index' ? "is-active" : "" }}" href="{{ route('facilities.index') }}">
                        Facilities
                    </a>
                    <a class="navbar-item {{ Request::route()->getName() === 'financial.index' ? "is-active" : "" }}">
                        Financial
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary">
                        <strong>My account</strong>
                    </a>
                    <a class="button is-light">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>