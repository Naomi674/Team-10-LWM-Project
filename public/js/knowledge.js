console.log('JavaScript loaded');

/**
 * Function to initialise the page on load
 */
function init() {
    removeOldHTML('FAQ');
}

function showPendingKnowledge() {
    document.querySelector('#openQuestions').classList.add('is-active');
    document.querySelector('#pendingKnowledgeTableBody').innerHTML = null;
    loadPendingKnowledge();
}

function buildPendingHTML(entries) {
    const table = document.querySelector('#pendingKnowledgeTableBody');

    // console.log(entries);

    entries.forEach(entry => {
        const tr = document.createElement('tr');
        tr.setAttribute('onclick', 'answerQuestion(this.children)')
        tr.setAttribute('style', 'cursor: pointer')
        tr.innerHTML += `<th>${entry.author}</th>`
        tr.innerHTML += `<th>${entry.title}</th>`
        tr.innerHTML += `<th>${entry.category}</th>`
        tr.innerHTML += `<th>${entry.updated_at}</th>`

        table.appendChild(tr)
    })
}

function answerQuestion(children) {
    const options = document.querySelector('#category').children;

    for (let option of options) {
        if (option.hasAttribute('selected')) {
            option.removeAttribute('selected');
        }
    }
    for (let option of options) {
        if (option.value === children[2].innerText) {
            option.setAttribute('selected', 'true');
        }
    }

    document.querySelector('.modal.is-active').classList.remove('is-active');
    document.querySelector('#answerQuestion').classList.add('is-active');

    document.querySelector('#answerQuestionTitle').value = children[1].innerText;
}

function changeAction(element) {
    let action = element.action
    const title = element.offsetParent.children[1].firstElementChild[2].value;
    action += title;
    element.action = action;
    return true;
}

function handleClick (element) {
    if (element.hasAttribute('class')) return;

    const parent = element.offsetParent;
    const oldIsActive = parent.getElementsByClassName('is-active');
    oldIsActive[0].removeAttribute('class')
    // console.log(parent);
    element.setAttribute('class', 'is-active');
    removeOldHTML(element.innerText);
}

/**
 * Function deletes every 'card' element on the page and
 * calls loadCategory to create the new ones
 * @param category is the passed category to be loaded
 */
function removeOldHTML(category) {
    let oldEntries = document.querySelectorAll('.card');
    // console.log(oldEntries);
    oldEntries.forEach(entry => {
        entry.remove();
    });
    loadCategory(category);
}

function buildHTML(entries, category)
{
    entries.forEach(entry => {
        const postTemplate = document.getElementById('template').content;
        const content = document.getElementById('content');

        let copyPostTemplate = document.importNode(postTemplate, true);

        copyPostTemplate.getElementById('card').setAttribute('id', category)
        copyPostTemplate.getElementById('title').innerText = entry.title;
        copyPostTemplate.getElementById('body').innerText = entry.body;
        copyPostTemplate.getElementById('author').innerText = entry.author;

        content.appendChild(copyPostTemplate);

        return true;
    })
}

async function loadCategory(category)
{
    let response = await fetch('/api/knowledge?category=' + category);
    if (response.status === 200) {
        let entries = await response.json();
        // console.log(entries);
        document.getElementById('titleCategory').innerHTML = category;
        buildHTML(entries, category);
    }
}

async function loadPendingKnowledge()
{
    let response = await fetch('/api/pendingKnowledge');
    if (response.status === 200) {
        let entries = await response.json();
        // console.log(entries);
        buildPendingHTML(entries);
    }
}

let lastUnhiddenElement = null;

function collapsibleElement(element) {
    if (lastUnhiddenElement === null) lastUnhiddenElement = element;
    if (element.style.display === 'none') {
        lastUnhiddenElement.style.display = 'none';
        lastUnhiddenElement = element;
        element.style.display = null;
        return;
    }
    if (lastUnhiddenElement === null || lastUnhiddenElement === element) element.style.display = 'none';
}
