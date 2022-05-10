@extends('Components.layout')

@section('content')
    <div class="hero mt-5">
        <p class="title has-text-centered">Knowledge</p>
    </div>
    <div class="container mt-4">
        <div class="columns">
            <!-- Left side -->
            <div class="column is-one-quarter">
                <div class="pt-6">
                    <div class="label">Categories</div>
                    <aside class="menu">
                        <ul class="menu-list">
                            <li><a href="#" class="has-background-primary has-text-white">FAQs</a></li>
                            <li><a href="#">IT Knowledge</a></li>
                            <li><a href="#">Onboarding</a></li>
                            <li><a href="#">ServiceNow Portal</a></li>
                            <li><a href="#">Facilities</a></li>
                            <li><a href="#">HR</a></li>
                            <li><a href="#">Financial services</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <!-- Right Side -->
            <div class="column">
                <div class="title">FAQs</div>
                <div class="columns">
                    <!-- Title -->
                    <div class="card is-collapsible mt-3">
                        <header class="card-header">
                            <p class="card-header-title">
                                How do I extend my Microsoft Office subscription?
                            </p>
                            <a href="#" data-action="collapse" class="card-header-icon is-hidden-fullscreen" aria-label="more options">
                                <span class="icon">
                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </a>
                        </header>
                        <div id="collapsible-card" class="is-collapsible">
                            <div class="card-content">
                                <p class="content is-5">
                                    Does everybody know that pig named Lorem Ipsum? She's a disgusting pig, right? Despite the constant negative ipsum covfefe. Lorem Ipsum is a choke artist. <a href="#"><u>It chokes!</u></a> We are going to make placeholder text great again. Greater than ever before.
                                </p>
                                <p class="content is-5">
                                    The concept of Lorem Ipsum was created by and for the Chinese in order to make U.S. design jobs non-competitive. I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. It’s about making placeholder text great again. That’s what people want, they want placeholder text to be great again. Lorem Ipsum best not make any more threats to your website. It will be met with fire and fury like the world has never seen.
                                </p>
                                <p class="subtitle is-6">
                                    <i>Jane Doe</i>
                                </p>
                            </div>
                            <footer class="card-footer">
                                <p class="card-footer-item">
                                    <a href="#">Read more...</a>
                                </p>
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="card is-collapsible mt-3">
                        <header class="card-header">
                            <p class="card-header-title">
                                How can I reset my password?
                            </p>
                            <a href="#" data-action="collapse" class="card-header-icon is-hidden-fullscreen" aria-label="more options">
                                    <span class="icon">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                            </a>
                        </header>
                        <div id="collapsible-card" class="is-collapsible">
                            <div class="card-content">
                                <p class="content is-5">
                                    The concept of Lorem Ipsum was created by and for the Chinese in order to make U.S. design jobs non-competitive. I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. It’s about making placeholder text great again. That’s what people want, they want placeholder text to be great again. Lorem Ipsum best not make any more threats to your website. It will be met with fire and fury like the world has never seen.
                                </p>
                                <p class="subtitle is-6">
                                    <i>Jane Doe</i>
                                </p>
                            </div>
                            <footer class="card-footer">
                                <p class="card-footer-item">
                                    <a href="#">Read more...</a>
                                </p>
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="card is-collapsible mt-3">
                        <header class="card-header">
                            <p class="card-header-title">
                                How can I change the details for a vendor?
                            </p>
                            <a data-action="collapse" class="card-header-icon is-hidden-fullscreen" aria-label="more options">
                                    <span class="icon">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                            </a>
                        </header>
                        <div id="collapsible-card" class="is-collapsible">
                            <div class="card-content">
                                <p class="content is-5">
                                    Does everybody know that pig named Lorem Ipsum? She's a disgusting pig, right? Despite the constant negative ipsum covfefe. Lorem Ipsum is a choke artist. <a href="#"><u>It chokes!</u></a> We are going to make placeholder text great again. Greater than ever before.
                                </p>
                                <p class="content is-5">
                                    The concept of Lorem Ipsum was created by and for the Chinese in order to make U.S. design jobs non-competitive. I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. It’s about making placeholder text great again.
                                </p>
                                <p class="subtitle is-6">
                                    <i>Jane Doe</i>
                                </p>
                            </div>
                            <footer class="card-footer">
                                <p class="card-footer-item">
                                    <a href="#">Read more...</a>
                                </p>
                            </footer>
                        </div>
                    </div>
                </div>
                <p class="content is-5 pt-3" align="right">
                    <a href="#">View all FAQs</a>
                </p>
            </div>
        </div>
    </div>
@endsection
