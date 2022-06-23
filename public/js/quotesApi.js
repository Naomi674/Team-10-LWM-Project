console.log("JavaScript is working!");

async function init() {
    const domElement = document.getElementById("quotes");
    const character = await getApiData();
    console.log(character)
    const div = document.createElement('p');
    div.innerHTML = 'daily quote: ' +`${character.contents.quotes[0].quote}`;
    domElement.append(div)
}

/**
 * Async function to get the data from the SWAPI api
 * @returns - returns a promise
 */
async function getApiData() {
    try {
        let response = await fetch("https://quotes.rest/qod");
        return await response.json();
    } catch (err) {
        console.error("Error: ", err);
    }
}

init();