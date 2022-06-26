@extends('Components.layout')

@section('head')
    <script src="https://unpkg.com/intro.js/minified/intro.min.js"></script>
    <script src="/js/knowledge.js"></script>
@endsection
@section('body')
    onload="init()" class="body"
@endsection
@section('content')
    <link href="https://unpkg.com/intro.js/minified/introjs.min.css" rel="stylesheet">
    <div class="container mt-4">

        @if(!$errors->isEmpty())
            <div class="notification is-danger ml-6 mr-6 mt-4">
                <button onclick="hideNotification(this.offsetParent)" class="delete"></button>
                Something went wrong, please try again!
            </div>
        @endif

        @if(count($pendingKnowledge) > 0 && auth()->user()->role_id === 1)
            <div class="notification is-warning ml-6 mr-6 mt-4">
                <button onclick="hideNotification(this.offsetParent)" class="delete"></button>
                There are {{ $pendingKnowledge->count() }} open questions! Click <a onclick="showPendingKnowledge()">here</a>
                to answer them.
            </div>

            <!-- Modal to show all unanswered questions -->
            <div id="openQuestions" class="modal">
                <div class="modal-background"></div>
                <div class="modal-card" style="width: 1400px">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Open Questions</p>
                        <button onclick="closeModal()" class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <table id="pendingKnowledgeTable" class="table is-fullwidth">
                            <thead>
                                <tr>
                                    <th>Author</th>
                                    <th>Question</th>
                                    <th>Category</th>
                                    <th>Asked</th>
                                </tr>
                            </thead>
                            <tbody id="pendingKnowledgeTableBody" class="is-hoverable">
                                <!-- Open Questions will be shown here once they loaded by js -->
                            </tbody>
                        </table>
                    </section>
                    <footer class="modal-card-foot">
                        <a onclick="closeModal()" class="button">Cancel</a>
                    </footer>
                </div>
            </div>

            <!-- Modal answer a question -->
            <div id="answerQuestion" class="modal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Ask A Question</p>
                        <a onclick="closeModal()" class="delete" aria-label="close"></a>
                    </header>
                    <section class="modal-card-body">
                        <form method="POST" action="/knowledge/answer-question">
                            @csrf
                            @method('PUT')

                            <input id="editModal_id" name="id" value="" hidden>
                            <div class="field">
                                <label class="label" for="title">Question</label>
                                <div class="control has-icons-left">
                                    <input class="input" name="title" id="answerQuestionTitle" type="text">
                                    <span class="icon is-small is-left">
                                        <i class="fa-solid fa-question"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="body">Answer</label>
                                <textarea class="textarea" id="body" type="text" name="body" placeholder="Write your answer here"></textarea>
                            </div>
                            <div class="field">
                                <label>
                                    <p class="label">Category</p>
                                    <div class="select">
                                        <select name="category" id="category">
                                            <option value="FAQ"}>FAQ</option>
                                            <option value="Onboarding">Onboarding</option>
                                            <option value="IT Knowledge"}>IT Knowledge</option>
                                            <option value="HR"}>HR</option>
                                            <option value="ServiceNow Portal"}>ServiceNow Portal</option>
                                            <option value="Facilities"}>Facilities</option>
                                            <option value="Financial Services"}>Financial Services</option>
                                        </select>
                                    </div>
                                </label>
                            </div>
                            <hr>
                            <button class="button is-success">Submit</button>
                            <a onclick="closeModal()" class="button">Cancel</a>
                        </form>
                        <hr>
                        <form method="POST" action="/knowledge/knowledge-question-delete?title=" onsubmit="return changeAction(this)">
                            @csrf
                            @method('DELETE')
                            <button class="button is-danger">Delete Question</button>
                        </form>
                    </section>
                </div>
            </div>
        @endif
        <div class="m-5">
            <h1 class="title has-text-centered" data-title="The Knowledge Page" data-intro="This is the Knowledge Page, here all questions you might have are getting answered.">Knowledge</h1>
        </div>
        <div class="level-right">
            <a class="button is-success" onclick="openModal()" data-intro="Here you can ask a new question. Once a authorized user answered your question, it will show up here.">New Question</a>
        </div>

        <!-- Modal to ask a new question -->
        <div id="newQuestion" class="modal">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Ask A Question</p>
                    <button onclick="closeModal()" class="delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    <form method="POST" action="/knowledge/ask-question">
                        @csrf
                        @method('PUT')

                        <div class="field">
                            <label class="label" for="title">Question</label>
                            <div class="control has-icons-left">
                                <textarea class="input" id="title" type="text" name="title" placeholder="Ask your question here"></textarea>
                                <span class="icon is-small is-left">
                                    <i class="fa-solid fa-question"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label>
                                <p class="label">Category</p>
                                <div class="select">
                                    <select name="category">
                                        <option value="FAQ"}>FAQ</option>
                                        <option value="Onboarding">Onboarding</option>
                                        <option value="IT Knowledge"}>IT Knowledge</option>
                                        <option value="HR"}>HR</option>
                                        <option value="ServiceNow Portal"}>ServiceNow Portal</option>
                                        <option value="Facilities"}>Facilities</option>
                                        <option value="Financial Services"}>Financial Services</option>
                                    </select>
                                </div>
                            </label>
                        </div>
                        <hr>
                        <button class="button is-success">Submit</button>
                        <a onclick="closeModal()" class="button">Cancel</a>
                    </form>
                </section>
            </div>
        </div>

        <!-- Main part of the page -->
        <div class="columns">
            <!-- Left side / side menu -->
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

            <!-- Right Side / questions -->
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
                                    <p class="subtitle is-7">
                                        Asked by: <i id="author">No Author</i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <!-- Open and close modals -->
    <script>
        /**
         * Opens the modal html
         */
        function openModal() {
            const element = document.querySelector('#newQuestion');
            element.classList.add('is-active');
        }

        /**
         * Closes the open modal element
         */
        function closeModal() {
            const element = document.querySelector('.modal.is-active');
            element.classList.remove('is-active');
        }

        function hideNotification(element) {
            element.setAttribute('style', 'display:none')
        }
    </script>

    <!-- Start a site tour -->
    <script src="/js/tour.js"></script>

@endsection
