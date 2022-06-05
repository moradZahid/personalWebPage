const btn = document.querySelector('#pswd-btn');
const pswdModified = document.querySelector('#pswd-modified');

btn.addEventListener('click', () => {
    btn.setAttribute('class', 'btn hidden');
    document.querySelector('[for="password1"]').setAttribute('class','visible'); 
    document.querySelector('[for="password2"]').setAttribute('class','visible');
    document.querySelector('#password1').setAttribute('class','visible');
    document.querySelector('#password2').setAttribute('class','visible');
    document.querySelector('#pswd-modified').value = 'modified';
});