@extends ('Components.layout')

@section('head')
    <script src="js/questions.js"></script>
    <link href="css/questions.css" rel="stylesheet">

@section('content')
    <button class="button is-primary js-modal-trigger ml-3 mb-3" data-target="modal-js-example">Need help?</button>


    <div class="columns is-flex is-multiline pl-3 pr-3">
        <div class="column is-one-third mb-2">
            <div class="box is-one-third">
                <p class="bd-notification is-primary pb-2">
                    <a href="{{ route('hr.index') }}"><strong><u>HR</u></strong></a>
                </p>
                <article class="media pb-2">
                    <div class="media-left">
                        <span class="icon is-large">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-user-group fa-stack-2x"></i>
                            </span>
                        </span>
                    </div>
                    <div class="media-content">
                        <div class="content">
                            <p class="bd-notification is-primary has-text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </article>
                <footer class="card-footer">
                    <p class="card-footer-item pt-3">
                        <a href="{{ route('hr.index') }}"><i>Go to HR catalog</i></a>
                    </p>
                </footer>
            </div>
        </div>
        <div class="column is-one-third mb-2">
            <div class="box is-one-third">
                <p class="bd-notification is-primary pb-2">
                    <a href="{{ route('it.index') }}"><strong><u>IT</u></strong></a>
                </p>
                <article class="media pb-2">
                    <div class="media-left">
                        <span class="icon is-large">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-computer fa-stack-2x"></i>
                            </span>
                        </span>
                    </div>
                    <div class="media-content">
                        <div class="content">
                            <p class="bd-notification is-primary has-text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </article>
                <footer class="card-footer">
                    <p class="card-footer-item pt-3">
                        <a href="{{ route('it.index') }}"><i>Go to IT catalog</i></a>
                    </p>
                </footer>
            </div>
        </div>
        <div class="column is-one-third mb-2">
            <div class="box is-one-third">
                <p class="bd-notification is-primary pb-2">
                    <a href="{{ route('facilities.index') }}"><strong><u>Facilities</u></strong></a>
                </p>
                <article class="media pb-2">
                    <div class="media-left">
                        <span class="icon is-large">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-lightbulb fa-stack-2x"></i>
                            </span>
                        </span>
                    </div>
                    <div class="media-content">
                        <div class="content">
                            <p class="bd-notification is-primary has-text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </article>
                <footer class="card-footer">
                    <p class="card-footer-item pt-3">
                        <a href="{{ route('facilities.index') }}"><i>Go to Facilities catalog</i></a>
                    </p>
                </footer>
            </div>
        </div>
        <div class="column is-one-third mb-2">
            <div class="box is-one-third">
                <p class="bd-notification is-primary pb-2">
                    <a href="{{ route('finance.index') }}"><strong><u>Finance</u></strong></a>
                </p>
                <article class="media pb-2">
                    <div class="media-left">
                        <span class="icon is-large">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-coins fa-stack-2x"></i>
                            </span>
                        </span>
                    </div>
                    <div class="media-content">
                        <div class="content">
                            <p class="bd-notification is-primary has-text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </article>
                <footer class="card-footer">
                    <p class="card-footer-item pt-3">
                        <a href="{{ route('finance.index') }}"><i>Go to Finance catalog</i></a>
                    </p>
                </footer>
            </div>
        </div>
        <div class="column is-one-third mb-2">
            <div class="box is-one-third">
                <p class="bd-notification is-primary pb-2">
                    <a href="{{ route('masterdata.index') }}"><strong><u>Masterdata</u></strong></a>
                </p>
                <article class="media pb-2">
                    <div class="media-left">
                        <span class="icon is-large">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-database fa-stack-2x"></i>
                            </span>
                        </span>
                    </div>
                    <div class="media-content">
                        <div class="content">
                            <p class="bd-notification is-primary has-text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </article>
                <footer class="card-footer">
                    <p class="card-footer-item pt-3">
                        <a href="{{ route('masterdata.index') }}"><i>Go to Masterdata catalog</i></a>
                    </p>
                </footer>
            </div>
        </div>
        <div class="column is-one-third mb-2">
            <div class="box is-one-third">
                <p class="bd-notification is-primary pb-2">
                    <a href="{{ route('businesssupport.index') }}"><strong><u>Business Support</u></strong></a>
                </p>
                <article class="media pb-2">
                    <div class="media-left">
                        <span class="icon is-large">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-headset fa-stack-2x"></i>
                            </span>
                        </span>
                    </div>
                    <div class="media-content">
                        <div class="content">
                            <p class="bd-notification is-primary has-text-center">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </article>
                <footer class="card-footer">
                    <p class="card-footer-item pt-3">
                        <a href="{{ route('businesssupport.index') }}"><i>Go to Business Support catalog</i></a>
                    </p>
                </footer>
            </div>
        </div>
    </div>

    <div id="modal-js-example" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content is-huge">
            <div class="box">
                <div class="columns is-centered">
                    <div class="column is-four-fifths is-centered has-background-light">
                        <button class="button is-light is-warning js-modal-trigger ml-2 mb-1 mt-1 p-2"
                            data-target="modal-js-hr" onclick="closeAllModals()" id="modalbtn">HR</button>
                        <button class="button is-light is-warning js-modal-trigger ml-2 mb-1 mt-1 p-2"
                            data-target="modal-js-it" onclick="closeAllModals()" id="modalbtn">IT</button>
                        <button class="button is-light is-warning js-modal-trigger ml-2 mb-1 mt-1 p-2"
                            data-target="modal-js-finance" onclick="closeAllModals()" id="modalbtn">Finance</button>
                        <button class="button is-light is-warning js-modal-trigger ml-2 mb-1 mt-1 p-2"
                            data-target="modal-js-facilities" onclick="closeAllModals()" id="modalbtn">Facilites</button>
                        <button class="button is-light is-warning js-modal-trigger ml-2 mb-1 mt-1 p-2"
                            data-target="modal-js-masterdata" onclick="closeAllModals()" id="modalbtn">Masterdata</button>
                        <button class="button is-light is-warning js-modal-trigger ml-2 mb-1 mt-1 p-2"
                            data-target="modal-js-businesssupport" onclick="closeAllModals()" id="modalbtn">Support</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-js-hr" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content is-huge">
            <div class="box">
                <div class="columns is-centered">
                    <div class="column is-four-fifths is-centered has-background-light">
                        <a class="js-modal-trigger" onclick="closeAllModals()"data-target="modal-js-example">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </span>
                        </a>
                        <h4 class="title is-4 has-text-centered mb-0"><strong>HR</strong></h4>
                        <div id="test-block" class="question">
                            <p>Do you want to request paid time off?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createSecondHrBlock()" class="button is-danger">No</button>
                        </div>
                        <div id="second-hr-block" class="question pt-3">
                            <p>Do you want to request additional commuting allowance?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createThirdHrBlock()" class="button is-danger">No</button>
                        </div>
                        <div id="third-hr-block" class="question pt-3">
                            <p>Has there been an issue with your payroll?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createThirdHrBlock()" class="button is-danger">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-js-it" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content is-huge">
            <div class="box">
                <div class="columns is-centered">
                    <div class="column is-four-fifths is-centered has-background-light">
                        <a class="js-modal-trigger" onclick="closeAllModals()"data-target="modal-js-example">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </span>
                        </a>
                        <h4 class="title is-4 has-text-centered mb-0"><strong>IT</strong></h4>
                        <div id="test-block" class="question">
                            <p>Would you like to request some hardware?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createSecondItBlock()" class="button is-danger">No</button>
                        </div>
                        <div id="second-it-block" class="question pt-3">
                            <p>Would you like to change your password?</p>
                            <a href="/update-password"><button class="button is-success">Yes</button></a>
                            <button onclick="createThirdItBlock()" class="button is-danger">No</button>
                        </div>
                        <div id="third-it-block" class="question pt-3">
                            <p>Are you having issues with some software?</p>
                            <a href="{{ route('it.index') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createThirdItBlock()" class="button is-danger">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-js-finance" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content is-huge">
            <div class="box">
                <div class="columns is-centered">
                    <div class="column is-four-fifths is-centered has-background-light">
                        <a class="js-modal-trigger" onclick="closeAllModals()"data-target="modal-js-example">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </span>
                        </a>
                        <h4 class="title is-4 has-text-centered mb-0"><strong>Finance</strong></h4>
                        <div id="test-block" class="question">
                            <p>Do you have a question regarding your salary?</p>
                            <a href="{{ route('finance.index') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createSecondFinanceBlock()" class="button is-danger">No</button>
                        </div>
                        <div id="second-finance-block" class="question pt-3">
                            <p>Do you have a special project cost request?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createSecondFinanceBlock()" class="button is-danger">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-js-facilities" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content is-huge">
            <div class="box">
                <div class="columns is-centered">
                    <div class="column is-four-fifths is-centered has-background-light">
                        <a class="js-modal-trigger" onclick="closeAllModals()"data-target="modal-js-example">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </span>
                        </a>
                        <h4 class="title is-4 has-text-centered mb-0"><strong>Facilites</strong></h4>
                        <div id="test-block" class="question">
                            <p>Would you like to request a handyman service?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createSecondFacilitiesBlock()" class="button is-danger">No</button>
                        </div>
                        <div id="second-facilities-block" class="question pt-3">
                            <p>Would you like to request lunch service?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createThirdFacilitiesBlock()" class="button is-danger">No</button>
                        </div>
                        <div id="third-facilities-block" class="question pt-3">
                            <p>Is there an issue with the coffee machine?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createFourthFacilitiesBlock()" class="button is-danger">No</button>
                        </div>
                        <div id="fourth-facilities-block" class="question pt-3">
                            <p>Is there some sort of technical issue?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                                <button onclick="createFourthFacilitiesBlock()" class="button is-danger">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-js-masterdata" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content is-huge">
            <div class="box">
                <div class="columns is-centered">
                    <div class="column is-four-fifths is-centered has-background-light">
                        <a class="js-modal-trigger" onclick="closeAllModals()"data-target="modal-js-example">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </span>
                        </a>
                        <h4 class="title is-4 has-text-centered mb-0"><strong>Masterdata</strong></h4>
                        <div id="test-block" class="question">
                            <p>Would you like to hand in a request for a new vendor?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createSecondMasterdataBlock()" class="button is-danger">No</button>
                        </div>
                        <div id="second-masterdata-block" class="question pt-3">
                            <p>Would you like to change a BOM component?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createThirdMasterdataBlock()" class="button is-danger">No</button>
                        </div>
                        <div id="third-masterdata-block" class="question pt-3">
                            <p>Is there an issue with materials?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createThirdMasterdataBlock()" class="button is-danger">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-js-businesssupport" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content is-huge">
            <div class="box">
                <div class="columns is-centered">
                    <div class="column is-four-fifths is-centered has-background-light">
                        <a class="js-modal-trigger" onclick="closeAllModals()"data-target="modal-js-example">
                            <span class="fa-stack fa-lg">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </span>
                        </a>
                        <h4 class="title is-4 has-text-centered mb-0"><strong>Business Support</strong></h4>
                        <div id="test-block" class="question">
                            <p>Would you like to hand in a new destruction request?</p>
                            <a href="{{ route('catalog.create') }}"><button class="button is-success">Yes</button></a>
                            <button onclick="createSecondSupportBlock()" class="button is-danger">No</button>
                        </div>
                        <div id="second-support-block" class="question pt-3">
                            <p>Would you like to create a capital budgeting demand?</p>
                            <a href={{ route('catalog.create') }}><button class="button is-success">Yes</button></a>
                            <button onclick="createSecondSupportBlock()" class="button is-danger">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Add a click event on buttons to open a specific modal
            (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
                const modal = $trigger.dataset.target;
                const $target = document.getElementById(modal);

                $trigger.addEventListener('click', () => {
                    // openModal($target);
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
    </script>
@endsection
