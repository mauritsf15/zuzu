const minus = document.querySelectorAll('.minus');
const plus = document.querySelectorAll('.plus');

function clickMinus(data) {
    let currentAmount = parseInt(data.target.parentElement.children[1].value);
    if (currentAmount != parseInt(data.target.parentElement.children[1].attributes['min'].nodeValue)) {
        currentAmount--;
        data.target.parentElement.children[1].value = currentAmount;
    }
}

function clickPlus(data) {
    let currentAmount = parseInt(data.target.parentElement.children[1].value);
    if (currentAmount != parseInt(data.target.parentElement.children[1].attributes['max'].nodeValue)) {
        currentAmount++;
        data.target.parentElement.children[1].value = currentAmount;
    } else {
        data.target.parentElement.previousElementSibling.style.color = 'red';
        data.target.parentElement.previousElementSibling.style.backgroundColor = 'rgba(0,0,0,0.2)';
        setTimeout(normal, 200);
    }
}

function normal() {
    plus.forEach(function(value) {
        value.parentElement.previousElementSibling.style.color = 'initial';
        value.parentElement.previousElementSibling.style.backgroundColor = 'initial';
    })
}

minus.forEach(function(value) {value.addEventListener('click', clickMinus)});
plus.forEach(function(value) {value.addEventListener('click', clickPlus)});