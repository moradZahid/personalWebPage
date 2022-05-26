const NUMBER_IMAGES = 10;
let nbrCaptcha;
const captchaForm = document.querySelector('#captcha_nbr');
const btn = document.querySelector('#captcha button');


function chooseNumber() {
    return Math.floor(Math.random() * NUMBER_IMAGES) + 1;
}

function displayCaptcha(nbr) {
    captchaId = `captcha${nbr}`;
    document.querySelector('#' + captchaId).className = 'visible';
}

function setCaptcha() {
    nbrCaptcha = chooseNumber();
    displayCaptcha(nbrCaptcha);
    captchaForm.value = nbrCaptcha;
}

btn.addEventListener('click', () => {
    document.querySelector('div.visible').className = 'hidden';
    setCaptcha();
});

setCaptcha();