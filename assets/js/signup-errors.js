function emptyemail() {
    document.getElementById('email-text').innerHTML = 'You forgot to enter your email.';
    document.getElementById('email-text').style.color = 'red';
};
function emptyname() {
    document.getElementById('name-text').innerHTML = 'Do you not have a name?';
    document.getElementById('name-text').style.color = 'red';
};
function emptypswd() {
    document.getElementById('pw1-text').innerHTML = 'Do not leave the password field empty, I am begging you.';
    document.getElementById('pw1-text').style.color = 'red';
    document.getElementById('email-text').style.textAlign = 'left';
};
function invalidemail() {
    document.getElementById('email-text').innerHTML = 'Pretty sure your email is invalid there buddy.';
    document.getElementById('email-text').style.color = 'red';
};
function emailtaken() {
    document.getElementById('email-text').innerHTML = 'Huh, looks like your email is taken. Try again.'
    document.getElementById('email-text').style.color = 'red';
};
function dbdown() {
    alert("ಠ_ಠ sorry our database is down lmao")
};
function sqlfail() {
    alert("We're college students, WHY WOULD YOU HACK US?!?!?");
};
