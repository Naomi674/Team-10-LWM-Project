@section('head')
<style>
    li {
        list-style-type: none;
    }
</style>

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
            <a class="navbar-item js-modal-trigger has-text-white" data-target="modal-js">
                Search &nbsp;
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
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

<div id="modal-js" class="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box">
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()" class="input">
                @if(auth()->user()->role_id == 1)
                <li class="ml-2 mt-3"><a href="{{ route('admin.admin.index') }}">Admin</a></li>
                @endif
                <li class="ml-2 mt-3"><a href="{{ route('catalog.index') }}">Catalog</a></li>
                <li class="ml-2 mt-3"><a href="{{ route('ticket.create') }}">Create a ticket</a></li>
                <li class="ml-2 mt-3"><a href="{{ route('knowledge.index') }}">Knowledge</a></li>
                <li class="ml-2 mt-3"><a href="{{ route('ticket.index') }}">My Tickets</a></li>
                <li class="ml-2 mt-3"><a href="{{ route('status.index') }}">System Status</a></li>
                <li class="ml-2 mt-3"><a href="/update-password">Update your password</a></li>
                @if(auth()->user()->role_id == 1)
                <li class="ml-2 mt-3"><a href="{{ route('admin.userManagement.index') }}">User Management</a></li>
                @endif
                <li class="ml-2 mt-3"><a href="{{ route('hr.index') }}">HR Catalog</a></li>
                <li class="ml-2 mt-3"><a href="{{ route('it.index') }}">IT Catalog</a></li>
                <li class="ml-2 mt-3"><a href="{{ route('facilities.index') }}">Facilities Catalog</a></li>
                <li class="ml-2 mt-3"><a href="{{ route('finance.index') }}">Finance Catalog</a></li>
                <li class="ml-2 mt-3"><a href="{{ route('masterdata.index') }}">Masterdata Catalog</a></li>
                <li class="ml-2 mt-3"><a href="{{ route('businesssupport.index') }}">Business Support Catalog</a></li>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Functions to open and close a modal
        function openModal($el) {
            $el.classList.add('is-active');
        }

        function closeModal($el) {
            $el.classList.remove('is-active');
        }

        function closeAllModals() {
            (document.querySelectorAll('.modal') || []).forEach(($modal) => {
                closeModal($modal);
            });
        }

        // Add a click event on buttons to open a specific modal
        (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
            const modal = $trigger.dataset.target;
            const $target = document.getElementById(modal);
            console.log($target);

            $trigger.addEventListener('click', () => {
                openModal($target);
            });
        });

        // Add a click event on various child elements to close the parent modal
        (document.querySelectorAll(
            '.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || [])
        .forEach(($close) => {
            const $target = $close.closest('.modal');

            $close.addEventListener('click', () => {
                closeModal($target);
            });
        });

        // Add a keyboard event to close all modals
        document.addEventListener('keydown', (event) => {
            const e = event || window.event;

            if (e.keyCode === 27) { // Escape key
                closeAllModals();
            }
        });
    });

    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
            } else {
            a[i].style.display = "none";
            }
        }
    }
</script>
