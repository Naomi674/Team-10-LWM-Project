console.log('JavaScript loaded');

function loadCategory(category) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        // console.log(this);
        document.getElementById("content").innerHTML = this.responseText;
    }
    // console.log(category)
    xhttp.open("GET", "/foo?category=" + category);
    xhttp.send();
}