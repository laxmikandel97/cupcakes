document.getElementById("CupcakeForm").onsubmit = validate;
//validate if the name and check boxes are checked
function validate() {
    //set a flag
    var isValid = true;
    var errors = document.getElementsByClassName("err");
    for (var i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }
    //get name and check to see if it is empty
    var name = document.getElementById("name").value;
    if (name == "") {
        var errorName = document.getElementById("err-name");
        errorName.style.visibility = "visible";
        isValid = false;
    }
    //check to see if the checked box are checked
    var flavor = document.getElementsByName("flavor[]");
    var count = 0;
    for (i = 0; i < flavor.length; i++) {
        if (flavor[i].checked) {
            count++;
        }
    }
    //error if check box are not checked
    if (count == 0) {
        var errFlavor = document.getElementById("err-flavor");
        errFlavor.style.visibility = "visible";
        isValid = false;
    }
//return the flag
    return isValid;
}
