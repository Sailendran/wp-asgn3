function openbttn() {
    document.getElementById('open-btn').style.display = 'none';
    document.getElementsByClassName('header')[0].style.marginLeft = '20%';
    document.getElementsByClassName('body')[0].style.marginLeft = '20%';
    document.getElementById("side").style.width = "20%";
}
function closeside() {
    document.getElementById('open-btn').style.display = 'block';
    document.getElementsByClassName('header')[0].style.marginLeft = '0%';
    document.getElementsByClassName('body')[0].style.marginLeft = '0%';
    document.getElementById("side").style.width = "0";
}