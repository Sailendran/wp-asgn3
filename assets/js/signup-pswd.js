function passwordMatch() {
    let pswd1 = document.getElementById('pswd1').value;
    let pswd2 = document.getElementById('pswd2').value;

    console.log(pswd1);
    console.log(pswd2);
    console.log(pswd1 === pswd2);

    if (pswd1 !== pswd2) {
        document.getElementById('pw1-text').innerHTML = "Passwords must match!!!";
        document.getElementById('pw1-text').style.color = 'red';
        document.getElementById('submit').disabled = true;
        document.getElementById('submit').style.backgroundColor = 'gray';
    } else {
        document.getElementById('pw1-text').innerHTML = "Good to go!";
        document.getElementById('pw1-text').style.color = 'greenyellow';
        document.getElementById('submit').disabled = false;
        document.getElementById('submit').style.backgroundColor = 'greenyellow';
    };
};