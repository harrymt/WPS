function printShirt() {
    // Change the colour of the t-shirt
    var colList = document.getElementById("js-colour-list");

    document.getElementById("js-tShirt").style.backgroundColor = colList.options[colList.selectedIndex].value;

    // if nothing has been selected then change the picture
    if (document.getElementById("pictureList").value !== 'null') {
        document.getElementById("pic").src = document.getElementById("pictureList").value;
        document.getElementById("pic").style.visibility = 'visible';
    } else {
        document.getElementById("pic").style.visibility = "hidden";
    }
    // Apply font text and colour
    var shirtText = document.getElementById("js-shirt-text");
    shirtText.innerHTML = document.getElementById("shirtTextBox").value;
    shirtText.style.color = document.getElementById("fontColourList").value;
    shirtText.style.font = document.getElementById("fontSizeList").value + "px " + document.getElementById("fontList").value;
}

function validateAddress() {
    // If the boxes are not empty
    if (document.getElementById("nameBox").value === "" ||
        document.getElementById("l1Box").value === "" ||
        document.getElementById("l2Box").value === "" ||
        document.getElementById("postCode").value === "" ||
        document.getElementById("county").value === "") {
        return false;
    } else {
        return true;
    }
}

function validateQuan(value) {
    if (value === "") {
        return "0";
    } else {
        return value;
    }
}

function validateOrder() {
    // Make sure the order has all the correct information entered
    if (document.getElementById("smallQuan").value === "0" &&
        document.getElementById("mediumQuan").value === "0" &&
        document.getElementById("largeQuan").value === "0" &&
        document.getElementById("vlargeQuan").value === "0") {

        window.alert("Please enter a Quantity.");
        return false;
    } else {
        if (validateAddress() === true) {
            return true;
        } else {
            window.alert("Please enter a valid address.");
            return false;
        }
    }
}
