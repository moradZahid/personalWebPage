const loggedBtn = document.querySelector('#logged-button');
const mgmtMenu = document.querySelector('#management-menu');

window.addEventListener('click', event => {
    if (event.target != mgmtMenu) {
        if (mgmtMenu.getAttribute('class') == 'visible') {
            mgmtMenu.setAttribute('class','hidden');
        }
    }
    if (event.target == loggedBtn) {
        if (mgmtMenu.getAttribute('class') == 'visible') {
            mgmtMenu.setAttribute('class','hidden');
        }
        else {
            mgmtMenu.setAttribute('class','visible');
        }
    }
    if (event.target.tagName == 'A') {
        mgmtMenu.setAttribute('class','hidden');
    }
});