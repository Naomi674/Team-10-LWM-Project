<nav class="navbar mb-4" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="https://lwmdev.service-now.com/f1580754dbf8b700a797298a48961940.iix" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <div class="field has-icons-right">
                <div class="field navbar-divider mr-3 ml-3" style="background-color: #00385a">
                    <p class="control is-expanded has-icons-right">
                        <input class="input" type="search" placeholder="Search..." id="searchbar" onkeyup="search_animal()"/>
                        <span class="icon is-small is-right"><i class="fas fa-search"></i></span>
                    </p>
                </div>
            </div>
            <a class="navbar-item has-text-white {{ Request::route()->getName() === 'index' ? 'is-active' : '' }}"
                href="/">
                Home
            </a>

            <a class="navbar-item has-text-white {{ Request::route()->getName() === 'knowledge.index' ? 'is-active' : '' }}"
                href="{{ route('knowledge.index') }}">
                Knowledge
            </a>

            <a class="navbar-item has-text-white {{ Request::route()->getName() === 'ticket.index' ? 'is-active' : '' }}"
                href="{{ route('ticket.index') }}">
                My Tickets
            </a>

            <a class="navbar-item has-text-white {{ Request::route()->getName() === 'status.index' ? 'is-active' : '' }}"
                href="{{ route('status.index') }}">
                System Status
            </a>

            <div class="navbar-item has-dropdown is-hoverable has-text-white">
                <a class="navbar-link has-text-white {{ Request::route()->getName() === 'catalogs.index' ? 'is-active' : '' }}"
                    href="{{ route('catalog.index') }}">
                    Catalog
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item has-text-white {{ Request::route()->getName() === 'hr.index' ? 'is-active' : '' }}"
                        href="{{ route('hr.index') }}">
                        HR
                    </a>
                    <a class="navbar-item has-text-white {{ Request::route()->getName() === 'it.index' ? 'is-active' : '' }}"
                        href="{{ route('it.index') }}">
                        IT
                    </a>
                    <a class="navbar-item has-text-white {{ Request::route()->getName() === 'facilities.index' ? 'is-active' : '' }}"
                        href="{{ route('facilities.index') }}">
                        Facilities
                    </a>
                    <a class="navbar-item has-text-white {{ Request::route()->getName() === 'finance.index' ? 'is-active' : '' }}"
                        href="{{ route('finance.index') }}">
                        Finance
                    </a>
                    <a class="navbar-item has-text-white {{ Request::route()->getName() === 'masterdata.index' ? 'is-active' : '' }}"
                        href="{{ route('masterdata.index') }}">
                        Masterdata
                    </a>
                    <a class="navbar-item has-text-white {{ Request::route()->getName() === 'businesssupport.index' ? 'is-active' : '' }}"
                        href="{{ route('businesssupport.index') }}">
                        Business Support
                    </a>
                </div>
            </div>

            @if (auth()->user()->role_id == 1)
                <a class="navbar-item has-text-white {{ Request::route()->getName() === 'admin.admin.index' ? 'is-active' : '' }}"
                    href="{{ route('admin.admin.index') }}">
                    Admin
                </a>
            @endif
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary" href="{{ route('account.index') }}">
                        <strong>My account</strong>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="button is-light">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
