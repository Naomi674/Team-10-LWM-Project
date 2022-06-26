console.log('JavaScript loaded');

let targetTable = '';

/**
 * Function to initialise the page on load
 */
function init() {
    // console.log("test");
    updateDropdown()
    const uri = window.location.pathname;
    const path = uri.substring(uri.lastIndexOf('/')+1);
    targetTable = path + "_services";
    console.log(targetTable);
    removeOldHTML('Main Service')
}


function showCatalogTickets() {
    console.log('test');
    document.querySelector('#catalogTickets').classList.add('is-active');
    // document.querySelector('#catalogTicketsTableBody').innerHTML = null;
    loadCatalogTickets();
}

function buildPendingHTML(entries) {
    // const table = document.querySelector('#catalogTicketsTableBody');
    const table = document.getElementsByTagName("template")[0];
    console.log(table);
    console.log(table.content.cloneNode(true).children[0].lastElementChild)
    entries.forEach(entry => {
        let tableCopy = table.content.cloneNode(true);
        const p = document.createElement('p');
        p.innerHTML += `<input name="id" value="${entry.id}" hidden />`
        p.innerHTML += `<p><strong>Author:</strong> ${entry.author}</p>`
        p.innerHTML += `<p><strong>Title:</strong> ${entry.title}</p>`
        p.innerHTML += `<p><strong>Description:</strong> ${entry.description}</p>`
        p.innerHTML += `<p><strong>Location:</strong> ${entry.location}</p>`
        p.innerHTML += `<p><button type="submit" class="button is-primary is-small">resolve</button></p><br>`


        tableCopy.children[0].lastElementChild.appendChild(p);
        document.querySelector('#catalogTicketsDisplay').appendChild(tableCopy);
    })
}

function updateDropdown() {
    const catalog = document.querySelector("#catalogTitle");
    if (catalog == null) return;
    const dropDown = document.querySelector('#dropdownTitle');
    dropDown.innerHTML = catalog.innerHTML;
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
        copyPostTemplate.getElementById('service').innerText = entry.service;
        copyPostTemplate.getElementById('description').innerText = entry.description;

        content.appendChild(copyPostTemplate);

        return true;
    })
}

async function loadCategory(category)
{
    //console.log('/foobar?category=' + category + '?table=' + targetTable);
    let response = await fetch('/catalogajax?category=' + category + '&table=' + targetTable);
    if (response.status === 200) {
        let entries = await response.json();
        // console.log(entries);
        document.getElementById('titleCategory').innerHTML = category;
        buildHTML(entries, category);
    }
}

async function loadCatalogTickets()
{
    let response = await fetch('/api/catalogtickets');
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
