function check() {
    let email = document.getElementById("email").value;
    let pass = document.getElementById("password").value;

    if (email == null || email == "" || pass == null || email =="") {
        alert("ಠ_ಠ");
        return false
    }
}
function emptyemail() {
    alert("Please input email and/or password.");
};
function noacct() {
    alert("Account does not exist.");
};
function multipleaccts() {
    alert("Multiple accounts detected under the same email adress, please contact an admin.");
};
function wrongpass() {
    alert("Password incorrect.");
};
function directaccess() {
    alert("ಠ_ಠ");
};
function unknown() {
    alert("An unknown error has occured.");
};