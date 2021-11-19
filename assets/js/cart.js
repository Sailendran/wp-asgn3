function fixPrices() {
    for(let i = 0; i < document.getElementsByClassName('price').length; i++) {

        let val = parseFloat(document.getElementsByClassName('price')[i].innerHTML);

        let strPrice = (Math.round(val * 100) / 100).toFixed(2);

        document.getElementsByClassName('price')[i].innerHTML = '$' + String(strPrice);
    }
};