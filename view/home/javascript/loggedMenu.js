const loggedBtn = document.querySelector('#logged-button');
const mgmtMenu = document.querySelector('#management-menu');

loggedBtn.addEventListener('click', () => {
    if (mgmtMenu.getAttribute('class') == 'visible') {
        mgmtMenu.setAttribute('class','hidden');
    }
    else {
        mgmtMenu.setAttribute('class','visible');
    }
});

mgmtMenu.addEventListener('click', event => {
    if (event.target.tagName == 'A') {
        mgmtMenu.setAttribute('class','hidden');
    }
});
