@extends ('Components.layout')

@section('head')
<script src="js/questions.js"></script>

<style>
    #test-block {
        display: block;
    }
    #second-block, #third-block, #fourth-block, #fifth-block, #sixth-block {
        display: none;
    }
    .column {
        border-radius: 10px;
    }
</style>

@section('content')
    <div class="columns is-flex is-multiline pl-3 pr-3">
        <div class="column is-one-third mb-2">
            <div class="box is-one-third">
                <p class="bd-notification is-primary pb-2">
                    <a href="{{ route('hr.index') }}"><strong><u>HR</u></strong></a>
                </p>
                <article class ="media pb-2">
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
                <article class ="media pb-2">
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
                <article class ="media pb-2">
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
                <article class ="media pb-2">
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
                <article class ="media pb-2">
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
                <article class ="media pb-2">
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

    <div class="columns is-centered">
        <div class="column is-four-fifths is-centered has-background-light">
            <h4 class="title is-4 has-text-centered mb-0"><strong>Don't know where to look for help?</strong></h4>
            <div id="test-block" class="question">
                <p>Do you have a problem or request regarding your computer?</p>
                    <a href="{{ route('it.index') }}"><button class="button is-success">Yes</button></a>
                    <button onclick="createSecondBlock()" class="button is-danger">No</button>
            </div>
            <div id="second-block" class="question pt-3">
                <p>Would you like to change your password?</p>
                    <a href="/update-password"><button class="button is-success">Yes</button></a>
                    <button onclick="createThirdBlock()" class="button is-danger">No</button>
            </div>
            <div id="third-block" class="question pt-3">
                <p>Do you have a question regarding your salary or payroll?</p>
                    <a href="{{ route('finance.index') }}"><button class="button is-success">Yes</button></a>
                    <button onclick="createFourthBlock()" class="button is-danger">No</button>
            </div>
            <div id="fourth-block" class="question pt-3">
                <p>Would you like to create a new ticket?</p>
                    <a href="{{ route('ticket.create') }}"><button class="button is-success">Yes</button></a>
                    <button onclick="createFifthBlock()" class="button is-danger">No</button>
            </div>
            @if (auth()->user()->role_id == 1)
            <div id="fifth-block" class="question pt-3">
                <p>Do you want to see an overview of all users?</p>
                    <a href="{{ route('admin.userManagement.index') }}"><button class="button is-success">Yes</button></a>
                    <button onclick="createSixthBlock()" class="button is-danger">No</button>
            </div>
            @endif
            <div id="sixth-block" class="question pt-3">
                <p>Is there an issue with the coffee machine?</p>
                    <a href="{{ route('facilities.index') }}"><button class="button is-success">Yes</button></a>
                    <button onclick="createSixthBlock()" class="button is-danger">No</button>
            </div>
        </div>
    </div>
@endsection
