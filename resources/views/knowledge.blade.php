@extends('Components.layout')

@section('head')
    <script src="https://unpkg.com/intro.js/minified/intro.min.js"></script>
    <script src="/js/knowledge.js"></script>
    <link href="https://unpkg.com/intro.js/minified/introjs.min.css" rel="stylesheet">
@endsection

@section('body')
    onload="init()" class="body"
@endsection

@section('content')
    <div class="mt-5">
        <p class="title has-text-centered" data-position="right" data-title="The Knowledge Page" data-intro="This is the Knowledge Page, here all questions you might have are getting answered.">Knowledge</p>
    </div>
    <div class="container mt-4">
        <div class="columns">
            <!-- Left side -->
            <div class="column is-one-quarter">
                <div class="pt-6" data-intro="Here you can select a category for your questions">
                    <div class="label">Categories</div>
                    <aside class="menu">
                        <ul id="categoryMenu" class="menu-list">
                            <li><a onclick="handleClick(this)" class="is-active">FAQ</a></li>
                            <li><a onclick="handleClick(this)">IT Knowledge</a></li>
                            <li><a onclick="handleClick(this)">Onboarding</a></li>
                            <li><a onclick="handleClick(this)">ServiceNow Portal</a></li>
                            <li><a onclick="handleClick(this)">Facilities</a></li>
                            <li><a onclick="handleClick(this)">HR</a></li>
                            <li><a onclick="handleClick(this)">Financial services</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <!-- Right Side -->
            <div id="content" class="column" data-intro="In this Section you can see all questions already been answered. You can see the Answer by clicking on the question.">
                <div id="titleCategory" class="title"></div>
                <template id="template">
                    <div id="card">
                        <div class="card mt-3">
                            <div class="card-header" onclick="collapsibleElement(this.offsetParent.children[1])">
                                <p id="title" class="card-header-title">No Title</p>
                                <a data-action="collapse" class="card-header-icon is-hidden-fullscreen" aria-label="more options">
                                    <span class="icon">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                            <div id="collapsible-card" class="is-collapsible" style="display: none">
                                <div class="card-content">
                                    <p id="body" class="content is-5">No Body</p>
                                    <p class="subtitle is-6">
                                        <i id="author">No Author</i>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-footer-item">
                                        <a onclick="console.log('function not defined yet')">Read more...</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
    {{-- Start a site tour --}}
    <script src="/js/tour.js"></script>
@endsection
