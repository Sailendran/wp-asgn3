function adjustPrice() {
    const val = parseFloat(document.getElementById('price').innerHTML);

    const strPrice = (Math.round(val * 100) / 100).toFixed(2);

    document.getElementById('price').innerHTML = '$' + String(strPrice);

};