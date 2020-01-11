document.getElementById("CupcakeForm").onsubmit = validate;

function validate() {
    var isValid = true;
    var errors = document.getElementsByClassName("err");
    for (var i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }
    var name = document.getElementById("name").value;
    if (name == "") {
        var errorName = document.getElementById("err-name");
        errorName.style.visibility = "visible";
        isValid = false;
    }
    var flavor = document.getElementsByName("flavor[]");
    var count = 0;
    for (i = 0; i < flavor.length; i++) {
        if (flavor[i].checked) {
            count++;
        }
    }
    if (count == 0) {
        var errFlavor = document.getElementById("err-flavor");
        errFlavor.style.visibility = "visible";
        isValid = false;
    }

    return isValid;
}
