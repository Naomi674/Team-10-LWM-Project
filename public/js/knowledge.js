console.log('JavaScript loaded');

/**
 * Function to initialise the page on load
 */
function init() {
    removeOldHTML('FAQ')
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
    let response = await fetch('/foo?category=' + category);
    if (response.status === 200) {
        let entries = await response.json();
        // console.log(entries);
        document.getElementById('titleCategory').innerHTML = category;
        buildHTML(entries, category);
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
