const aboutUsBtn = document.querySelector('.over-ons');
const contactBtn = document.querySelector('.contact');

const aboutUsHighlight = document.querySelector('#over-ons');
const contactHighlight = document.querySelector('#contact');

const switchBtn = document.querySelector('.complete-switch');
const formDiv = document.querySelector('.start-form');

function clickAboutUs() {
    aboutUsHighlight.style.backgroundColor = 'rgba(0,0,0,0.4)';
    setTimeout(normal, 300);
}

function clickContact() {
    contactHighlight.style.backgroundColor = 'rgba(0,0,0,0.4)';
    setTimeout(normal, 300);
}

function normal() {
    aboutUsHighlight.style = '';
    contactHighlight.style = '';
}

function change(data) {
    if (data.target.checked) {
        formDiv.autocomplete = 'on';
    } else {
        formDiv.autocomplete = 'off';
    }
}

aboutUsBtn.addEventListener('click', clickAboutUs);
contactBtn.addEventListener('click', clickContact);

try {
    switchBtn.addEventListener('change', change);
} catch {
    console.log();
}