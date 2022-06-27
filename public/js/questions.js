// whoever is going to be reading this code, I must warn you...
// this is most likely illegal.

function createSecondHrBlock() {
    let myBlock = document.getElementById("second-hr-block");

    let displaySetting = myBlock.style.display;

    if (displaySetting == "block") {
        myBlock.style.display = "none";
    } else {
        myBlock.style.display = "block";
    }
}

function createThirdHrBlock() {
    let myBlock = document.getElementById("third-hr-block");

    let displaySetting = myBlock.style.display;

    if (displaySetting == "block") {
        myBlock.style.display = "none";
    } else {
        myBlock.style.display = "block";
    }
}

function createSecondItBlock() {
    let myBlock = document.getElementById("second-it-block");

    let displaySetting = myBlock.style.display;

    if (displaySetting == "block") {
        myBlock.style.display = "none";
    } else {
        myBlock.style.display = "block";
    }
}

function createThirdItBlock() {
    let myBlock = document.getElementById("third-it-block");

    let displaySetting = myBlock.style.display;

    if (displaySetting == "block") {
        myBlock.style.display = "none";
    } else {
        myBlock.style.display = "block";
    }
}

function createSecondFinanceBlock() {
    let myBlock = document.getElementById("second-finance-block");

    let displaySetting = myBlock.style.display;

    if (displaySetting == "block") {
        myBlock.style.display = "none";
    } else {
        myBlock.style.display = "block";
    }
}

function createSecondFacilitiesBlock() {
    let myBlock = document.getElementById("second-facilities-block");

    let displaySetting = myBlock.style.display;

    if (displaySetting == "block") {
        myBlock.style.display = "none";
    } else {
        myBlock.style.display = "block";
    }
}

function createThirdFacilitiesBlock() {
    let myBlock = document.getElementById("third-facilities-block");

    let displaySetting = myBlock.style.display;

    if (displaySetting == "block") {
        myBlock.style.display = "none";
    } else {
        myBlock.style.display = "block";
    }
}

function createFourthFacilitiesBlock() {
    let myBlock = document.getElementById("fourth-facilities-block");

    let displaySetting = myBlock.style.display;

    if (displaySetting == "block") {
        myBlock.style.display = "none";
    } else {
        myBlock.style.display = "block";
    }
}

function createSecondMasterdataBlock() {
    let myBlock = document.getElementById("second-masterdata-block");

    let displaySetting = myBlock.style.display;

    if (displaySetting == "block") {
        myBlock.style.display = "none";
    } else {
        myBlock.style.display = "block";
    }
}

function createThirdMasterdataBlock() {
    let myBlock = document.getElementById("third-masterdata-block");

    let displaySetting = myBlock.style.display;

    if (displaySetting == "block") {
        myBlock.style.display = "none";
    } else {
        myBlock.style.display = "block";
    }
}

function createSecondSupportBlock() {
    let myBlock = document.getElementById("second-support-block");

    let displaySetting = myBlock.style.display;

    if (displaySetting == "block") {
        myBlock.style.display = "none";
    } else {
        myBlock.style.display = "block";
    }
}

function closeAllModals() {
    (document.querySelectorAll('.modal') || []).forEach(($modal) => {
        closeModal($modal);
    });
}

function closeModal($el) {
    $el.classList.remove('is-active');
}