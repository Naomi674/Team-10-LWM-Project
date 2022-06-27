console.log('Hello world');

function fetchMessages() {
    fetch('/admin/chats/show')
        .then(response => {
            if (response.status === 200) {
                let entries = response.json().then(function (data) {
                    displayMessages(data);
                });
            }
        })
        .catch(error => {
            console.log(error);
        })
}

function displayMessages(entries) {
    const modal = document.querySelector('#message-modal');
    modal.classList.add('is-active');
    const section = document.querySelector('#message-section');
    entries.forEach(entry => {
        const div = document.createElement('div');
        div.innerHTML = entry.title;
        section.appendChild(div);
    })
}
