@extends('Components.layout')

@section('content')
    <div class="container is-max-desktop">
        <div>
            <input class="input is-hovered mt-3" type="text" placeholder="Search">
        </div>
    </div>

    <div class="box box-shadow-3 mt-4">
        <div class="columns is-vcentered mt-3">
            <div class="column is-half ml-6">
                <h3 class="title is-3" align="center"><u>Recently asked questions</u></h3>
                <!--<p class="bd-notification is-primary">When is my request for a break going to be looked at?</p>-->
                <div class="card is-collapsible mt-3">
                    <header class="card-header">
                        <p class="card-header-title">
                            When is my break request going to get looked at? It's been 3 weeks!
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
                                Does everybody know that pig named Lorem Ipsum? She's a disgusting pig, right? Despite the constant negative ipsum covfefe. Lorem Ipsum is a choke artist. It chokes! We are going to make placeholder text great again. Greater than ever before.
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
                <div class="card is-collapsible mt-3">
                    <header class="card-header">
                        <p class="card-header-title">
                            Can I bring my dog to work?
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
                <p class="content is-5 pt-3" align="right">
                    <a href="#">View all Questions</a>
                </p>
            </div>

            <div class="column mr-3">
                <h3 class="title is-3" align="center"><u>FAQs</u></h3>
                    <div class="card is-collapsible mt-3">
                        <header class="card-header">
                            <p class="card-header-title">
                                How does this portal work?
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
                                    Does everybody know that pig named Lorem Ipsum? She's a disgusting pig, right? Despite the constant negative ipsum covfefe. Lorem Ipsum is a choke artist. It chokes! We are going to make placeholder text great again. Greater than ever before.
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
                <div class="card is-collapsible mt-3">
                    <header class="card-header">
                        <p class="card-header-title">
                            How can I order lunch?
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
                                Does everybody know that pig named Lorem Ipsum? She's a <b>disgusting pig</b>, right? Despite the constant negative ipsum covfefe. Lorem Ipsum is a choke artist. It chokes! We are going to make placeholder text great again. Greater than ever before.
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
                <p class="content is-5 pt-3" align="right">
                    <a href="#">View all FAQs</a>
                </p>
            </div>
        </div>
    </div>
@endsection
