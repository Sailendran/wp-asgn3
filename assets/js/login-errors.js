function check() {
    let email = document.getElementById("email").value;
    let pass = document.getElementById("password").value;

    if (email == null || email == "" || pass == null || email =="") {
        alert("ಠ_ಠ");
        return false
    }
}